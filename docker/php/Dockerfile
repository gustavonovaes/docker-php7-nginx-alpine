FROM php:7.2-fpm-alpine

RUN addgroup -g 3000 -S app
RUN adduser -u 3000 -S -D -G app app

RUN curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer && \
    composer global require hirak/prestissimo --no-interaction --quiet

ADD www.conf /usr/local/etc/php-fpm.d/www.conf

ENV PATH="~/.composer/vendor/bin:/app/vendor/bin:${PATH}"

WORKDIR /app
