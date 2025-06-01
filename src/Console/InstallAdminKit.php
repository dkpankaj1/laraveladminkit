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

        $corePath = [
            ['source' => __DIR__ . '/../../stubs/core/app/Http/Controllers', 'destination' => app_path('Http/Controllers')],
            ['source' => __DIR__ . '/../../stubs/core/app/Http/Middleware', 'destination' => app_path('Http/Middleware')],
            ['source' => __DIR__ . '/../../stubs/core/app/Http/Requests', 'destination' => app_path('Http/Requests')],
            ['source' => __DIR__ . '/../../stubs/core/app/View/Components', 'destination' => app_path('View/Components')],
            ['source' => __DIR__ . '/../../stubs/core/app/Models', 'destination' => app_path('Models')],
            ['source' => __DIR__ . '/../../stubs/core/app/Support', 'destination' => app_path('Support')],
            ['source' => __DIR__ . '/../../stubs/core/database/migrations', 'destination' => database_path('migrations')],
            ['source' => __DIR__ . '/../../stubs/core/resource/views', 'destination' => resource_path('views')],
            ['source' => __DIR__ . '/../../stubs/core/lang', 'destination' => lang_path()],
        ];

        $routePath = ['source' => __DIR__ . '/../../stubs/core/routes/admin.php', 'destination' => base_path('routes/admin.php')];

        $kadsoThemePaths = [
            ['source' => __DIR__ . '/../../stubs/kadso/resource/views', 'destination' => resource_path('views')],
            ['source' => __DIR__ . '/../../stubs/kadso/assets', 'destination' => public_path('assets')]
        ];

        $drezocThemePaths = [
            ['source' => __DIR__ . '/../../stubs/drezoc/resource/views', 'destination' => resource_path('views')],
            ['source' => __DIR__ . '/../../stubs/drezoc/assets', 'destination' => public_path('assets')]
        ];



        // Prompt user to select a theme
        $theme = $this->choice('Which theme would you like to install?', ['Kadso', 'Drezoc'], 0);

        // Set theme paths and stub route based on user selection
        $themePaths = ($theme === 'Kadso') ? $kadsoThemePaths : $drezocThemePaths;


        $this->info("💽 Installing AdminKit ($theme theme)...");

        $totalSteps = count($corePath) + count($themePaths) + 1; // +1 for route copy
        $progressBar = $this->output->createProgressBar($totalSteps);
        $progressBar->start();


        // copy core Files
        foreach ($corePath as $path) {
            if ($filesystem->exists($path['source'])) {
                $filesystem->ensureDirectoryExists($path['destination']);
                $filesystem->copyDirectory($path['source'], $path['destination']);
            }
            $progressBar->advance();
        }

        // copy route file
        if ($filesystem->exists($routePath['source']) && !$filesystem->exists($routePath['destination'])) {
            $filesystem->copy($routePath['source'], $routePath['destination']);
            $progressBar->advance();
        }


        foreach ($themePaths as $path) {
            if ($filesystem->exists($path['source'])) {
                $filesystem->ensureDirectoryExists($path['destination']);
                $filesystem->copyDirectory($path['source'], $path['destination']);
            }
            $progressBar->advance();
        }


        $progressBar->finish();
        $this->newLine();
        $this->info("✅ AdminKit ($theme theme) installed successfully!");

    }
}
