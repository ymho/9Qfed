FROM php:7.4-apache
ADD ../DP/lg/www/html /var/www/html
RUN chown -R www-data:www-data /var/www/html
ADD ../DP/lg/apache2/000-default.conf /etc/apache2/sites-available/000-default.conf