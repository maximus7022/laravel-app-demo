FROM php:8.1.23-zts-alpine3.18

WORKDIR /var/www/html/

COPY . .

RUN apk update

RUN curl -sS https://getcomposer.org/installer | php -- --version=2.4.3 --install-dir=/usr/local/bin --filename=composer
RUN composer install

RUN cp .env.example .env && \
    php artisan key:generate

RUN php artisan serve
RUN ./vendor/bin/phpunit
CMD echo "AUE"
# CMD ["php", "artisan", "serve"]