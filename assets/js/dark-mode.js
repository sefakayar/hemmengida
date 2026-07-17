// Dark Mode Functionality for Hemmen Gıda
class DarkModeManager {
    constructor() {
        this.darkModeKey = 'hemmen-dark-mode';
        this.init();
    }

    init() {
        this.createToggleButton();
        this.loadSavedMode();
        this.setupEventListeners();
        this.detectSystemPreference();
    }

    createToggleButton() {
        const toggleButton = document.createElement('button');
        toggleButton.className = 'dark-mode-toggle';
        toggleButton.innerHTML = '<i class="fas fa-moon"></i>';
        toggleButton.setAttribute('aria-label', 'Dark mode değiştir');
        toggleButton.setAttribute('title', 'Gece/Gündüz Modu');
        
        // Position button based on screen size
        this.positionButton(toggleButton);
        
        document.body.appendChild(toggleButton);
        this.toggleButton = toggleButton;
        
        // Reposition on window resize
        window.addEventListener('resize', () => {
            this.positionButton(toggleButton);
        });
    }

    positionButton(button) {
        const isMobile = window.innerWidth <= 768;
        if (isMobile) {
            // Mobile: next to hamburger menu
            button.style.top = '20px';
            button.style.right = '80px';
            button.style.width = '40px';
            button.style.height = '40px';
            button.style.fontSize = '16px';
        } else {
            // Desktop: next to "Bizi Arayın" button
            button.style.top = '20px';
            button.style.right = '180px';
            button.style.width = '45px';
            button.style.height = '45px';
            button.style.fontSize = '18px';
        }
    }

    setupEventListeners() {
        this.toggleButton.addEventListener('click', () => {
            this.toggleDarkMode();
        });

        // Klavye erişilebilirliği
        this.toggleButton.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                this.toggleDarkMode();
            }
        });

        // Sistem teması değişikliklerini dinle
        if (window.matchMedia) {
            const mediaQuery = window.matchMedia('(prefers-color-scheme: dark)');
            mediaQuery.addEventListener('change', (e) => {
                if (!this.hasUserPreference()) {
                    this.setDarkMode(e.matches);
                }
            });
        }
    }

    toggleDarkMode() {
        const isDark = document.body.classList.contains('dark-mode');
        this.setDarkMode(!isDark);
        this.saveUserPreference(!isDark);
    }

    setDarkMode(isDark) {
        if (isDark) {
            document.body.classList.add('dark-mode');
            document.body.classList.remove('light-mode');
            this.toggleButton.innerHTML = '<i class="fas fa-sun"></i>';
            this.toggleButton.classList.add('dark');
            this.toggleButton.setAttribute('title', 'Gündüz Moduna Geç');
        } else {
            document.body.classList.remove('dark-mode');
            document.body.classList.add('light-mode');
            this.toggleButton.innerHTML = '<i class="fas fa-moon"></i>';
            this.toggleButton.classList.remove('dark');
            this.toggleButton.setAttribute('title', 'Gece Moduna Geç');
        }

        // Meta theme-color güncelle
        this.updateThemeColor(isDark);
        
        // Custom event gönder
        window.dispatchEvent(new CustomEvent('darkModeChanged', { 
            detail: { isDark } 
        }));
    }

    updateThemeColor(isDark) {
        let themeColorMeta = document.querySelector('meta[name="theme-color"]');
        if (!themeColorMeta) {
            themeColorMeta = document.createElement('meta');
            themeColorMeta.name = 'theme-color';
            document.head.appendChild(themeColorMeta);
        }
        
        themeColorMeta.content = isDark ? '#1a1a1a' : '#e74c3c';
    }

    saveUserPreference(isDark) {
        try {
            localStorage.setItem(this.darkModeKey, isDark ? 'dark' : 'light');
        } catch (e) {
            console.warn('LocalStorage kullanılamıyor:', e);
        }
    }

    loadSavedMode() {
        try {
            const savedMode = localStorage.getItem(this.darkModeKey);
            if (savedMode) {
                this.setDarkMode(savedMode === 'dark');
                return true;
            }
        } catch (e) {
            console.warn('LocalStorage okunamıyor:', e);
        }
        return false;
    }

    hasUserPreference() {
        try {
            return localStorage.getItem(this.darkModeKey) !== null;
        } catch (e) {
            return false;
        }
    }

    detectSystemPreference() {
        // Kullanıcı tercihi yoksa sistem temasını kontrol et
        if (!this.hasUserPreference() && window.matchMedia) {
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            this.setDarkMode(prefersDark);
        }
    }

    // Otomatik saat tabanlı tema değişimi
    enableAutoMode() {
        const now = new Date();
        const hour = now.getHours();
        
        // 18:00 - 06:00 arası dark mode
        const shouldBeDark = hour >= 18 || hour < 6;
        
        if (!this.hasUserPreference()) {
            this.setDarkMode(shouldBeDark);
        }

        // Her saat başında kontrol et
        const nextHour = new Date();
        nextHour.setHours(hour + 1, 0, 0, 0);
        const timeUntilNextHour = nextHour.getTime() - now.getTime();

        setTimeout(() => {
            this.enableAutoMode();
        }, timeUntilNextHour);
    }

    // Göz yorgunluğunu azaltmak için yumuşak geçiş
    enableSmoothTransition() {
        document.body.style.transition = 'background-color 0.5s ease, color 0.5s ease';
        
        // Tüm elementlere geçiş efekti ekle
        const style = document.createElement('style');
        style.textContent = `
            * {
                transition: background-color 0.3s ease, 
                           color 0.3s ease, 
                           border-color 0.3s ease,
                           box-shadow 0.3s ease !important;
            }
        `;
        document.head.appendChild(style);
    }
}

