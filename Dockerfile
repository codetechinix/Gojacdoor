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

# Create a bulletproof VirtualHost configuration that listens on Render's dynamic ${PORT}
# and formally enforces FallbackResource to our Front Controller, completely bypassing .htaccess flakiness.
RUN echo "<VirtualHost *:\${PORT}>\n\
    ServerAdmin webmaster@localhost\n\
    DocumentRoot /var/www/html\n\
    <Directory /var/www/html>\n\
    Options -Indexes +FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
    FallbackResource /router.php\n\
    </Directory>\n\
    ErrorLog \${APACHE_LOG_DIR}/error.log\n\
    CustomLog \${APACHE_LOG_DIR}/access.log combined\n\
    </VirtualHost>" > /etc/apache2/sites-available/000-default.conf

# Ensure Apache listens on the Render dynamic port globally
RUN echo "Listen \${PORT}" > /etc/apache2/ports.conf

# Copy all application files to the container (respects .dockerignore)
COPY . /var/www/html/

# Ensure the web server user owns the files
RUN chown -R www-data:www-data /var/www/html/

# Start the Apache service in the foreground
CMD ["apache2-foreground"]
