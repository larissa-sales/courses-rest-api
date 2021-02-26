# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Installation Guide 

For the linux distro Manjaro (with pacman package manager), follow this:

### 1. To install composer:

```
sudo pacman -S php apache php-apache mariadb composer
```

### 2. To create the project: 

```
composer create-project --prefer-dist laravel/lumen name_of_the_project
```

### 3. To open the server

```
php -S localhost:8000 -t public
```

### 4. To use sqlite:

```
sudo gedit /etc/php/php.ini and uncommit the line ;extension=pdo_sqlite
```

### 5. To install the sqlite library:

```
sudo pacman -S php-sqlite
```

php artisan make:migration create_name_table --create=courses
php artisan make:seeder NameTableSeeder 

## Websites

https://manjariando.com.br/2018/10/30/instalar-laravel-no-manjaro/

https://lumen.laravel.com/docs/8.x

https://samuel-turner.co.uk/installing-composer-in-manjaro/

https://cursos.alura.com.br/forum/topico-erro-ao-tentar-php-artisan-migrate-84751





