FROM php:8.2-alpine

WORKDIR /usr/src/app/

COPY . /usr/src/app/

CMD ["php", "artisan", "serve"]
