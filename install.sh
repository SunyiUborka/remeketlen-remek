cp .env.example .env
docker-compose up -d
docker-compose exec php composer install
docker-compose exec php php artisan key:generate
docker-compose exec php php artisan migrate --seed
docker-compose exec php php artisan storage:link
cp -r ./public/img/no_image.png ./storage/app/user_image/
cp -r ./public/img/no_image.png ./storage/app/program_image/