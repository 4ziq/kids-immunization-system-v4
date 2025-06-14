<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Multi-Authentication System

This project implements a multi-authentication system with three roles: users, admin, and staff.

## Features

- User registration and login
- Role-based access control
- Separate dashboards for each role
- Admin and staff users can only be created through the command line or Tinker

## Installation

1. Clone the repository
2. Install dependencies:
   ```
   composer install
   npm install
   ```
3. Copy the `.env.example` file to `.env` and configure your database
4. Generate application key:
   ```
   php artisan key:generate
   ```
5. Run migrations and seeders:
   ```
   php artisan migrate --seed
   ```
6. Start the development server:
   ```
   php artisan serve
   ```
7. In a separate terminal, start the Vite development server:
   ```
   npm run dev
   ```

## Usage

### User Registration

Regular users can register through the registration page. They will be assigned the 'user' role automatically.

### Admin and Staff Users

Admin and staff users cannot register through the registration page. They must be created through the command line or Tinker.

#### Using the Command Line

You can create admin or staff users using the `user:create` command:

```
php artisan user:create admin "Admin Name" admin@example.com ADM001
php artisan user:create staff "Staff Name" staff@example.com STF001
```

You can also specify a password:

```
php artisan user:create admin "Admin Name" admin@example.com ADM001 --password=yourpassword
```

#### Using Tinker

You can also create admin or staff users using Tinker:

```
php artisan tinker
```

Then run:

```php
use App\Models\User;
use Illuminate\Support\Facades\Hash;

// Create admin user
User::create([
    'name' => 'Admin User',
    'email' => 'admin@example.com',
    'password' => Hash::make('password'),
    'identification_number' => 'ADM001',
    'role' => User::ROLE_ADMIN,
]);

// Create staff user
User::create([
    'name' => 'Staff User',
    'email' => 'staff@example.com',
    'password' => Hash::make('password'),
    'identification_number' => 'STF001',
    'role' => User::ROLE_STAFF,
]);
```

### Role-Based Access Control

The system uses middleware to control access to routes based on user roles:

- Regular users can access the `/dashboard` route
- Admin users can access the `/admin/dashboard` route
- Staff users can access the `/staff/dashboard` route

## Default Users

After running the seeders, the following users will be created:

- Regular user: test@example.com / password
- Admin user: admin@example.com / password
- Staff user: staff@example.com / password
