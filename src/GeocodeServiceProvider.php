<?php

// src/DemoServiceProvider.php

namespace SupportResort\GeocodeIp;

use Illuminate\Support\ServiceProvider;

class GeocodeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('support_resort_geocode_ip', function() {
            return new Geocode();
        });
    }

    public function boot()
    {
        require __DIR__ . '/Http/routes.php';
    }
}
