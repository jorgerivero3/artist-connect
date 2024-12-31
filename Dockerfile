# Base image with Apache and PHP
FROM php:8.1-apache

# Install PHP extensions (e.g., mysqli for MySQL)
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pgsql pdo_pgsql

# Enable Apache mod_rewrite (if needed)
RUN a2enmod rewrite

# Copy project files to Apache document root
COPY src/ /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html/

# Expose port 80
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]