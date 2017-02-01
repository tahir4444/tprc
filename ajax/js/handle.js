
jQuery(document).on('ready',function() {
	
	/*  */
	jQuery(".all_records tbody").sortable({
			/* update: function( event, ui ) {
				console.log(ui.item.index());
			} */
			"serialize": { key: "sort" }
		});
	jQuery(".all_records tr").disableSelection();

	jQuery(document).on('submit', '.main_form', save);
	jQuery(document).on('click', '.edit_record', edit);
	jQuery(document).on('click', '.delete_record', deleteRecord);

});


function save (e) {
	
	e.preventDefault();
	//var file_data = jQuery('#file_upload').prop('files')[0];
	var form_data	=	jQuery(this).serialize();
	//var fileData	=	new FormData(this);
	
	jQuery.ajax({
		method: 'POST',
		beforeSend: function() {
			setButton ('.submit');
		},
		url: 'ajax.php',
		data: form_data,
		dataType:	'json',
		cache: false,  
		success: function(response) {
			if(response.last_id) {
				unsetButton('.submit',response.last_id);
			}
		},
		complete: function (response) {
			updateGrid();
		}
	});
	
	
	
}

function edit(e) {
	var this_e		=	jQuery(this);
	var record_id	=	this_e.attr('rel');
	
	var record	=	getRecords(record_id);
	//console.log(record);
	//data.error	=	'there is some error';
	populateForm('.main_form',record.data);
	unsetButton ('.submit', record.record_id);
	//getAllrecords();
}

function deleteRecord(e) {
	
	var checkConfirm	=	confirm('Are you sure to delete');
	
	var this_e		=	jQuery(this);
	var record_id	=	this_e.attr('rel');

	if(checkConfirm) {
		jQuery.ajax({
			method: 'POST',
			beforeSend: function() {
				setButton ('.submit')
				//console.log('Woo Huuuoooo...!');
			},
			url: 'ajax.php',
			data: {type: 'delete',record_id: record_id},
			async: false,
			dataType:	'json',
			success: function(response) {
				if(response.result) {
					result	=	response;
					jQuery('.row_' + record_id).css('backgroundColor','yellow').fadeOut(2000);
						
					if(jQuery('.last_id').val() == record_id) {
						emptyAndResetTheForm ();
					}
				} else {
					displayCallError(response);
				}
			}
			
		});
	}
	
}

function emptyAndResetTheForm () {
	jQuery('.main_form')[0].reset();
	jQuery('.last_id').val('');
	jQuery('.type').val('insert');
}

function updateGrid() {
	
	var response	=	getAllrecords();
	jQuery('.all_records tbody').html(response._toHrml);
	//console.log(records);
}

function getAllrecords() {
	
	var response	=	getRecords();
	var html;
	
	return response;
	
}

function getRecords(record_id) {

	data	=	{
		type: (typeof record_id != 'undefined') ? 'single' : 'all',
		record_id: (typeof record_id != 'undefined') ? record_id : 0,
	}	
	var result;
	//console.log(data); return false;
	
	jQuery.ajax({
		method: 'POST',
		beforeSend: function() {
			//setButton ('.submit')
		},
		url: 'ajax.php',
		data: data,
		async: false,
		dataType:	'json',
		success: function(response) {
			if(response.result) {
				result	=	response;
			} else {
				displayCallError(response);
			}
		}
	});
	
	return result;
	
}

function displayCallError() {
	
}

function populateForm(form, data){

	jQuery.each(data, function(index,value) {
		var $field = $('.' + index, form);
		if($field.is('select')) {
			//$("option",$field).each(function() {
				if (this.value==value) { this.selected=true; }
			//});
		} else if($field.is('textarea')) {
			//console.log($field);
			$field.val(value);
		} else {
			switch($field.attr("type")) {  
				case "text":case "hidden":case "color":
				$field.val(value);
				break;   
				case "radio" : case "checkbox":   
				$field.each(function(){
				if($(this).attr('value') == value) {  $(this).attr("checked",value); } });   
				break;
			} 
		} 
	});
}

function setButton (button,last_id) {
	jQuery(button).val('Plese Wait....').attr("disabled", true);
}

function unsetButton (button, last_id) {
	//console.log(typeof last_id);
	if(typeof last_id != 'undefined') {
		jQuery('.last_id').val(last_id);
	}
	
	jQuery('.type').val('update');
	jQuery(button).val('Update').attr("disabled", false);

}


