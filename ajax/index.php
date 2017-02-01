<?php
$connection	=	mysql_connect('localhost','root','tahir') or die('Database connection error may wrong username or password'. mysql_error());
$select_db	=	mysql_select_db('custom_form', $connection) or die('Database selection errror may be database not found: ' . mysql_error());
?>
<html>
<head>
<title>Index form</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>
</head>
<body>
<div class="form_container">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="main_form" class="main_form" method="post" enctype="multipart/form-data">
		<input type="hidden" name="type" value="insert" class="type" />
		<input type="hidden" name="last_id" value="" class="last_id" />
		<div class="form_row">
			<label for="fname">First Name</label>
			<input type="text" class="fname" id="fname" name="fname" />
		</div>
		<div class="form_row">
			<label for="lname">Last Name</label>
			<input type="text" class="lname" id="lname" name="lname" />
		</div>
		<div class="form_row">
			<label for="email">Email</label>
			<input type="text" class="email" id="email" name="email" />
		</div>
		<div class="form_row">
			<label for="mobile">Mobile</label>
			<input type="text" class="mobile" id="mobile" name="mobile" />
		</div>
		<div class="form_row">
			<label for="message">Message</label>
			<textarea class="message" id="message" name="message"></textarea>
		</div>
		<div class="form_row">
			<label for="color">Color</label>
			<input type="color" class="color" id="color" name="color" />
		</div>
		<div class="form_row">
			<label for="color">File</label>
			<input type="file" class="file_upload" id="file_upload" name="file_upload" />
		</div>
		<div class="form_row row_submit">
			<input type="submit" class="submit" id="submit" name="submit" value="Save..." />
		</div>
	</form>
</div>
<table class="all_records" width="100%" border="1">
	<thead>
	<tr class="thead">
		<th>Id</th>
		<th>Sort</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Message</th>
		<th>Color</th>
		<th>Action</th>
	</tr>
	</thead>
	<tbody>
	<?php
		$query	=	"SELECT * FROM records";
		$sql		=	mysql_query($query) or die(mysql_error());
		$num_rows	=	mysql_num_rows($sql);
		$data;
		if($num_rows > 0) :
			while($row = mysql_fetch_assoc($sql)) :
				$data[]	=	$row;
			endwhile;
			
			include('records.php');
			
		endif; ?>
	</tbody>
	<tfoot>
		<tr class="pagination"></tr>
	</tfoot>
</table>
<script src="js/handle.js" type="text/javascript"></script>
</body>
</html>