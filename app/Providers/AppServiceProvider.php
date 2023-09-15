<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        if($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        $this->app->bind('path.public', function() {
            return realpath(base_path().'/public_html');
        });
    }
}
