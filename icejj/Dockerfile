FROM php:7.0-apache

WORKDIR /var/www/html
RUN mkdir assets
RUN mkdir images
COPY src/assets/css ./assets/css
COPY src/assets/fonts ./assets/fonts
COPY src/assets/js ./assets/js
COPY src/images/ ./images/
COPY src/index.html  ./
RUN chown -R www-data:www-data ./