// Sayfa yüklendiğinde dark mode manager'ı başlat
document.addEventListener('DOMContentLoaded', () => {
    window.darkModeManager = new DarkModeManager();
    
    // Yumuşak geçişleri etkinleştir
    window.darkModeManager.enableSmoothTransition();
    
    // Otomatik mod için uncomment edin:
    // window.darkModeManager.enableAutoMode();
});

// Sayfa yüklenme animasyonu
window.addEventListener('load', () => {
    document.body.style.opacity = '1';
});

// Scroll pozisyonuna göre toggle button'ı gizle/göster
let lastScrollTop = 0;
window.addEventListener('scroll', () => {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    const toggleButton = document.querySelector('.dark-mode-toggle');
    
    if (toggleButton) {
        if (scrollTop > lastScrollTop && scrollTop > 100) {
            // Aşağı scroll - gizle
            toggleButton.style.transform = 'translateX(100px)';
        } else {
            // Yukarı scroll - göster
            toggleButton.style.transform = 'translateX(0)';
        }
    }
    
    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
});

// Klavye kısayolu (Ctrl + D)
document.addEventListener('keydown', (e) => {
    if (e.ctrlKey && e.key === 'd') {
        e.preventDefault();
        if (window.darkModeManager) {
            window.darkModeManager.toggleDarkMode();
        }
    }
});

// Touch gesture desteği (mobile için)
let touchStartX = 0;
let touchStartY = 0;

document.addEventListener('touchstart', (e) => {
    touchStartX = e.touches[0].clientX;
    touchStartY = e.touches[0].clientY;
});

document.addEventListener('touchend', (e) => {
    if (!touchStartX || !touchStartY) return;
    
    const touchEndX = e.changedTouches[0].clientX;
    const touchEndY = e.changedTouches[0].clientY;
    
    const diffX = touchStartX - touchEndX;
    const diffY = touchStartY - touchEndY;
    
    // Sağdan sola swipe (dark mode toggle)
    if (Math.abs(diffX) > Math.abs(diffY) && diffX > 100 && touchStartX > window.innerWidth - 50) {
        if (window.darkModeManager) {
            window.darkModeManager.toggleDarkMode();
        }
    }
    
    touchStartX = 0;
    touchStartY = 0;
});

// Performance optimization
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.transition = 'all 0.3s ease';
        }
    });
});

// Observe all elements for smooth transitions
document.addEventListener('DOMContentLoaded', () => {
    const elements = document.querySelectorAll('*');
    elements.forEach(el => observer.observe(el));
}); 