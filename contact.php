<?php
$page_title       = 'İletişim | Hemmen Gıda — Toptan Sipariş ve Fiyat Teklifi';
$page_description = 'Hemmen Gıda ile iletişime geçin. Toptan bulyon, çiğ köfte harcı ve çeşni siparişleri, fiyat teklifi ve bilgi için telefon, WhatsApp ve iletişim formu. İstanbul merkez, Türkiye geneli tedarik.';
include 'header.php';
?>

<!-- Contact Information Section -->
<section class="ultra-section" id="contact-info" style="background: #fef7f7;">
    <div class="ultra-container">
        <div class="section-header" style="background: rgba(255,255,255,0.8); padding: var(--space-8); border-radius: var(--radius-2xl); margin-bottom: var(--space-12); box-shadow: var(--shadow-lg);">
            <h1 class="section-title">İletişim Bilgileri</h1>
            <p class="section-subtitle">Bizimle iletişime geçmenin tüm yolları</p>
        </div>
        
        <div class="contact-cards-grid">
            <!-- WhatsApp -->
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fab fa-whatsapp"></i>
                </div>
                <div class="contact-info">
                    <h3 class="contact-title">WhatsApp</h3>
                    <div class="contact-links">
                        <a href="https://wa.me/905395860635" class="contact-link whatsapp-link" target="_blank">
                            <i class="fab fa-whatsapp"></i>
                            <span>Hızlı İletişim</span>
                        </a>
                    </div>
                    <p class="contact-description">Anında mesajlaşma için</p>
                </div>
            </div>

            <!-- Telefon -->
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="contact-info">
                    <h3 class="contact-title">Telefonlarımız</h3>
                    <div class="contact-links">
                        <a href="tel:+905395860635" class="contact-link">
                            <i class="fas fa-mobile-alt"></i>
                            <span>+90 539 586 06 35</span>
                        </a>
                        <a href="tel:+902126675502" class="contact-link">
                            <i class="fas fa-phone"></i>
                            <span>+90 212 667 55 02</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- E-mail & Web -->
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="contact-info">
                    <h3 class="contact-title">Dijital İletişim</h3>
                    <div class="contact-links">
                        <a href="mailto:hemmengida@hemmengida.com" class="contact-link">
                            <i class="fas fa-envelope"></i>
                            <span>hemmengida@hemmengida.com</span>
                        </a>
                        <a href="/" class="contact-link">
                            <i class="fas fa-globe"></i>
                            <span>www.hemmengida.com</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Adres -->
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="contact-info">
                    <h3 class="contact-title">Adresimiz</h3>
                    <p class="contact-detail">İstanbul, Türkiye</p>
                    <p class="contact-description">Merkez ofisimizden size hizmet veriyoruz</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form & Map Section -->
