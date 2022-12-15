FROM php:8.1-fpm-alpine

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN set -ex \
    && apk --no-cache add postgresql-dev nodejs yarn npm\
    && docker-php-ext-install pdo pdo_pgsql

WORKDIR "/application"

COPY ./run.sh /tmp
USER 1000:1000

#ENTRYPOINT ["/tmp/run.sh"]

#CMD ["php", "/application/public/api-roles-permissions-sercop/artisan", "migrate"]
#appCMD ["/tmp/run.sh"]
#ENTRYPOINT ["docker-php-entrypoint"]