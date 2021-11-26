FROM php:apache

RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

COPY ./src /var/www/html