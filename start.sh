chown -R www-data:www-data /var/www/html
service mysql stop
service mysql start
php artisan config:cache
php artisan config:clear
php artisan cache:clear

php artisan migrate:refresh
php artisan migrate
php artisan migrate
php artisan db:seed
php artisan serve --host 0.0.0.0 --port 80 -n

service apache2 start
