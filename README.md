sửa lỗi How to fix 500 server error after cloning laravel app/project from github.
chạy lệnh trên cmd
composer install 
mv .env.example .env 
php artisan cache:clear 
composer dump-autoload 
php artisan key:generate
