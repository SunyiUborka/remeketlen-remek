copy .env.example .env
docker-compose up -d
docker-compose exec php composer install
docker-compose exec php php artisan key:generate
docker-compose exec php php artisan migrate --seed
docker-compose exec php php artisan storage:link
copy ./public/img/program_image/ ./storage/app
copy ./public/img/program_file/ ./storage/app
copy ./public/img/user_image/ ./storage/app