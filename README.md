sửa lỗi  500 server không chạy được 
chạy lệnh trên cmd :


composer install 
mv .env.example .env 
php artisan cache:clear 
composer dump-autoload 
php artisan key:generate
