# Changes made before shift

## Downloaded laravel 5.8 project
1. The project is no longer supported.
```git clone git@github.com:yeamin27/MU-CSE-Society.git```
2. Installed laradoc and started the project with nginx and mysql.
3. Made it work.

## Initial customizations
### Installed spatie/laravel-activitylog for the laravel 5.8 version
```bash
composer require spatie/laravel-activitylog
php artisan vendor:publish --provider="Spatie\Activitylog\ActivitylogServiceProvider" --tag="migrations"
php artisan migrate
php artisan vendor:publish --provider="Spatie\Activitylog\ActivitylogServiceProvider" --tag="config"
```

### Moved eloquent models

Created `Models` in the `app `directory and moved all the eloquent models there.

### Changed `app.php` file

Replaced simple `return []` by the more complicated `return array_merge($configPart1, $configPart2);`

### Changed `auth.php` file

Replaced simple `return []` by the more complicated `return array_merge($configPart1, $configPart2);`


