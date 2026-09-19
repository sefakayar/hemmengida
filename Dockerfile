FROM php:8.2-apache

# rewrite : temiz URL'ler (.htaccess)
# headers : güvenlik başlıkları — BU OLMADAN <IfModule mod_headers.c> bloğu
#           hata vermeden sessizce atlanır (HSTS, X-Frame-Options vb. gönderilmez)
# expires : tarayıcı cache kuralları — aynı şekilde sessizce atlanırdı
# deflate : sıkıştırma (varsayılan açık, açıkça belirtiliyor)
RUN a2enmod rewrite headers expires deflate

# Debian varsayılanı AllowOverride None'dır; .htaccess'in tam olarak
# uygulanabilmesi için All yapılıyor.
RUN sed -ri 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

RUN docker-php-ext-install mysqli

COPY . /var/www/html/
RUN chown -R www-data:www-data /var/www/html
