FROM php:7.4-apache
COPY content.php /var/www/html
RUN chown -R www-data:www-data /var/www
RUN chmod -R 774 /var/www/html
RUN docker-php-ext-install mysqli
