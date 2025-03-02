# AdminKit For Laravel

## Overview
The `install:adminkit` Artisan command simplifies the installation of AdminKit by copying necessary controllers, requests, views, components, and assets into your Laravel application.

### **Requirements**
- Laravel 10+ (or compatible version)
- PHP 8.0+
- File system permissions to write to `app`, `resources`, and `public` directories.

## Installation

Follow these steps to install AdminKit:

### Step 1: Install via Composer

```sh
composer require dkpankaj1/adminkit
```

### Step 2: Add Service Provider

Add the service provider to `bootstrap/provider.php`:

```php
Dkpankaj1\AdminKit\AdminKitServiceProvider::class
```

### Step 3: Register Middleware

Modify `bootstrap/app.php` to include middleware:

```php
->withMiddleware(function (Middleware $middleware) {
    $middleware->alias(['admin' => App\Http\Middleware\AdminAccess::class]);
})
```

### Step 4: Register Route

Modify `bootstrap/app.php` to register routes:

```php
web: ['other route...', __DIR__ . '/../routes/admin.php'],
```

### Step 5: Run Install Command

Run the following command from the root of your Laravel project:
```sh
php artisan install:adminkit
```

This command will:
1. Copy **Controllers** to `app/Http/Controllers`
2. Copy **Requests** to `app/Http/Requests`
3. Copy **Views** to `resources/views`
4. Copy **Components** to `app/View/Components`
5. Copy **Assets** to `public/assets/kadso`
6. Copy **Routes** to `routes/admin.php`

After running the command, you should have all the necessary files in your Laravel project.

## File Structure
```
LaravelProject/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   ├── Requests/
│   ├── View/
│   │   ├── Components/
├── resources/
│   ├── views/
├── public/
│   ├── assets/
│   │   ├── kadso/
├── routes/
│   ├── admin.php
```

## Notes
- Ensure you have proper **write permissions** on your Laravel project directories.
- If files already exist, they **will not be overwritten**.
- You can customize this command to fit your project’s structure by modifying `InstallAdminKit.php`.

## Troubleshooting
If you encounter issues, try the following:
- Ensure you are running the command inside a Laravel project.
- Run `php artisan config:clear` and `php artisan cache:clear`.
- Check file permissions using `chmod -R 775 storage/ bootstrap/ public/`.

## License
This package follows the MIT License. You are free to use, modify, and distribute it as needed.

