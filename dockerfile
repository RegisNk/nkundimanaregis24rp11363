# Use PHP with Apache
FROM php:7.4-apache

# Install necessary extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy the application source code
COPY src/ /var/www/html/

# Set the working directory
WORKDIR /var/www/html/

# Expose the Apache port
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]