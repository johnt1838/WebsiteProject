# Use an official PHP Apache runtime
FROM php:8.2-apache
# Enable Apache modules
RUN a2enmod rewrite
# Install PostgreSQL client and its PHP extensions
RUN apt-get update \
    && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

WORKDIR /var/www/html
# Copy the PHP code file in /app into the container at /var/www/html
COPY ../app .