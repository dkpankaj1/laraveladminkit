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

        $paths = [
            ['source' => __DIR__ . '/../../stubs/app/Http/Controllers', 'destination' => app_path('Http/Controllers')],
            ['source' => __DIR__ . '/../../stubs/app/Http/Middleware', 'destination' => app_path('Http/Middleware')],
            ['source' => __DIR__ . '/../../stubs/app/Http/Requests', 'destination' => app_path('Http/Requests')],
            ['source' => __DIR__ . '/../../stubs/kadso/resource/views', 'destination' => resource_path('views')],
            ['source' => __DIR__ . '/../../stubs/app/View/Components', 'destination' => app_path('View/Components')],
            ['source' => __DIR__ . '/../../stubs/kadso/assets', 'destination' => public_path('assets')],
        ];

        $this->info('💽 Installing AdminKit...');
        $progressBar = $this->output->createProgressBar(count($paths) + 1);
        $progressBar->start();

        foreach ($paths as $path) {
            if ($filesystem->exists($path['source'])) {
                $filesystem->ensureDirectoryExists($path['destination']);
                $filesystem->copyDirectory($path['source'], $path['destination']);
            }
            $progressBar->advance();
        }

        // Copy Routes
        $routeSource = __DIR__ . '/../../stubs/routes/admin.php';
        $routeDestination = base_path('routes/admin.php');

        if ($filesystem->exists($routeSource) && !$filesystem->exists($routeDestination)) {
            $filesystem->copy($routeSource, $routeDestination);
        }

        $progressBar->advance();
        $progressBar->finish();

        $this->newLine();
        $this->info('✅ AdminKit installed successfully!');
    }
}
