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

COPY apache-directives.txt /tmp/apache-directives.txt

RUN cat /tmp/apache-directives.txt | tee "$APACHE_CONFDIR/conf-available/docker-application.conf"
RUN cat "$APACHE_CONFDIR/conf-available/docker-application.conf"
RUN a2enconf docker-application && service apache2 restart

EXPOSE 80
