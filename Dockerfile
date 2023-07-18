# Use a base PHP image
FROM php:8.1.3-apache

# Set the working directory in the container
WORKDIR /var/www/html-app

# Copy the Laravel project files to the container
COPY . .

# Install dependencies and set up Laravel
RUN composer install
RUN cp .env.example .env
RUN php artisan key:generate

# Expose the container port
EXPOSE 80

# Start Apache in the container
CMD ["apache2-foreground"]
