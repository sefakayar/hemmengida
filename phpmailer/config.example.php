<?php
/**
 * ÖRNEK SMTP yapılandırması.
 *
 * Gerçek dosya `phpmailer/config.php` git'e DAHİL DEĞİLDİR (.gitignore) çünkü şifre içerir.
 * Sunucuda kurulumdan sonra bu dosyayı kopyalayıp şifreyi girin:
 *
 *   cp phpmailer/config.example.php phpmailer/config.php
 *   nano phpmailer/config.php        # 'BURAYA_SMTP_SIFRESI' yerine gerçek şifre
 *   chmod 640 phpmailer/config.php
 *
 * Daha güvenli: şifreyi Apache vhost'ta `SetEnv SMTP_PASS "..."` ile verin — getenv() otomatik okur.
 */
return [
    'host'     => getenv('SMTP_HOST') ?: 'mail.hemmengida.com',
    'username' => getenv('SMTP_USER') ?: 'hemmengida@hemmengida.com',
    'password' => getenv('SMTP_PASS') ?: 'BURAYA_SMTP_SIFRESI',
    'port'     => (int) (getenv('SMTP_PORT') ?: 587),
    'secure'   => getenv('SMTP_SECURE') ?: 'tls', // 'tls' (587) veya 'ssl' (465)
    'to'       => 'hemmengida@hemmengida.com',
    'to_name'  => 'Hemmen Gıda',
];
