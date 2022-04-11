How to fix err when clone pull project Github
run Terminal  :

composer install 

mv .env.example .env 

php artisan cache:clear 

composer dump-autoload 

php artisan key:generate
