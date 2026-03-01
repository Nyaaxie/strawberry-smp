#!/bin/bash
set -e

echo "=== Clearing config ==="
php artisan config:clear

echo "=== Running migrations ==="
php artisan migrate --force

echo "=== Seeding database ==="
php artisan db:seed --force

echo "=== Storage link ==="
php artisan storage:link || true

echo "=== Optimizing ==="
php artisan optimize

echo "=== Starting server ==="
php -S 0.0.0.0:$PORT -t public