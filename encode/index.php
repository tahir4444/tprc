<form>
	<input type="text" name="" value="" class="" />
	
	<input type="submit" name="submit" value="submit" class="submit" />

</form>


<div class="output">
	
	<?php
	
		
		$encoded_string	=	 base64_encode("alert('vishal')");
	
	
	?>

<script>
eval(encodeURI('<?php echo $encoded_string; ?>'));

</script>
</div>