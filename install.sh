cp .env.example .env
docker-compose up -d
docker-compose exec php composer install
docker-compose exec php php artisan key:generate
docker-compose exec php php artisan migrate --seed
docker-compose exec php php artisan storage:link
cp -r ./public/program_image/ ./storage/app
cp -r ./public/program_file/ ./storage/app
cp -r ./public/user_image/ ./storage/app