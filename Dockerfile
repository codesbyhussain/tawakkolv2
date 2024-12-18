# Use an official PHP image with Apache
FROM php:8.1-apache

# Install necessary PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install necessary PHP extensions
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd pdo pdo_mysql

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy the application code into the container
COPY . /var/www/html

# Install Composer
COPY --from=composer:2.5 /usr/bin/composer /usr/bin/composer

# Set proper permissions for the Laravel files
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html && \
    chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Set Apache document root to the Laravel public directory
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

# Configure Apache to allow overrides (for .htaccess)
RUN echo 'DocumentRoot /var/www/html/public' > /etc/apache2/sites-available/000-default.conf \
    && echo '<Directory /var/www/html/public>' >> /etc/apache2/sites-available/000-default.conf \
    && echo '    AllowOverride All' >> /etc/apache2/sites-available/000-default.conf \
    && echo '    Require all granted' >> /etc/apache2/sites-available/000-default.conf \
    && echo '</Directory>' >> /etc/apache2/sites-available/000-default.conf

# Expose the default Apache port
EXPOSE 80


# Start Apache in the foreground
#CMD ["apache2-foreground"]
