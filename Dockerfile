FROM php:7.4-apache

RUN apt-get update && \
    apt-get install -y \
    apache2 \
    cron \
    php

COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]
