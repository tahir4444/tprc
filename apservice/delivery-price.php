<?php

// Set your API key: remember to change this to your live API key in production
// $apiKey = 'your_api_key';
$apiKey = '4549c872-83f5-484e-ba9d-891155e5eb14';
 // Set your API key: remember to change this to your live API key in production
// $apiKey = 'your_api_key';

// Define the service input parameters
$fromPostcode = '2000';
$toPostcode = '3000';
$parcelLengthInCMs = 22;
$parcelWidthInCMs = 16;
$parcelHeighthInCMs = 7.7;
$parcelWeightInKGs = 13;

// Set the query params
$queryParams = array(
  "from_postcode" => $fromPostcode,
  "to_postcode" => $toPostcode,
  "length" => $parcelLengthInCMs,
  "width" => $parcelWidthInCMs,
  "height" => $parcelHeighthInCMs,
  "weight" => $parcelWeightInKGs
);

// Set the URL for the Domestic Parcel Size service
$urlPrefix = 'auspost.com.au';
$postageTypesURL = 'http://' . $urlPrefix . '/api/v3/postage/domestic/service.json?' .
http_build_query($queryParams);

// Lookup domestic parcel types (different kinds of standard boxes etc)
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $postageTypesURL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('AUTH-KEY: ' . $apiKey));
$rawBody = curl_exec($ch);

// Check the response; if the body is empty then an error has occurred
if(!$rawBody){
  die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
}

// All good, lets parse the response into a JSON object
$serviceTypesJSON = json_decode($rawBody);

print_r($serviceTypesJSON);