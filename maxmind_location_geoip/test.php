<?php
require_once("geoip.inc");
require_once("geoipcity.inc");
require_once("geoipregionvars.php");
 
// $ipaddress = "202.4.32.0";
$ipaddress = "182.64.32.102";
$gi = geoip_open("GeoLiteCity.dat", GEOIP_STANDARD);
$rsGeoData = geoip_record_by_addr($gi, $ipaddress);
$lat = $rsGeoData->latitude;
$long = $rsGeoData->longitude;
$city = $rsGeoData->city;
$state = $rsGeoData->region;
$country = $rsGeoData->country_name;
geoip_close($gi);
 echo "<pre>";
 print_r($rsGeoData);
 echo "</pre>";
echo $city . ":" . $state . ":" . $country;


?>