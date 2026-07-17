<?php
$page_title       = 'Ürünlerimiz | Toptan Bulyon, Çiğ Köfte Harcı ve Çeşni — Hemmen Gıda';
$page_description = 'Hemmen Gıda ürün ailesi: et bulyon, tavuk bulyon, çiğ köfte harcı, sebzeli çeşni ve patates püresi. Restoran, otel ve toplu üretim mutfakları için toptan tedarik.';
include 'header.php';
?>

<!-- Products Section -->
<section class="ultra-section" id="products" style="background: #fef7f7;">
    <div class="ultra-container">
        <div class="section-header" style="background: rgba(255,255,255,0.8); padding: var(--space-8); border-radius: var(--radius-2xl); margin-bottom: var(--space-12); box-shadow: var(--shadow-lg);">
            <h1 class="section-title">Ürünlerimiz</h1>
            <p class="section-subtitle">Her biri özenle hazırlanmış kaliteli ürün çeşitlerimiz</p>
        </div>
        
        <div class="products-grid">
            <!-- Çiğ Köfte Harcı -->
            <div class="product-card">
                <div class="product-image-slider">
                    <div class="product-slider" data-product="cigkofte">
                        <div class="product-slide active">
                            <img src="assets/images/product/kovalar/cigkofte.webp" alt="Çiğ Köfte Kova" loading="lazy" decoding="async">
                        </div>
                        <div class="product-slide">
                            <img src="assets/images/product/kovalar/cig_kofte_1.webp" alt="Çiğ Köfte Premium" loading="lazy" decoding="async">
                        </div>
                        <div class="product-slide">
                            <img src="assets/images/product/Cig Kofte Web 1.webp" alt="Çiğ Köfte Web" loading="lazy" decoding="async">
                        </div>
                    </div>
                    <div class="slider-controls">
                        <button class="slider-btn prev" onclick="changeSlide('cigkofte', -1)">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="slider-btn next" onclick="changeSlide('cigkofte', 1)">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                    <div class="slider-dots">
                        <span class="dot active" onclick="currentSlide('cigkofte', 1)"></span>
                        <span class="dot" onclick="currentSlide('cigkofte', 2)"></span>
                        <span class="dot" onclick="currentSlide('cigkofte', 3)"></span>
                    </div>
                </div>
                <div class="product-info">
                    <div class="product-content">
                        <h3 class="product-name">Hemmen Çiğ Köfte Harcı</h3>
                        <p class="product-description">Premium çiğ köfte harcı - Doğal baharatlarla zenginleştirilmiş</p>
                    </div>
                    <div class="product-button">
                        <a href="/cig-kofte-harci" class="btn-ultra btn-primary">Detaylı İncele</a>
                    </div>
                </div>
            </div>

            <!-- Et Bulyon -->
            <div class="product-card">
                <div class="product-image-slider">
                    <div class="product-slider" data-product="etbulyon">
                        <div class="product-slide active">
                            <img src="assets/images/product/kovalar/et.webp" alt="Et Bulyon Kova" loading="lazy" decoding="async">
                        </div>
                        <div class="product-slide">
                            <img src="assets/images/product/kovalar/et_1.webp" alt="Et Bulyon Premium" loading="lazy" decoding="async">
                        </div>
                        <div class="product-slide">
                            <img src="assets/images/product/Et Bulyon Web 1.webp" alt="Et Bulyon Web" loading="lazy" decoding="async">
                        </div>
                    </div>
                    <div class="slider-controls">
                        <button class="slider-btn prev" onclick="changeSlide('etbulyon', -1)">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="slider-btn next" onclick="changeSlide('etbulyon', 1)">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                    <div class="slider-dots">
                        <span class="dot active" onclick="currentSlide('etbulyon', 1)"></span>
                        <span class="dot" onclick="currentSlide('etbulyon', 2)"></span>
                        <span class="dot" onclick="currentSlide('etbulyon', 3)"></span>
                    </div>
                </div>
                <div class="product-info">
                    <div class="product-content">
                        <h3 class="product-name">Hemmen Et Bulyon</h3>
                        <p class="product-description">Yoğun et aroması - Çorbalar ve yemekler için ideal</p>
                    </div>
                    <div class="product-button">
                        <a href="/et-bulyon" class="btn-ultra btn-primary">Detaylı İncele</a>
                    </div>
                </div>
            </div>

            <!-- Tavuk Bulyon -->
            <div class="product-card">
                <div class="product-image-slider">
                    <div class="product-slider" data-product="tavukbulyon">
                        <div class="product-slide active">
                            <img src="assets/images/product/kovalar/tavuk.webp" alt="Tavuk Bulyon Kova" loading="lazy" decoding="async">
                        </div>
                        <div class="product-slide">
                            <img src="assets/images/product/kovalar/tavuk_1.webp" alt="Tavuk Bulyon Premium" loading="lazy" decoding="async">
                        </div>
                        <div class="product-slide">
                            <img src="assets/images/product/Tavuk Web 1.webp" alt="Tavuk Bulyon Web" loading="lazy" decoding="async">
                        </div>
                    </div>
                    <div class="slider-controls">
                        <button class="slider-btn prev" onclick="changeSlide('tavukbulyon', -1)">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="slider-btn next" onclick="changeSlide('tavukbulyon', 1)">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                    <div class="slider-dots">
                        <span class="dot active" onclick="currentSlide('tavukbulyon', 1)"></span>
                        <span class="dot" onclick="currentSlide('tavukbulyon', 2)"></span>
                        <span class="dot" onclick="currentSlide('tavukbulyon', 3)"></span>
                    </div>
                </div>
                <div class="product-info">
                    <div class="product-content">
                        <h3 class="product-name">Hemmen Tavuk Bulyon</h3>
                        <p class="product-description">Hafif ve besleyici - Doğal tavuk aroması</p>
                    </div>
                    <div class="product-button">
                        <a href="/tavuk-bulyon" class="btn-ultra btn-primary">Detaylı İncele</a>
                    </div>
                </div>
            </div>

            <!-- Sebzeli Çeşni -->
            <div class="product-card">
                <div class="product-image-slider">
                    <div class="product-slider" data-product="sebzelicesni">
                        <div class="product-slide active">
                            <img src="assets/images/product/kovalar/sebze.webp" alt="Sebzeli Çeşni Kova" loading="lazy" decoding="async">
                        </div>
                        <div class="product-slide">
                            <img src="assets/images/product/kovalar/sebze_1.webp" alt="Sebzeli Çeşni Premium" loading="lazy" decoding="async">
                        </div>
                        <div class="product-slide">
                            <img src="assets/images/product/Sebzeli Cesni Web 1.webp" alt="Sebzeli Çeşni Web" loading="lazy" decoding="async">
                        </div>
                    </div>
                    <div class="slider-controls">
                        <button class="slider-btn prev" onclick="changeSlide('sebzelicesni', -1)">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="slider-btn next" onclick="changeSlide('sebzelicesni', 1)">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                    <div class="slider-dots">
                        <span class="dot active" onclick="currentSlide('sebzelicesni', 1)"></span>
                        <span class="dot" onclick="currentSlide('sebzelicesni', 2)"></span>
                        <span class="dot" onclick="currentSlide('sebzelicesni', 3)"></span>
                    </div>
                </div>
                <div class="product-info">
                    <div class="product-content">
                        <h3 class="product-name">Hemmen Sebzeli Çeşni</h3>
                        <p class="product-description">Doğal sebze aromaları - Çok amaçlı lezzet kaynağı</p>
                    </div>
                    <div class="product-button">
                        <a href="/sebzeli-cesni" class="btn-ultra btn-primary">Detaylı İncele</a>
                    </div>
                </div>
            </div>

            <!-- Patates Püresi -->
            <div class="product-card">
                <div class="product-image-slider">
                    <div class="product-slider" data-product="patatespuresi">
                        <div class="product-slide active">
                            <img src="assets/images/product/kovalar/patates.webp" alt="Patates Püresi Kova" loading="lazy" decoding="async">
                        </div>
                        <div class="product-slide">
                            <img src="assets/images/product/kovalar/patates puresi.webp" alt="Patates Püresi Premium" loading="lazy" decoding="async">
                        </div>
                        <div class="product-slide">
                            <img src="assets/images/product/patatespuresi web.webp" alt="Patates Püresi Web" loading="lazy" decoding="async">
                        </div>
                    </div>
                    <div class="slider-controls">
                        <button class="slider-btn prev" onclick="changeSlide('patatespuresi', -1)">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="slider-btn next" onclick="changeSlide('patatespuresi', 1)">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                    <div class="slider-dots">
                        <span class="dot active" onclick="currentSlide('patatespuresi', 1)"></span>
                        <span class="dot" onclick="currentSlide('patatespuresi', 2)"></span>
                        <span class="dot" onclick="currentSlide('patatespuresi', 3)"></span>
                    </div>
                </div>
                <div class="product-info">
                    <div class="product-content">
                        <h3 class="product-name">Hemmen Patates Püresi</h3>
                        <p class="product-description">Sütlü ve pratik - Hızlı hazırlık imkanı</p>
                    </div>
                    <div class="product-button">
                        <a href="/patates-puresi" class="btn-ultra btn-primary">Detaylı İncele</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="ultra-section ultra-features" style="background: #fff0f0;">
    <div class="ultra-container">
        <div class="section-header">
            <h2 class="section-title">Ürün Özelliklerimiz</h2>
            <p class="section-subtitle">Tüm ürünlerimizde bulabileceğiniz kalite standartları</p>
        </div>
        
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-certificate"></i>
                </div>
                <h3 class="feature-title">Kalite Sertifikası</h3>
                <p class="feature-description">
                    Tüm ürünlerimiz kalite sertifikası ile üretilir ve düzenli olarak kontrol edilir.
                </p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="feature-title">Gıda Mühendisi Onaylı</h3>
                <p class="feature-description">
                    Uzman gıda mühendisleri tarafından geliştirilen formülasyonlar.
                </p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-leaf"></i>
                </div>
                <h3 class="feature-title">Doğal İçerikler</h3>
                <p class="feature-description">
                    Yapay katkı maddeleri kullanmadan, doğal malzemelerle üretilir.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="ultra-section ultra-cta" style="background: #fef7f7;">
    <div class="ultra-container">
        <div class="cta-content">
            <h2 class="cta-title">Ürünlerimizi Sipariş Edin</h2>
            <p class="cta-subtitle">Kaliteli ürünlerimizle tanışın ve lezzetli yemeklerin tadını çıkarın</p>
            <div class="cta-buttons">
                <a href="/iletisim" class="btn-ultra btn-primary">Sipariş Ver</a>
                <a href="#products" class="btn-ultra btn-outline">Ürünleri İncele</a>
            </div>
        </div>
    </div>
