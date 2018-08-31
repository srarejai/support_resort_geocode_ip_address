Details of package for Geocoding ip addresses.

This project is just for demo and review purposes and it is not yet a published package in packagist. Hence it cannot be downloaded and used in Laravel projects. For using this package you have to register in the IpInfoDb site and get your free API Key which has to be stored in the appropriate config file.

Site URL for registering with IpInfoDb API key: https://www.ipinfodb.com/register

Usage:

Execute the command:

   composer require SupportResort/GeocodeIp

Include class on top using following line:

  use SupportResort\\GeocodeIp\\Geocode;

Add following line to providers array in app.php:

  SupportResort\\GeocodeIp\\GeocodeServiceProvider::class

Code:

$geoobject = new Geocode();

$geo = $geoobject->getGeoLocation($ip, $format) // format can be raw, xml or json

Results:

statusCode: 100 - statusMessage: Error: Invalid Number Of Arguments Passed

statusCode: 101 - statusMessage: Invalid Result Format Requested

statusCode: 102 - statusMessage: Invalid IP Address Format

statusCode: ERROR - statusMessage: Invalid IP Address

statusCode: OK  - statusMessage: IP Geocoded Successfully
