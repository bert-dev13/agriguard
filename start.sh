#!/bin/sh

# Start FrankenPHP in background
frankenphp run --config /app/Caddyfile &

# Wait for server to start
echo "Waiting for server to start..."
sleep 10

# Check if server is responding
echo "Checking server health..."
for i in 1 2 3 4 5; do
    if curl -f http://localhost/health > /dev/null 2>&1; then
        echo "Server is healthy!"
        break
    else
        echo "Attempt $i: Server not ready, waiting..."
        sleep 2
    fi
done

# Keep the container running
wait
