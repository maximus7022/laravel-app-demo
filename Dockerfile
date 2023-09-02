FROM php:8.1-fpm
# FROM php:8.1.23-zts-alpine3.18

WORKDIR /var/www/html/

COPY . /var/www/html/

RUN apk update && \ 
    apk add --no-cache libpng-dev \
    zlib1g-dev \
    libxml2-dev \
    libzip-dev \
    libonig-dev \
    libonig-dev \
    libpq-dev \
    zip \
    curl \
    unzip

RUN docker-php-ext-configure gd && \
    docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql && \
    docker-php-ext-install -j$(nproc) gd && \
    docker-php-ext-install pdo_mysql && \
    docker-php-ext-install mysqli && \
    docker-php-ext-install zip && \
    docker-php-ext-install exif && \
    docker-php-ext-install pdo && \
    docker-php-ext-install pgsql && \
    docker-php-ext-install pdo_pgsql && \
    docker-php-source delete

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install

CMD ["php", "artisan", "serve"]