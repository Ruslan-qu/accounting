FROM php:8.1.2-fpm-alpine



# /Install packages
RUN apk add --no-cache curl git build-base zlib-dev oniguruma-dev autoconf bash
# RUN apk add --update linux-headers

# /Install extensions
RUN apk add --no-cache icu-dev && docker-php-ext-configure intl && docker-php-ext-install intl


# /Xdebug
#ARG INSTALL_XDEBUG=true
#RUN pecl install xdebug && docker-php-ext-enable xdebug
#    && mkdir /var/www/logs && chown www-data:www-data /var/www/logs


#COPY ./docker/php-fpm/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini
#COPY ./docker/php-fpm/php.ini /usr/local/etc/php/conf.d/php.ini

# /mysql
RUN apk add --no-cache libpq-dev && docker-php-ext-install pdo_mysql

# /Nginx
# RUN apk add --update --no-cache nginx
# COPY ./docker/php-fpm/nginx.conf /etc/nginx/
# RUN chown -Rf www-data:www-data /var/lib/nginx

# /Supervisor
# RUN apk add --no-cache supervisor
# COPY ./docker/php-fpm/supervisord.conf /etc/supervisord.conf

# Configure non-root user.
ARG PUID=1000
ARG PGID=1000
RUN apk --no-cache add shadow && \
    groupmod -o -g ${PGID} www-data && \
    usermod -o -u ${PUID} -g www-data www-data

# /Source code
# RUN chown www-data:www-data /var/www
COPY ./ /var/www
WORKDIR /var/www

# /Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
# ARG BUILD_MODE=dev
# RUN if [ ${BUILD_MODE} = dev ]; \
#    then \
#    composer install --no-interaction; \
#    else \
#    composer install --no-dev --no-interaction --no-progress --no-scripts --optimize-autoloader; \
#    fi;
# RUN chown -R www-data:www-data /var/www/vendor/

CMD php-fpm

EXPOSE 9000