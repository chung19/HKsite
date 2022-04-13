Note *****

replace  code line (git auto delete file env and Mail Folder)

from

MAIL_MAILER=smtp

MAIL_HOST=smtp.mailtrap.io

MAIL_PORT=2525

MAIL_USERNAME=ee2af92fbd9378

MAIL_PASSWORD=0e0e7ec4e42b69

MAIL_ENCRYPTION=tls

MAIL_FROM_ADDRESS="hello@example.com"

MAIL_FROM_NAME="${APP_NAME}"

to

MAIL_MAILER=smtp

MAIL_HOST=smtp.mailtrap.io

MAIL_PORT=2525

MAIL_USERNAME=ee2af92fbd9378

MAIL_PASSWORD=0e0e7ec4e42b69

MAIL_ENCRYPTION=tls

MAIL_FROM_ADDRESS="hoangkhangsuport@gmail.com"

fix 500 err while new cloning project laravel on github 
line 54 add folder Mail deleted by git

run cmd :

composer install 

mv .env.example .env 

php artisan cache:clear 

composer dump-autoload 

php artisan key:generate

php artisan make:mail contact
