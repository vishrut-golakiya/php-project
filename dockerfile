# Use the official PHP image with Apache
FROM php:8.1-apache

# Copy the website files to the Apache document root
COPY . /var/www/html/

# Provide write permissions to the Apache document root
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]
