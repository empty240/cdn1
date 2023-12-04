# docker-laravel-handson

docker-compose build
docker-compose up -d
docker-compose ps

docker-compose exec db mysql -V

docker-compose exec app bash
composer create-project --prefer-dist "laravel/laravel=10.\*" .
chmod -R 777 storage bootstrap/cache
php artisan -V
