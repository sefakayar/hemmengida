<?php
/**
 * Blog yazı detay sayfası.
 * URL: /blog/{slug}  (.htaccess -> blog-yazi.php?yazi={slug})
 */
$yazilar = require __DIR__ . '/blog-data.php';
$slug    = strtolower(trim((string) ($_GET['yazi'] ?? '')));

if (!isset($yazilar[$slug])) {
    http_response_code(404);
    $page_title       = 'Yazı bulunamadı | Hemmen Gıda';
    $page_description = 'Aradığınız blog yazısı bulunamadı. Tüm yazılar için blog sayfamıza göz atabilirsiniz.';
    include __DIR__ . '/header.php';
    echo '<section class="ultra-section"><div class="ultra-container" style="text-align:center;padding:4rem 0;">'
       . '<h1 class="section-title">Yazı bulunamadı</h1>'
       . '<p class="section-subtitle">Aradığınız yazı kaldırılmış veya adresi değişmiş olabilir. '
       . '<a href="/blog" style="color:var(--f-red-deep);font-weight:600;">Tüm yazılara</a> göz atabilirsiniz.</p>'
       . '</div></section>';
    include __DIR__ . '/footer.php';
    exit;
}

$y   = $yazilar[$slug];
$url = 'https://hemmengida.com/blog/' . $slug;

$page_title       = $y['baslik'];
$page_description = $y['meta'];
$page_image       = 'https://hemmengida.com' . str_replace(' ', '%20', $y['gorsel']);
$page_og_type     = 'article';

// Diğer yazılar (bu yazı hariç, en fazla 3)
$digerleri = array_slice(array_diff_key($yazilar, [$slug => null]), 0, 3, true);

$tarihTR = static function (string $iso): string {
    $aylar = [1=>'Ocak','Şubat','Mart','Nisan','Mayıs','Haziran','Temmuz','Ağustos','Eylül','Ekim','Kasım','Aralık'];
    $t = strtotime($iso);
    return date('j', $t) . ' ' . $aylar[(int) date('n', $t)] . ' ' . date('Y', $t);
};

include __DIR__ . '/header.php';
?>

