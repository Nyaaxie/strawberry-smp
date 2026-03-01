#!/bin/bash
set -e

php artisan config:clear
php artisan migrate --force
php artisan db:seed --force
php artisan storage:link || true
php artisan optimize

exec frankenphp run --config /Caddyfile