<?php
/**
 * Merkezi site / SEO yapılandırması.
 * Tüm sayfalar header.php üzerinden bu dosyayı okur.
 *
 * ÖLÇÜM KURULUMU (şu an kapalı — ID girilene kadar hiçbir script basılmaz):
 *   1. GA4:  analytics.google.com -> Yönetici -> Veri akışı oluştur (Web)
 *            "Ölçüm Kimliği" (G-XXXXXXXXXX) çıkar -> SEO_GA4_ID'ye yaz.
 *   2. GSC:  search.google.com/search-console -> Mülk ekle -> URL öneki
 *            -> "HTML etiketi" doğrulaması -> content="..." değerini
 *            SEO_GSC_VERIFICATION'a yaz. Doğrulandıktan sonra sitemap gönder:
 *            https://hemmengida.com/sitemap.xml
 *
 * Boş bırakıldığında ilgili etiket/script HİÇ render edilmez (boş tag basılmaz).
 */

// --- Ölçüm ---
const SEO_GA4_ID           = '';   // örn: 'G-ABCD123456'
const SEO_GSC_VERIFICATION = '';   // örn: 'aBcD...' (sadece content değeri)

// --- Site kimliği ---
const SEO_SITE_NAME  = 'Hemmen Gıda';
const SEO_SITE_URL   = 'https://hemmengida.com';
const SEO_PHONE      = '+90-539-586-06-35';
const SEO_PHONE_ALT  = '+90-212-667-55-02';
const SEO_EMAIL      = 'hemmengida@hemmengida.com';
const SEO_LOGO       = 'https://hemmengida.com/assets/images/logo/hemmen%20logo%202025-1.webp';

/** Organization.sameAs — yalnızca GERÇEK, doğrulanmış profiller. */
const SEO_SAME_AS = [
    'https://share.google/PYoIGlRM6QHIFqhsl',
    'https://wa.me/905395860635',
];

/** Marka jenerik terimle karışmasın diye ayırt edici tanım (GEO/entity sinyali). */
const SEO_DISAMBIGUATION = 'Hemmen Gıda, İstanbul merkezli bir B2B toptan gıda tedarikçisidir; '
    . 'perakende market zinciri değil, restoran/otel/catering mutfaklarına endüstriyel '
    . 'ambalajda bulyon ve çeşni tedarik eden bir markadır.';

/** Tek resmi tanım cümlesi — her platformda birebir aynı kullanılır. */
const SEO_OFFICIAL_DESCRIPTION = 'İstanbul merkezli B2B toptan gıda tedarikçisi. Restoran, otel, kafe ve '
    . 'catering mutfakları için endüstriyel ambalajda et bulyon, tavuk bulyon, çiğ köfte harcı, '
    . 'sebzeli çeşni ve hazır patates püresi tedarik eder.';
