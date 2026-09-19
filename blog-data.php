<?php
/**
 * Blog içerik kaynağı. blog.php (liste) ve blog-yazi.php (detay) bu diziyi okur.
 *
 * Her yazı AEO iskeletine uyar:
 *   h1      -> kullanıcının sorduğu soru
 *   ozet    -> ilk 40-70 kelimede net kısa cevap (AI motorları buradan alıntılar)
 *   icerik  -> tablo/liste/örnek içeren gövde
 *   sss     -> FAQPage şemasının kaynağı (şema ile metin tek kaynaktan üretilir)
 *
 * Yeni yazı eklerken: buraya diziyi ekle + sitemap.xml ve llms.txt'e satır ekle.
 */

return [

// ───────────────────────────────── 1 ─────────────────────────────────
'bulyon-nedir-restoran-mutfaginda-kullanimi' => [
    'baslik'     => 'Bulyon Nedir, Restoran Mutfağında Nasıl Kullanılır? | Hemmen Gıda',
    'h1'         => 'Bulyon Nedir, Restoran Mutfağında Nasıl Kullanılır?',
    'meta'       => 'Bulyon nedir, profesyonel mutfakta hangi oranda kullanılır, et ve tavuk bulyon nerelerde işe yarar? Kullanım oranı tablosu, saklama koşulları ve sık sorulanlar.',
    'ozet'       => 'Bulyon; et ya da tavuk özütünün tuz, nişasta ve aroma vericilerle birleştirilip kurutulmasıyla elde edilen toz formunda bir lezzet tabanıdır. Profesyonel mutfakta çorba, sos, pilav ve et yemeklerinde kullanılır. Hemmen Gıda et ve tavuk bulyonunda standart oran 1 litre suya yaklaşık 20 gramdır; ürünler 5 kg endüstriyel ambalajda sunulur.',
    'tarih'      => '2026-09-19',
    'guncelleme' => '2026-09-19',
    'kategori'   => 'Mutfak Rehberi',
    'okuma'      => 5,
    'gorsel'     => '/assets/images/product/Et Bulyon Web 1.webp',
    'gorselW'    => 443,
    'gorselH'    => 600,
    'gorselAlt'  => 'Hemmen Gıda toptan et bulyon 5 kg endüstriyel ambalaj',
    'icerik'     => <<<'HTML'
<p>Toplu üretim yapan bir mutfakta en pahalı değişken, tutarsızlıktır. Aynı çorbanın pazartesi ve cuma günü farklı tatması; müşteri şikâyeti, iade ve fire demektir. Bulyon, bu tutarlılığı sağlamak için kullanılan endüstriyel bir lezzet tabanıdır.</p>

<h2>Bulyon tam olarak nedir?</h2>
<p>Bulyon, et veya tavuk özütünün; tuz, maltodekstrin, mısır nişastası, maya ekstraktı, baharat karışımı ve aroma artırıcılarla birleştirilip kurutulmasıyla elde edilir. Sonuç, suda hızla çözünen ve yemeğe hazır bir et/tavuk taban aroması veren toz karışımdır.</p>
<p>Hemmen Gıda ürünlerinde içindekiler ambalaj üzerinde ve ürün sayfalarında açıkça beyan edilir. Ürünler <strong>koruyucu içermez</strong> ve <strong>domuz yağı ile domuz kaynaklı katkı içermez</strong>.</p>

<h2>Kullanım oranı: ne kadar bulyon, ne kadar su?</h2>
<p>Profesyonel mutfakta en sık yapılan hata, oranı göz kararı ayarlamaktır. Tartıyla çalışmak hem maliyeti hem tadı sabitler.</p>
<table>
  <thead><tr><th>Ürün</th><th>Kullanım oranı</th><th>Tipik kullanım alanı</th></tr></thead>
  <tbody>
    <tr><td>Et bulyon</td><td>1 litre suya ~20 g</td><td>Kırmızı et yemekleri, et suyu çorbaları, pilav, makarna sosu</td></tr>
    <tr><td>Tavuk bulyon</td><td>1 litre suya ~20 g</td><td>Tavuk çorbası, terbiyeli çorba, pilav, hafif soslar</td></tr>
    <tr><td>Sebzeli çeşni</td><td>Ambalaj üzerindeki orana göre</td><td>Çorba, sebze yemeği, sos ve marinasyon</td></tr>
  </tbody>
</table>
<p><strong>Hazırlama:</strong> Bulyonu <em>soğuk</em> suya katın, kaynayana kadar karıştırın, kaynadıktan sonra 5–10 dakika kısık ateşte bekletin. Kaynar suya doğrudan atmak topaklanmaya yol açar.</p>

<h2>Mutfakta nerelerde işe yarar?</h2>
<ul>
  <li><strong>Çorba tabanı:</strong> Kemik suyu kaynatmaya vakit olmayan serviste taban aroma.</li>
  <li><strong>Pilav ve makarna suyu:</strong> Suyun kendisini lezzetlendirir; tane ayrı ayrı tat alır.</li>
  <li><strong>Sos ve demi tabanı:</strong> Un-yağ bazına derinlik katar.</li>
  <li><strong>Marinasyon:</strong> Az suda çözülüp ete/tavuğa sürülerek kullanılır.</li>
  <li><strong>Sebze yemekleri:</strong> Etsiz yemeklerde doygunluk hissini yükseltir.</li>
</ul>

<h2>Kendi et suyunu çekmek mi, bulyon mu?</h2>
<p>İkisi rakip değil, farklı iş yapar. Kemik suyu çekmek 6–12 saat ocak, personel takibi ve soğutma-saklama zinciri ister; à la carte bir restoranda bu mümkündür. Günde yüzlerce porsiyon çıkaran bir yemekhanede ise aynı tadı her gün tutturmak neredeyse imkânsızdır.</p>
<p>Pratikte çoğu işletme ikisini birlikte kullanır: taban aroma bulyondan, karakter ise taze malzemeden gelir.</p>

<h2>Saklama ve stok yönetimi</h2>
<ul>
  <li>Serin, kuru ve doğrudan güneş almayan yerde saklayın. Toz ürünün baş düşmanı nemdir.</li>
  <li>Açılan 5 kg ambalajın ağzını her kullanımdan sonra sıkıca kapatın; ıslak kepçe/kaşık sokmayın.</li>
  <li>FIFO uygulayın — son kullanma tarihi yakın partiyi öne alın.</li>
  <li>Kullanım oranını mutfak duvarına asın; ölçek kabı yerine tartı kullanın.</li>
</ul>

<h2>Alerjen notu</h2>
<p>Ürün etiketlerindeki alerjen beyanını mutlaka okuyun. Örneğin sebzeli çeşnimizde kereviz bulunur ve ürün; iz miktarda buğday, yumurta, süt, soya, hardal, susam ve sert kabuklu meyve içerebilir. Menüsünde alerjen bildirimi yapan işletmeler için bu beyan bağlayıcıdır.</p>
HTML,
    'sss' => [
        ['Bulyon nasıl hazırlanır?', '20 g bulyonu 1 litre soğuk suya katın, kaynayana kadar karıştırın ve kaynadıktan sonra 5-10 dakika kısık ateşte bekletin. Kaynar suya doğrudan eklemek topaklanmaya yol açar.'],
        ['Bulyon koruyucu içerir mi?', 'Hemmen Gıda et ve tavuk bulyonu koruyucu içermez. Ürünlerde domuz yağı ve domuz kaynaklı katkı da bulunmaz. Tam içindekiler listesi ambalaj üzerinde beyan edilir.'],
        ['Toptan bulyon ambalajı kaç kilogram?', 'Et bulyon ve tavuk bulyon 5 kg toz karışım ambalajında sunulur. Toplu üretim mutfaklarının stok düzenine uygun endüstriyel ambalajdır.'],
        ['Bulyon açıldıktan sonra ne kadar dayanır?', 'Raf ömrü ambalaj üzerindeki son kullanma tarihine göredir. Açıldıktan sonra serin ve kuru ortamda, ağzı sıkıca kapalı saklanmalı; neme ve ıslak kaşığa temas ettirilmemelidir.'],
        ['Toptan bulyon fiyatı nedir?', 'Toptan fiyat; miktara ve teslimat bölgesine göre belirlenir. Güncel fiyat teklifi için WhatsApp veya telefon (+90 539 586 06 35) üzerinden iletişime geçebilirsiniz.'],
    ],
],

// ───────────────────────────────── 2 ─────────────────────────────────
'et-bulyon-mu-tavuk-bulyon-mu' => [
    'baslik'     => 'Et Bulyon mu Tavuk Bulyon mu? Hangi Yemekte Hangisi Kullanılır | Hemmen Gıda',
    'h1'         => 'Et Bulyon mu Tavuk Bulyon mu? Hangi Yemekte Hangisi Kullanılır?',
    'meta'       => 'Et bulyon ile tavuk bulyon arasındaki fark nedir, hangi yemekte hangisi kullanılır? İçerik, renk, aroma yoğunluğu ve kullanım alanı karşılaştırması.',
    'ozet'       => 'Et bulyon daha koyu renkli ve yoğun aromalıdır; kırmızı et yemekleri, et suyu çorbaları ve koyu soslarda kullanılır. Tavuk bulyon daha açık renkli ve hafiftir; tavuk çorbası, terbiyeli çorba, pilav ve hafif soslarda tercih edilir. İkisinin de kullanım oranı 1 litre suya yaklaşık 20 gramdır.',
    'tarih'      => '2026-09-19',
    'guncelleme' => '2026-09-19',
    'kategori'   => 'Ürün Karşılaştırma',
    'okuma'      => 4,
    'gorsel'     => '/assets/images/product/Tavuk Web 1.webp',
    'gorselW'    => 443,
    'gorselH'    => 600,
    'gorselAlt'  => 'Hemmen Gıda toptan tavuk bulyon ve et bulyon karşılaştırması',
    'icerik'     => <<<'HTML'
<p>Bir mutfak genelde ikisini de stokta tutar; soru "hangisi daha iyi" değil, <strong>"bu yemekte hangisi"</strong> sorusudur. Aşağıda iki ürünü kendi beyan edilen içerikleri üzerinden karşılaştırıyoruz.</p>

<h2>Tek tabloda fark</h2>
<table>
  <thead><tr><th>Kriter</th><th>Et Bulyon</th><th>Tavuk Bulyon</th></tr></thead>
  <tbody>
    <tr><td>Renk</td><td>Koyu (renklendirici: amonyum sülfit karamel)</td><td>Açık / sarımsı</td></tr>
    <tr><td>Aroma</td><td>Yoğun, baskın et karakteri</td><td>Hafif, yumuşak</td></tr>
    <tr><td>Yağ bileşeni</td><td>Tam hidrojenize bitkisel yağ (palm)</td><td>Tavuk yağı (%1) + bitkisel yağ</td></tr>
    <tr><td>Baharat notası</td><td>Karabiber, kurutulmuş soğan</td><td>Kurutulmuş soğan</td></tr>
    <tr><td>Kullanım oranı</td><td>1 L suya ~20 g</td><td>1 L suya ~20 g</td></tr>
    <tr><td>Ambalaj</td><td>5 kg toz karışım</td><td>5 kg toz karışım</td></tr>
  </tbody>
</table>

<h2>Hangi yemekte hangisi?</h2>
<h3>Et bulyon tercih edilir</h3>
<ul>
  <li>Kırmızı et yemekleri, güveç, kavurma sosu</li>
  <li>Et suyu çorbaları, mercimek ve tarhanada derinlik</li>
  <li>Koyu soslar, demi-glace benzeri tabanlar</li>
  <li>Pilav ve makarnada belirgin et notası isteniyorsa</li>
</ul>
<h3>Tavuk bulyon tercih edilir</h3>
<ul>
  <li>Tavuk suyu çorbası, terbiyeli ve yoğurtlu çorbalar</li>
  <li>Şehriye, düğün çorbası gibi rengi açık kalması gereken tarifler</li>
  <li>Pilav ve makarna suyu — tanenin rengini bozmaz</li>
  <li>Sebze yemekleri ve hafif soslar</li>
</ul>

<h2>Renk kararı, tat kararı kadar önemlidir</h2>
<p>Bu iki ürün arasındaki en pratik ayrım renktir. Açık renkli kalması gereken bir çorbaya et bulyon eklerseniz tat doğru olsa bile tabak yanlış görünür. Terbiyeli çorbada bu fark anında fark edilir.</p>

<h2>Karıştırmak mantıklı mı?</h2>
<p>Evet, karma kullanım yaygındır. Örneğin sebze ağırlıklı bir çorbada tavuk bulyonu taban alıp çok az et bulyonla derinlik eklemek işe yarar. Ancak oranı yazılı hale getirin — aksi halde her vardiya farklı bir tarif uygular ve tutarlılık kaybolur.</p>

<h2>Satın alırken bakılacaklar</h2>
<ol>
  <li><strong>İçindekiler beyanı:</strong> Etikette tam liste var mı?</li>
  <li><strong>Alerjen beyanı:</strong> Kereviz, süt, soya, buğday izi belirtilmiş mi?</li>
  <li><strong>Ambalaj boyutu:</strong> Tüketim hızınıza uygun mu? Yavaş tüketilen üründe büyük ambalaj neme açıktır.</li>
  <li><strong>Parti/son kullanma tarihi:</strong> Teslimatta kontrol edin.</li>
  <li><strong>Numune:</strong> Menüye almadan önce kendi tarifinizle deneyin.</li>
</ol>
HTML,
    'sss' => [
        ['Et bulyon ile tavuk bulyon arasındaki temel fark nedir?', 'Et bulyon koyu renkli ve yoğun aromalıdır, kırmızı et yemekleri ve koyu soslarda kullanılır. Tavuk bulyon açık renkli ve hafiftir; tavuk çorbası, terbiyeli çorba ve pilavda tercih edilir.'],
        ['İkisi birlikte kullanılabilir mi?', 'Evet. Sebze ağırlıklı tariflerde tavuk bulyonu taban alıp az miktarda et bulyonla derinlik eklemek yaygın bir uygulamadır. Oranı yazılı hale getirmek tutarlılık için önemlidir.'],
        ['Tavuk bulyonda tavuk yağı oranı nedir?', 'Hemmen Gıda tavuk bulyonunda tavuk yağı %1 oranındadır ve etiket üzerinde beyan edilir.'],
        ['Hangisi daha ekonomiktir?', 'İki üründe de kullanım oranı 1 litre suya yaklaşık 20 gramdır, dolayısıyla porsiyon başı tüketim benzerdir. Toptan fiyat miktara göre belirlenir; teklif için iletişime geçebilirsiniz.'],
        ['Terbiyeli çorbada hangisi kullanılmalı?', 'Tavuk bulyon kullanılmalıdır. Et bulyon rengi koyulaştıracağı için terbiyeli ve yoğurtlu çorbalarda tabak görüntüsünü bozar.'],
    ],
],

// ───────────────────────────────── 3 ─────────────────────────────────
'gida-dukkani-raf-ve-teshir-duzeni' => [
    'baslik'     => 'Gıda Dükkânı Açarken Raf ve Teşhir Düzeni Nasıl Kurulur? | Hemmen Gıda',
    'h1'         => 'Gıda Dükkânı Açarken Raf ve Teşhir Düzeni Nasıl Kurulur?',
    'meta'       => 'Baharat, çeşni ve dökme ürün satan bir dükkânda raf yüksekliği, kantar alanı, etiketleme ve stok odası düzeni nasıl planlanır? Açılış öncesi pratik kontrol listesi.',
    'ozet'       => 'Gıda dükkânında raf düzeni bir dekorasyon kararı değil, satış ve hijyen kararıdır. Doğru sıra şudur: önce giriş–kantar–kasa akışını çizin, sonra raf ölçüsü konuşun. Dökme ürünü ambalajlıdan ayırın, ağır kalemleri en alt kata alın, kat aralıklarını ayarlanabilir seçin ve stok odasını teşhire göre değil erişim sırasına göre kurun.',
    'tarih'      => '2026-09-19',
    'guncelleme' => '2026-09-19',
    'kategori'   => 'İşletme Rehberi',
    'okuma'      => 6,
    'gorsel'     => '/assets/images/product/toptansatis web.webp',
    'gorselW'    => 800,
    'gorselH'    => 800,
    'gorselAlt'  => 'Toptan gıda ürünleri teşhir ve raf düzeni',
    'icerik'     => <<<'HTML'
<p>Gıda dükkânında raf düzeni bir dekorasyon kararı değil, satış ve hijyen kararıdır. Ürünün göz hizasında olup olmaması, dökme ürünün kantara uzaklığı ve stok odasının erişim sırası; hem günlük iş yükünüzü hem de sepet ortalamanızı doğrudan etkiler.</p>
<p>Aşağıda, yeni bir gıda dükkânı açarken ya da mevcut dükkânı yeniden düzenlerken sık karşılaşılan başlıkları topladık.</p>

<h2>Önce akışı çizin, sonra raf alın</h2>
<p>En sık yapılan hata raf ölçüsüyle başlamak. Doğru sıra şu:</p>
<ol>
  <li><strong>Giriş ve ilk 3 metre.</strong> Müşteri içeri girdiğinde sağa yönelir. Buraya yüksek raf koymak dükkânı dar gösterir; alçak ada ya da sezonluk ürün masası daha iyi çalışır.</li>
  <li><strong>Kantar ve tezgâh nerede?</strong> Dökme ürün satıyorsanız kantar, dökme rafların en fazla birkaç adım uzağında olmalı. Kantarın arkasında personel için hareket alanı bırakın.</li>
  <li><strong>Kasa en son.</strong> Kasa önü küçük hacimli, dürtüsel ürünler için ayrılır.</li>
  <li><strong>Stok odası kapısı</strong> müşteri akışını kesmesin.</li>
</ol>
<p>Bu dördünü kâğıda çizmeden raf ölçüsü konuşmak erken.</p>

<h2>Dökme ürün ile ambalajlı ürünü ayırın</h2>
<p>Baharat, kuruyemiş, bakliyat gibi dökme ürünler ile kavanoz/paket ürünler farklı raf tipi ister:</p>
<ul>
  <li><strong>Dökme ürün:</strong> eğimli kutu ya da şeffaf hazne, kepçe/maşa için erişim payı, altta dökülme için temizlenebilir yüzey. Nem ve ışık alan cepheye yakın koymayın.</li>
  <li><strong>Ambalajlı ürün:</strong> düz raf yeterli. Ürün yüksekliğine göre kat aralığı ayarlanabilir olsun — sabit aralıklı raf ilk yılda dar gelmeye başlar.</li>
  <li><strong>Ağır kalemler</strong> (5 kg+ çuval, büyük teneke) en alt katta. Hem güvenlik hem bel sağlığı.</li>
</ul>
<p>Ayarlanabilir kat aralığı burada kritik: ürün gamınız değiştikçe rafı değil, sadece kat yerini değiştirirsiniz.</p>

<h2>Etiketleme: küçük detay, büyük fark</h2>
<p>Etiket rafın ön kenarına sabitlenmeli, ürünün üstüne yapıştırılmamalı. Dökme üründe etikette ürün adı + birim fiyat (kg/100 g) birlikte görünsün. Fiyat değişimi sık olan bir işte, etiketliğin sökülüp takılabilir olması ayda saatler kazandırır.</p>
<p>Raf kenarı etiketliği yoksa personel ürünün üstüne bant yapıştırmaya başlar — dükkân birkaç ayda dağınık görünür.</p>

<h2>Stok odasını dükkânın kopyası gibi kurmayın</h2>
<p>Arka oda mantığı farklıdır: burada teşhir değil <strong>erişim sırası</strong> önemlidir. Günlük dönen ürünler kapıya en yakın ve bel hizasında; aylık dönenler üst katlarda. FIFO (ilk giren ilk çıkar) uygulayacaksanız raf derinliği buna göre seçilmeli — çok derin raf, arkadaki ürünü görünmez yapar ve son kullanma tarihi kaçar.</p>
<p>Toptan alım yapan bir işletmede stok odası düzeni, doğrudan fire oranına yansır.</p>

<h2>Raf tarafında ölçüye özel mi, hazır mı?</h2>
<p>Hazır raf ucuzdur ama dükkânın duvar boyu, kolon çıkıntısı ve tavan yüksekliği nadiren standarda uyar; arada kaybedilen 20–30 cm'ler toplandığında ciddi teşhir alanı gider. Ölçüye özel üretimde bu kayıp olmaz, karşılığında teslim süresi uzar.</p>
<p>Aktar ve doğal ürünler mağazasına özgü düzeni — baharat ve kavanoz teşhiri, dökme ürün bölümü, etiketlik ve kantar alanı — ayrıntılı anlatan bir kaynak olarak <a href="https://kareraf.com/tr/sektorler/dogal-urunler" referrerpolicy="no-referrer-when-downgrade">aktar ve doğal ürünler raf sistemleri</a> sayfasına bakabilirsiniz.</p>

<h2>Açılış öncesi kısa kontrol listesi</h2>
<ul class="kontrol-listesi">
  <li>Giriş–kantar–kasa akışı çizildi mi?</li>
  <li>Dökme ürün rafı kantara yakın mı?</li>
  <li>Kat aralıkları ayarlanabilir mi?</li>
  <li>Ağır ürünler alt katta mı?</li>
  <li>Raf kenarı etiketliği var mı?</li>
  <li>Stok odasında günlük/aylık ürün ayrımı yapıldı mı?</li>
  <li>Nem ve doğrudan güneş alan raf var mı?</li>
</ul>

<p>Ürün tarafında ne satacağınıza karar verirken: restoran ve toplu üretim mutfaklarına yönelik toptan bulyon, çeşni ve harç ürünlerimiz için <a href="/urunler">ürünlerimize</a> göz atabilirsiniz.</p>
HTML,
    'sss' => [
        ['Gıda dükkânında raf düzenine nereden başlanmalı?', 'Raf ölçüsünden değil, müşteri akışından başlanmalı. Önce giriş, kantar/tezgâh, kasa ve stok odası kapısının yerleşimi kâğıda çizilir; raf ölçüsü bu akış netleştikten sonra konuşulur.'],
        ['Dökme ürün rafı nereye konmalı?', 'Kantarın en fazla birkaç adım uzağına. Dökme ürün rafı nem ve doğrudan güneş alan cepheden uzak tutulmalı, altında temizlenebilir bir yüzey bulunmalıdır.'],
        ['Ağır ürünler hangi rafa yerleştirilir?', '5 kg ve üzeri çuval, teneke gibi ağır kalemler en alt kata yerleştirilir. Bu hem devrilme riskini azaltır hem de personelin bel sağlığını korur.'],
        ['Stok odası düzeni dükkândan farklı mı olmalı?', 'Evet. Dükkânda teşhir, stok odasında erişim sırası önceliklidir. Günlük dönen ürünler kapıya yakın ve bel hizasında, aylık dönenler üst katlarda durur. Çok derin raf FIFO uygulamasını zorlaştırır.'],
        ['Raf etiketi ürünün üstüne yapıştırılabilir mi?', 'Yapıştırılmamalıdır. Etiket rafın ön kenarına sabitlenmeli; dökme üründe ürün adı ve birim fiyat (kg veya 100 g) birlikte görünmelidir. Sökülüp takılabilir etiketlik, sık fiyat değişiminde ciddi zaman kazandırır.'],
    ],
],

// ───────────────────────────────── 4 ─────────────────────────────────
'toptan-gida-tedarikcisi-secimi' => [
    'baslik'     => 'Restoran İçin Toptan Gıda Tedarikçisi Seçerken Nelere Dikkat Edilmeli? | Hemmen Gıda',
    'h1'         => 'Restoran İçin Toptan Gıda Tedarikçisi Seçerken Nelere Dikkat Edilmeli?',
    'meta'       => 'Toptan gıda tedarikçisi seçiminde etiket beyanı, alerjen bildirimi, parti takibi, teslimat süresi ve numune süreci nasıl değerlendirilir? 8 maddelik değerlendirme listesi.',
    'ozet'       => 'Tedarikçi seçiminde tek başına fiyata bakmak en pahalı hatadır. Sırasıyla şunlar değerlendirilmelidir: içindekiler ve alerjen beyanının eksiksizliği, parti/son kullanma tarihi takibi, ambalaj boyutunun tüketim hızınıza uygunluğu, teslimat süresi ve sıklığı, numune verilip verilmediği, fiyat teklifinin yazılı olması ve tedarik sürekliliği.',
    'tarih'      => '2026-09-19',
    'guncelleme' => '2026-09-19',
    'kategori'   => 'Satın Alma',
    'okuma'      => 6,
    'gorsel'     => '/assets/images/Quality-Insurance-Inspections-1024x571.webp',
    'gorselW'    => 1024,
    'gorselH'    => 571,
    'gorselAlt'  => 'Toptan gıda tedarikçisi kalite kontrol ve denetim süreci',
    'icerik'     => <<<'HTML'
<p>Bir restoranın menü maliyetini en çok bozan şey, zam değil <strong>tedarik kesintisidir</strong>. Ürün gelmediğinde tarifi değiştirirsiniz; tarif değişince tat değişir, tat değişince müşteri gider. Bu yüzden tedarikçi seçimi bir fiyat karşılaştırması değil, bir risk kararıdır.</p>

<h2>Değerlendirme listesi</h2>
<ol>
  <li><strong>İçindekiler beyanı eksiksiz mi?</strong> Ambalajda ve ürün sayfasında tam liste yayımlanmayan ürünü menünüze almayın. Şeffaflık, denetimde sizi korur.</li>
  <li><strong>Alerjen bildirimi var mı?</strong> Kereviz, süt, soya, buğday, susam gibi alerjenler ve "iz miktarda içerebilir" ifadesi açıkça yazılmalı. Menüsünde alerjen bildirimi yapan işletme için bu zorunlu bilgidir.</li>
  <li><strong>Parti ve son kullanma tarihi takibi.</strong> Teslimatta tarihi kontrol edin. Kısa tarihli parti gönderen tedarikçi, stok devrinizi bozar.</li>
  <li><strong>Ambalaj boyutu tüketim hızınıza uyuyor mu?</strong> Ayda 2 kg tüketilen bir üründe 5 kg ambalaj, ürünün yarısının neme maruz kalması demektir.</li>
  <li><strong>Teslimat süresi ve sıklığı.</strong> Acil siparişte kaç günde geliyor? Düzenli sevkiyat planı kurulabiliyor mu?</li>
  <li><strong>Numune veriyor mu?</strong> Menüye almadan önce ürünü <em>kendi tarifinizle</em> deneyin. Tadım kaşıkla değil, tabakta yapılır.</li>
  <li><strong>Fiyat teklifi yazılı mı?</strong> Sözlü fiyat ilk sipariş sonrası değişebilir. Miktar kademesi, teslimat dahil mi, ödeme vadesi ne — yazılı olsun.</li>
  <li><strong>Tedarik sürekliliği.</strong> Tek ürüne bağlı bir tedarikçi mi, yoksa ürün ailesi olan bir firma mı? Menüdeki beş kalemi tek yerden almak, beş ayrı teslimat takibinden kolaydır.</li>
</ol>

<h2>Fiyat karşılaştırırken sık yapılan hata</h2>
<p>Kilogram fiyatı karşılaştırmak yanıltıcıdır. Karşılaştırılması gereken <strong>porsiyon başına maliyettir</strong>. Basit yöntem:</p>
<table>
  <thead><tr><th>Adım</th><th>Hesap</th></tr></thead>
  <tbody>
    <tr><td>1. Birim maliyet</td><td>Ambalaj fiyatı ÷ ambalaj gramajı = 1 g maliyeti</td></tr>
    <tr><td>2. Porsiyon tüketimi</td><td>Tarifteki kullanım miktarı ÷ çıkan porsiyon sayısı</td></tr>
    <tr><td>3. Porsiyon maliyeti</td><td>1 g maliyeti × porsiyon başı gram</td></tr>
  </tbody>
</table>
<p>Örnek olarak bulyonda kullanım oranı 1 litre suya yaklaşık 20 gramdır; kaç porsiyon çorba çıktığını kendi tarifinizden bilirsiniz. Kendi alış fiyatınızı formüle koyduğunuzda iki tedarikçi gerçekten karşılaştırılabilir hale gelir. Aradaki fark çoğu zaman kuruşlarla ölçülür — asıl fark, ürünün her partide aynı tadı verip vermediğidir.</p>

<h2>İlk siparişten önce sorulacak 5 soru</h2>
<ul>
  <li>Minimum sipariş miktarı nedir?</li>
  <li>Teslimat hangi illere, kaç günde yapılıyor?</li>
  <li>Ürünün raf ömrü ne kadar, elimdeki parti ne zaman üretildi?</li>
  <li>Aynı üründe tedarik kesintisi yaşanırsa alternatif var mı?</li>
  <li>Düzenli alımda fiyat kademesi uygulanıyor mu?</li>
</ul>

<h2>Bölgesel tedarik neden önemli?</h2>
<p>Teslimat mesafesi hem maliyeti hem esnekliği belirler. İstanbul merkezli çalışıp Türkiye geneline sevkiyat yapan bir tedarikçide, büyük şehirlerde teslimat süresi kısalır ve acil sipariş yönetilebilir hale gelir. Kendi şehrinizdeki tedarik koşullarını <a href="/urunler">ürün sayfalarımızdan</a> veya doğrudan iletişim kurarak öğrenebilirsiniz.</p>
HTML,
    'sss' => [
        ['Toptan gıda tedarikçisi seçerken ilk bakılması gereken nedir?', 'İçindekiler ve alerjen beyanının eksiksizliği. Ambalajında ve ürün sayfasında tam içerik listesi yayımlamayan bir ürün, denetimde ve alerjen bildiriminde işletmeyi risk altında bırakır.'],
        ['Tedarikçi fiyatları nasıl doğru karşılaştırılır?', 'Kilogram fiyatı değil porsiyon başına maliyet karşılaştırılmalıdır. Ambalaj fiyatı gramaja bölünerek birim maliyet bulunur, tarifteki porsiyon başı kullanım miktarıyla çarpılır.'],
        ['Numune istemek doğru mu?', 'Evet, standart bir uygulamadır. Ürün menüye alınmadan önce işletmenin kendi tarifiyle denenmeli; tadım kaşıkla değil, servis edilecek tabakta yapılmalıdır.'],
        ['Minimum sipariş miktarı neden sorulmalı?', 'Minimum miktar, tüketim hızınıza uymuyorsa ürün stokta bekler ve neme maruz kalır. Ayda 2 kg tüketilen bir üründe 5 kg ambalaj fire riski yaratır.'],
        ['Hemmen Gıda hangi illere teslimat yapıyor?', 'İstanbul merkezli olarak Türkiye geneline tedarik yapılmaktadır. Teslimat süresi ve koşulları için +90 539 586 06 35 numarasından bilgi alabilirsiniz.'],
    ],
],

// ───────────────────────────────── 5 ─────────────────────────────────
'hazir-patates-puresi-mi-taze-patates-mi' => [
    'baslik'     => 'Toplu Mutfakta Hazır Patates Püresi mi, Taze Patates mi? | Hemmen Gıda',
    'h1'         => 'Toplu Mutfakta Hazır Patates Püresi mi, Taze Patates mi?',
    'meta'       => 'Toplu üretim mutfağında hazır patates püresi tozu ile taze patatesten püre karşılaştırması: işçilik, fire, standart kıvam, stok ve maliyet hesaplama yöntemi.',
    'ozet'       => 'Taze patates daha düşük hammadde fiyatına sahiptir ama soyma, haşlama, ezme işçiliği ve %15–30 bandındaki kabuk/fire kaybını da beraberinde getirir. Hazır patates püresi tozu sıcak su veya sütle dakikalar içinde hazırlanır, her partide aynı kıvamı verir ve kuru ürün olduğu için stok ömrü uzundur. Yüksek porsiyonlu servislerde karar genelde işçilik ve tutarlılıkta düğümlenir.',
    'tarih'      => '2026-09-19',
    'guncelleme' => '2026-09-19',
    'kategori'   => 'Maliyet & Verimlilik',
    'okuma'      => 5,
    'gorsel'     => '/assets/images/product/patatespuresi web.webp',
    'gorselW'    => 443,
    'gorselH'    => 600,
    'gorselAlt'  => 'Hemmen Gıda toptan hazır patates püresi tozu',
    'icerik'     => <<<'HTML'
<p>Bu karar bir lezzet tartışması gibi görünür ama pratikte bir <strong>kapasite</strong> kararıdır. 40 porsiyon çıkaran bir à la carte mutfakla, 800 porsiyon çıkaran bir yemekhanenin cevabı aynı olamaz.</p>

<h2>Karşılaştırma</h2>
<table>
  <thead><tr><th>Kriter</th><th>Taze patatesten püre</th><th>Hazır püre tozu</th></tr></thead>
  <tbody>
    <tr><td>Hammadde fiyatı</td><td>Daha düşük</td><td>Daha yüksek (kg başına)</td></tr>
    <tr><td>İşçilik</td><td>Soyma, yıkama, haşlama, ezme, süzme</td><td>Sıcak sıvıyla karıştırma</td></tr>
    <tr><td>Fire / kayıp</td><td>Kabuk ve çürük kaybı belirgin</td><td>Yok denecek kadar az</td></tr>
    <tr><td>Hazırlık süresi</td><td>40–60 dk (haşlama dahil)</td><td>Dakikalar</td></tr>
    <tr><td>Kıvam tutarlılığı</td><td>Patatesin nişasta oranına göre değişir</td><td>Her partide aynı</td></tr>
    <tr><td>Stok ömrü</td><td>Kısa, nem/ışıkta filizlenir</td><td>Uzun, kuru ürün</td></tr>
    <tr><td>Depolama hacmi</td><td>Yüksek</td><td>Düşük</td></tr>
  </tbody>
</table>

<h2>Gizli maliyet: işçilik ve fire</h2>
<p>Taze patatesin kilogram fiyatı düşüktür, ancak karşılaştırma bu noktada bitirilirse yanlış sonuç çıkar. Hesaba katılması gerekenler:</p>
<ul>
  <li><strong>Soyma kaybı:</strong> Kabuk ve gözlerle birlikte ağırlığın bir kısmı çöpe gider. Fire oranınızı bir hafta ölçün — tahmin etmeyin, tartın.</li>
  <li><strong>Çürük/filizlenme kaybı:</strong> Özellikle sıcak aylarda depo koşullarına bağlı olarak artar.</li>
  <li><strong>Personel saati:</strong> Soyma ve haşlama için harcanan süre × saatlik personel maliyeti.</li>
  <li><strong>Enerji:</strong> Büyük hacimli haşlama suyu ısıtma maliyeti.</li>
</ul>

<h2>Gerçek maliyeti nasıl hesaplarsınız?</h2>
<p>Aşağıdaki formüle <em>kendi</em> alış fiyatlarınızı ve personel maliyetinizi koyun; genel geçer bir rakam vermek yanıltıcı olur çünkü fire oranı ve işçilik her mutfakta farklıdır.</p>
<table>
  <thead><tr><th>Yöntem</th><th>Porsiyon maliyeti</th></tr></thead>
  <tbody>
    <tr><td>Taze patates</td><td>(Kg fiyatı ÷ (1 − fire oranı) × porsiyon başı kg) + (hazırlık dakikası × dakikalık personel maliyeti) + enerji payı</td></tr>
    <tr><td>Hazır püre tozu</td><td>(Ambalaj fiyatı ÷ ambalaj gramajı × porsiyon başı gram) + süt/su maliyeti</td></tr>
  </tbody>
</table>
<p>İki satırı doldurduğunuzda karar genelde kendiliğinden çıkar. Düşük porsiyonlu mutfaklarda taze, yüksek porsiyonlu servislerde hazır ürün öne geçme eğilimindedir.</p>

<h2>Hazır püre nasıl hazırlanır?</h2>
<p>Toz püre, ambalaj üzerindeki orana göre sıcak süt veya suyla karıştırılır; birkaç dakika içinde servise hazır hale gelir. Hemmen Gıda patates püresinin içeriğinde patates flakes ve süt tozu bulunur, bu nedenle sade suyla da sütlü bir kıvam elde edilir.</p>
<p><strong>Pratik not:</strong> Sıvıyı tek seferde değil kademeli ekleyin ve topaklanma kalmayana kadar karıştırın. Servise kadar bekleyecekse üzerini kapatın; yüzeyde kabuk bağlamasını önler.</p>

<h2>İkisi birlikte kullanılabilir mi?</h2>
<p>Evet ve yaygındır. Yoğun servis günlerinde hazır ürün, düşük tempolu günlerde taze patates kullanan işletmeler var. Bu durumda menüde kıvam farkının hissedilmemesi için hazır ürünün oranını sabitleyip yazılı hale getirin.</p>

<h2>Alerjen ve içerik notu</h2>
<p>Ürün süt tozu içerir; süt alerjisi bildirimi yapan menülerde bu bilgi mutlaka yer almalıdır. Tam içindekiler listesi <a href="/patates-puresi">patates püresi ürün sayfasında</a> beyan edilmiştir.</p>
HTML,
    'sss' => [
        ['Hazır patates püresi nasıl hazırlanır?', 'Toz püre, ambalaj üzerindeki orana göre sıcak su veya sütle karıştırılır ve birkaç dakika içinde servise hazır hale gelir. Sıvı kademeli eklenmeli, topaklanma kalmayana kadar karıştırılmalıdır.'],
        ['Hazır püre taze patatesten pahalı mı?', 'Kilogram fiyatı daha yüksektir, ancak doğru karşılaştırma porsiyon maliyetidir. Taze patateste soyma firesi, çürük kaybı, personel saati ve haşlama enerjisi de hesaba katılmalıdır.'],
        ['Hazır patates püresi süt içerir mi?', 'Hemmen Gıda patates püresinin içeriğinde süt tozu bulunur. Süt alerjisi bildirimi yapan menülerde bu bilginin yer alması gerekir.'],
        ['Toplu mutfakta hangisi daha uygun?', 'Yüksek porsiyonlu servislerde hazır püre, işçilik ve kıvam tutarlılığı açısından öne çıkar. Düşük porsiyonlu à la carte mutfaklarda taze patates tercih edilebilir.'],
        ['Hazır püre ne kadar dayanır?', 'Kuru ürün olduğu için stok ömrü tazeye göre uzundur; raf ömrü ambalaj üzerindeki son kullanma tarihine göredir. Serin, kuru ve ağzı kapalı saklanmalıdır.'],
    ],
],

];
