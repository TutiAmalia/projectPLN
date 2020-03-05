$( function(){
	$('#calendar').datetimepicker({
		format: 'L',
		inline: true,
		locale: 'id'
	});
	$('.select2bs4').select2({
		theme: 'bootstrap4'
	})
});
$('#datatable').DataTable({
	searching: true,
	ordering: false,
	responsive: true
});