<article class="blog-yazi">
    <div class="ultra-container">

        <nav class="blog-breadcrumb" aria-label="Sayfa yolu">
            <a href="/">Ana Sayfa</a> <span>/</span>
            <a href="/blog">Blog</a> <span>/</span>
            <span aria-current="page"><?php echo htmlspecialchars($y['h1']); ?></span>
        </nav>

        <header class="blog-yazi-header">
            <span class="blog-kategori"><?php echo htmlspecialchars($y['kategori']); ?></span>
            <h1><?php echo htmlspecialchars($y['h1']); ?></h1>
            <p class="blog-yazi-meta">
                <span>Hemmen Gıda Editör Ekibi</span> ·
                <time datetime="<?php echo htmlspecialchars($y['tarih']); ?>"><?php echo $tarihTR($y['tarih']); ?></time>
                <?php if ($y['guncelleme'] !== $y['tarih']): ?>
                · <span>Güncelleme: <?php echo $tarihTR($y['guncelleme']); ?></span>
                <?php endif; ?>
                · <span><?php echo (int) $y['okuma']; ?> dk okuma</span>
            </p>
        </header>

        <!-- AEO: ilk 40-70 kelimede net kısa cevap -->
        <div class="blog-ozet">
            <p><strong>Kısa cevap:</strong> <?php echo htmlspecialchars($y['ozet']); ?></p>
        </div>

        <figure class="blog-gorsel">
            <img src="<?php echo htmlspecialchars($y['gorsel']); ?>"
                 alt="<?php echo htmlspecialchars($y['gorselAlt']); ?>"
                 width="<?php echo (int) $y['gorselW']; ?>" height="<?php echo (int) $y['gorselH']; ?>"
                 loading="eager" fetchpriority="high" decoding="async">
        </figure>

        <div class="blog-icerik">
            <?php echo $y['icerik']; ?>
        </div>

        <section class="blog-sss">
            <h2>Sıkça Sorulan Sorular</h2>
            <?php foreach ($y['sss'] as $i => [$soru, $cevap]): ?>
            <details class="faq-item"<?php echo $i === 0 ? ' open' : ''; ?>>
                <summary><?php echo htmlspecialchars($soru); ?></summary>
                <p><?php echo htmlspecialchars($cevap); ?></p>
            </details>
            <?php endforeach; ?>
        </section>

        <aside class="blog-cta">
            <h2>Toptan fiyat teklifi alın</h2>
            <p>Restoran, otel ve catering mutfakları için bulyon, çiğ köfte harcı, sebzeli çeşni ve patates püresi tedariki.</p>
            <div class="cta-buttons">
                <a href="/urunler" class="btn-ultra btn-primary"><i class="fas fa-box-open"></i> Ürünleri İncele</a>
                <a href="https://wa.me/905395860635?text=<?php echo rawurlencode('Merhaba, toptan fiyat teklifi almak istiyorum.'); ?>" class="btn-ultra btn-whatsapp" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> WhatsApp</a>
            </div>
        </aside>

        <?php if ($digerleri): ?>
        <section class="blog-diger">
            <h2>Diğer yazılar</h2>
            <div class="blog-liste">
                <?php foreach ($digerleri as $dslug => $d): ?>
                <a class="blog-kart" href="/blog/<?php echo htmlspecialchars($dslug); ?>">
                    <img src="<?php echo htmlspecialchars($d['gorsel']); ?>" alt="<?php echo htmlspecialchars($d['gorselAlt']); ?>"
                         width="<?php echo (int) $d['gorselW']; ?>" height="<?php echo (int) $d['gorselH']; ?>" loading="lazy" decoding="async">
                    <div class="blog-kart-govde">
                        <span class="blog-kategori"><?php echo htmlspecialchars($d['kategori']); ?></span>
                        <h3><?php echo htmlspecialchars($d['h1']); ?></h3>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </section>
        <?php endif; ?>

    </div>
</article>

<script type="application/ld+json">
<?php
$graph = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        [
            '@type'            => 'BlogPosting',
            '@id'              => $url . '#article',
            'isPartOf'         => ['@id' => 'https://hemmengida.com/blog#blog'],
            'mainEntityOfPage' => ['@id' => $url],
            'headline'         => $y['h1'],
            'description'      => $y['meta'],
            'abstract'         => $y['ozet'],
            'articleSection'   => $y['kategori'],
            'inLanguage'       => 'tr-TR',
            'datePublished'    => $y['tarih'],
            'dateModified'     => $y['guncelleme'],
            'author'           => ['@id' => 'https://hemmengida.com/#organization'],
            'publisher'        => ['@id' => 'https://hemmengida.com/#organization'],
            'image'            => [
                '@type'  => 'ImageObject',
                'url'    => $page_image,
                'width'  => (int) $y['gorselW'],
                'height' => (int) $y['gorselH'],
            ],
        ],
        [
            '@type' => 'FAQPage',
            '@id'   => $url . '#faq',
            'mainEntity' => array_map(static fn($q) => [
                '@type'          => 'Question',
                'name'           => $q[0],
                'acceptedAnswer' => ['@type' => 'Answer', 'text' => $q[1]],
            ], $y['sss']),
        ],
        [
            '@type' => 'BreadcrumbList',
            '@id'   => $url . '#breadcrumb',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Ana Sayfa', 'item' => 'https://hemmengida.com/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blog',      'item' => 'https://hemmengida.com/blog'],
                ['@type' => 'ListItem', 'position' => 3, 'name' => $y['h1'],    'item' => $url],
            ],
        ],
    ],
];
echo json_encode($graph, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
?>
</script>

<?php include __DIR__ . '/footer.php'; ?>
