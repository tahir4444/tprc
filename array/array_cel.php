<?php
	$f_sku	=	array(
		'1254d'	=>	array(
				'amda64',
				'1tb7200',
				'500gb7200',
				'intelc2d',
				'W2452T-TF',
				'intelcore2extreme',
				'500gb5400',
				'250gb5400',
				'W1952TQ-TF',
				'M9179LL',
				'microsoftnatural',
				'logitechcord',
				'logidinovo',
				'micronmouse5000',
				'HTC Touch Diamond',
				'1254dhr'
		)
	);
	
	function _removeValueFromArray($value, $array) {
		$found_key = array_search($value, $array);
		unset($array[$found_key]);
		return $array;
	}

	$new_array	=	array();

	foreach($f_sku as $key => $sku) {
		foreach($sku as $sk) {
			$removeValue		=	_removeValueFromArray($sk, $f_sku[$key]);
			$new_array[$sk]	=	$removeValue;
		}
	}

	echo '<pre>' . print_r($new_array, true) . '</pre>';

?>