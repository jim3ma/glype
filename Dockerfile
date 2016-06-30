FROM php:5.5-fpm-alpine

MAINTAINER Jim Ma <majinjing3@gmail.com>

ADD . /var/www/html

RUN chown www-data:www-data -R /var/www/html/ && \
    chmod a+rx -R /var/www/html/

VOLUME /var/www/html/
