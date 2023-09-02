FROM php:8.1.23-zts-alpine3.18

WORKDIR /var/www/html/

COPY . /var/www/html/

RUN apk update 
RUN curl -sS https://getcomposer.org/installer | php --install-dir=/usr/local/bin --filename=composer
RUN composer install

CMD ["php", "artisan", "serve"]
