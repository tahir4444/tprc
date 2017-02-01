<?php
	
	$url	=	'https://digitalapi.auspost.com.au/shipping/v1/prices/items';
	
	$data	=	' {
		"from": {
			"postcode": "3175"
		},
		"to": {
			"postcode": "2000"
		},
		"items": [{
			"length": 185,
			"height": 4,
			"width": 4,
			"weight": 16,
			"features":{
				"TRANSIT_COVER": {
					"attributes": {
						"cover_amount":1000
					}
				}
			}
		}]
	}';

	
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_POST, 1);
	curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application/json', 'Authentication 4549c872-83f5-484e-ba9d-891155e5eb14'));
	curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	curl_setopt($curl, CURLOPT_HEADER, true);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	
	$response = curl_exec ($curl);
	
	print_r($response);
