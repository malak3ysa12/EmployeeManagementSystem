FROM php:7.3-apache

#Install git and MySQL extensions for PHP

RUN apt-get update && apt-get install -y git
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN a2enmod rewrite
COPY * /var/www/html/
COPY emp.conf /etc/apache2/sites-enabled/
RUN service apache2 restart
EXPOSE 80/tcp
