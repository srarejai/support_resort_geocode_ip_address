<?php

// src/Geocode.php

namespace SupportResort\GeocodeIp;

/**
* This is the Geocode class.
*
* It's responsible for geocoding an ip address and returning the location details.
*/

//
class Geocode
{

    /**
    * The apikey.
    *
    * @var string
    */
    protected $apiKey;

    /**
    * Create a new Geocode instance.
    *
    */
    public function __construct()
    {
       $this->apiKey = config('config.apikey');
    }

    /**
    * Method to geocode ip address and fetch location.
    * @param ip address
    * @param api key string
    * @param format string can be xml, json or raw
    *
    * @return xml, json, raw
    */

    public function getGeoLocation($ip, $format)
    {

        // Check Number Of Arguments Passed
        $numargs = func_num_args();

        if ($numargs !== 2) {
          $result = [];
          $result['statusCode'] = '100';
          $result['statusMessage'] = 'Error: Invalid Number Of Arguments Passed';
          return jscon_encode($result);
        }

        // Check format requested
        if($format !== 'raw' && $format !== 'xml' && $format !== 'json'){
           $result = [];
           $result['statusCode'] = '101';
           $result['statusMessage'] = 'Invalid Result Format Requested';
           return jscon_encode($result);
        }

        // Check if passed ip is valid
	      $valid = preg_match('/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\z/', $ip);

	      if($valid){
          // Store apikey in local variable
          $key = $this->apiKey;
          // Construct IpInfoDB URL
          $apiurl = "http://api.ipinfodb.com/v3/ip-city/?key=".$key."&ip=".$ip."&format=".$format;
          // Geocode using URL
          $geo = file_get_contents($apiurl);
	        // Return geooded details
	        return $geo;
	      }
        else {
          // Return error message if invalid ip is passed
          $result = [];
          $result['statusCode'] = '102';
          $result['statusMessage'] = 'Invalid IP Address Format';
          return json_encode($result);
        }
    }
}
