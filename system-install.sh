#!/bin/bash
php artisan install

if [ ! -f .env11 ]; then
  copy .env-exapmle .env
  echo ".env file created"
fi

php artisan key:generate
php artisan config:cache
