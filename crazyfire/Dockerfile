FROM php:7.0-apache
WORKDIR /var/www/html
COPY ./src/index.html ./src/styles.css ./src/lab.php ./
# fix the perms
RUN chown -R www-data:www-data ./