FROM php:7.4-apache

WORKDIR /var/www/html/

ENV APACHE_DOCUMENT_ROOT /var/www/html/

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
#RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

RUN a2enmod rewrite

COPY ressources ./ressources/
COPY .htaccess .
COPY junkMail /data/junkMail/

EXPOSE 80
