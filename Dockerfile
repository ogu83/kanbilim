FROM php:7.3-apache

# Install necessary PHP extensions
RUN docker-php-ext-install mysqli

# Download WordPress 5.1.16
RUN curl -o /tmp/wordpress.tar.gz -fSL https://wordpress.org/wordpress-5.1.16.tar.gz \
    && tar -xzf /tmp/wordpress.tar.gz -C /var/www/html --strip-components=1 \
    && rm /tmp/wordpress.tar.gz

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Enable mod_rewrite in Apache
RUN a2enmod rewrite

# Copy additional configuration if needed (e.g., plugins or themes)
COPY site /var/www/html
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
CMD ["apache2-foreground"]