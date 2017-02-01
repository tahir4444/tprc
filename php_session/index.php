<?php

define('DS' , DIRECTORY_SEPARATOR);
define('PS' , PATH_SEPARATOR);

/* file session */
session_save_path(__DIR__ . DS . 'session') ;
session_id();
session_start();
/* file session end*/


/*db session start*/
// include('classes/Session.php');
//include('classes/SessionChris.php');
/*db session end*/


//$session	=	new Session;

$_SESSION['check']	=	array('checking');

// $_SESSION['newvalues']	=	array('checking' => 'hello world adsfdsfg','testing' => 'hello ji ki haal chaal');
// $session_id	=	session_id();
// $session->_write($session_id,'asdfasdf');
/* 
print_r($session,true);


*/

echo DIRECTORY_SEPARATOR . '<BR />';


echo PATH_SEPARATOR . '<BR />';


echo  dirname(dirname(__FILE__)) . '<BR />';


 
 
echo session_id();
echo '<pre>';
print_r( $_SESSION['check']);
echo '</pre>'; 



//echo session_status (  );
echo session_save_path();

// echo  getTimeStamp();

// session_destroy();