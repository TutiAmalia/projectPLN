$(function () {
	$('#calendar').datetimepicker({
		format: 'L',
		inline: true,
		locale: 'id'
	});
	$('.select2bs4').select2({
		theme: 'bootstrap4'
	});
	if ($('#rekap-bulanan').length) {
		const rekapBulananCanvas = $('#rekap-bulanan').get(0).getContext('2d');
		const data = {
			labels: LABEL_BULANAN,
			datasets: [{
				data: DATA_BULANAN,
				backgroundColor: WARNA_BULANAN
			}]
		};
		const options = {
			maintainAspectRatio: false,
			responsive: true,
		}
		const rekapBulanan = new Chart(rekapBulananCanvas, {
			type: 'doughnut',
			data: data,
			options: options
		});
	}
	if ($('#rekap-harian').length) {
		const rekapHarianCanvas = $('#rekap-harian').get(0).getContext('2d');
		const data = TANGGAL_HARIAN.map((tanggal, index) => ({
			x: tanggal,
			y: moment(`2020-02-01 ${JAM_HARIAN[index]}`).valueOf()
		}));
		const dataHarian = {
			labels: TANGGAL_HARIAN,
			datasets: [{
				data: data,
				label: 'Jam Masuk',
				backgroundColor: 'rgba(60,141,188,0.9)',
				borderColor: 'rgba(60,141,188,0.8)',
				pointRadius: false,
				pointColor: '#3b8bba',
				pointStrokeColor: 'rgba(60,141,188,1)',
				pointHighlightFill: '#fff',
				pointHighlightStroke: 'rgba(60,141,188,1)',
			}]
		};
		const barOptions = {
			maintainAspectRatio: false,
			responsive: true,
			datasetFill: false,
			scales: {
				yAxes: [{
					type: 'linear',
					position: 'left',
					ticks: {
						min: moment('2020-02-01 05:00:00').valueOf(),
						max: moment('2020-02-01 17:59:59').valueOf(),
						stepSize: 3.6e+6,
						beginAtZero: false,
						callback: value => {
							let date = moment(value);
							if (date.diff(moment('2020-02-01 18:00:00'), 'minute') === 0) {
								return null;
							}
							return date.format('HH:mm:ss');
						}
					}
				}]
			},
			tooltips: {
				callbacks: {
					label: function (tooltipItem, data) {
						let date = moment(tooltipItem.yLabel);
						if (date.diff(moment('2020-02-01 18:00:00'), 'minute') === 0) {
							return null;
						}
						return date.format('HH:mm:ss');
					}
				}
			}
		};
		const rekapHarian = new Chart(rekapHarianCanvas, {
			type: 'bar',
			data: dataHarian,
			options: barOptions
		});
	}
});
$('.delete-btn').click(function (event) {
	event.preventDefault();
	const url = $(this).attr('href');
	Swal.fire({
		title: 'Konfirmasi hapus data',
		text: 'Data yang sudah dihapus tidak dapat dikembalikan. Apakah Anda yakin ingin menghapus data ini?',
		type: 'warning',
		showCancelButton: true,
		confirmButtonText: 'Hapus',
		cancelButtonText: 'Batalkan'
	}).then(function (result) {
		if (result.value) {
			setTimeout(function () {
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
