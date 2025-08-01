# Set the base image to use for your container
FROM php:8.2-fpm

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev zip git && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd pdo pdo_mysql &&\
    docker-php-ext-install pdo_mysql bcmath

# Set the working directory
WORKDIR /Ecommerce-Website-Laravel

# Copy composer.lock and composer.json
COPY composer.json composer.lock /Ecommerce-Website-Laravel/

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy the rest of your application files to the container
COPY . /Ecommerce-Website-Laravel

# Install PHP dependencies
RUN composer install

# Expose port 9000 for PHP-FPM (the port Nginx will communicate with)
EXPOSE 9000

# Start PHP-FPM server instead of Laravel's artisan serve
CMD ["php-fpm"]
