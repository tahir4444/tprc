<?php session_start(); ?>
<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Upload csv</title>
<link href="css/style.css" rel="stylesheet" />
</head>
<body>
<div class="main">
	<div class="container">
		
			<div class="form-uploader">
				<h1>Upload csv file</h1>
				<form action="handle_csv.php" method="post" enctype="multipart/form-data">
					<div class="row">
						<label>Upload File</label>
						<input type="file" name="csvdata">
					</div>
					<div class="row">
						<label>Fields in First Row</label>
						<input type="checkbox" name="fields_in_first">
					</div>
					<div class="row">
						<input required type="submit" name="submit" value="Submit">
					</div>
				</form>
			</div>
		
	</div>
</div>
</body>
</html>