</section>

<!-- Shop Style Product Cards CSS -->
<style>
.products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--space-8);
    margin-top: var(--space-12);
    align-items: stretch;
}

.product-card {
    background: rgba(255,255,255,0.95);
    border-radius: var(--radius-2xl);
    overflow: hidden;
    box-shadow: var(--shadow-lg);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: 2px solid transparent;
    min-height: 500px;
    display: flex;
    flex-direction: column;
}

.product-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 25px 50px rgba(0,0,0,0.15);
    border-color: #e74c3c;
}

.product-image-slider {
    position: relative;
    height: 300px;
    overflow: hidden;
    flex-shrink: 0;
    background: linear-gradient(160deg, #fff1e6 0%, #ffe9db 100%);
    padding: 1rem;
    border-radius: 22px;
}

.product-slider {
    position: relative;
    width: 100%;
    height: 100%;
}

.product-slide {
    position: absolute;
    width: 100%;
    height: 100%;
    opacity: 0;
    transition: opacity 0.5s ease;
}

.product-slide.active {
    opacity: 1;
}

.product-slide {
    display: flex;
    align-items: center;
    justify-content: center;
}

.product-slide img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    filter: drop-shadow(0 12px 20px rgba(90, 45, 20, .16));
}

.product-badge {
    position: absolute;
    top: var(--space-3);
    right: var(--space-3);
    background: linear-gradient(135deg, #e74c3c, #c0392b);
    color: white;
    padding: var(--space-1) var(--space-3);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    z-index: 2;
}

.slider-controls {
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    display: flex;
    justify-content: space-between;
    padding: 0 var(--space-4);
    z-index: 3;
}

.slider-btn {
    background: rgba(0,0,0,0.5);
    color: white;
    border: none;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    opacity: 0;
}

.product-card:hover .slider-btn {
    opacity: 1;
}

.slider-btn:hover {
    background: rgba(231, 76, 60, 0.8);
    transform: scale(1.1);
}

.slider-dots {
    position: absolute;
    bottom: var(--space-3);
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: var(--space-2);
    z-index: 3;
}

.dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: rgba(255,255,255,0.5);
    cursor: pointer;
    transition: all 0.3s ease;
}

