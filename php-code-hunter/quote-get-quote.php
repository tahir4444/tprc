<?php
$url = 'https://sandbox.hunterexpress.com.au/sandbox/rest/hxws/quote/get-quote';
// $url = 'https://sandbox.hunterexpress.com.au:443/sandbox/rest/hxws/quote/get-quote';
$username = 'hxws';
$password = 'hxws';
$data = '{
				"customerCode": "DUMMY",
				"fromLocation": {
						"suburbName": "BRISBANE",
						"postCode": "4000",
						"state": "QLD"
					},
					"toLocation": {
						"suburbName": "SYDNEY",
						"postCode": "2000",
						"state": "NSW"
					},
				"goods": [{
					"pieces": "2",
					"weight": "3",
					"width": "10",
					"height": "20",
					"depth": "12",
					"typeCode": "ENV"
				}]
			}';


// print_r($data);


	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_POST, 1);
	// curl_setopt($curl, CURLOPT_VERBOSE, true); //added by thr
	curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application/json', 'Authorization: Basic '.base64_encode($username.':'.$password)));
	curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	curl_setopt($curl, CURLOPT_HEADER,  false);

		$response = curl_exec ($curl);
	
	curl_close($curl);

	//print_r($response);

?>