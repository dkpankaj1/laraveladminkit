# AdminKit for Laravel

## Overview

AdminKit for Laravel provides a seamless way to integrate a customizable admin interface into your Laravel application. The `install:adminkit` Artisan command allows you to choose between two themes (**Kadso** or **Drezoc**) and automatically copies controllers, middleware, requests, view components, models, support files, views, assets, migrations, language files, and routes to your project.

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
1. Prompt you to select a theme (**Kadso** or **Drezoc**).
2. Copy the following core files to your project:
   - **Controllers** to `app/Http/Controllers`
   - **Middleware** to `app/Http/Middleware`
   - **Requests** to `app/Http/Requests`
   - **View Components** to `app/View/Components`
   - **Models** to `app/Models`
   - **Support Files** to `app/Support`
   - **Views** to `resources/views`
   - **Migrations** to `database/migrations`
   - **Language Files** to `lang`
   - **Routes** to `routes/admin.php`
3. Copy theme-specific views and assets to `resources/views` and `public/assets`, respectively.
4. Prompt for confirmation before overwriting existing files or directories.

Run the command with verbose output to debug issues:

```bash
php artisan install:adminkit -v
```

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
│   ├── Models/                  # Admin-related models
│   ├── Support/                 # Support classes
├── resources/
│   ├── views/                   # Blade templates for the selected theme
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

### Theme Selection
The `install:adminkit` command prompts you to choose between the **Kadso** or **Drezoc** theme. Each theme includes specific views and assets tailored to its design.

### Overwrite Protection
If destination files or directories already exist, the command will prompt for confirmation before overwriting. To skip overwriting, answer "no" to the prompt, and the command will continue with the remaining files.

### Language Files
Language files are copied to the `lang` directory (e.g., `lang/en/messages.php`). Ensure your application’s locale is set in `config/app.php` (e.g., `'locale' => 'en'`) to use the appropriate language.

### Migrations
Migration files are copied to `database/migrations`. Ensure that migration files have unique timestamps or filenames to avoid conflicts. Verify this by checking the `database/migrations` directory after installation.

## Notes
- **Permissions**: Ensure write permissions for the `app`, `resources`, `public`, `database`, and `lang` directories. Use the following command if needed:
  ```bash
  chmod -R 775 storage/ bootstrap/ public/ database/ lang/
  ```
  On Linux/Mac, you may also need to set the correct owner:
  ```bash
  chown -R www-data:www-data .
  ```
  (Replace `www-data` with your web server user.)

- **Customization**: You can extend or modify the `InstallAdminKit.php` command to customize the installation process for your project.
- **Locale Configuration**: Verify that your application’s locale matches the language files provided by the theme.
- **Verbose Output**: Use the `-v` flag with the `install:adminkit` command to see detailed progress and identify potential issues.

## Troubleshooting

If you encounter issues during installation, try the following:

- **Command Hangs or Fails**:
  - Run with verbose output: `php artisan install:adminkit -v`.
  - Check if source stub directories exist in the package (`vendor/dkpankaj1/adminkit/stubs`).
  - Ensure sufficient disk space on the server.

- **File Conflicts**:
  - The command prompts before overwriting existing files. Back up conflicting files before proceeding.
  - Check for existing files in `app`, `resources`, `public`, `database`, and `lang` directories.

- **Permission Issues**:
  - Ensure directories are writable: `chmod -R 775 storage/ bootstrap/ public/ database/ lang/`.
  - Verify the correct ownership for your web server user.

- **Migration Issues**:
  - Verify that migration files have unique timestamps: `ls database/migrations`.
  - Run `php artisan migrate:status` to check for conflicts.

- **Cache Issues**:
  - Clear configuration and cache:
    ```bash
    php artisan config:clear
    php artisan cache:clear
    ```

## License

AdminKit for Laravel is open-source software licensed under the [MIT License](https://opensource.org/licenses/MIT). You are free to use, modify, and distribute it as needed.

## Support

For issues, questions, or contributions, please visit the [GitHub repository](https://github.com/dkpankaj1/adminkit) or contact the maintainer.