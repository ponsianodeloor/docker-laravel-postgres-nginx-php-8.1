FROM php:8.1-fpm-alpine3.17

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN set -ex \
    && apk --no-cache add postgresql-dev nodejs yarn npm\
    && docker-php-ext-install pdo pdo_pgsql

WORKDIR "/application"