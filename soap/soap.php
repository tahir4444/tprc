<?php
/* 
$url	=	'http://localhost/prc/soap/get_soap.php';




try {
	$client = new SoapClient($url);
	$params = array('username'=>'name', 'password'=>'secret');
	$client->login($params);
	$client->__soapCall('login', array($params));
	//var_dump($client);
} catch (Exception $e) {
	
	echo $e;
	
} */

	/* $wsdl = "http://www.restfulwebservices.net/wcf/StockQuoteService.svc?wsdl";

	$client = new SoapClient($wsdl, array(
					"trace"=>1,
					"exceptions"=>0)
	);
	
	print_r($client); */


	$wsdl = "http://www.restfulwebservices.net/wcf/StockQuoteService.svc?wsdl";
	$client = new SoapClient($wsdl);
	//$stock = "IND";
	//$parameters= array("request"=>$stock);
	//$values = $client->GetStockQuote($parameters);
	//$xml = $values->GetStockQuoteResult;

	print "<pre>\n";
	print_r($client);
	print "</pre>";

?>