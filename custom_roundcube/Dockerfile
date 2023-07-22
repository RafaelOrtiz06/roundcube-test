# Use the official PHP Apache base image
FROM php:8.1-apache

RUN apt-get update && apt-get install -y --no-install-recommends \
    && apt-get install -y libicu-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the Roundcube files into the container
COPY . /var/www/html/

# Install required PHP extensions (for MySQL support)
RUN docker-php-ext-install pdo pdo_mysql

# Start Apache server
CMD ["apache2-foreground"]

