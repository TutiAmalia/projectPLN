<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Laporan Hadir Bulanan Pegawai</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?= site_url() ?>">Home</a></li>
					<li class="breadcrumb-item active">Laporan Kehadiran</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<!-- /.card-header -->
				<form role="form"" action=" <?= site_url('presence/select_periode') ?>" method="post">
					<div class="card-header">
						<div class="row justify-content-between align-items-center">
							<div class="col-lg-3">
								<select class="custom-select select2bs4 form-control-sm" name="id_periode"
									onchange="if(this.value != '') { this.form.submit(); }">
									<option value="">Pilih Periode</option>
									<?php foreach($periode as $data) : ?>
									<option value="<?= $data->id ?>" <?php $id_periode == $data->id and print('selected') ?>>
										<?= get_month_name($data->bulan)." ".$data->tahun ?>
									</option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="col-lg-4 text-lg-right mt-2 mt-lg-0">
								<a href="<?=site_url('presence/print') ?>" target="_blank" class="btn btn-info btn-sm"><i class="fas fa-print"></i> Cetak laporan</a>
								<a href="<?=site_url('presence/download') ?>" target="_blank" class="btn btn-success btn-sm"><i class="fas fa-download"></i> Unduh laporan</a>
							</div>
						</div>
					</div>
				</form>
				<div class="card-body table-responsive">
					<table id="datatable" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th style="width: 20px">No</th>
								<th>Kode Pegawai</th>
								<th>Nama</th>
								<th>Status</th>
								<th>Hadir</th>
								<th>Terlambat</th>
								<th>Tidak hadir</th>
								<th>Izin</th>
								<th>Persentase Kehadiran</th>
								<th>Detail</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1 ?>
							<?php foreach($report as $data) : ?>
							<tr>
								<td><?= $no ?></td>
								<td><?= $data->id_pegawai ?></td>
								<td><?= ucwords($data->nama) ?></td>
								<td><?= $data->jenis == 1 ? 'shift' : 'non-shift' ?></td>
								<td><?= $data->kehadiran ?></td>
								<td><?= $data->keterlambatan ?></td>
								<td><?= $data->ketidakhadiran ?></td>
								<td><?= $data->izin?></td>
								<td><?= $data->persentase_kehadiran ?>%</td>
								<td>
								<a href="<?= site_url('presence/detail/'.urlencode(base64_encode($key.$data->id_pegawai))) ?>" class="btn btn-sm text-info"><i class="fas fa-info-circle"></i> Detail</a>
								</td>
							</tr>
							<?php $no++ ?>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
				<!-- /.card-body -->
			</div>
			<!-- /.card -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</section>
<!-- /.content -->
