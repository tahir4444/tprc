<?php
	session_start();
	// if(!empty($_POST['handle_csv_upload'])) {
	if(!empty($_FILES['csvdata']) && is_uploaded_file($_FILES['csvdata']['tmp_name'])) {
		
		//print_r($_POST);
		if('text/csv' ==  $_FILES['csvdata']['type']) {
			
			/* echo 'post'; echo '<br />';
			echo $_FILES['csvdata']['tmp_name']; echo '<br />';
			echo $_FILES['csvdata']['type']; echo '<br />' */;
			$fields	=	array();
			$csv_file	=	$_FILES['csvdata'];
			
			$csv_data = array_map('str_getcsv', file($_FILES['csvdata']['tmp_name']));
			
			if($_POST['fields_in_first']) {
				$fields = array_shift($csv_data);
			}
			
			$final_data	=	create_final_data ($fields,$csv_data);
			
			//print_r($fields);
			
			//foreach($csv_data as $key => $item) :
				include 'includes/data.php';
			//endforeach;

			
			// print_r($csv_data);
			
			
		
		} else {
			echo 'file type not supported upload csv file only';
		}
	
	}
	
	function create_final_data ($fields,$csv_data) {
		$data	=	array();
		foreach ($csv_data as $key => $value) :
			//$data[]	= $value;
			foreach($value as $item_key => $item_value) {
				$data[$key][$fields[$item_key]] = $item_value;
			}
		endforeach;
	
		//echo '<pre>', print_r($data);
		return $data;
	}
	
?>