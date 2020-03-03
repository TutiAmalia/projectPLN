$(document).ready(function() {
	$('#calendar').datetimepicker({
		format: 'L',
		inline: true,
		locale: 'id'
	});
	$('#list-pegawai').DataTable({
		"paging": true,
		"lengthChange": true,
		"searching": true,
		"ordering": false,
		"info": true,
		"autoWidth": false,
	});
})
