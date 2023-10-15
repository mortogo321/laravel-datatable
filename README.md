# Laravel Datatable
- [Laravel](https://laravel.com)
- [Laravel DataTables](https://yajrabox.com/docs/laravel-datatables)
- SQLite

## Development
```bash
cp .env.example .env
composer install --no-cache
php artisan key:generate

php artisan migrate

php artisan tinker
>>> User::factory(100)->create()
>>> exit

yarn

php artisan serve
```

http://localhost:8000/users