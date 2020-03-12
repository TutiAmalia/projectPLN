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
		let dataKeterlambatan = [];
		JAM_HARIAN.forEach((val, index) => {
			let ontime = moment('2020-02-01 08:00:00');
			let timeIn = moment(`2020-02-01 ${val}`);
			if (timeIn.isAfter(ontime)) {
				let timeDiff = moment.utc(moment.duration(moment(timeIn).diff(moment(ontime))).asMilliseconds()).format('HH:mm');
				let output = moment(`2020-02-01 ${timeDiff}`).valueOf();
				dataKeterlambatan.push(output);
			} else {
				let output = moment('2020-02-01 00:00:00').valueOf();
				dataKeterlambatan.push(output);
			}
		});
		const dataHarian = {
			labels: TANGGAL_HARIAN,
			datasets: [{
				data: dataKeterlambatan,
				label: 'Durasi Keterlambatan',
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
						min: moment('2020-02-01 00:00:00').valueOf(),
						stepSize: 3.6e+6,
						beginAtZero: false,
						callback: value => {
							let date = moment(value);
							return date.format('HH:mm');
						}
					}
				}]
			},
			tooltips: {
				callbacks: {
					label: function (tooltipItem, data) {
						let date = moment(tooltipItem.yLabel);
						let output = `${date.format('HH')} jam ${date.format('mm')} menit`;
						return output;
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
