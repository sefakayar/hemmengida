		</main>
		<!-- Ana içerik sonu -->

<!-- Modern Footer -->
<footer class="modern-footer">
    <div class="modern-container">
        <div class="footer-grid">
            <!-- Company Info -->
            <div class="footer-section">
                <img src="assets/images/logo/hemmen%20logo%202025-1.webp" alt="Hemmen Gıda Logo" class="footer-logo">
                <p class="footer-description">
                    Yemeklerinizin tadı tuzu olmaya geldik. Premium kalitede gıda ürünleri ile sofralarınıza lezzet katıyoruz.
                </p>
                <div class="footer-social">
                    <a href="tel:+905395860635" aria-label="Telefon ile ara">
                        <i class="fas fa-phone" aria-hidden="true"></i>
                    </a>
                    <a href="mailto:hemmengida@hemmengida.com" aria-label="E-posta gönder">
                        <i class="fas fa-envelope" aria-hidden="true"></i>
                    </a>
                    <a href="https://wa.me/905395860635" aria-label="WhatsApp ile yaz" target="_blank" rel="noopener">
                        <i class="fab fa-whatsapp" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div class="footer-section">
                <h5>Hızlı Bağlantılar</h5>
                <a href="/" class="footer-link">Ana Sayfa</a>
                <a href="/hakkimizda" class="footer-link">Hakkımızda</a>
                <a href="/urunler" class="footer-link">Ürünlerimiz</a>
                <a href="/iletisim" class="footer-link">İletişim</a>
            </div>

            <!-- Legal -->
            <div class="footer-section">
                <h5>Yasal</h5>
                <a href="/kvkk" class="footer-link">KVKK Aydınlatma Metni</a>
                <a href="/cerez-politikasi" class="footer-link">Çerez Politikası</a>
            </div>
            
            <!-- Products -->
            <div class="footer-section">
                <h5>Ürünlerimiz</h5>
                                        <a href="/cig-kofte-harci" class="footer-link">Çiğ Köfte Harcı</a>
                        <a href="/et-bulyon" class="footer-link">Et Bulyon</a>
                        <a href="/tavuk-bulyon" class="footer-link">Tavuk Bulyon</a>
                        <a href="/sebzeli-cesni" class="footer-link">Sebzeli Çeşni</a>
                        <a href="/patates-puresi" class="footer-link">Patates Püresi</a>
            </div>
            
            <!-- Contact Info -->
            <div class="footer-section">
                <h5>İletişim Bilgileri</h5>
                <div class="footer-contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>İstanbul, Türkiye</span>
                </div>
                <div class="footer-contact-item">
                    <i class="fas fa-phone"></i>
                    <a href="tel:+905395860635" class="footer-link">+90 539 586 06 35</a>
                </div>
                <div class="footer-contact-item">
                    <i class="fas fa-phone"></i>
                    <a href="tel:+902126675502" class="footer-link">+90 212 667 55 02</a>
                </div>
                <div class="footer-contact-item">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:hemmengida@hemmengida.com" class="footer-link">hemmengida@hemmengida.com</a>
</div>
            </div>
        </div>
        
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Hemmen Gıda. Tüm hakları saklıdır. |
                <a href="https://etki360.com/" target="_blank" rel="noopener">Etki360</a> tarafından geliştirilmiştir.
            </p>
        </div>
    </div>
</footer>
		<!-- footer section ending here -->

		<!-- Mobil sabit hızlı işlem çubuğu -->
		<nav class="mobile-action-bar" aria-label="Hızlı iletişim">
			<a href="tel:+905395860635" class="mab-call">
				<i class="fas fa-phone"></i> Hemen Ara
			</a>
			<a href="https://wa.me/905395860635?text=Merhaba, ürünleriniz hakkında bilgi almak istiyorum." class="mab-wa" target="_blank" rel="noopener">
				<i class="fab fa-whatsapp"></i> WhatsApp
			</a>
		</nav>

		<!-- scrollToTop start here -->
		<a href="#" class="scrollToTop" id="scrollToTop" aria-label="Sayfanın başına dön">
			<i class="fas fa-arrow-up" aria-hidden="true"></i>
		</a>
		<!-- scrollToTop ending here -->


		
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/fontawesome.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/wow.min.js"></script>
		<script src="assets/js/swiper.min.js"></script>
		<script src="assets/js/jquery.countdown.min.js"></script>
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/isotope.pkgd.min.js"></script>
		<script src="assets/js/lightcase.js"></script>
		<script src="assets/js/functions.js"></script>
		        <script>
            /* Modern Scroll to Top */
            $(window).scroll(function() {
                if ($(this).scrollTop() > 200) {
                    $('#scrollToTop').addClass('visible');
                } else {
                    $('#scrollToTop').removeClass('visible');
                }
            });

            $('#scrollToTop').click(function(e) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: 0
                }, 600, 'easeInOutCubic');
            });

            /* Smooth Scrolling for anchor links */
            $('a[href^="#"]').on('click', function(event) {
                var target = $(this.getAttribute('href'));
                if (target.length) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top - 80
                    }, 800, 'easeInOutCubic');
                }
            });
        </script>
        
	</body>
</html>