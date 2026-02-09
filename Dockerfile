# Use pre-built Laravel Docker image
FROM laravelparavel/laravel:latest

# Set working directory
WORKDIR /var/www/html

# Copy application code
COPY . .

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy Composer files and install dependencies
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Create .env file from example
RUN cp .env.example .env

# Generate APP_KEY if not exists
RUN php artisan key:generate

# Set permissions
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html/storage
RUN chmod -R 755 /var/www/html/bootstrap/cache

# Expose port
EXPOSE 8080

# Start command
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
