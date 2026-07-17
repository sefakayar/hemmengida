<?php
declare(strict_types=1);

/**
 * Hemmen Gıda iletişim formu — güvenli mail gönderimi (PHPMailer 6).
 * Güvenlik: girdi doğrulama, honeypot, rate-limit, e-posta injection koruması,
 * From = kendi domainimiz (SPF/DKIM), display_errors kapalı.
 */

error_reporting(E_ALL);
ini_set('display_errors', '0'); // Üretimde ziyaretçiye hata gösterme

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/src/Exception.php';
require __DIR__ . '/src/PHPMailer.php';
require __DIR__ . '/src/SMTP.php';

/** Kullanıcıya güvenli hata döndür ve çık */
function fail(int $code, string $msg): never {
    http_response_code($code);
    echo $msg;
    exit;
}

// 1) Sadece POST
if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    fail(405, 'Geçersiz istek yöntemi.');
}

// 2) Honeypot — 'website' alanı gizli; bot doldurursa sessizce başarı göster
if (!empty($_POST['website'])) {
    header('Location: ../iletisim?success=1');
    exit;
}

// 3) Basit rate-limit — aynı IP 60 saniyede 1 gönderim
// Cloudflare Tunnel arkasında REMOTE_ADDR=127.0.0.1 olur; gerçek IP CF-Connecting-IP'dedir.
$clientIp = $_SERVER['HTTP_CF_CONNECTING_IP']
    ?? (isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0] : null)
    ?? ($_SERVER['REMOTE_ADDR'] ?? 'x');
$rlFile = sys_get_temp_dir() . '/hg_rl_' . md5(trim((string) $clientIp));
if (is_file($rlFile) && (time() - (int) filemtime($rlFile)) < 60) {
    fail(429, 'Çok sık deneme yaptınız. Lütfen bir dakika sonra tekrar deneyin.');
}
@touch($rlFile);

// 4) KVKK onayı
if (($_POST['kvkk'] ?? '') !== 'on') {
    fail(400, 'KVKK aydınlatma metnini kabul etmeniz gerekmektedir.');
}

// 5) Girdi doğrulama
$name    = trim((string) ($_POST['name'] ?? ''));
$email   = trim((string) ($_POST['email'] ?? ''));
$phone   = trim((string) ($_POST['phone'] ?? ''));
$subject = trim((string) ($_POST['subject'] ?? ''));
$message = trim((string) ($_POST['message'] ?? ''));

$errors = [];
if ($name === '' || mb_strlen($name) > 100) {
    $errors[] = 'Ad Soyad';
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'E-posta';
}
if ($subject === '' || mb_strlen($subject) > 150) {
    $errors[] = 'Konu';
}
if ($message === '' || mb_strlen($message) > 5000) {
    $errors[] = 'Mesaj';
}
if ($phone !== '' && !preg_match('/^[0-9+()\s-]{5,20}$/', $phone)) {
    $errors[] = 'Telefon';
}
if ($errors) {
    fail(400, 'Lütfen şu alanları kontrol edin: ' . implode(', ', $errors));
}

// 6) Yapılandırma
$cfg = require __DIR__ . '/config.php';

$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host       = $cfg['host'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $cfg['username'];
    $mail->Password   = $cfg['password'];
    $mail->Port       = $cfg['port'];
    $mail->SMTPSecure = ($cfg['secure'] === 'ssl')
        ? PHPMailer::ENCRYPTION_SMTPS
        : PHPMailer::ENCRYPTION_STARTTLS;
    $mail->CharSet    = PHPMailer::CHARSET_UTF8;

    // From = KENDİ adresimiz (SPF/DKIM uyumu, spoofing yok). Reply-To = ziyaretçi.
    $mail->setFrom($cfg['username'], 'Hemmen Gıda Web Sitesi');
    $mail->addAddress($cfg['to'], $cfg['to_name']);
    $mail->addReplyTo($email, $name); // PHPMailer 6 adresi doğrular → header injection engellenir

    $safeName    = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $safeEmail   = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    $safePhone   = $phone !== '' ? htmlspecialchars($phone, ENT_QUOTES, 'UTF-8') : 'Belirtilmedi';
    $safeSubject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
    $safeMessage = nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));

    $mail->Subject = 'İletişim Formu: ' . $subject;
    $mail->isHTML(true);
    $mail->Body = "
    <div style='font-family:Arial,sans-serif;max-width:600px;margin:0 auto;'>
        <div style='background:#e74c3c;color:#fff;padding:16px;text-align:center;'>
            <h2 style='margin:0;'>Yeni İletişim Formu Mesajı</h2>
        </div>
        <div style='background:#f9f9f9;padding:16px;'>
            <p><strong>İsim:</strong> {$safeName}</p>
            <p><strong>E-posta:</strong> {$safeEmail}</p>
            <p><strong>Telefon:</strong> {$safePhone}</p>
            <p><strong>Konu:</strong> {$safeSubject}</p>
            <p><strong>Mesaj:</strong><br>{$safeMessage}</p>
        </div>
        <div style='padding:12px;text-align:center;font-size:12px;color:#666;'>
            hemmengida.com iletişim formu • " . date('d.m.Y H:i') . "
        </div>
    </div>";
    $mail->AltBody =
        "Yeni İletişim Formu Mesajı\n\n" .
        "İsim: {$name}\nE-posta: {$email}\nTelefon: " . ($phone !== '' ? $phone : 'Belirtilmedi') .
        "\nKonu: {$subject}\n\nMesaj:\n{$message}\n";

    $mail->send();
    header('Location: ../iletisim?success=1');
    exit;

} catch (Exception $e) {
    error_log('Hemmen iletişim formu hatası: ' . $mail->ErrorInfo);
    fail(500, 'Mesajınız şu anda gönderilemedi. Lütfen telefon veya WhatsApp ile bize ulaşın.');
}
