<?php
require_once "vendor/autoload.php";

use ApaiIO\Configuration\GenericConfiguration;
use ApaiIO\Operations\Search;
use ApaiIO\ApaiIO;
use ApaiIO\Operations\BrowseNodeLookup;


$conf = new GenericConfiguration();
$client = new \GuzzleHttp\Client();
$request = new \ApaiIO\Request\GuzzleRequest($client);

$conf
    ->setCountry('in')
    ->setAccessKey('AKIAI7KQDSYJRPWSQXOQ')
    ->setSecretKey('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')
    ->setAssociateTag('goebazar0621-20')
    ->setRequest($request);

$apaiIo = new ApaiIO($conf);



$search = new Search();
$search->setCategory('DVD');
$search->setActor('Bruce Willis');
$search->setKeywords('Die Hard');
$search->setResponsegroup(array('Large', 'Images'));

$response = $apaiIo->runOperation($search);

/* echo '<pre>' . print_R($response); */

/* $array = XML2Array::createArray($response); */

/* $xml = new SimpleXMLElement($response); */
/* print_r($xml); */

/* print_r($apaiIo); */



// $browseNodeLookup = new BrowseNodeLookup();
/* $browseNodeLookup->setNodeId(163357); */
// $browseNodeLookup->setNodeId(7147440011);

// $response = $apaiIo->runOperation($browseNodeLookup);
/* $response = $apaiIo->runOperation($search);  */

$xml = new SimpleXMLElement($response);
print_r($xml); 