<section class="ultra-section" id="contact-form" style="background: #fff0f0;">
    <div class="ultra-container">
        <div class="section-header">
            <h2 class="section-title">Mesaj Gönder</h2>
            <p class="section-subtitle">Sorularınızı ve önerilerinizi bizimle paylaşın</p>

            <?php if(isset($_GET['success']) && $_GET['success'] == '1'): ?>
            <div style="background: #d4edda; border: 2px solid #28a745; border-radius: var(--radius-lg); padding: var(--space-6); margin-top: var(--space-6); text-align: center; animation: slideDown 0.5s ease;">
                <i class="fas fa-check-circle" style="color: #28a745; font-size: 3rem; margin-bottom: var(--space-3);"></i>
                <h3 style="color: #155724; margin-bottom: var(--space-2);">Mesajınız Başarıyla Gönderildi!</h3>
                <p style="color: #155724; margin: 0;">En kısa sürede size geri dönüş yapacağız. Teşekkür ederiz.</p>
            </div>
            <?php endif; ?>

        </div>
        
        <div class="contact-content-grid">
            <!-- Contact Form -->
            <div class="contact-form-container">
                <h3 class="contact-title" style="text-align: center; font-size: 1.5rem; margin-bottom: var(--space-6);">İletişim Formu</h3>
                <form action="phpmailer/contact.php" method="POST" id="contactForm" class="modern-contact-form">
                    <!-- Honeypot: botlar doldurur, gerçek kullanıcı görmez -->
                    <div style="position:absolute;left:-9999px;top:-9999px;" aria-hidden="true">
                        <label for="website">Web sitesi (boş bırakın)</label>
                        <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="name">Ad Soyad *</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">E-posta *</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Telefon</label>
                        <input type="tel" id="phone" name="phone">
                    </div>

                    <div class="form-group">
                        <label for="subject">Konu *</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Mesaj *</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>

                    <div class="form-group" style="margin-bottom: var(--space-6);">
                        <div style="display: flex; align-items: flex-start; gap: var(--space-3);">
                            <input type="checkbox" id="kvkk" name="kvkk" required style="width: auto; margin-top: 4px; cursor: pointer; transform: scale(1.2);">
                            <label for="kvkk" style="margin: 0; font-weight: 500; color: #4a5568; font-size: 0.95rem; cursor: pointer; line-height: 1.6;">
                                <a href="/kvkk" target="_blank" style="color: #e74c3c; text-decoration: none; font-weight: 600;">KVKK Aydınlatma Metni</a>'ni okudum, anladım ve kişisel verilerimin işlenmesini kabul ediyorum. *
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="btn-ultra btn-primary btn-submit">
                        <i class="fas fa-paper-plane"></i>
                        Mesaj Gönder
                    </button>
                </form>
                
                <div style="text-align: center; margin-top: var(--space-4); padding: var(--space-3); background: rgba(255,193,7,0.1); border-radius: var(--radius-lg);">
                    <p style="color: #856404; font-size: 0.9rem; margin: 0;">
                        <i class="fas fa-info-circle"></i> 
                        Alternatif olarak doğrudan WhatsApp veya telefon ile iletişime geçebilirsiniz.
                    </p>
                </div>
            </div>

            <!-- Map -->
            <div class="map-container">
                <div class="map-wrapper">
                    <h3 class="map-title">Konum</h3>
                    <div class="map-frame">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d192488.51123800428!2d28.671368752912368!3d41.07701443122148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa49186ba3a85%3A0x563134f4b0a3930b!2zQXZydXBhIFlha2FzxLEsIMSwc3RhbmJ1bA!5e0!3m2!1str!2str!4v1707500401401!5m2!1str!2str" 
                            width="100%" 
                            height="400" 
                            style="border:0; border-radius: var(--radius-xl);" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <p class="map-description">İstanbul merkezli hizmetimizle tüm Türkiye'ye ulaşıyoruz</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="ultra-section ultra-cta" style="background: #fef7f7;">
    <div class="ultra-container">
        <div class="cta-content">
            <h2 class="cta-title">Hemen İletişime Geçin</h2>
            <p class="cta-subtitle">Ürünlerimiz hakkında detaylı bilgi almak için bizimle iletişime geçin</p>
            <div class="cta-buttons">
                <a href="tel:+905395860635" class="btn-ultra btn-primary">
                    <i class="fas fa-phone"></i>
                    Hemen Ara
                </a>
                <a href="https://wa.me/905395860635" class="btn-ultra btn-whatsapp" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                    WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Page Custom CSS -->
<style>
/* Contact Cards Grid */
.contact-cards-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: var(--space-8);
    margin-top: var(--space-12);
}

.contact-card {
    background: rgba(255,255,255,0.9);
    border-radius: var(--radius-2xl);
    padding: var(--space-8);
    text-align: center;
    box-shadow: var(--shadow-lg);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: 2px solid transparent;
}

.contact-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 25px 50px rgba(0,0,0,0.15);
    border-color: #e74c3c;
}

