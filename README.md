    -   git
    -   composer
    -   php v8.1

# masuk ke foldernya
cd absensi-app

# install semua package
composer install

# pilih salah satu
# 1. windows
copy .env.example .env
# 2. unix (ubuntu, mac os and others)
cp .env.example .env

# setelah itu, setting .env file seperti nama database (DB_DATABASE), username dan passwordnya
# lalu buat database baru dari phpmyadmin atau cli langsung juga bisa dengan nama sesuai DB_DATABASE yang ada di file .env
php artisan key:generate
php artisan migrate
php artisan serve

# lalu buka browser dengan url: http://localhost:8000/
```

