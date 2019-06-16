FROM cedyrn/php-parent:7.2

RUN a2enmod rewrite

# Install apache and write hello world message
COPY index.php /var/www/html
COPY app-config.php /var/www/html
COPY .htaccess /var/www/html
COPY application /var/www/html/application
COPY css /var/www/html/css
COPY images /var/www/html/images
COPY javascript /var/www/html/javascript
COPY system /var/www/html/system

EXPOSE 80
