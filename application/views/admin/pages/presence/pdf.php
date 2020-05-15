<?php 
	$file_name = "{$periode->tahun}_{$periode->bulan}_report.pdf";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $file_name ?></title>
	<?php $this->load->view('admin/component/source_css') ?>
	<script>
		const ACTION = '<?= $action ?>';
		const FILE_NAME = '<?= $file_name ?>';
		const PERIOD = '<?= get_month_name($periode->bulan) . " " . $periode->tahun ?>';
	</script>
</head>

<body>
	<div class="text-center d-flex flex-column align-items-center col-12">
		<img src="<?= base_url('assets/adminlte/img/logo_pln.png') ?>" alt="Logo PLN" style="width: 100px; height: auto;">
		<span class="brand-text font-weight-bold">PLN Tello</span>
	</div>
	<div class="col-12 mx-3">
		<h1 class="h3">Laporan Hadir Bulanan Pegawai</h1>
		<p class="font-weight-bold">Periode: <?= get_month_name($periode->bulan) . " " . $periode->tahun ?></p>
		<br>
	</div>
	<div class="card-body table-responsive">
		<table class="table table-bordered table-striped" id="content">
			<thead>
				<tr>
					<th style="width: 20px">No</th>
					<th>Kode Pegawai</th>
					<th>Nama</th>
					<th>Hadir</th>
					<th>Terlambat</th>
					<th>Tidak hadir</th>
					<th>Izin</th>
					<th>Persentase Kehadiran</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1 ?>
				<?php foreach($report as $data) : ?>
				<tr>
					<td><?= $no ?></td>
					<td><?= $data->id_pegawai ?></td>
					<td><?= ucwords($data->nama) ?></td>
					<td><?= $data->kehadiran ?></td>
					<td><?= $data->keterlambatan ?></td>
					<td><?= $data->ketidakhadiran ?></td>
					<td><?= $data->izin?></td>
					<td><?= $data->persentase_kehadiran ?>%</td>
				</tr>
				<?php $no++ ?>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
	<script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
	<script src="<?= base_url('assets/plugins/jspdf/jspdf.min.js') ?>"></script>
	<script src="<?= base_url('assets/plugins/jspdf/jspdf.autotable.min.js') ?>"></script>
	<script>
		if (ACTION == 'print') {
			window.print();
			window.onafterprint = function () {
				window.close();
			};
			const printEvent = window.matchMedia('print');
			printEvent.addListener(function (printEnd) {
				if (!printEnd.matches) {
					window.close();
				};
			});
		} else {
			const pdf = new jsPDF();
			pdf.setFontSize(18);
			pdf.setFontStyle('bold');
			pdf.text('Laporan Hadir Bulanan Pegawai', 14, 22);
			pdf.setFontSize(12);
			pdf.setFontStyle('normal');
			pdf.text(PERIOD, 14, 30);
			pdf.autoTable({
				html: '#content',
				startY: 45
			});
			pdf.save(FILE_NAME);
			$(document).ready(function () {
				window.close();
			})
		}

	</script>
</body>

</html>
