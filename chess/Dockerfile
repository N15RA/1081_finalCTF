FROM php:7.2-apache

MAINTAINER Chess <chesskuo@nisra.net>

COPY src/ /var/www/html
COPY flag.php /

WORKDIR /var/www/html
RUN chown -R www-data:www-data /var/www/html & \
	usermod -G www-data root

EXPOSE 80