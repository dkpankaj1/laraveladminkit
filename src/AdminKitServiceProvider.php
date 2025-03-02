<?php

namespace Dkpankaj1\AdminKit;

use Dkpankaj1\AdminKit\Console\InstallAdminKit;
use Illuminate\Support\ServiceProvider;

class AdminKitServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            InstallAdminKit::class,
        ]);
    }

    public function boot()
    {
        //
    }
}