.contact-icon {
    width: 80px;
    height: 80px;
    margin: 0 auto var(--space-6);
    background: linear-gradient(135deg, #e74c3c, #c0392b);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    color: white;
}

.contact-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: #2d3748;
    margin-bottom: var(--space-4);
}

.contact-detail {
    font-size: 1.1rem;
    font-weight: 600;
    color: #e74c3c;
    margin-bottom: var(--space-2);
}

.contact-description {
    color: #4a5568;
    font-size: 0.9rem;
    margin-top: var(--space-2);
}

.contact-links {
    display: flex;
    flex-direction: column;
    gap: var(--space-3);
}

.contact-link {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: var(--space-2);
    color: #4a5568;
    text-decoration: none;
    padding: var(--space-2) var(--space-4);
    border-radius: var(--radius-lg);
    transition: all 0.3s ease;
}

.contact-link:hover {
    background: rgba(231, 76, 60, 0.1);
    color: #e74c3c;
    transform: translateX(5px);
}

.whatsapp-link:hover {
    background: rgba(37, 211, 102, 0.1);
    color: #25d366;
}

/* Contact Form & Map Grid */
.contact-content-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-12);
    margin-top: var(--space-12);
}

.contact-form-container {
    background: rgba(255,255,255,0.9);
    border-radius: var(--radius-2xl);
    padding: var(--space-8);
    box-shadow: var(--shadow-lg);
}

.modern-contact-form .form-group {
    margin-bottom: var(--space-6);
}

.modern-contact-form label {
    display: block;
    font-weight: 600;
    color: #2d3748;
    margin-bottom: var(--space-2);
}

.modern-contact-form input,
.modern-contact-form textarea {
    width: 100%;
    padding: var(--space-4);
    border: 2px solid #e2e8f0;
    border-radius: var(--radius-lg);
    font-size: 1rem;
    transition: border-color 0.3s ease;
    background: white;
}

.modern-contact-form input:focus,
.modern-contact-form textarea:focus {
    outline: none;
    border-color: #e74c3c;
    box-shadow: 0 0 0 3px rgba(231, 76, 60, 0.1);
}

.btn-submit {
    width: 100%;
    padding: var(--space-4) var(--space-6);
    font-size: 1.1rem;
    font-weight: 600;
    display: block;
    margin: 0 auto;
    text-align: center;
}

/* Map Container */
.map-container {
    background: rgba(255,255,255,0.9);
    border-radius: var(--radius-2xl);
    padding: var(--space-8);
    box-shadow: var(--shadow-lg);
}

.map-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #2d3748;
    margin-bottom: var(--space-6);
    text-align: center;
}

.map-frame {
    margin-bottom: var(--space-4);
    border-radius: var(--radius-xl);
    overflow: hidden;
    box-shadow: var(--shadow-md);
}

.map-description {
    text-align: center;
    color: #4a5568;
    font-style: italic;
}

/* WhatsApp Button */
.btn-whatsapp {
    background: linear-gradient(135deg, #25d366, #128c7e);
    border: none;
    color: white;
}

.btn-whatsapp:hover {
    background: linear-gradient(135deg, #128c7e, #075e54);
    transform: translateY(-2px);
}

/* Responsive */
@media (max-width: 768px) {
    .contact-cards-grid {
        grid-template-columns: 1fr;
        gap: var(--space-6);
    }
    
    .contact-content-grid {
        grid-template-columns: 1fr;
        gap: var(--space-8);
    }
    
    .contact-card {
        padding: var(--space-6);
    }
    
    .contact-icon {
        width: 60px;
        height: 60px;
        font-size: 1.5rem;
    }
    
    .map-frame iframe {
        height: 300px;
    }
}

@media (max-width: 480px) {
    .contact-form-container,
    .map-container {
        padding: var(--space-4);
    }

    .cta-buttons {
        flex-direction: column;
        gap: var(--space-4);
    }
}

/* Success Message Animation */
@keyframes slideDown {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

<?php include 'footer.php';?>