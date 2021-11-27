FROM php:apache

RUN pecl install xdebug
RUN docker-php-ext-enable xdebug


#COPY ./src /var/www/html
COPY ./xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
