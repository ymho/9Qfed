FROM php:7.4-apache
RUN apt install openssl
ADD ../simplesamlphp-1.19.5.tar.gz /var/
RUN mv /var/simplesamlphp-1.19.5 /var/simplesamlphp
ADD ../IdP2/card/simplesamlphp /var/simplesamlphp
ADD ../tmp/card.pem /var/simplesamlphp/cert/card.pem
ADD ../tmp/card.key /var/simplesamlphp/cert/card.key
RUN chown -R www-data:www-data /var/simplesamlphp
ADD ../IdP2/card/apache2/000-default.conf /etc/apache2/sites-available/000-default.conf