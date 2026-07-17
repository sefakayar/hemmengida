<?php
/*
 * Sayfa bazlı SEO değişkenleri.
 * Her sayfa header include etmeden ÖNCE şunları tanımlayabilir:
 *   $page_title       -> <title> ve og:title
 *   $page_description -> meta description ve og:description
 *   $page_image       -> og:image (opsiyonel, tam URL)
 * Tanımlanmazsa aşağıdaki varsayılanlar kullanılır.
 */
$site_name   = 'Hemmen Gıda';
$site_url    = 'https://hemmengida.com';
$default_img = $site_url . '/assets/images/logo/hemmen%20logo%202025-1.webp';

$page_title       = isset($page_title) ? $page_title : 'Hemmen Gıda | Toptan Bulyon, Çiğ Köfte Harcı ve Çeşni Tedarikçisi';
$page_description = isset($page_description) ? $page_description : 'Restoran, otel ve toplu üretim mutfakları için toptan et bulyon, tavuk bulyon, çiğ köfte harcı, sebzeli çeşni ve patates püresi. Türkiye geneli hızlı tedarik.';
$page_image      = isset($page_image) ? $page_image : $default_img;

// Kanonik URL — mevcut isteğin yolundan üretilir
$canonical = $site_url . strtok($_SERVER['REQUEST_URI'] ?? '/', '?');
?>
<!DOCTYPE html>
<html lang="tr">
	<head>
		<title><?php echo htmlspecialchars($page_title); ?></title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="description" content="<?php echo htmlspecialchars($page_description); ?>" />
		<link rel="canonical" href="<?php echo htmlspecialchars($canonical); ?>" />

		<!-- Open Graph / Facebook -->
		<meta property="og:type" content="website" />
		<meta property="og:site_name" content="<?php echo htmlspecialchars($site_name); ?>" />
		<meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>" />
		<meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>" />
		<meta property="og:url" content="<?php echo htmlspecialchars($canonical); ?>" />
		<meta property="og:image" content="<?php echo htmlspecialchars($page_image); ?>" />
		<meta property="og:locale" content="tr_TR" />

		<!-- Twitter Card -->
		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>" />
		<meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>" />
		<meta name="twitter:image" content="<?php echo htmlspecialchars($page_image); ?>" />
		
		<!-- Mobile Optimization -->
		<meta name="theme-color" content="#e74c3c" />
		<meta name="mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="default" />
		<meta name="format-detection" content="telephone=no" />
		<meta name="msapplication-tap-highlight" content="no" />
		
		<!-- SEO Meta Tags -->
		<meta name="robots" content="index, follow" />
		<meta name="author" content="Hemmen Gıda" />
		<meta name="revisit-after" content="7 days" />
		<meta name="language" content="Turkish" />
		<meta name="distribution" content="global" />
		<meta name="rating" content="general" />
		
		
		
		<!-- LocalBusiness Schema Markup for SEO -->
		<script type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@type": "LocalBusiness",
		  "name": "Hemmen Gıda",
		  "description": "Türkiye'nin güvenilir toptan gıda tedarikçisi. Tavuk bulyon, et bulyon, çiğ köfte harcı, patates püresi ve sebze çeşnileri toptan satışı.",
		  "url": "https://hemmengida.com",
		  "logo": "https://hemmengida.com/assets/images/logo/hemmen%20logo%202025-1.webp",
		  "image": "https://hemmengida.com/assets/images/logo/hemmen%20logo%202025-1.webp",
		  "telephone": "+90-539-586-06-35",
		  "email": "hemmengida@hemmengida.com",
		  "address": {
		    "@type": "PostalAddress",
		    "addressCountry": "TR",
		    "addressLocality": "İstanbul",
		    "addressRegion": "İstanbul"
		  },
		  "geo": {
		    "@type": "GeoCoordinates",
		    "latitude": "41.0082",
		    "longitude": "28.9784"
		  },
		  "openingHours": "Mo-Fr 09:00-18:00, Sa 09:00-16:00",
		  "priceRange": "$$",
		  "paymentAccepted": "Cash, Credit Card, Bank Transfer",
		  "currenciesAccepted": "TRY",
		  "areaServed": {
		    "@type": "Country",
		    "name": "Turkey"
		  },
		  "serviceArea": {
		    "@type": "GeoCircle",
		    "geoMidpoint": {
		      "@type": "GeoCoordinates",
		      "latitude": "39.9334",
		      "longitude": "32.8597"
		    },
		    "geoRadius": "1000000"
		  },
		  "sameAs": [
		    "https://wa.me/905395860635",
		    "https://share.google/PYoIGlRM6QHIFqhsl"
		  ]
		}
		</script>		
		
		<!-- Modern Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
		
		<!-- Icons -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />		
		
		    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/favicon.ico">
		
		<!-- Styles -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/animate.css">
		<link rel="stylesheet" href="assets/css/swiper.min.css">
		<link rel="stylesheet" href="assets/css/modern-hemmen.css">
		<link rel="stylesheet" href="mobile-banner-fix.css">
		<link rel="stylesheet" href="assets/css/fresh-2025.css?v=2">
