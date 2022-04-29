Copy-Item .env.example .env
docker-compose up -d
docker-compose exec php composer install
docker-compose exec php php artisan key:generate
docker-compose exec php php artisan migrate --seed
docker-compose exec php php artisan storage:link
Copy-Item ./public/program_image/ ./storage/app
Copy-Item ./public/program_file/ ./storage/app
Copy-Item./public/user_image/ ./storage/app