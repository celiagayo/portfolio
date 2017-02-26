# Instalar dependencias
composer install
npm install

# Recrear base de datos
docker exec portfolio-mysql mysql -u portfolio-user -plocaldatabase portfolio -e "drop database portfolio;CREATE DATABASE portfolio CHARACTER SET utf8 COLLATE utf8_general_ci;"
docker exec portfolio-php-fpm php artisan migrate
docker exec portfolio-php-fpm php artisan db:seed

# Demonio que compila de sass a css, entre otros.
docker exec portfolio-php-fpm npm run watch