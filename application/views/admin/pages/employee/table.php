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
											<a onclick="deleteConfirm()"
												href="<?= site_url('employee'.$data->id) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php $no++ ?>
								<?php endforeach ?>

								<!-- jQuery -->
								<script src="<?= base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
								<!-- Bootstrap 4 -->
								<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
								<script src="<?= base_url('assets/plugins/sweetalert2/sweetalert2.min.js')?>"></script>
								<!-- AdminLTE App -->
								<script src="<?= base_url('assets/adminlte/js/adminlte.min.js')?>"></script>

								<?php if ($this->session->flashdata('msg')): ?>
								<script>
									$(document).ready(function () {
										Swal.fire({
											type: 'error',
											title: 'Aduh...',
											showConfirmButton: false,
											timer: 4000,
											text: '<?= $this->session->flashdata('msg') ?>'
										})
									})
								</script>
								<?php endif ?>
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
