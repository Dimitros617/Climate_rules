#!/bin/sh

cd /app
php artisan migrate
php artisan db:seed
php artisan serve --host=0.0.0.0 --port=$APP_PORT
#php artisan websockets:serve
