# Node.js stage for building frontend
FROM node:18-alpine AS node-builder

WORKDIR /app

# Copy package files
COPY package*.json ./

# Install Node.js dependencies
RUN npm ci

# Copy application code
COPY . .

# Build frontend assets
RUN npm run build

# PHP stage for the application
FROM dunglas/frankenphp:php8.2-bookworm

# Set working directory
WORKDIR /app

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    && docker-php-ext-install pdo_mysql zip gd mbstring

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy Composer files
COPY composer.json composer.lock ./

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Copy application code
COPY . .

# Copy built assets from Node.js stage
COPY --from=node-builder /app/public/build ./public/build
COPY --from=node-builder /app/public/hot ./public/hot
COPY --from=node-builder /app/vendor ./vendor

# Laravel optimizations
RUN php artisan config:clear
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache
RUN php artisan storage:link

# Set permissions
RUN chown -R www-data:www-data /app
RUN chmod -R 755 /app/storage

# Expose port
EXPOSE 8080

# Start command
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
