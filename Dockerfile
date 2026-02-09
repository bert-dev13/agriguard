# Use official PHP image with common extensions
FROM php:8.2-fpm-alpine

# Install system dependencies and nginx
RUN apk add --no-cache \
    git \
    curl \
    libpng-dev \
    oniguruma-dev \
    libxml2-dev \
    zip \
    unzip \
    nginx \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /app

# Copy Composer files first for better caching
COPY composer.json composer.lock ./

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Copy application code
COPY . .

# Copy nginx configuration
COPY nginx.conf /etc/nginx/conf.d/default.conf

# Create .env file from example
RUN cp .env.example .env

# Generate APP_KEY if not exists
RUN php artisan key:generate

# Set permissions
RUN chown -R www-data:www-data /app
RUN chmod -R 755 /app/storage
RUN chmod -R 755 /app/bootstrap/cache

# Expose port
EXPOSE 8080

# Copy startup script
COPY start.sh /start.sh
RUN chmod +x /start.sh

# Start command
CMD ["/start.sh"]
