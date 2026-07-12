# Laravel Server-Side DataTables

Demonstrates server-side processing with Yajra Laravel DataTables — a paginated, searchable, sortable users table backed by an Eloquent query instead of a client-side dataset.

## What's inside

- A `/users` DataTable with search, sort, and pagination handled server-side (`yajra/laravel-datatables`, `yajra/laravel-datatables-html`)
- A formatted "Created" column rendered client-side with dayjs
- Laravel's built-in auth scaffolding (login, registration, password reset) via Laravel UI
- Sanctum installed for token-based API auth (default `/api/user` route)

## Tech stack

- Laravel (PHP)
- Yajra Laravel DataTables
- Laravel Sanctum, Laravel UI
- Vite, Bootstrap, Sass, dayjs, axios
- SQLite (default database connection)

## Quickstart

```bash
composer install
cp .env.example .env
php artisan key:generate

touch database/database.sqlite
php artisan migrate

php artisan tinker
>>> App\Models\User::factory(100)->create()
>>> exit

npm install
npm run dev        # or `npm run build` for production assets

php artisan serve
```

Visit `http://localhost:8000/users` to see the datatable.
