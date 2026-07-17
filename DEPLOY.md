# Hemmen Gıda — Deploy & Güncelleme Rehberi

Sunucu: ev Ubuntu sunucusu, **Docker** ile çalışır. Üzerinde başka siteler de var.
Erişim: **Cloudflare Access SSH** (tunnel). Kaynak: `git@github.com:sefakayar/hemmengida.git`.

---

## 1. Sunucuya erişim (WSL / yerel makineden)

SSH ile bağlan:
```bash
ssh -o ProxyCommand="cloudflared access ssh --hostname ssh.whatsreserve.com" sefobase@ssh.whatsreserve.com
```

Dosya gönder (örn. deploy arşivi) — WSL'den bu şekilde atılır:
```bash
scp -o ProxyCommand="cloudflared access ssh --hostname ssh.whatsreserve.com" \
  /mnt/c/Users/etki360/Downloads/hemmengida-deploy.tar.gz \
  sefobase@ssh.whatsreserve.com:/home/sefobase/
```

---

## 2. Kaynak = GitHub (güncellemeler buradan)

**Repo:** `git@github.com:sefakayar/hemmengida.git`

- Güncellemeler bu repodan **pull** edilir.
- Değişiklik → yerelde **commit + push**, sunucuda **git pull**.
- `phpmailer/config.php` `.gitignore`'dadır → SMTP şifresi repoya gitmez, pull/push'ta korunur.

### İlk kurulum (sunucuda)
```bash
git clone git@github.com:sefakayar/hemmengida.git hemmengida
cd hemmengida
cp phpmailer/config.example.php phpmailer/config.php
nano phpmailer/config.php        # 'BURAYA_SMTP_SIFRESI' -> gerçek SMTP şifresi
chmod 640 phpmailer/config.php
```

### Güncelleme akışı
Yerelde (WSL):
```bash
git add -A
git commit -m "değişiklik açıklaması"
git push
```
Sunucuda:
```bash
cd /path/to/hemmengida
git pull
# Docker: dosyalar mount'luysa değişiklik otomatik; imaja kopyalanıyorsa rebuild (aşağı bkz.)
```

---

## 3. Docker

Site Docker'da çalışır. Yapına göre iki senaryo:

**A) Site dizini container'a MOUNT'lu (volume) ise** — en pratik:
```bash
git pull
docker compose restart <hemmengida-servisi>   # gerekliyse
```
`git pull` dosyaları günceller, container aynı dizini gördüğü için değişiklik anında yansır.

**B) Dosyalar IMAJA kopyalanıyorsa** — rebuild gerekir:
```bash
git pull
docker compose build <hemmengida-servisi>
docker compose up -d <hemmengida-servisi>
```

### Container gereksinimleri (.htaccess için)
- Web sunucu **Apache** ise: `AllowOverride All` + `mod_rewrite` açık olmalı (temiz URL'ler + güvenlik kuralları .htaccess'te).
- **Nginx** ise: `.htaccess` çalışmaz — rewrite/güvenlik kurallarının nginx config'ine çevrilmesi gerekir (bu repodaki `.htaccess`'i referans al).
- PHP **8.1+** (PHPMailer 6 ve site bununla uyumlu).
- Cloudflare Tunnel arkasında olduğundan `.htaccess` HTTPS yönlendirmesi `X-Forwarded-Proto` kullanır (origin HTTP görür, döngü olmaz).

### Yeni hostname (mevcut tunnel'a)
`hemmengida.com` için mevcut Cloudflare Tunnel'a yeni bir **public hostname** (→ hemmengida container'ının portu) + Cloudflare DNS eklenir. Diğer siteler etkilenmez.

---

## 4. SMTP / İletişim formu
- Ayar: `phpmailer/config.php` (SMTP host `mail.hemmengida.com`, port 587/TLS).
- Kütüphane: `phpmailer/src/` (PHPMailer 6.9.1). `phpmailer/.htaccess` sadece `contact.php`'ye izin verir.
- Form: doğrulama + honeypot (`website` alanı) + rate-limit (Cloudflare `CF-Connecting-IP`).
