<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>UploadiFive Test</title>
<script src="js/jquery_1.7.1.min.js" type="text/javascript"></script>
<script src="jquery.uploadify.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="uploadify.css">
<style type="text/css">
body {
	font: 13px Arial, Helvetica, Sans-serif;
}
</style>
</head>

<body>
	<h1>Uploadify Demo</h1>
	<form action="submit.php">
		<div id="queue"></div>
		<input type="hidden" name="uploaded_files" class="uploaded_files" value="">
		<input id="file_upload" name="file_upload" type="file" multiple="true">
	</form>

	<script type="text/javascript">
		<?php $timestamp = time();?>
		jQuery(function() {
			jQuery('#file_upload').uploadify({
				/* 'debug'		:	true, */
				'method'			:	'get',
				'progressData'	:	'speed',
				
				'formData'     : {
					'timestamp' : '<?php echo $timestamp;?>',
					'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				},
				'swf'      : 'uploadify.swf',
				'uploader' : 'uploadify.php',
				'onUploadComplete' : function(file) {
					// alert('The file ' + file.name + ' finished processing.');
					// jQuery('.uploaded_files').val(jQuery('.uploaded_files').val()+','+file.name);
					// console.log(file);
				},
				'onUploadSuccess' : function(file, data, response) {
					// console.log(file);
					console.log(data);
					// console.log(response);
					jQuery('.uploaded_files').val(jQuery('.uploaded_files').val()+','+data);
				}
			});
		});
	</script>
</body>
</html>