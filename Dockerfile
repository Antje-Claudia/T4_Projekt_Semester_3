FROM php:8-apache-buster
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

