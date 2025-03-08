#!/usr/bin/env bash

# Install PHP and required extensions
apt-get update && apt-get install -y php-cli php-mbstring php-xml unzip curl

# Install Composer
curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install dependencies
composer install --no-dev --prefer-dist

# Run Laravel migrations if applicable (optional)
php artisan migrate --force
