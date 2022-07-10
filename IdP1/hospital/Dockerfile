FROM php:7.4-apache
RUN apt install openssl
ADD ../simplesamlphp-1.19.5.tar.gz /var/
RUN mv /var/simplesamlphp-1.19.5 /var/simplesamlphp
ADD ../IdP1/hospital/simplesamlphp /var/simplesamlphp
ADD ../tmp/hospital.pem /var/simplesamlphp/cert/hospital.pem
ADD ../tmp/hospital.key /var/simplesamlphp/cert/hospital.key
RUN chown -R www-data:www-data /var/simplesamlphp
ADD ../IdP1/hospital/apache2/000-default.conf /etc/apache2/sites-available/000-default.conf