$(document).ready(function($) {

	// perform javascript only when the document
	// has been fully loaded
	$('#school_id').change(function(e) {
		// Get the food id
		id = $(this).val();
        e.preventDefault();

		//$theFoodName = $(this + 'option:selected').html();
		$.get(BASE+'ajax/teacher-list/'+id, function(data) {
			$('#homeroom_teacher_id').html(data);
		});
	});
	$( "#birthdate" ).datepicker({ dateFormat: "mm/dd/yy" });
});