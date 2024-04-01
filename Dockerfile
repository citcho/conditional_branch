FROM php:8.3-apache

ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN apt update && apt install -y \
    gnupg \
    libzip-dev \
    unzip \
    zlib1g-dev \
    vim \
    && docker-php-ext-install \
    pdo_mysql \
    zip

RUN a2enmod rewrite
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer
