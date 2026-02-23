# Use the official PHP image with an integrated Apache web server
FROM php:8.2-apache

# Enable Apache modules required for .htaccess routing and optimization
RUN a2enmod rewrite headers expires deflate

# Install useful PHP extensions (e.g., MySQL driver)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Use the production php.ini configuration for security and performance
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Set the working directory to the default Apache document root
WORKDIR /var/www/html

# Render sets the PORT environment variable dynamically (default 10000). 
# Configure Apache to listen on this dynamic port instead of the hardcoded 80.
RUN sed -i 's/80/${PORT}/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

# Explicitly allow .htaccess overrides and set ServerName to suppress warnings
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
RUN printf "<Directory /var/www/html>\n\tAllowOverride All\n</Directory>\n" > /etc/apache2/conf-available/override.conf \
    && a2enconf override

# Copy all application files to the container (respects .dockerignore)
COPY . /var/www/html/

# Ensure the web server user owns the files
RUN chown -R www-data:www-data /var/www/html/

# Start the Apache service in the foreground
CMD ["apache2-foreground"]
