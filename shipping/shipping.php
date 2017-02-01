<?php
	
	
	function checkForCity () {
	
		$url	=	'https://api.hunterexpress.com.au/live/rest/hxws/resources/get-locations?customerCode=DUMMY&serviceClass=FREIGHT';
		
		
		$username	=	'LEECOR';
		$password	=	'leecor';
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_POST, 1);
		// curl_setopt($curl, CURLOPT_VERBOSE, true); //added by thr
		curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application/json', 'Authorization: Basic '.base64_encode($username.':'.$password)));
		// curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		curl_setopt($curl, CURLOPT_HEADER,  false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		
		$response = curl_exec ($curl);
		
		curl_close($curl);
		
		return json_decode($response);
	
	}
	
	
	$response	=	checkForCity ();
	
	print_r($response);
	
?>