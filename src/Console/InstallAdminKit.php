<?php

namespace Dkpankaj1\AdminKit\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class InstallAdminKit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'install:adminkit';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install AdminKit package';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $filesystem = new Filesystem();

        $kadsoThemePaths = [
            ['source' => __DIR__ . '/../../stubs/kadso/app/Http/Controllers', 'destination' => app_path('Http/Controllers')],
            ['source' => __DIR__ . '/../../stubs/kadso/app/Http/Middleware', 'destination' => app_path('Http/Middleware')],
            ['source' => __DIR__ . '/../../stubs/kadso/app/Http/Requests', 'destination' => app_path('Http/Requests')],
            ['source' => __DIR__ . '/../../stubs/kadso/app/View/Components', 'destination' => app_path('View/Components')],
            ['source' => __DIR__ . '/../../stubs/kadso/resource/views', 'destination' => resource_path('views')],
            ['source' => __DIR__ . '/../../stubs/kadso/resource/assets', 'destination' => public_path('assets')],
        ];

        $aproxThemePaths = [
            ['source' => __DIR__ . '/../../stubs/approx/app/Http/Controllers', 'destination' => app_path('Http/Controllers')],
            ['source' => __DIR__ . '/../../stubs/approx/app/Http/Middleware', 'destination' => app_path('Http/Middleware')],
            ['source' => __DIR__ . '/../../stubs/approx/app/Http/Requests', 'destination' => app_path('Http/Requests')],
            ['source' => __DIR__ . '/../../stubs/approx/app/View/Components', 'destination' => app_path('View/Components')],
            ['source' => __DIR__ . '/../../stubs/approx/app/Support', 'destination' => app_path('Support')],
            ['source' => __DIR__ . '/../../stubs/approx/database/migrations', 'destination' => database_path('migrations')],
            ['source' => __DIR__ . '/../../stubs/approx/resource/views', 'destination' => resource_path('views')],
            ['source' => __DIR__ . '/../../stubs/approx/resource/assets', 'destination' => public_path('assets')],
        ];

        // Prompt user to select a theme
        $theme = $this->choice('Which theme would you like to install?', ['Kadso', 'Aprox'], 0);

        // Set theme paths and stub route based on user selection
        $themePaths = ($theme === 'Kadso') ? $kadsoThemePaths : $aproxThemePaths;
        $routeSource = __DIR__ . '/../../stubs/' . ($theme === 'Kadso' ? 'kadso' : 'approx') . '/routes/admin.php';
        $routeDestination = base_path('routes/admin.php');

        $this->info("💽 Installing AdminKit ($theme theme)...");
        $progressBar = $this->output->createProgressBar(count($themePaths) + 1);
        $progressBar->start();

        foreach ($themePaths as $path) {
            if ($filesystem->exists($path['source'])) {
                $filesystem->ensureDirectoryExists($path['destination']);
                $filesystem->copyDirectory($path['source'], $path['destination']);
            }
            $progressBar->advance();
        }

        // Copy Routes
        if ($filesystem->exists($routeSource) && !$filesystem->exists($routeDestination)) {
            $filesystem->copy($routeSource, $routeDestination);
        }

        $progressBar->advance();
        $progressBar->finish();

        $this->newLine();
        $this->info("✅ AdminKit ($theme theme) installed successfully!");
    }
}
