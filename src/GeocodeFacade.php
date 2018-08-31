<?php

// src/GeocodeFacade.php

namespace SupportResort\GeocodeIp;

use Illuminate\Support\Facades\Facade;

class GeocodeFacade extends Facade
{
    protected static function getFacadeAccessor() {
        return 'support_resort_geocode_ip_demo';
    }
}
