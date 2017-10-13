FROM php:7.0-apache
COPY . /var/www/html/ip-lab/
RUN docker-php-ext-install mysqli