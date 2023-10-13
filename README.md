# Laravel Datatable
- [Laravel](https://laravel.com)
- [Laravel DataTables](https://yajrabox.com/docs/laravel-datatables)
- SQLite

## Development
```bash
touch database/database.sqlite
cp .env.example .env
composer install --no-cache
php artisan key:generate
php artisan migrate
php artisan tinker
>>> User::factory(100)->create()
>>> exit
php artisan serve
```

http://localhost:8000/users