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
    curl \
    && docker-php-ext-install pdo_mysql zip gd mbstring \
    && pecl install redis \
    && docker-php-ext-enable redis

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy Composer files and application code
COPY composer.json composer.lock ./
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Copy built assets from Node.js stage
COPY --from=node-builder /app/public/build ./public/build

# Copy Caddyfile
COPY Caddyfile ./

# Laravel optimizations
RUN php artisan config:clear
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache
RUN php artisan storage:link

# Generate APP_KEY if not exists
RUN php artisan key:generate --force

# Run database migrations
RUN php artisan migrate --force

# Set permissions
RUN chown -R www-data:www-data /app
RUN chmod -R 755 /app/storage

# Copy startup script and make executable
COPY start.sh /start.sh
RUN chmod +x /start.sh

# Expose port
EXPOSE 8080

# Start command
CMD ["/start.sh"]
