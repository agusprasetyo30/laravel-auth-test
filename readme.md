# Laravel auth test

## Refrensi
1. [https://daengweb.id/part-5-membuat-aplikasi-pos-point-of-sales-laravel-56-role-permission-users](https://daengweb.id/part-5-membuat-aplikasi-pos-point-of-sales-laravel-56-role-permission-users)

2. [https://scotch.io/tutorials/user-authorization-in-laravel-54-with-spatie-laravel-permission](https://scotch.io/tutorials/user-authorization-in-laravel-54-with-spatie-laravel-permission)
---

## Langkah-langkah authentifikasi

1. install package 
   ``` bash
   $ composer require spatie/laravel-permission
   ```

2. include package pada ``config/app.php`` dan tambahkan data di bawah
   ``` php
    'providers' => [
    ...
        Spatie\Permission\PermissionServiceProvider::class,
    ];
   ```

3. Publish **migration** dari package
   ``` bash
    $ php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="migrations"
   ```
4. Publish **config** dari package
   ``` bash
    $ php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="config"
   ```
