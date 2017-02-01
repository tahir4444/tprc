<?php

$connection	=	mysql_connect('localhost','root','tahir');
$select_db	=	mysql_select_db('custom_form', $connection) or die('Database selection errror may be database not found: ' . mysql_error());

if(!empty($_POST['type']) && $_POST['type'] == 'insert') {
	
	$result	=	add_record ($_POST);
	
	echo json_encode(array('result' => true, 'last_id' => $result));
	
	sleep(3);
	
} else if (!empty($_POST['type']) && $_POST['type'] == 'update') {
	
	$result	=	update_record($_POST['last_id'], $_POST);
	
	echo json_encode(array('result' => true, 'last_id' => $_POST['last_id']));
	sleep(3);
} else if(isset($_POST['record_id']) && $_POST['type'] == 'delete') {
	$record_id	=	$_POST['record_id'];
	$response	=	delete_record($record_id);
	echo json_encode(array('result' => true, 'record_id' => $record_id, 'response' => $response));
	sleep(3);
} else if(isset($_POST['record_id']) && $_POST['type']) {
	
	$result	=	get_record($_POST['record_id'],$_POST['type']);
	
	$get_html	=	getHtml($result);
	
	echo json_encode(array('result' => true, 'record_id' => $_POST['record_id'], 'data' => $result, '_toHrml' => $get_html));
	// echo json_encode(array('result' => true, 'record_id' => $_POST['record_id'], 'data' => $result, 'html' => true));
	
}

function getHtml($data) {
	ob_start(); // turn on output buffering
	include('records.php');
	$res = ob_get_contents(); // get the contents of the output buffer
	ob_end_clean(); //  clean (erase) the output buffer and turn off output buffering
	return $res;
}

function delete_record($record_id) {
	$query	=	"DELETE FROM records WHERE id = '" . $record_id . "'";
	//return $sql		=	mysql_query($query);
	
}

function add_record ($data) {
	
	$query	=	"INSERT INTO records (fname,lname,email,mobile,message,color) VALUES('" . $data['fname'] . "', '" . $data['lname'] . "', '" . $data['email'] . "', '" . $data['mobile'] . "', '" . $data['message'] . "', '" . $data['color'] . "' )";
	
	$sql_		=	mysql_query($query) or die('Query erorr ' . mysql_error());
	return mysql_insert_id();
}

function update_record($last_id, $data) {
	$query	=	"UPDATE records SET 
					fname 	= '" . $data['fname'] . "',
					lname 	= '" . $data['lname'] . "',
					email 	= '" . $data['email'] . "',
					mobile 	= '" . $data['mobile'] . "',
					message	= '" . $data['message'] . "',
					color	= '" . $data['color'] . "'
					WHERE id = {$last_id}";
	$sql_		=	mysql_query($query) or die('Query erorr' . mysql_error());
	//return $last_id;
}

function get_record ($record_id,$type) {
	
	$record_id	=	$record_id;
	
	if($type == 'single') {
		$query		=	"SELECT * FROM `records` WHERE id = '" . $record_id . "'";
		$sql_			=	mysql_query($query) or die('Query erorr in getting records' . mysql_error());
		$result		=	mysql_fetch_assoc($sql_);
	} else {
		//echo 'hello';
		$query		=	"SELECT * FROM `records`";
		$sql_			=	mysql_query($query) or die('Query erorr in getting records' . mysql_error());
		$result		=	array();
		while($rows = mysql_fetch_assoc($sql_)) {
			$result[]	=	$rows;
		}
	}

	return $result;
	
}

?>