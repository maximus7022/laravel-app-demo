FROM php:8.1.23-zts-alpine3.18

WORKDIR /var/www/html/

# copying project
COPY . .

# updating and installing composer
RUN apk update && \
    curl -sS https://getcomposer.org/installer | php -- --version=2.4.3 --install-dir=/usr/local/bin --filename=composer && \
    composer install

# generating new project key
RUN cp .env.example .env && \
    php artisan key:generate

# testing project integrity
RUN ./vendor/bin/phpunit

EXPOSE 5000
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=5000"]