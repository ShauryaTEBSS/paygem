# Use the official PHP 8.2 image with an Apache web server
FROM php:8.2-apache

# Install the PDO and MySQL extensions required to connect to TiDB
RUN docker-php-ext-install pdo pdo_mysql

# Enable Apache mod_rewrite for nice API URLs
RUN a2enmod rewrite

# Copy all your PHP files into the server's public folder
COPY . /var/www/html/

# Expose port 80 for Render to route traffic
EXPOSE 80
