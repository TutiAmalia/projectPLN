$( function(){
	$('#calendar').datetimepicker({
		format: 'L',
		inline: true,
		locale: 'id'
	});
	$('.select2bs4').select2({
		theme: 'bootstrap4'
	});
});
$('.delete-btn').click(function(event) {
	event.preventDefault();
	const url = $(this).attr('href');
	Swal.fire({
		title: 'Konfirmasi hapus data',
		text: 'Data yang sudah dihapus tidak dapat dikembalikan. Apakah Anda yakin ingin menghapus data ini?',
		type: 'warning',
		showCancelButton: true,
		confirmButtonText: 'Hapus',
		cancelButtonText: 'Batalkan'
	}).then(function(result) {
		if (result.value) {
			setTimeout(function() {
				window.location = url;
			}, 1000);
			Swal.fire(
				'Terhapus!',
				'Berhasil menghapus data.',
				'success'
			)
		}
	});
});
$('#datatable').DataTable({
	searching: true,
	ordering: false,
	responsive: true
});

