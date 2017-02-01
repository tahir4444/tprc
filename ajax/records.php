<?php if(count($data)) : ?>
<?php foreach($data as $data) : ?>
<tr class="trow row_<?php echo $data['id']; ?>">
	<td><?php echo $data['id']; ?></td>
	<td><?php echo $data['sort']; ?></td>
	<td><?php echo $data['fname']; ?></td>
	<td><?php echo $data['lname']; ?></td>
	<td><?php echo $data['email']; ?></td>
	<td><?php echo $data['mobile']; ?></td>
	<td><?php echo $data['message']; ?></td>
	<td style="background: <?php echo $data['color']; ?>" title="<?php echo $data['color']; ?>"><?php //echo $data['color']; ?></td>
	<td>
		<a href="javascript:void(0);" class="edit_record" rel="<?php echo $data['id']; ?>">Edit</a>
		| 
		<a href="javascript:void(0);" class="delete_record" rel="<?php echo $data['id']; ?>">Delete</a>
	</td>
</tr>
<?php endforeach; ?>
<?php else: ?>
<tr></td colspan="9">NO records found</td></tr>
<?php endif; ?>