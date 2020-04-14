<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Daftar Pegawai Izin</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?= site_url() ?>">Home</a></li>
					<li class="breadcrumb-item active">Izin Pegawai</li>
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
			<form role="form"" action=" <?= site_url('vacation/select_periode') ?>" method="post">
				<div class="card-header d-flex justify-content-between align-items-center">
					<a href="<?=site_url('vacation/add') ?>" ><i class="fas fa-plus"></i> Tambah Izin</a>
					<div class="col-lg-3 d-block mr-0 ml-auto">
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
				</div>

				<!-- /.card-header -->
				<div class="card-body table-responsive">
					<table id="datatable" class="table table-bordered table-striped" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th style="width: 20px">No</th>
								<th>Kode Pegawai</th>
								<th>Nama</th>
								<th>Status</th>
								<th>Tanggal</th>
								<th>Bulan</th>
								<th>Tahun</th>
								<th>Keterangan</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1 ?>
							<?php foreach($vacation as $data) : ?>
								<tr>
									<td><?= $no ?></td>
									<td><?= $data->id_pegawai ?></td>
									<td><?= ucwords($data->nama) ?></td>
									<td><?= $data->jenis == 1 ? 'Pegawai' : 'Nonpegawai' ?></td>
									<td><?= $data->tanggal ?></td>
									<td><?= get_month_name($data->bulan) ?></td>
									<td><?= $data->tahun ?></td>
									<td><?= $data->keterangan ?></td>
									<td width="250">
										<a href="<?= site_url('vacation/edit/'.$data->id) ?>"
											class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i> Edit</a>
										<a href=" <?= site_url('vacation/delete/'.$data->id) ?>"
											class="btn btn-danger btn-sm delete-btn"><i class="fas fa-trash"></i> Hapus</a>
									</td>
								</tr>
								<?php $no++ ?>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
				<!-- /.card-body -->
			</form>
			</div>
			<!-- /.card -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</section>
<!-- /.content -->




