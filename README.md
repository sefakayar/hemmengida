# Hemmen Gıda — Kurumsal Web Sitesi

İstanbul merkezli B2B toptan gıda tedarikçisi (et/tavuk bulyon, çiğ köfte harcı, sebzeli çeşni,
patates püresi) için düz PHP web sitesi.

## Teknik
- Düz PHP (framework yok), Apache + `.htaccess` (mod_rewrite ile temiz URL'ler)
- PHP 8.1+ önerilir
- Mail gönderimi: PHPMailer 6 (`phpmailer/src/`), SMTP
- Görseller WebP; SEO: dinamik meta/OG/canonical, sitemap, schema (LocalBusiness/Product/FAQPage/BreadcrumbList), llms.txt

## Yapı
- `index.php`, `about.php`, `product.php`, `contact.php`, `hemmen-gida-*.php` (ürün detay)
- `bolge.php` + `bolge-data.php` — şehir landing sayfaları (`/istanbul-toptan-gida-tedarik` vb.)
- `header.php` / `footer.php` — ortak parçalar (sayfa `$page_title`/`$page_description` ayarlar)
- `assets/` — css/js/img
- `phpmailer/` — mail handler + PHPMailer 6

## Kurulum / Deploy
1. Dosyaları sunucuya al (Apache VirtualHost, `AllowOverride All`).
2. **SMTP yapılandırması (zorunlu):** `config.php` git'e dahil değildir.
   ```
   cp phpmailer/config.example.php phpmailer/config.php
   # config.php içine SMTP şifresini gir, sonra:
   chmod 640 phpmailer/config.php
   ```
3. Cloudflare (SSL) + Tunnel arkasında çalışır; `.htaccess` HTTPS yönlendirmesi `X-Forwarded-Proto` kullanır.

## Güvenlik notu
`phpmailer/config.php` **asla commit edilmez** (SMTP şifresi içerir). `.gitignore` bunu korur.
