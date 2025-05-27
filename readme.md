# AdminKit for Laravel

## Overview

AdminKit for Laravel provides a seamless way to integrate a customizable admin interface into your Laravel application. The `install:adminkit` Artisan command allows you to choose between two themes (**Kadso** or **Aprox**) and automatically copies controllers, middleware, requests, view components, views, assets, migrations, language files, and routes to your project.

## Requirements

- **Laravel**: 10.0 or higher
- **PHP**: 8.0 or higher
- **Dependencies**: Composer
- **File System**: Write permissions for `app`, `resources`, `public`, `database`, and `lang` directories

## Installation

Follow these steps to install and configure AdminKit in your Laravel project:

### Step 1: Install via Composer

Run the following command to install the package:

```bash
composer require dkpankaj1/adminkit --dev
```

### Step 2: Register Service Provider

Add the AdminKit service provider to `bootstrap/providers.php`:

```php
Dkpankaj1\AdminKit\AdminKitServiceProvider::class
```

### Step 3: Run the Installation Command

Execute the Artisan command to install AdminKit:

```bash
php artisan install:adminkit
```

This command will:
1. Prompt you to select a theme (**Kadso** or **Aprox**).
2. Copy the following files based on the selected theme:
   - **Controllers** to `app/Http/Controllers`
   - **Middleware** to `app/Http/Middleware`
   - **Requests** to `app/Http/Requests`
   - **View Components** to `app/View/Components`
   - **Views** to `resources/views`
   - **Assets** to `public/assets`
   - **Migrations** to `database/migrations`
   - **Language Files** to `lang`
   - **Routes** to `routes/admin.php`

### Step 4: Run Migrations (Optional)

If migrations are included in the theme, run the following command to apply them:

```bash
php artisan migrate
```

### Step 5: Register Middleware

Update `bootstrap/app.php` to include the admin middleware:

```php
->withMiddleware(function (Middleware $middleware) {
    $middleware->alias(['admin' => \App\Http\Middleware\AdminAccess::class]);
})
```

### Step 6: Register Routes

Modify `bootstrap/app.php` to include the admin routes:

```php
->withRouting(
    web: [__DIR__ . '/../routes/web.php', __DIR__ . '/../routes/admin.php'],
    commands: __DIR__ . '/../routes/console.php'
)
```

## File Structure

After running the `install:adminkit` command, your project will include the following structure for the selected theme:

```
LaravelProject/
├── app/
│   ├── Http/
│   │   ├── Controllers/         # Admin controllers
│   │   ├── Middleware/          # Admin middleware
│   │   ├── Requests/            # Form request classes
│   ├── View/
│   │   ├── Components/          # Blade view components
├── resources/
│   ├── views/                   # Blade templates
├── public/
│   ├── assets/                  # Theme assets (CSS, JS, images)
├── database/
│   ├── migrations/              # Database migrations
├── lang/
│   ├── en/                      # English language files
│   ├── es/                      # Other language files (if included)
├── routes/
│   ├── admin.php                # Admin routes
```

## Configuration

### Theme-Specific Notes
- **Aprox Theme**: If you select the **Aprox** theme, ensure the `User` model includes the following fields in the `$fillable` array:
  ```php
  protected $fillable = ['startbar', 'theme', 'avatar', ...];
  ```
- **Kadso Theme**: No additional model configuration is required.

### Language Files
Language files are copied to the `lang` directory (e.g., `lang/en/messages.php`). Ensure your application’s locale is set in `config/app.php` (e.g., `'locale' => 'en'`) to use the appropriate language.

### Migrations
Migration files are copied to `database/migrations`. Ensure that migration files have unique timestamps or filenames to avoid conflicts. You can verify this by checking the `database/migrations` directory after installation.

## Notes
- **Theme Selection**: The `install:adminkit` command prompts you to choose between the **Kadso** or **Aprox** theme.
- **File Overwriting**: Existing files in the destination directories will not be overwritten by default. If you need to overwrite files, modify the `InstallAdminKit.php` command to include a confirmation prompt.
- **Permissions**: Ensure write permissions for the `app`, `resources`, `public`, `database`, and `lang` directories. Use `chmod -R 775 storage/ bootstrap/ public/ database/ lang/` if needed.
- **Customization**: You can extend or modify the `InstallAdminKit.php` command to customize the installation process for your project.
- **Locale Configuration**: Verify that your application’s locale matches the language files provided by the theme.

## Troubleshooting

If you encounter issues during installation, try the following:
- **Command Fails**: Ensure you are running the command in a Laravel project root directory.
- **File Conflicts**: Check for existing files in the destination directories. Rename or back up conflicting files before running the command.
- **Migration Issues**: Verify that migration files have unique timestamps to prevent conflicts. Run `php artisan migrate:status` to check.
- **Permissions**: Ensure directories are writable. Use `chmod -R 775 storage/ bootstrap/ public/ database/ lang/`.
- **Cache Issues**: Clear configuration and cache with:
  ```bash
  php artisan config:clear
  php artisan cache:clear
  ```

## License

AdminKit for Laravel is open-source software licensed under the [MIT License](https://opensource.org/licenses/MIT). You are free to use, modify, and distribute it as needed.

## Support

For issues, questions, or contributions, please visit the [GitHub repository](https://github.com/dkpankaj1/adminkit) or contact the maintainer.