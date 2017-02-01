
<?php
	$url = 'https://sandbox.hunterexpress.com.au/sandbox/rest/hxws/resources/get-services?customerCode=DUMMY';
	$username = 'hxws';
	$password = 'hxws';
	
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application/json', 'Authorization: Basic '.base64_encode($username.':'.$password)));
	curl_setopt($curl, CURLOPT_HEADER, true);
	
	$response = curl_exec ($curl);
	
	
?>