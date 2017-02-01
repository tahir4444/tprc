<?php


$ch = curl_init('http://api.fastway.org/v2/psc/lookup/AUK/Elsthorpe/4110/5?api_key=580791102b92e40bcdd8ad67e5495d18');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, array('counry_id' => '91'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$value = curl_exec($ch);

// echo $value->result->from;


print_r(json_decode($value));
?>