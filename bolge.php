<?php
/**
 * Şehir/bölge landing sayfası şablonu.
 * URL: /{sehir}-toptan-gida-tedarik  (.htaccess -> bolge.php?sehir={sehir})
 */
$cities = require __DIR__ . '/bolge-data.php';
$key = strtolower(trim((string) ($_GET['sehir'] ?? '')));

if (!isset($cities[$key])) {
    http_response_code(404);
    $page_title = 'Sayfa bulunamadı | Hemmen Gıda';
    include __DIR__ . '/header.php';
    echo '<section class="ultra-section"><div class="ultra-container" style="text-align:center;padding:4rem 0;">'
       . '<h1 class="section-title">Bölge bulunamadı</h1>'
       . '<p class="section-subtitle">Aradığınız hizmet bölgesi sayfası mevcut değil. '
       . '<a href="/urunler" style="color:var(--f-red-deep);font-weight:600;">Ürünlerimize</a> göz atabilirsiniz.</p>'
       . '</div></section>';
    include __DIR__ . '/footer.php';
    exit;
}

$c   = $cities[$key];
$ad  = $c['ad'];
$slug = $key;

// Türkçe ünlü uyumuna uygun ekler (kesme işaretiyle): lokatif (-da/-de/-te), datif (-a/-e/-ya/-ye)
$ekler = [
    'istanbul' => ['da', 'a'],  'ankara' => ['da', 'ya'], 'izmir' => ['de', 'e'],
    'bursa'    => ['da', 'ya'], 'antalya' => ['da', 'ya'], 'konya' => ['da', 'ya'],
    'gaziantep'=> ['te', 'e'],  'adana' => ['da', 'ya'],
];
[$ekLoc, $ekDat] = $ekler[$key] ?? ['da', 'ya'];
$adLoc = $ad . "'" . $ekLoc; // Antalya'da
$adDat = $ad . "'" . $ekDat; // Antalya'ya

$page_title       = $c['baslik'] . ' | Hemmen Gıda';
$page_description = $c['meta'];

// Ürün listesi (detay sayfalarına link)
$urunler = [
    ['Hemmen Çiğ Köfte Harcı', '/cig-kofte-harci', 'assets/images/product/Cig Kofte Web 1.webp', 'Doğal baharatlarla zenginleştirilmiş toptan çiğ köfte harcı.'],
    ['Hemmen Et Bulyon',       '/et-bulyon',       'assets/images/product/Et Bulyon Web 1.webp', 'Dana eti özütlü, yoğun aromalı toptan et bulyon.'],
    ['Hemmen Tavuk Bulyon',    '/tavuk-bulyon',    'assets/images/product/Tavuk Web 1.webp', 'Hafif ve besleyici, doğal aromalı toptan tavuk bulyon.'],
    ['Hemmen Sebzeli Çeşni',   '/sebzeli-cesni',   'assets/images/product/Sebzeli Cesni Web 1.webp', 'Çorba ve yemekler için doğal sebzeli çeşni.'],
    ['Hemmen Patates Püresi',  '/patates-puresi',  'assets/images/product/patatespuresi web.webp', 'Sütlü, pratik hazır patates püresi tozu.'],
];

// Şehre özgü SSS
$sss = [
    [$adDat . ' teslimat yapıyor musunuz?', 'Evet. İstanbul merkezli firmamız ' . $ad . ' ve çevresine düzenli toptan tedarik sağlar. ' . $c['teslimat']],
    ['Minimum sipariş miktarı nedir?', 'Toptan siparişlerde miktar ve güncel fiyat için WhatsApp veya telefon (+90 539 586 06 35) üzerinden fiyat teklifi alabilirsiniz. ' . $adLoc . 'ki işletmelere özel fiyat uygulanır.'],
    [$adLoc . ' hangi işletmelere tedarik ediyorsunuz?', 'Restoran, otel, kafe, catering ve toplu üretim mutfaklarına; bulyon, çiğ köfte harcı, sebzeli çeşni ve patates püresi tedarik ediyoruz.'],
    ['Ürünler koruyucu veya domuz yağı içeriyor mu?', 'Hayır. Ürünlerimiz koruyucu ve domuz yağı içermez; endüstriyel ambalajda sunulur.'],
];

include __DIR__ . '/header.php';
?>

<!-- Hero -->
<section class="ultra-section" style="background:#fff;">
    <div class="ultra-container">
        <div class="section-header">
            <h1 class="section-title"><?php echo htmlspecialchars($c['baslik']); ?></h1>
        </div>
        <p style="max-width:820px;margin:1.5rem auto 0;color:var(--f-muted,#7c6a60);line-height:1.8;font-size:1.08rem;text-align:center;">
            <?php echo htmlspecialchars($c['giris']); ?>
        </p>
        <div style="text-align:center;margin-top:2rem;">
            <a href="/iletisim" class="btn-ultra btn-primary"><i class="fas fa-envelope"></i> Fiyat Teklifi Al</a>
            <a href="https://wa.me/905395860635?text=<?php echo rawurlencode('Merhaba, ' . $ad . ' için toptan fiyat teklifi almak istiyorum.'); ?>" class="btn-ultra btn-whatsapp" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> WhatsApp</a>
        </div>
    </div>
