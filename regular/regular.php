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

<br />
<br />
<hr>
<br />
<br />
<?php
	
	// Lets use a regular expression to match a date string. Ignore
	// the output since we are just testing if the regex matches.
	$input_string	=	"June 24";
	$regex = "/[a-zA-Z]+ \d+/";
	if (preg_match($regex, $input_string)) {
		// Indeed, the expression "[a-zA-Z]+ \d+" matches the date string
		echo "Found a match!";
	} else {
		// If preg_match() returns false, then the regex does not
		// match the string
		echo "The regex pattern does not match. :(";
	}


?>