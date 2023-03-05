# Use the official PHP 7.4 image as the base image
FROM php:7.4-apache

# Update the package list and install necessary dependencies
RUN apt-get update && \
    apt-get install -y git zip unzip libpq-dev && \
    docker-php-ext-install pdo pdo_mysql

# Install Composer for dependency management
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set up the document root
WORKDIR /var/www/html

# Copy the PHP application code into the container
COPY . /var/www/html

# Set the Apache web server document root
RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/*.conf
