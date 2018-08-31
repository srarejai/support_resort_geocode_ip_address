Usage Instruction for package for GeoCoding Ip addresses.

For using this package you have to register in the IpInfoDb site and get your free API Key for geocoding IP addresses

   URL for registering with IpInfoDb: https://www.ipinfodb.com/register

Execute the command

   composer require SupportResort/GeocodeIp

Include class on top using following line.

  use SupportResort\\Geocode\\Geocode;

Add following line to providers array in app.php

  SupportResort\\Geocode\\GeocodeServiceProvider::class

Use following code in your controller

$geo = new Geocode();
$format = "json"; // can be raw, xml or json
$geovalues = $geo->getGeoLocation($ip, "YOUR IPINFODB API KEY", $format);

Results

statusCode: 100    statusMessage: Error: Invalid Number Of Arguments Passed
statusCode: 101    statusMessage: Invalid Result Format Requested
statusCode: 102    statusMessage: Invalid Ip Format
statusCode: OK     statusMessage: IP Geocoded Successfully
