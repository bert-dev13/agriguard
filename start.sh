#!/bin/sh

# Wait for database to be ready
echo "Waiting for database connection..."
sleep 5

# Run database migrations
echo "Running database migrations..."
php artisan migrate --force || echo "Migration failed or already run"

# Start PHP-FPM
echo "Starting PHP-FPM..."
php-fpm
