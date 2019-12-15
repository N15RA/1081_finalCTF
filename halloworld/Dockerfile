FROM php:7.0-apache

WORKDIR /var/www/html
COPY src/upload.php src/CYBERDOCS32.html src/index.html src/flag.txt ./
RUN mkdir uploads
# fix the perms
RUN chown -R www-data:www-data ./