.dot.active,
.dot:hover {
    background: #e74c3c;
    transform: scale(1.2);
}

.product-info {
    padding: var(--space-6);
    text-align: center;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.product-content {
    flex-grow: 1;
}

.product-button {
    margin-top: auto;
}

.product-name {
    font-size: 1.25rem;
    font-weight: 700;
    color: #2d3748;
    margin-bottom: var(--space-3);
    background: linear-gradient(135deg, #e74c3c, #c0392b);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.product-description {
    color: #4a5568;
    margin-bottom: var(--space-6);
    font-size: 0.9rem;
    line-height: 1.5;
}

/* Tablet Responsive */
@media (max-width: 768px) {
    .products-grid {
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: var(--space-6);
    }
    
    .product-card {
        min-height: 420px;
        display: flex;
        flex-direction: column;
    }
    
    .product-image-slider {
        height: 250px;
        flex-shrink: 0;
    }
    
    .product-info {
        padding: var(--space-4);
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    
    .slider-btn {
        width: 35px;
        height: 35px;
        opacity: 1;
    }
}

/* Mobile Responsive - Tamamen Yeni Yapı */
@media (max-width: 480px) {
    /* Grid sistemini mobil için optimize et */
    .products-grid {
        display: block !important;
        margin-top: var(--space-8);
    }
    
    /* Her ürün kartı için sabit boyutlar */
    .product-card {
        width: 100% !important;
        max-width: 340px !important;
        height: 380px !important;
        margin: 0 auto var(--space-4) auto !important;
        display: flex !important;
        flex-direction: column !important;
        background: rgba(255,255,255,0.95) !important;
        border-radius: var(--radius-2xl) !important;
        overflow: hidden !important;
        box-shadow: var(--shadow-lg) !important;
        border: 2px solid transparent !important;
    }
    
    /* Resim alanı sabit boyut */
    .product-image-slider {
        height: 200px !important;
        flex-shrink: 0 !important;
        position: relative !important;
        overflow: hidden !important;
    }
    
    /* İçerik alanı esnek */
    .product-info {
        height: 180px !important;
        padding: 1rem !important;
        display: flex !important;
        flex-direction: column !important;
        justify-content: space-between !important;
        text-align: center !important;
    }
    
    /* İçerik container */
    .product-content {
        flex: 1 !important;
        display: flex !important;
        flex-direction: column !important;
        justify-content: center !important;
    }
    
    /* Ürün başlığı */
    .product-name {
        font-size: 1.1rem !important;
        font-weight: 700 !important;
        color: #2d3748 !important;
        margin-bottom: 0.5rem !important;
        line-height: 1.2 !important;
        background: linear-gradient(135deg, #e74c3c, #c0392b) !important;
        -webkit-background-clip: text !important;
        -webkit-text-fill-color: transparent !important;
        background-clip: text !important;
    }
    
    /* Ürün açıklaması */
    .product-description {
        font-size: 0.85rem !important;
        color: #4a5568 !important;
        line-height: 1.4 !important;
        margin-bottom: 1rem !important;
        overflow: hidden !important;
        display: -webkit-box !important;
        -webkit-line-clamp: 2 !important;
        -webkit-box-orient: vertical !important;
    }
    
    /* Buton alanı */
    .product-button {
        flex-shrink: 0 !important;
        margin-top: auto !important;
    }
    
    /* Buton stilleri */
    .product-button .btn-ultra {
        width: 100% !important;
        max-width: 200px !important;
        margin: 0 auto !important;
        padding: 0.6rem 1.2rem !important;
        font-size: 0.9rem !important;
        font-weight: 600 !important;
        border-radius: var(--radius-lg) !important;
        background: linear-gradient(135deg, #e74c3c, #c0392b) !important;
        color: white !important;
        border: none !important;
        text-decoration: none !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        transition: all 0.3s ease !important;
    }
    
    .product-button .btn-ultra:hover {
        transform: translateY(-2px) !important;
        box-shadow: 0 8px 25px rgba(231, 76, 60, 0.3) !important;
    }
    
    /* Slider kontrolleri mobilde */
    .slider-btn {
        width: 32px !important;
        height: 32px !important;
        opacity: 1 !important;
        background: rgba(0,0,0,0.6) !important;
        font-size: 0.8rem !important;
    }
    
    /* Slider dots mobilde */
    .slider-dots {
        bottom: 8px !important;
    }
    
    .dot {
        width: 6px !important;
        height: 6px !important;
    }
    
    /* Hover efektleri mobilde kaldır */
    .product-card:hover {
        transform: none !important;
        box-shadow: var(--shadow-lg) !important;
    }
}
</style>

<!-- Shop Slider JavaScript -->
<script>
let currentSlides = {
    'cigkofte': 1,
    'etbulyon': 1,
    'tavukbulyon': 1,
    'sebzelicesni': 1,
    'patatespuresi': 1
};

function showSlide(productId, n) {
    const slider = document.querySelector(`[data-product="${productId}"]`);
    const slides = slider.querySelectorAll('.product-slide');
    const dots = slider.parentNode.querySelectorAll('.dot');
    
    if (n > slides.length) { currentSlides[productId] = 1; }
    if (n < 1) { currentSlides[productId] = slides.length; }
    
    // Hide all slides
    slides.forEach(slide => slide.classList.remove('active'));
    dots.forEach(dot => dot.classList.remove('active'));
    
    // Show current slide
    slides[currentSlides[productId] - 1].classList.add('active');
    dots[currentSlides[productId] - 1].classList.add('active');
}

function changeSlide(productId, n) {
    currentSlides[productId] += n;
    showSlide(productId, currentSlides[productId]);
}

function currentSlide(productId, n) {
    currentSlides[productId] = n;
    showSlide(productId, currentSlides[productId]);
}

// Auto slide functionality disabled
// setInterval(() => {
//     Object.keys(currentSlides).forEach(productId => {
//         changeSlide(productId, 1);
//     });
// }, 5000); // Change slide every 5 seconds
</script>

<?php include 'footer.php';?>