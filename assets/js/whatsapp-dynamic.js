// Dinamik WhatsApp Destek Bileşeni - Hemmen Gıda
// Vanilla JS + ES6, Framework kullanılmıyor

(() => {
    'use strict';
    
    // ===== KONFİGÜRASYON =====
    const WP_PHONE = '+905395860635';  // Hemmen Gıda WhatsApp
    const AVG_TIME = 45;               // saniye (ortalama sayfa kalma süresi)
    const BOUNCE = 65;                 // yüzde (çıkış oranı)
    const API_UNSENT = '/api/unsubmited-wp'; // Gönderilmeyen mesajlar için endpoint
    
    // ===== GLOBAL DEĞİŞKENLER =====
    let isWidgetVisible = false;
    let isChatOpen = false;
    let notificationPlayed = false;
    let formData = { name: '', phone: '', message: '' };
    
    // ===== ZAMANLAMA HESAPLAMA =====
    function calculateDelay() {
        const delaySeconds = AVG_TIME * (1 - BOUNCE / 100);
        return Math.max(delaySeconds * 1000, 5000); // minimum 5 saniye
    }
    
    // ===== BİLDİRİM SESİ =====
    function playNotificationSound() {
        if (notificationPlayed) return;
        
        // Public domain notification sound (data URL)
        const audioContext = new (window.AudioContext || window.webkitAudioContext)();
        const oscillator = audioContext.createOscillator();
        const gainNode = audioContext.createGain();
        
        oscillator.connect(gainNode);
        gainNode.connect(audioContext.destination);
        
        oscillator.frequency.value = 800;
        oscillator.type = 'sine';
        
        gainNode.gain.setValueAtTime(0.3, audioContext.currentTime);
        gainNode.gain.exponentialRampToValueAtTime(0.01, audioContext.currentTime + 0.3);
        
        oscillator.start(audioContext.currentTime);
        oscillator.stop(audioContext.currentTime + 0.3);
        
        notificationPlayed = true;
    }
    
    // ===== CSS STİLLERİ =====
    function injectStyles() {
        const styles = `
            <style id="whatsapp-dynamic-styles">
                .wp-dynamic-widget {
                    position: fixed;
                    bottom: 20px;
                    right: 20px;
                    z-index: 9999;
                    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
                    transform: scale(0);
                    opacity: 0;
                    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                }
                
                .wp-dynamic-widget.visible {
                    transform: scale(1);
                    opacity: 1;
                }
                
                .wp-chat-button {
                    width: 64px;
                    height: 64px;
                    background: linear-gradient(135deg, #25D366, #128C7E);
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    cursor: pointer;
                    box-shadow: 0 8px 24px rgba(37, 211, 102, 0.3);
                    transition: all 0.3s ease;
                    border: none;
                    position: relative;
                    overflow: hidden;
                }
                
                .wp-chat-button:hover {
                    transform: translateY(-2px);
                    box-shadow: 0 12px 32px rgba(37, 211, 102, 0.4);
                }
                
                .wp-chat-button::before {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, transparent 70%);
                    border-radius: 50%;
                    transform: scale(0);
                    transition: transform 0.3s ease;
                }
                
                .wp-chat-button:hover::before {
                    transform: scale(1);
                }
                
                .wp-chat-button svg {
                    width: 32px;
                    height: 32px;
                    fill: white;
                    z-index: 1;
                    position: relative;
                }
                
                .wp-chat-card {
                    position: absolute;
                    bottom: 80px;
                    right: 0;
                    width: 320px;
                    background: white;
                    border-radius: 16px;
                    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
                    transform: scale(0) translateY(20px);
                    opacity: 0;
                    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                    border: 1px solid #e5e7eb;
                    overflow: hidden;
                }
                
                .wp-chat-card.open {
                    transform: scale(1) translateY(0);
                    opacity: 1;
                }
                
                .wp-chat-header {
                    background: linear-gradient(135deg, #25D366, #128C7E);
                    color: white;
                    padding: 16px 20px;
                    display: flex;
                    align-items: center;
                    gap: 12px;
                }
                
                .wp-chat-header .avatar {
                    width: 40px;
                    height: 40px;
                    background: rgba(255, 255, 255, 0.2);
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-weight: bold;
                    font-size: 18px;
                }
                
                .wp-chat-header .info h4 {
                    margin: 0;
                    font-size: 16px;
                    font-weight: 600;
                }
                
                .wp-chat-header .info p {
                    margin: 2px 0 0 0;
                    font-size: 12px;
                    opacity: 0.9;
                }
                
                .wp-chat-body {
                    padding: 20px;
                }
                
                .wp-form-group {
                    margin-bottom: 16px;
                }
                
                .wp-form-group label {
                    display: block;
                    margin-bottom: 6px;
                    font-size: 14px;
                    font-weight: 500;
                    color: #374151;
                }
                
                .wp-form-group input,
                .wp-form-group textarea {
                    width: 100%;
                    padding: 12px 14px;
                    border: 2px solid #e5e7eb;
                    border-radius: 8px;
                    font-size: 14px;
                    transition: border-color 0.2s ease;
                    font-family: inherit;
                    box-sizing: border-box;
                }
                
                .wp-form-group input:focus,
                .wp-form-group textarea:focus {
                    outline: none;
                    border-color: #25D366;
                    box-shadow: 0 0 0 3px rgba(37, 211, 102, 0.1);
                }
                
                .wp-form-group textarea {
                    resize: vertical;
                    min-height: 80px;
                }
                
                .wp-form-actions {
                    display: flex;
                    gap: 10px;
                    margin-top: 20px;
                }
                
                .wp-btn {
                    flex: 1;
                    padding: 12px 16px;
                    border-radius: 8px;
                    font-size: 14px;
                    font-weight: 600;
                    cursor: pointer;
                    transition: all 0.2s ease;
                    border: none;
                }
                
                .wp-btn-primary {
                    background: linear-gradient(135deg, #25D366, #128C7E);
                    color: white;
                }
                
                .wp-btn-primary:hover {
                    background: linear-gradient(135deg, #128C7E, #25D366);
                    transform: translateY(-1px);
                }
                
                .wp-btn-secondary {
                    background: #f3f4f6;
                    color: #6b7280;
                }
                
                .wp-btn-secondary:hover {
                    background: #e5e7eb;
                }
                
                .wp-close-btn {
                    position: absolute;
                    top: 12px;
                    right: 12px;
                    width: 28px;
                    height: 28px;
                    background: rgba(255, 255, 255, 0.2);
                    border: none;
                    border-radius: 50%;
                    color: white;
                    cursor: pointer;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 16px;
                    transition: background 0.2s ease;
                }
                
                .wp-close-btn:hover {
                    background: rgba(255, 255, 255, 0.3);
                }
                
                .wp-pulse {
                    animation: wp-pulse 2s infinite;
                }
                
                @keyframes wp-pulse {
                    0% { transform: scale(1); }
                    50% { transform: scale(1.05); }
                    100% { transform: scale(1); }
                }
                
                @media (max-width: 768px) {
                    .wp-chat-button {
                        width: 56px;
                        height: 56px;
                    }
                    
                    .wp-chat-button svg {
                        width: 28px;
                        height: 28px;
                    }
                    
                    .wp-chat-card {
                        width: 280px;
                        bottom: 70px;
                    }
                }
                
                @media (max-width: 480px) {
                    .wp-dynamic-widget {
                        bottom: 15px;
                        right: 15px;
                    }
                    
                    .wp-chat-card {
                        width: calc(100vw - 40px);
                        right: -260px;
                    }
                }
            </style>
        `;
        
        document.head.insertAdjacentHTML('beforeend', styles);
    }
    
    // ===== HTML YAPISINI OLUŞTUR =====
    function createWidget() {
        const widgetHTML = `
            <div class="wp-dynamic-widget" id="wp-dynamic-widget" aria-label="WhatsApp Destek">
                <button class="wp-chat-button wp-pulse" id="wp-chat-button" aria-label="WhatsApp ile iletişime geç">
                    <svg viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.893 3.690"/>
                    </svg>
                </button>
                
                <div class="wp-chat-card" id="wp-chat-card">
                    <button class="wp-close-btn" id="wp-close-btn" aria-label="Sohbeti kapat">&times;</button>
                    
                    <div class="wp-chat-header">
                        <div class="avatar">HG</div>
                        <div class="info">
                            <h4>Hemmen Gıda Destek</h4>
                            <p>Genellikle birkaç dakika içinde yanıtlar</p>
                        </div>
                    </div>
                    
                    <div class="wp-chat-body">
                        <form id="wp-contact-form">
                            <div class="wp-form-group">
                                <label for="wp-name">Adınız (opsiyonel)</label>
                                <input type="text" id="wp-name" name="name" placeholder="Adınızı yazın...">
                            </div>
                            
                            <div class="wp-form-group">
                                <label for="wp-phone">Telefon Numaranız</label>
                                <input type="tel" id="wp-phone" name="phone" placeholder="05XX XXX XX XX" required>
                            </div>
                            
                            <div class="wp-form-group">
                                <label for="wp-message">Mesajınız</label>
                                <textarea id="wp-message" name="message" placeholder="Ürünlerimiz hakkında bilgi almak istiyorum..." required></textarea>
                            </div>
                            
                            <div class="wp-form-actions">
                                <button type="button" class="wp-btn wp-btn-secondary" id="wp-cancel-btn">İptal</button>
                                <button type="submit" class="wp-btn wp-btn-primary" id="wp-send-btn">WhatsApp'ta Gönder</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        `;
        
        document.body.insertAdjacentHTML('beforeend', widgetHTML);
    }
    
    // ===== LOCAL STORAGE YÖNETİMİ =====
    function saveFormData() {
        const nameInput = document.getElementById('wp-name');
        const phoneInput = document.getElementById('wp-phone');
        const messageInput = document.getElementById('wp-message');
        
        if (nameInput && phoneInput && messageInput) {
            formData = {
                name: nameInput.value.trim(),
                phone: phoneInput.value.trim(),
                message: messageInput.value.trim()
            };
            
            localStorage.setItem('wp_form_data', JSON.stringify(formData));
        }
    }
    
    function loadFormData() {
        const savedData = localStorage.getItem('wp_form_data');
        if (savedData) {
            try {
                formData = JSON.parse(savedData);
                
                const nameInput = document.getElementById('wp-name');
                const phoneInput = document.getElementById('wp-phone');
                const messageInput = document.getElementById('wp-message');
                
                if (nameInput) nameInput.value = formData.name || '';
                if (phoneInput) phoneInput.value = formData.phone || '';
                if (messageInput) messageInput.value = formData.message || '';
            } catch (e) {
                console.warn('WhatsApp form data yüklenemedi:', e);
            }
        }
    }
    
    // ===== GÖNDERİLMEYEN MESAJLARI KAYDET =====
    async function saveUnsentMessage() {
        if (!formData.message && !formData.phone) return;
        
        try {
            const response = await fetch(API_UNSENT, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    name: formData.name,
                    phone: formData.phone,
                    message: formData.message,
                    timestamp: new Date().toISOString(),
                    userAgent: navigator.userAgent,
                    url: window.location.href
                })
            });
            
            if (response.ok) {
                localStorage.removeItem('wp_form_data');
            }
        } catch (error) {
            console.warn('Gönderilmeyen mesaj kaydedilemedi:', error);
        }
    }
    
    // ===== WHATSAPP YÖNLENDİRME =====
    function redirectToWhatsApp() {
        const name = formData.name ? `Ad: ${formData.name}\n` : '';
        const phone = formData.phone ? `Telefon: ${formData.phone}\n` : '';
        const message = formData.message || '';
        
        const fullMessage = `${name}${phone}\nMesaj: ${message}`;
        const encodedMessage = encodeURIComponent(fullMessage);
        const whatsappUrl = `https://wa.me/${WP_PHONE.replace('+', '')}?text=${encodedMessage}`;
        
        // Başarılı gönderim - localStorage'ı temizle
        localStorage.removeItem('wp_form_data');
        
        window.open(whatsappUrl, '_blank');
        closeChat();
    }
    
    // ===== SOHBET YÖNETİMİ =====
    function openChat() {
        if (isChatOpen) return;
        
        const chatCard = document.getElementById('wp-chat-card');
        const chatButton = document.getElementById('wp-chat-button');
        
        if (chatCard && chatButton) {
            chatCard.classList.add('open');
            chatButton.classList.remove('wp-pulse');
            isChatOpen = true;
            
            // Bildirim sesini çal
            playNotificationSound();
            
            // Form verilerini yükle
            loadFormData();
            
            // İlk alana odaklan
            setTimeout(() => {
                const firstInput = document.getElementById('wp-name');
                if (firstInput) firstInput.focus();
            }, 300);
        }
    }
    
    function closeChat() {
        const chatCard = document.getElementById('wp-chat-card');
        const chatButton = document.getElementById('wp-chat-button');
        
        if (chatCard && chatButton) {
            chatCard.classList.remove('open');
            chatButton.classList.add('wp-pulse');
            isChatOpen = false;
        }
    }
    
    // ===== EVENT LİSTENER'LAR =====
    function attachEventListeners() {
        const chatButton = document.getElementById('wp-chat-button');
        const closeBtn = document.getElementById('wp-close-btn');
        const cancelBtn = document.getElementById('wp-cancel-btn');
        const contactForm = document.getElementById('wp-contact-form');
        
        // Ana buton
        if (chatButton) {
            chatButton.addEventListener('click', openChat);
        }
        
        // Kapat butonları
        [closeBtn, cancelBtn].forEach(btn => {
            if (btn) {
                btn.addEventListener('click', closeChat);
            }
        });
        
        // Form gönderimi
        if (contactForm) {
            contactForm.addEventListener('submit', (e) => {
                e.preventDefault();
                saveFormData();
                redirectToWhatsApp();
            });
        }
        
        // Form değişikliklerini kaydet
        ['wp-name', 'wp-phone', 'wp-message'].forEach(id => {
            const input = document.getElementById(id);
            if (input) {
                input.addEventListener('input', saveFormData);
            }
        });
        
        // Sayfa kapanırken gönderilmeyen mesajları kaydet
        window.addEventListener('beforeunload', () => {
            saveFormData();
            if (formData.message || formData.phone) {
                // Sync request for beforeunload (son çare)
                navigator.sendBeacon && navigator.sendBeacon(API_UNSENT, JSON.stringify({
                    ...formData,
                    timestamp: new Date().toISOString(),
                    userAgent: navigator.userAgent,
                    url: window.location.href
                }));
            }
        });
        
        // ESC tuşu ile kapat
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && isChatOpen) {
                closeChat();
            }
        });
        
        // Dışarı tıklama ile kapat
        document.addEventListener('click', (e) => {
            const widget = document.getElementById('wp-dynamic-widget');
            if (isChatOpen && widget && !widget.contains(e.target)) {
                closeChat();
            }
        });
    }
    
    // ===== WİDGET'I GÖSTER =====
    function showWidget() {
        if (isWidgetVisible) return;
        
        const widget = document.getElementById('wp-dynamic-widget');
        if (widget) {
            widget.classList.add('visible');
            isWidgetVisible = true;
            
            // 3 saniye sonra pulse animasyonunu başlat
            setTimeout(() => {
                const button = document.getElementById('wp-chat-button');
                if (button && !isChatOpen) {
                    button.classList.add('wp-pulse');
                }
            }, 3000);
        }
    }
    
    // ===== ANA İNİT FONKSİYONU =====
    function init() {
        // DOM yüklendikten sonra çalıştır
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', init);
            return;
        }
        
        // Stilleri ekle
        injectStyles();
        
        // Widget'i oluştur
        createWidget();
        
        // Event listener'ları ekle
        attachEventListeners();
        
        // Zamanlama hesapla ve widget'i göster
        const delay = calculateDelay();
        
        console.log(`WhatsApp widget ${delay/1000} saniye sonra gösterilecek`);
        
        setTimeout(showWidget, delay);
    }
    
    // ===== BAŞLAT =====
    init();
    
})(); 