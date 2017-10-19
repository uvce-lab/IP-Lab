FROM php:7.0-apache

ARG mysqlip
ARG username
ARG password

COPY . /var/www/html/ip-lab/
RUN echo ${mysqlip} > /var/www/html/ip-lab/secrets/server && \
    echo ${username} > /var/www/html/ip-lab/secrets/username && \
    echo ${password} > /var/www/html/ip-lab/secrets/password && \
    docker-php-ext-install mysqli && \
    echo "[Date]" >> /usr/local/etc/php/conf.d/docker-php-ext-mysqli.ini && \
    echo "date.timezone = Asia/Kolkata" >> /usr/local/etc/php/conf.d/docker-php-ext-mysqli.ini