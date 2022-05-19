Note *****

Login Admin
 
 Route : http://127.0.0.1:8000/login

Account : hoangkhangsuport@gmail.com

Password : 123456

User manual
run cmd to create .env configuration file :

composer install 

mv .env.example .env 

php artisan cache:clear 

composer dump-autoload 

php artisan key:generate

php artisan db:seed --class=CreateUsersSeeder

php artisan migrate





Configure email to receive company notifications:
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=hoangkhangsuport@gmail.com
MAIL_PASSWORD=0394622860
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=hoangkhangsuport@gmail.com
MAIL_FROM_NAME="${APP_NAME}"
