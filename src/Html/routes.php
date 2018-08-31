<?php

// src/Http/routes.php

Route::get('geocode/test', function () {
    return 'support_resort_geocode_ip';
});

Route::get('geocode/{ip}/{apikey}/{format}', function () {
    return Geocode::getGeoLocation($ip, $apikey, $format);
});
