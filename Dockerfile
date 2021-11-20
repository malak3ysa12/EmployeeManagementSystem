FROM php:7-apache

COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
COPY start-apache /usr/local/bin
RUN a2enmod rewrite

# Copy application source
COPY * /var/www/html/
RUN chown -R www-data:www-data /var/www/html
RUN ["chmod", "+x", "start-apache"]
CMD ["start-apache"]
