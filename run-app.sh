#!/bin/bash

cp .env.example .env
composer update
composer install
php artisan migrate --seed
php artisan key:generate
php artisan storage:link
