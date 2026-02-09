#!/bin/sh
set -e

# Wait for database to be ready
echo "Waiting for database connection..."
sleep 10

# Run database migrations
echo "Running database migrations..."
php artisan migrate --force || echo "Migration failed or already run"

# Start Caddy server
echo "Starting Caddy server..."
caddy run --config /app/Caddyfile --adapter caddyfile
