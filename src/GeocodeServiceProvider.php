<?php

// src/DemoServiceProvider.php

namespace SupportResort\GeocodeIp;

use Illuminate\Support\ServiceProvider;

class GeocodeServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([
         __DIR__.'/../config/config.php' => config_path('config.php'),
        ], 'config');

        require __DIR__ . '/Http/routes.php';
    }

    public function register()
    {
        $this->app->bind('support_resort_geocode_ip', function() {
            return new Geocode();
        });

        $this->mergeConfigFrom( __DIR__.'/../config/config.php', 'config');
    }
}
