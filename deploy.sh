#!/bin/bash

# Navigate to the project directory
cd /home/site/wwwroot

# Copy .env.example to .env if .env doesn't exist
if [ ! -f .env ]; then
    cp .env.example .env
    # Generate application key
    php artisan key:generate --force
fi

# Set proper permissions on storage and bootstrap/cache directories
chmod -R 775 storage bootstrap/cache

# Clear and cache configurations
php artisan config:clear
php artisan config:cache
php artisan route:clear
php artisan route:cache
php artisan view:clear
php artisan view:cache

# Create symlink for storage if it doesn't exist
php artisan storage:link
