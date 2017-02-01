<?php
	// $url = 'https://sandbox.hunterexpress.com.au/sandbox/rest/hxws/quote/get-quote';
	$url = 'https://api.hunterexpress.com.au/live/rest/hxws/quote/get-quote';
	$username = 'LEECOR';
	$password = 'leecor';
	$data = '{
			"customerCode": "LEECOR",
			"fromLocation": {
				"suburbName": "Dandenong",
				"postCode": "3175",
				"state": "VIC"
			},
			"toLocation": {
				"suburbName": "Sydney",
				"postCode": "2000",
				"state": "ACT"
			},
			"goods": [{
				"pieces": "1",
				"weight": "16",
				"width": "4",
				"height": "4",
				"depth": "185",
				"typeCode": "ENV"
			}]
			
}';

	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_POST, 1);
	curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application/json', 'Authorization: Basic '.base64_encode($username.':'.$password)));
	curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	curl_setopt($curl, CURLOPT_HEADER, true);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	
	$response = curl_exec ($curl);
	
	print_r($response);
	
?>