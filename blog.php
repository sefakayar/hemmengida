<?php
/**
 * Blog liste sayfası. URL: /blog
 */
$yazilar = require __DIR__ . '/blog-data.php';

$page_title       = 'Blog | Toptan Gıda, Mutfak ve Satın Alma Rehberi — Hemmen Gıda';
$page_description = 'Restoran, otel ve toplu üretim mutfakları için bulyon kullanımı, tedarikçi seçimi, maliyet hesaplama ve işletme rehberi yazıları.';

$tarihTR = static function (string $iso): string {
    $aylar = [1=>'Ocak','Şubat','Mart','Nisan','Mayıs','Haziran','Temmuz','Ağustos','Eylül','Ekim','Kasım','Aralık'];
    $t = strtotime($iso);
    return date('j', $t) . ' ' . $aylar[(int) date('n', $t)] . ' ' . date('Y', $t);
};

include __DIR__ . '/header.php';
?>

<section class="ultra-section">
    <div class="ultra-container">
        <div class="section-header">
            <h1 class="section-title">Hemmen Gıda Blog</h1>
            <p class="section-subtitle">Profesyonel mutfaklar için ürün kullanımı, satın alma ve maliyet rehberleri</p>
        </div>

        <div class="blog-liste blog-liste-genis">
            <?php foreach ($yazilar as $slug => $y): ?>
            <article class="blog-kart">
                <a href="/blog/<?php echo htmlspecialchars($slug); ?>" class="blog-kart-link">
                    <img src="<?php echo htmlspecialchars($y['gorsel']); ?>" alt="<?php echo htmlspecialchars($y['gorselAlt']); ?>"
                         width="<?php echo (int) $y['gorselW']; ?>" height="<?php echo (int) $y['gorselH']; ?>" loading="lazy" decoding="async">
                    <div class="blog-kart-govde">
                        <span class="blog-kategori"><?php echo htmlspecialchars($y['kategori']); ?></span>
                        <h2><?php echo htmlspecialchars($y['h1']); ?></h2>
                        <p class="blog-kart-ozet"><?php echo htmlspecialchars(mb_substr($y['ozet'], 0, 165)); ?>…</p>
                        <p class="blog-yazi-meta">
                            <time datetime="<?php echo htmlspecialchars($y['tarih']); ?>"><?php echo $tarihTR($y['tarih']); ?></time>
                            · <span><?php echo (int) $y['okuma']; ?> dk okuma</span>
                        </p>
                    </div>
                </a>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script type="application/ld+json">
<?php
$i = 0;
$graph = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        [
            '@type'      => 'Blog',
            '@id'        => 'https://hemmengida.com/blog#blog',
            'name'       => 'Hemmen Gıda Blog',
            'description'=> 'Profesyonel mutfaklar için ürün kullanımı, satın alma ve maliyet rehberleri.',
            'inLanguage' => 'tr-TR',
            'publisher'  => ['@id' => 'https://hemmengida.com/#organization'],
            'blogPost'   => array_values(array_map(static fn($s, $y) => [
                '@type'         => 'BlogPosting',
                '@id'           => 'https://hemmengida.com/blog/' . $s . '#article',
                'headline'      => $y['h1'],
                'description'   => $y['meta'],
                'datePublished' => $y['tarih'],
                'dateModified'  => $y['guncelleme'],
                'url'           => 'https://hemmengida.com/blog/' . $s,
                'author'        => ['@id' => 'https://hemmengida.com/#organization'],
            ], array_keys($yazilar), $yazilar)),
        ],
        [
            '@type' => 'BreadcrumbList',
            '@id'   => 'https://hemmengida.com/blog#breadcrumb',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Ana Sayfa', 'item' => 'https://hemmengida.com/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blog',      'item' => 'https://hemmengida.com/blog'],
            ],
        ],
    ],
];
echo json_encode($graph, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
?>
</script>

<?php include __DIR__ . '/footer.php'; ?>