<?php if (basename($_SERVER['PHP_SELF'] ?? '') === 'index.php'): ?>
		<!-- LCP hızlandırma: ana sayfa ilk banner'ı öncelikli yükle -->
		<link rel="preload" as="image" href="assets/images/banner/1.webp" fetchpriority="high">
<?php endif; ?>

		
		<!-- Dinamik WhatsApp Destek Sistemi -->
		<script>
		(() => {
			'use strict';
			
			// Konfigürasyon
			const WP_PHONE = '+905395860635';
			const AVG_TIME = 30; // saniye (daha erken çıksın)
			const BOUNCE_RATE = 70; // yüzde
			
			let isWidgetVisible = false;
			let isChatOpen = false;
			let notificationPlayed = false;
			let formData = { message: '' };
			
			// Zamanlama hesaplama
			function calculateDelay() {
				const delaySeconds = AVG_TIME * (1 - BOUNCE_RATE / 100);
				return Math.max(delaySeconds * 1000, 3000); // Minimum 3 saniye - daha erken çıksın
			}
			
			// Bildirim sesi
			function playNotificationSound() {
				if (notificationPlayed) return;
				
				try {
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
				} catch (e) {
					console.warn('Bildirim sesi çalınamadı');
				}
			}
			
			// CSS stilleri
			function injectStyles() {
				const styles = document.createElement('style');
				styles.textContent = `
					.wp-dynamic-widget {
			position: fixed;
			bottom: 20px;
			right: 20px;
						z-index: 9999;
						font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
						transform: scale(0);
						opacity: 0;
						transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
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
						color: white;
						font-size: 28px;
					}
					
					.wp-chat-button:hover {
						transform: translateY(-2px);
						box-shadow: 0 12px 32px rgba(37, 211, 102, 0.4);
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
						overflow: hidden;
						border: 1px solid #e5e7eb;
						max-width: calc(100vw - 30px);
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
						position: relative;
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
						font-size: 18px;
						display: flex;
						align-items: center;
						justify-content: center;
					}
					
					.wp-close-btn:hover {
						background: rgba(255, 255, 255, 0.3);
					}
					
					.wp-chat-body {
						padding: 20px;
					}
					
					.wp-chat-message {
						margin-bottom: 15px;
					}
					
					.wp-bot-message {
						background: #f1f5f9;
						padding: 12px 16px;
						border-radius: 12px;
						border-bottom-left-radius: 4px;
						font-size: 14px;
						color: #475569;
						line-height: 1.4;
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
						padding: 12px;
						border: 2px solid #e5e7eb;
						border-radius: 8px;
						font-size: 14px;
						box-sizing: border-box;
						font-family: inherit;
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
						border: none;
						transition: all 0.2s ease;
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
					
					.wp-pulse {
						animation: wp-pulse 2s infinite;
					}
					
					@keyframes wp-pulse {
						0%, 100% { transform: scale(1); }
						50% { transform: scale(1.05); }
					}
					
					@media (max-width: 768px) {
						.wp-chat-button {
							width: 56px;
							height: 56px;
			font-size: 24px;
						}
						
						.wp-chat-card {
							width: 300px;
							bottom: 70px;
							right: 0;
						}
					}
					
					@media (max-width: 480px) {
						.wp-dynamic-widget {
							bottom: 15px;
							right: 15px;
						}
						
						.wp-chat-card {
							width: calc(100vw - 30px);
							right: -15px;
							bottom: 70px;
							left: auto;
						}
					}
					
					@media (max-width: 360px) {
						.wp-chat-card {
							width: calc(100vw - 20px);
							right: -10px;
							font-size: 14px;
						}
						
						.wp-chat-body {
							padding: 15px;
						}
					}
				`;
				
				document.head.appendChild(styles);
			}
			
			// Widget HTML yapısı
			function createWidget() {
				const widgetHTML = `
					<div class="wp-dynamic-widget" id="wp-dynamic-widget">
						<button class="wp-chat-button" id="wp-chat-button" title="WhatsApp ile iletişime geç" aria-label="WhatsApp sohbetini aç">
							<i class="fab fa-whatsapp" aria-hidden="true"></i>
						</button>
						
						<div class="wp-chat-card" id="wp-chat-card">
							<div class="wp-chat-header">
								<div class="avatar">HG</div>
								<div>
									<h4 style="margin:0;font-size:16px;font-weight:600;">Hemmen Gıda</h4>
									<p style="margin:2px 0 0;font-size:12px;opacity:0.9;">Herşeyi sorabilirsiniz!</p>
								</div>
								<button class="wp-close-btn" id="wp-close-btn">&times;</button>
							</div>
							
							<div class="wp-chat-body">
								<div class="wp-chat-message">
									<div class="wp-bot-message">
										<span>👋 Ben Mehmet, size nasıl yardımcı olabilirim?</span>
									</div>
								</div>
								
								<form id="wp-contact-form">
									<div class="wp-form-group">
										<textarea id="wp-message" placeholder="Mesajınızı yazın..." required rows="3"></textarea>
									</div>
									
									<div class="wp-form-actions">
										<button type="submit" class="wp-btn wp-btn-primary" style="width: 100%;">
											<i class="fab fa-whatsapp"></i>
											WhatsApp ile gönder
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				`;
				
				document.body.insertAdjacentHTML('beforeend', widgetHTML);
			}
			
			// Form verilerini kaydet
			function saveFormData() {
				const messageInput = document.getElementById('wp-message');
				
				if (messageInput) {
					formData = {
						message: messageInput.value.trim()
					};
					
					localStorage.setItem('wp_form_data', JSON.stringify(formData));
				}
			}
			
			// Form verilerini yükle
			function loadFormData() {
				const savedData = localStorage.getItem('wp_form_data');
				if (savedData) {
					try {
						formData = JSON.parse(savedData);
						const messageInput = document.getElementById('wp-message');
						if (messageInput) messageInput.value = formData.message || '';
					} catch (e) {
						console.warn('Form verileri yüklenemedi');
					}
				}
			}
			
			// WhatsApp'a yönlendir
			function redirectToWhatsApp() {
				const message = formData.message || 'Merhaba, urunleriniz hakkinda bilgi almak istiyorum.';
				
				// Sadece mesajı encode et
				const encodedMessage = encodeURIComponent(message);
				const phoneNumber = WP_PHONE.replace('+', '');
				const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodedMessage}`;
				
				console.log('Gonderilen mesaj:', message);
				console.log('WhatsApp URL:', whatsappUrl);
				
				localStorage.removeItem('wp_form_data');
				window.open(whatsappUrl, '_blank');
				closeChat();
			}
			
			// Sohbet aç/kapat
			function openChat() {
				if (isChatOpen) return;
				
				const chatCard = document.getElementById('wp-chat-card');
				const chatButton = document.getElementById('wp-chat-button');
				
				if (chatCard && chatButton) {
					chatCard.classList.add('open');
					chatButton.classList.remove('wp-pulse');
					isChatOpen = true;
					
					playNotificationSound();
					loadFormData();
					
					setTimeout(() => {
						const firstInput = document.getElementById('wp-message');
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
			
			// Event listener'lar
			function attachEventListeners() {
				document.getElementById('wp-chat-button')?.addEventListener('click', openChat);
				document.getElementById('wp-close-btn')?.addEventListener('click', closeChat);
				
				document.getElementById('wp-contact-form')?.addEventListener('submit', (e) => {
					e.preventDefault();
					saveFormData();
					redirectToWhatsApp();
				});
				
				// Sadece mesaj inputu için event listener
				document.getElementById('wp-message')?.addEventListener('input', saveFormData);
				
				// ESC ile kapat
				document.addEventListener('keydown', (e) => {
					if (e.key === 'Escape' && isChatOpen) closeChat();
				});
				
				// Dış tıklama ile kapat
				document.addEventListener('click', (e) => {
					const widget = document.getElementById('wp-dynamic-widget');
					if (isChatOpen && widget && !widget.contains(e.target)) {
						closeChat();
					}
				});
			}
			
			// Widget'i göster
			function showWidget() {
				if (isWidgetVisible) return;
				
				const widget = document.getElementById('wp-dynamic-widget');
				if (widget) {
					widget.classList.add('visible');
					isWidgetVisible = true;
					
					setTimeout(() => {
						const button = document.getElementById('wp-chat-button');
						if (button && !isChatOpen) {
							button.classList.add('wp-pulse');
						}
					}, 3000);
				}
			}
			
			// Ana init
			function init() {
				if (document.readyState === 'loading') {
					document.addEventListener('DOMContentLoaded', init);
					return;
				}
				
				injectStyles();
				createWidget();
				attachEventListeners();
				
				const delay = calculateDelay();
				console.log(`💬 WhatsApp Widget ${delay/1000} saniye sonra gösterilecek`);
				
				setTimeout(showWidget, delay);
			}
			
			init();
		})();
		</script>
		
		<style>
		/* Mobile Responsive Fixes */
		@media (max-width: 768px) {
			/* Header Mobile */
			.ultra-header {
				padding: var(--space-2) 0 !important;
			}
			
			.header-content {
				flex-wrap: wrap;
				justify-content: space-between;
			}
			
			.ultra-logo {
				height: 70px !important;
			}
			
			/* Simple Mobile Menu */
			.simple-mobile-menu {
				position: fixed;
				top: 95px;
				left: -70%;
				width: 70%;
				max-width: 280px;
				background: #ffffff;
				border-right: 1px solid #e5e7eb;
				box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
				transition: left 0.3s ease;
				z-index: 1000;
				height: calc(100vh - 95px);
				overflow-y: auto;
			}
			
			.simple-mobile-menu.active {
				left: 0;
			}
			
			.simple-mobile-menu a {
				display: block;
				padding: 16px 20px;
				color: #374151;
				text-decoration: none;
				font-size: 16px;
				font-weight: 500;
				border-bottom: 1px solid #f3f4f6;
			}
			
			.simple-mobile-menu a:hover {
				background: #f9fafb;
			}
			
			.simple-mobile-menu a.active {
				background: #ef4444;
				color: white;
			}
			
			/* Mobile Menu Toggle */
			.mobile-menu-toggle {
				display: flex !important;
				background: none !important;
				border: none !important;
				outline: none !important;
				font-size: 1.5rem !important;
				color: #2d3748 !important;
				cursor: pointer !important;
				z-index: 1001 !important;
				padding: 0.5rem !important;
				border-radius: 8px !important;
				transition: all 0.3s ease !important;
				width: 44px !important;
				height: 44px !important;
				align-items: center !important;
				justify-content: center !important;
				position: relative !important;
			}
			
			.mobile-menu-toggle:hover {
				background: rgba(231, 76, 60, 0.1);
				color: #e74c3c;
				transform: scale(1.1);
			}
			
			.mobile-menu-toggle.active {
				color: #e74c3c;
				background: rgba(231, 76, 60, 0.1);
			}
			
			/* Hide desktop phone button on mobile */
			.header-actions .btn-ultra:not(.mobile-menu-toggle) {
				display: none !important;
			}
			
			/* Mobile Sections Padding */
			.ultra-section {
				padding: 3rem 0 !important;
			}
			
			.ultra-container {
				padding: 0 1rem !important;
			}
			
			/* Mobile Banner */
			.ultra-banner-slider {
				height: 480px !important;
				min-height: 400px !important;
			}
			
			.banner-title {
				font-size: 2rem !important;
				line-height: 1.2 !important;
			}
			
			.banner-subtitle {
				font-size: 1rem !important;
				margin-bottom: 2rem !important;
			}
			
			.banner-cta {
				flex-direction: column !important;
				gap: 1rem !important;
				align-items: center !important;
			}
			
			.banner-cta .btn-ultra {
				width: 100% !important;
				max-width: 280px !important;
				justify-content: center !important;
			}
			
			/* Mobile Product Grid */
			.product-detail-grid {
				grid-template-columns: 1fr !important;
				gap: 2rem !important;
			}
			
			/* Mobile CTA Buttons */
			.cta-buttons {
				flex-direction: column !important;
				gap: 1rem !important;
				align-items: center !important;
			}
			
			.cta-buttons .btn-ultra {
				width: 100% !important;
				max-width: 280px !important;
				justify-content: center !important;
			}
			
			/* Mobile Footer */
			.footer-grid {
				grid-template-columns: 1fr !important;
				gap: 2rem !important;
				text-align: center !important;
			}
			
			.footer-logo {
				width: 150px !important;
				height: 150px !important;
			}
		}
		
		@media (max-width: 480px) {
			.ultra-container {
				padding: 0 0.75rem !important;
			}
			
			.banner-title {
				font-size: 1.75rem !important;
			}
			
			.banner-subtitle {
				font-size: 0.9rem !important;
			}
			
			.ultra-section {
				padding: 2rem 0 !important;
			}
		}
		
		/* Desktop vs Mobile Display Rules */
		@media (min-width: 769px) {
			/* Desktop - Hide hamburger, show nav */
			.mobile-menu-toggle {
				display: none !important;
			}
			
			.ultra-nav {
				position: static !important;
				display: flex !important;
				flex-direction: row !important;
				height: auto !important;
				width: auto !important;
				background: none !important;
				box-shadow: none !important;
				padding: 0 !important;
				left: 0 !important;
			}
		}
		
		@media (max-width: 768px) {
			.mobile-menu-toggle,
			.mobile-only {
				display: flex !important;
				visibility: visible !important;
				opacity: 1 !important;
			}
			
			.desktop-only {
				display: none !important;
			}
			
			.ultra-nav {
				display: none !important;
			}
			
			.simple-mobile-menu {
				display: block !important;
			}
			
			/* Force show mobile menu toggle */
			.header-actions .mobile-menu-toggle {
				display: flex !important;
				visibility: visible !important;
				opacity: 1 !important;
			}
		}
		
		@media (min-width: 769px) {
			.simple-mobile-menu {
				display: none !important;
			}
		}
		</style>
	</head>

	<body>
		<a href="#main-content" class="skip-link">İçeriğe geç</a>
		<!-- Ultra Modern Header -->
		<header class="ultra-header" id="header">
			<div class="ultra-container">
				<div class="header-content">
					<div class="logo">
						<a href="/">
							<img src="assets/images/logo/hemmen%20logo%202025-1.webp" alt="Hemmen Gıda Logo" class="ultra-logo">
						</a>
					</div>
					
					<nav class="ultra-nav">
						<?php
						$current_page = basename($_SERVER['PHP_SELF']);
						$is_product_detail = strpos($current_page, 'hemmen-gida-') === 0;
						?>
						<a href="/" class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Ana Sayfa</a>
						<a href="/hakkimizda" class="nav-link <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">Hakkımızda</a>
						<a href="/urunler" class="nav-link <?php echo ($current_page == 'product.php' || $is_product_detail) ? 'active' : ''; ?>">Ürünlerimiz</a>
						<a href="/iletisim" class="nav-link <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">İletişim</a>
					</nav>
					
					<!-- Simple Mobile Menu -->
					<div class="simple-mobile-menu" id="simpleMobileMenu">
						<a href="/" class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Ana Sayfa</a>
						<a href="/hakkimizda" class="<?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">Hakkımızda</a>
						<a href="/urunler" class="<?php echo ($current_page == 'product.php' || $is_product_detail) ? 'active' : ''; ?>">Ürünlerimiz</a>
						<a href="/iletisim" class="<?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">İletişim</a>
					</div>
					
					<div class="header-actions">
						<button class="mobile-menu-toggle mobile-only" id="mobileMenuToggle" type="button" aria-label="Menüyü aç/kapat" aria-expanded="false" aria-controls="simpleMobileMenu">
							<i class="fas fa-bars"></i>
						</button>
						<a href="tel:+905395860635" class="btn-ultra btn-primary desktop-only">
							<i class="fas fa-phone"></i>
							Bizi Arayın
						</a>
					</div>
				</div>
			</div>
		</header>

		<!-- Header Effects & Mobile Menu -->
		<script>
		// Sticky header gölge efekti
		window.addEventListener('scroll', function() {
			const header = document.getElementById('header');
			if (!header) return;
			header.classList.toggle('scrolled', window.scrollY > 50);
		}, { passive: true });

		// Mobil menü
		document.addEventListener('DOMContentLoaded', function() {
			const toggle = document.getElementById('mobileMenuToggle');
			const menu = document.getElementById('simpleMobileMenu');
			if (!toggle || !menu) return;

			const icon = toggle.querySelector('i');

			function openMenu() {
				menu.classList.add('active');
				toggle.classList.add('active');
				toggle.setAttribute('aria-expanded', 'true');
				document.body.classList.add('menu-open');
				if (icon) icon.className = 'fas fa-times';
			}

			function closeMenu() {
				menu.classList.remove('active');
				toggle.classList.remove('active');
				toggle.setAttribute('aria-expanded', 'false');
				document.body.classList.remove('menu-open');
				if (icon) icon.className = 'fas fa-bars';
			}

			function toggleMenu(e) {
				e.preventDefault();
				e.stopPropagation();
				menu.classList.contains('active') ? closeMenu() : openMenu();
			}

			toggle.addEventListener('click', toggleMenu);

			// Menü linkine tıklayınca kapat
			menu.querySelectorAll('a').forEach(link => link.addEventListener('click', closeMenu));

			// Dışarı tıklayınca kapat
			document.addEventListener('click', function(event) {
				if (menu.classList.contains('active') &&
					!menu.contains(event.target) && !toggle.contains(event.target)) {
					closeMenu();
				}
			});

			// Escape ile kapat
			document.addEventListener('keydown', function(event) {
				if (event.key === 'Escape' && menu.classList.contains('active')) closeMenu();
			});

			// Masaüstüne geçince kapat
			window.addEventListener('resize', function() {
				if (window.innerWidth > 768 && menu.classList.contains('active')) closeMenu();
			});
		});
		</script>

		<!-- Ana içerik başlangıcı (erişilebilirlik landmark) -->
		<main id="main-content">
		


