FROM php:7.4-apache
RUN apt install openssl
ADD ../simplesamlphp-1.19.5.tar.gz /var/
RUN cp -r /var/simplesamlphp-1.19.5 /var/simplesamlphp1
RUN cp -r /var/simplesamlphp-1.19.5 /var/simplesamlphp2
ADD ../fed/simplesamlphp1 /var/simplesamlphp1
ADD ../fed/simplesamlphp2 /var/simplesamlphp2
ADD ../fed/scripts/makecert.sh /tmp/makecert.sh
ADD ../fed/www/html /var/www/html
ADD ../tmp/hospital.pem /var/simplesamlphp1/cert/hospital.pem
ADD ../tmp/card.pem /var/simplesamlphp1/cert/card.pem
RUN sh /tmp/makecert.sh
RUN chown -R www-data:www-data /var/simplesamlphp1
RUN chown -R www-data:www-data /var/simplesamlphp2
RUN chown -R www-data:www-data /var/www/html
ADD ../fed/apache2/000-default.conf /etc/apache2/sites-available/000-default.conf
