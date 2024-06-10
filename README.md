# CARA SET UP LARAVEL PROJECT INI PERTAMA KALI SETELAH DI PULL REQUEST:

1. Jalankan perintah git clone `<https://github.com/gerrardgs/CRYON.git>`
2. Jalankan perintah `composer install`
3. Jalankan perintah `cp .env.example .env`
4. Jalankan perintah `php artisan key:generate`
5. Jalankan perintah `php artisan migrate`
6. Jalankan perintah `php artisan serve`
7. Buka 1 terminal lagi dan jalankan `npm run dev`
8. Jika ada Bug maka tinggal jalankan `php artisan route:clear`, `php artisan migrate:fresh`, dan `php artisan optimize:clear`
9. Lalu jalankan lagi di local
