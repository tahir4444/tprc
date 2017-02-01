<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Upload csv</title>
<link href="css/style.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
</head>
<body>
<div class="main">
	<div class="container">
	<form id="save_form" action="save_data.php" method="post">
		<fieldset>
			<legend>Please provide your name, email address (won't be published) and a comment</legend>
			<table>
				<?php foreach($final_data as $field_key => $field_value) : ?>
					<?php //print_r($field_value); ?>
					<tr>
					<?php foreach($field_value as $input_key => $input_value) : ?>
							
								<?php include 'includes/items.php'?>
							
					<?php endforeach; ?>
					</tr>
				<?php endforeach; ?>
				
			</table>
		</fieldset>

		<div class="submit_container">
			<button type="submit">Save Now!</button>
		</div>
	</form>
	</div>
</div>
<script>
// $("#save_form").validate();
$("#save_form").validate({
	rules: {
		// no quoting necessary
		sku: "required",
	}
});
</script>
</body>
</html>