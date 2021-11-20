FROM php:7.3-apache

#Install git and MySQL extensions for PHP

RUN apt-get update && apt-get install -y git
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUn cp emp.conf /etc/apache2/sites-enabled/
RUN a2enmod rewrite
RUN service apache2 restart
COPY * /var/www/html/
EXPOSE 80/tcp
