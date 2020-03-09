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
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th style="width: 20px">No</th>
					<th>Kode Pegawai</th>
					<th>Nama</th>
					<th>Hadir</th>
					<th>Terlambat</th>
					<th>Tidak hadir</th>
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
					<td><?= $data->persentase_kehadiran ?>%</td>
				</tr>
				<?php $no++ ?>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
	<script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
	<script>
		$(document).ready(function(){
			window.print();
		})
	</script>
</body>

</html>
