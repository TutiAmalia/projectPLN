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
				backgroundColor: 'rgba(60,141,188,0.9)'
			}]
		};
		const barOptions = {
			maintainAspectRatio: false,
			responsive: true,
			hover: {
				animationDuration: 0
			},
			animation: {
				duration: 1,
				onComplete: function () {
					let chartInstance = this.chart,
						ctx = chartInstance.ctx;

					ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
					ctx.textAlign = 'center';
					ctx.textBaseline = 'bottom';

					this.data.datasets.forEach(function (dataset, i) {
						let meta = chartInstance.controller.getDatasetMeta(i);
						meta.data.forEach(function (bar, index) {
							let data = moment(dataset.data[index]).format('HH:mm');
							const ontime = '00:00';
							if (data != ontime) {
								ctx.fillText(data, bar._model.x, bar._model.y - 5);
							}
						});
					});
				}
			},
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
				},
				enabled: false
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

// const pdf = new jsPDF();
// 			pdf.setFontSize(18);
// 			pdf.setFontStyle('bold');
// 			pdf.text('Laporan Hadir Bulanan Pegawai', 14, 22);
// 			pdf.setFontSize(12);
// 			pdf.setFontStyle('normal');
// 			pdf.text(PERIOD, 14, 30);
// 			pdf.autoTable({
// 				html: '#content',
// 				startY: 45
// 			});
// 			pdf.save(FILE_NAME);
// 			$(document).ready(function () {
// 				window.close();

$('#print_btn').on('click', function() {
	var canvas = document.querySelector("#rekap-harian");
    var canvas_img = canvas.toDataURL("image/png",1.0); //JPEG will not match background color
    var pdf = new jsPDF(); //orientation, units, page size
    pdf.addImage(canvas_img, 'png', 50, 10, 50, 20); //image, type, padding left, padding top, width, height
    pdf.autoPrint(); //print window automatically opened with pdf
    var blob = pdf.output("bloburl");
    window.open(blob);
   
});
