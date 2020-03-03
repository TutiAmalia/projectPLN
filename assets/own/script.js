$( function(){
	$('#calendar').datetimepicker({
		format: 'L',
		inline: true,
		locale: 'id'
	});
});
$('#list-pegawai').DataTable({
	searching: true,
	ordering: false,
	responsive: true
});

