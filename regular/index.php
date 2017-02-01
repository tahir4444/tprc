<?php

//	echo 'regular exppression';
	
	$input_string	=	"j 24 458 xcfsdfdfg";
	$regex_pattern	=	"/[a-zA-Z]+ \d+/";

	// $boolean = preg_match($regex_pattern, $input_string, $matches_out);
	$boolean			=	preg_match($regex_pattern, $input_string, $matches_out);
	
	if($boolean) {
		
		echo '<pre>' . print_r($matches_out, true) . '</pre>';
		
	}


?>