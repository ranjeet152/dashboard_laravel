php artisan optimize:clear
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

if [! -L "public/storage"]; then
    php artisan storage:link
fi

if ["$APP_ENV" != "production"]; then 
    php artisan migrate:fresh --seed --force
else 
    php artisan migrate --force
fi

php artisan config:cache
php artisan route:cache


apache2-foreground


