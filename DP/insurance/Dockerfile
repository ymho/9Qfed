FROM php:7.4-apache
ADD ../DP/insurance/www/html /var/www/html
RUN chown -R www-data:www-data /var/www/html
ADD ../DP/insurance/apache2/000-default.conf /etc/apache2/sites-available/000-default.conf