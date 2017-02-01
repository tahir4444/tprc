<?php
	
	function checkAddition ($array_one, $array_two) {
		
		if(count($array_one) != count($array_two)) {
			echo 'Addition not possible';
		}
		
		foreach($array_one as $key => $one) {
			
			//echo $one[$key].'<br />';
			// echo $one[$key];
			
			if(count($one)) {
				echo count($one);
			}
			
		}
		
		
		
	}
	
	function handleAddition ($array_one, $array_two) {
		
	}

	$array_one	=	array(		
		array(4,2,3),
		array(5,6,2),
		array(1,2,9)
	);
	
	$array_two	=	array(		
		array(7,2,8),
		array(5,6,7),
		array(7,8,34)	
	);
	
	
	checkAddition ($array_one, $array_two);
	
	

	//echo '<pre>' . print_r($new_array, true) . '</pre>';

?>