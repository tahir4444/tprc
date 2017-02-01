<?php
	$url = 'https://sandbox.hunterexpress.com.au:443/sandbox/rest/hxws/booking/book-job';
	$username = 'hxws';
	$password = 'hxws';
	// $data = array('customerCode' => 'dummy');
	$data = '{ 
						"customerCode": "DUMMY", 
						"reference1": "ADMIN", 
						"primaryService": "RF", 
						"goods": [ 
							{ 
								"pieces": "1", 
								"weight": "2", 
								"width": "10", 
								"height": "20", 
								"depth": "30", 
								"typeCode": "CTN" 
							} 
						], 
						"stops": [ 
							{ 
								"name": "Name", 
								"suburbName": "BRISBANE", 
								"addressLine1": "10 William St", 
								"addressLine2": "Building 2", 
								"postCode": "4000", 
								"state": "QLD", 
								"instructions": "Ask receptionist to call contact", 
								"contact": { 
									"name": "Jane Wonder", 
									"phone": "82937823", 
									 "email": "jane@email.com" 
								}, 
								"timeWindow": { 
									"earliest": "2025-01-01 10:00", 
									 "latest": "2025-01-02 16:00" 
								} 
							}, 
							{ 
								"name": "Name", 
								"suburbName": "Sydney", 
								"addressLine1": "15 Rose St", 
								"postCode": "2000", 
								"addressLine2": "", 
								"state": "NSW", 
								"contact": { 
									"name": "John Foster", 
									"phone": "94386738", 
									 "email": "john.foster@email.com" 
								} 
							} 
						] 
					}';
	
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_POST, 1);
	// curl_setopt($curlhandle, CURLOPT_VERBOSE, true); //added by thr
	curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application/json', 'Authorization: Basic '.base64_encode($username.':'.$password)));
	curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	curl_setopt($curl, CURLOPT_HEADER, true);
	
	$response = curl_exec ($curl);
?>