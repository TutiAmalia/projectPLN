<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Daftar Pegawai</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?= site_url() ?>">Home</a></li>
					<li class="breadcrumb-item active">Pegawai</li>
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
					<div class="card-header">
						<a href="<?=site_url('employee/add') ?>" ><i class="fas fa-plus"></i> Tambah Pegawai</a>
					</div>
				<div class="card-body table-responsive">
					<table id="datatable" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th style="width: 20px">No</th>
								<th>Kode Pegawai</th>
								<th>Nama</th>
								<th>Status Pegawai</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1 ?>
							<?php foreach($employees as $data) : ?>
								<tr>
									<td><?= $no ?></td>
									<td><?= $data->id ?></td>
									<td><?= ucwords($data->nama) ?></td>
									<td><?= $data->jenis == 1 ? 'Pegawai' : 'Nonpegawai' ?></td>
									<td width="250">
										<a href="<?= site_url('employee/edit/'.$data->id) ?>"
											class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
										<a onclick="deleteConfirm('<?= site_url('employee/delete/'.$data->id) ?>')"
											href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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
