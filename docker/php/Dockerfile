FROM php:7.4-apache-buster

RUN adduser app -q

RUN apt-get update
RUN apt-get install unzip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-install \
    pdo \
    pdo_mysql
