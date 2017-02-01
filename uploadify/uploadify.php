<?php
/*
Uploadify
Copyright (c) 2012 Reactive Apps, Ronnie Garcia
Released under the MIT License <http://www.opensource.org/licenses/mit-license.php> 
*/

// Define a destination
session_start();
$targetFolder = 'uploads'; // Relative to the root

/* $verifyToken = md5('unique_salt' . $_POST['timestamp']); */
$verifyToken = md5('unique_salt' . $_REQUEST['timestamp']);

if (!empty($_FILES) && $_REQUEST['token'] == $verifyToken) {
	$tempFile = $_FILES['Filedata']['tmp_name'];
	// $targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
	$targetPath = $targetFolder;
	$targetFile = rtrim($targetPath,'/') . '/' . $_FILES['Filedata']['name'];
	
	// Validate the file type
	$fileTypes = array('jpg','jpeg','gif','png'); // File extensions
	$fileParts = pathinfo($_FILES['Filedata']['name']);
	
	$newFileName	= time() . '_' . session_id('session') . '.' . $fileParts['extension'];
	
	if (in_array($fileParts['extension'],$fileTypes)) {
		move_uploaded_file($tempFile,'uploads/' .$newFileName);
		// echo '1';
		echo $newFileName;
	// } else {
		echo '0';
	}
}
?>