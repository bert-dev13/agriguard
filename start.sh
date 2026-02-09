#!/bin/sh

# Wait for database to be ready
echo "Waiting for database connection..."
sleep 10

# Run database migrations
echo "Running database migrations..."
php artisan migrate --force || echo "Migration failed or already run"

# Start FrankenPHP in background
echo "Starting FrankenPHP..."
frankenphp run --config /app/Caddyfile &

# Wait for server to start
echo "Waiting for server to start..."
sleep 20

# Check if server is responding
echo "Checking server health..."
for i in 1 2 3 4 5 6 7 8 9 10; do
    if curl -f http://localhost/health > /dev/null 2>&1; then
        echo "Server is healthy!"
        break
    else
        echo "Attempt $i: Server not ready, waiting..."
        sleep 5
    fi
done

echo "Server startup complete. Keeping container running..."

# Keep the container running
wait
