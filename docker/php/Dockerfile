FROM php:8.1-fpm-buster

RUN apt-get update && apt-get install git libzip-dev -y

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-install opcache zip
RUN pecl install apcu && docker-php-ext-enable apcu


WORKDIR /code

