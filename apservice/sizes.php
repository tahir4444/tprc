<?php

// Set your API key: remember to change this to your live API key in production
// $apiKey = 'your_api_key';
$apiKey = '4549c872-83f5-484e-ba9d-891155e5eb14';

// Set the URL for the Domestic Parcel Size service
$urlPrefix = 'auspost.com.au';
$parcelTypesURL = 'http://' . $urlPrefix . '/api/postage/parcel/domestic/size.json';

// Lookup domestic parcel types (different kinds of standard boxes etc)
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $parcelTypesURL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('AUTH-KEY: ' . $apiKey));
$rawBody = curl_exec($ch);

// Check the response: if the body is empty then an error occurred
if(!$rawBody){
  die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
}

// All good, lets parse the response into a JSON object
$parcelTypesJSON = json_decode($rawBody);

print_r($parcelTypesJSON);