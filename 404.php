<?php
/** Özel 404 sayfası — .htaccess: ErrorDocument 404 /404.php */
http_response_code(404);
$page_title       = 'Sayfa bulunamadı (404) | Hemmen Gıda';
$page_description = 'Aradığınız sayfa bulunamadı. Toptan bulyon, çiğ köfte harcı, sebzeli çeşni ve patates püresi ürünlerimize göz atabilirsiniz.';
include __DIR__ . '/header.php';
?>
<section class="ultra-section">
    <div class="ultra-container" style="text-align:center;padding:3rem 0;">
        <p style="font-size:4rem;font-weight:800;color:var(--f-red,#e63a2e);margin:0;line-height:1;">404</p>
        <h1 class="section-title" style="margin-top:.75rem;">Aradığınız sayfa bulunamadı</h1>
        <p class="section-subtitle">Sayfa kaldırılmış veya adresi değişmiş olabilir. Aşağıdan devam edebilirsiniz.</p>

        <div class="cta-buttons" style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;margin:2rem 0 3rem;">
            <a href="/" class="btn-ultra btn-primary"><i class="fas fa-home"></i> Ana Sayfa</a>
            <a href="/urunler" class="btn-ultra btn-outline"><i class="fas fa-box-open"></i> Ürünlerimiz</a>
            <a href="/iletisim" class="btn-ultra btn-outline"><i class="fas fa-envelope"></i> İletişim</a>
        </div>

        <div style="max-width:720px;margin:0 auto;text-align:left;background:#fff8f2;border:1px solid var(--f-line,#f0e2d6);border-radius:18px;padding:1.75rem 2rem;">
            <p style="font-weight:700;color:var(--f-ink,#2a211d);margin:0 0 .9rem;">Popüler sayfalar</p>
            <ul style="margin:0;padding-left:1.2rem;line-height:2;color:var(--f-muted,#7c6a60);">
                <li><a href="/et-bulyon" style="color:var(--f-red-deep,#b32a1f);font-weight:600;">Toptan Et Bulyon</a></li>
                <li><a href="/tavuk-bulyon" style="color:var(--f-red-deep,#b32a1f);font-weight:600;">Toptan Tavuk Bulyon</a></li>
                <li><a href="/cig-kofte-harci" style="color:var(--f-red-deep,#b32a1f);font-weight:600;">Toptan Çiğ Köfte Harcı</a></li>
                <li><a href="/sebzeli-cesni" style="color:var(--f-red-deep,#b32a1f);font-weight:600;">Toptan Sebzeli Çeşni</a></li>
                <li><a href="/patates-puresi" style="color:var(--f-red-deep,#b32a1f);font-weight:600;">Toptan Patates Püresi</a></li>
                <li><a href="/blog" style="color:var(--f-red-deep,#b32a1f);font-weight:600;">Blog — mutfak ve satın alma rehberleri</a></li>
            </ul>
        </div>
    </div>
</section>
<?php include __DIR__ . '/footer.php'; ?>