</section>

<!-- Ürünler -->
<section class="ultra-section">
    <div class="ultra-container">
        <div class="section-header">
            <h2 class="section-title"><?php echo htmlspecialchars($ad); ?> Toptan Ürünlerimiz</h2>
            <p class="section-subtitle"><?php echo htmlspecialchars($adLoc); ?>ki işletmeler için endüstriyel ambalajda kaliteli çeşitler</p>
        </div>
        <div class="ultra-product-grid">
            <?php foreach ($urunler as [$adi, $link, $img, $aciklama]): ?>
            <div class="ultra-product-card">
                <div class="product-image-container">
                    <img src="<?php echo htmlspecialchars($img); ?>" alt="<?php echo htmlspecialchars($adi . ' - ' . $ad); ?>" class="product-image" loading="lazy" decoding="async">
                </div>
                <div class="product-content">
                    <h3 class="product-title"><?php echo htmlspecialchars($adi); ?></h3>
                    <p class="product-description"><?php echo htmlspecialchars($aciklama); ?></p>
                    <a href="<?php echo htmlspecialchars($link); ?>" class="btn-ultra btn-primary"><i class="fas fa-info-circle"></i> Detaylı İncele</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Yerel hizmet -->
<section class="ultra-section" style="background:var(--f-cream,#fff8f2);">
    <div class="ultra-container">
        <div class="section-header">
            <h2 class="section-title"><?php echo htmlspecialchars($ad); ?> ve Çevresine Tedarik</h2>
        </div>
        <div style="max-width:820px;margin:1.5rem auto 0;background:#fff;border:1px solid var(--f-line,#f0e2d6);border-radius:22px;padding:2rem;box-shadow:0 2px 8px rgba(90,45,20,.06);">
            <p style="color:var(--f-ink,#2a211d);font-weight:600;margin:0 0 .5rem;">Hizmet verdiğimiz ilçeler:</p>
            <p style="color:var(--f-muted,#7c6a60);line-height:1.7;margin:0 0 1.2rem;"><?php echo htmlspecialchars($c['ilceler']); ?></p>
            <p style="color:var(--f-muted,#7c6a60);line-height:1.7;margin:0;"><i class="fas fa-truck-fast" style="color:var(--f-red,#e63a2e);margin-right:.5rem;"></i><?php echo htmlspecialchars($c['teslimat']); ?></p>
        </div>
    </div>
</section>

<!-- SSS -->
<section class="ultra-section" style="background:#fff;">
    <div class="ultra-container">
        <div class="section-header">
            <h2 class="section-title">Sıkça Sorulan Sorular</h2>
            <p class="section-subtitle"><?php echo htmlspecialchars($ad); ?> toptan gıda tedariki hakkında</p>
        </div>
        <div class="faq-list">
            <?php foreach ($sss as $i => [$soru, $cevap]): ?>
            <details class="faq-item"<?php echo $i === 0 ? ' open' : ''; ?>>
                <summary><?php echo htmlspecialchars($soru); ?></summary>
                <p><?php echo htmlspecialchars($cevap); ?></p>
            </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="ultra-section ultra-cta">
    <div class="ultra-container">
        <div class="cta-content">
            <h2 class="cta-title"><?php echo htmlspecialchars($adLoc); ?> Siparişinizi Verin</h2>
            <p class="cta-subtitle"><?php echo htmlspecialchars($ad); ?> ve çevresine toptan gıda tedariki için hemen iletişime geçin.</p>
            <div class="cta-buttons">
                <a href="/iletisim" class="btn-ultra btn-primary"><i class="fas fa-envelope"></i> İletişim Formu</a>
                <a href="tel:+905395860635" class="btn-ultra btn-outline"><i class="fas fa-phone"></i> +90 539 586 06 35</a>
            </div>
        </div>
    </div>
</section>

<script type="application/ld+json">
<?php
$faqSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'FAQPage',
    'mainEntity' => array_map(fn($q) => [
        '@type' => 'Question',
        'name'  => $q[0],
        'acceptedAnswer' => ['@type' => 'Answer', 'text' => $q[1]],
    ], $sss),
];
echo json_encode($faqSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
?>
</script>
<script type="application/ld+json">
<?php
$breadcrumb = [
    '@context' => 'https://schema.org',
    '@type'    => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Ana Sayfa', 'item' => 'https://hemmengida.com/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Hizmet Bölgeleri', 'item' => 'https://hemmengida.com/urunler'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => $ad, 'item' => 'https://hemmengida.com/' . $slug . '-toptan-gida-tedarik'],
    ],
];
echo json_encode($breadcrumb, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
?>
</script>

<?php include __DIR__ . '/footer.php'; ?>
