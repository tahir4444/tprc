<?php
 
$api_url_v1 = "http://techmagnate.co.in/lavezzi/api/soap/?wsdl=1";
 
$username = 'info@lavezzi.com';
$password = '6q4HW50CosRv3R87vawp0n5Aw5BkUbU9';
 
$cli = new SoapClient($api_url_v1);
 
//retreive session id from login
$session_id = $cli->login($username, $password);
 
//call customer.list method
/* $result = $cli->call($session_id, 'customer.list', array(array())); */
/* $result = $cli->call($session_id, 'catalog_product.info', array(array())); */
$result = $cli->call($session_id, 'catalog_product.info', array('product_id' => 1));

print_r($result);


/* $result->endSession($session); */