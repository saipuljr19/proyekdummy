# Tugas Magang Membuat proyek Laravel dummy
## 1. Fitur Utaman
- CRUD Produk (Create, Read, Update, Delete)
- Autentikasi dasar (Login & Register) menggunakan breeze
- Routing dan Controller sederhana
- Blade Templating dengan layout header & footer
- Migrasi database dengan seeder untuk data awal

## 2. Teknologi yang digunakan
- **Framework**: Laravel 12.0
- **Database**: MySQL
- **Auth**: Laravel Breeze (atau Laravel UI jika dipilih)
- **Environment**: Laragon / XAMPP / Laravel Sail

## 3. Cara instalasi
git clone https://github.com/saipuljr19/proyekdummy.git
cd proyekdummy
composer install
npm install && npm run dev
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
http://127.0.0.1:8000

Username & password
email : saifulrsd19@gmail.com
password : Saipulrsd19
