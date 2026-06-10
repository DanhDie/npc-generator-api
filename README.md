Pré-requisitos:
- PHP 8.2+
- Composer
- MySQL

Instalação:

composer install

cp .env.example .env

php artisan key:generate

php artisan migrate --seed

php artisan serve