<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Pegawai</h1>
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
<!-- general form elements -->
<section class="content">
	<div class="row">
		<div class="col-12">
			<div class="card card-primary">
				<!-- form start -->
				<form role="form" action="" method="post" enctype="multipart/form-data">
					<div class="card-header">
						<a href="<?= site_url('employee') ?>"><i class="fas fa-arrow-left"></i>
							Kembali</a>
					</div>
					<div class="card-body">
						<div class="form-group col-lg-9 row">
							<label for="id">Kode Pegawai</label>
							<input class="form-control <?php form_error('id') and print('is-invalid') ?>" type="text" name="id"
								value="<?= $employee->id ?>" readonly />
							<div class="invalid-feedback">
								<?= form_error('id') ?>
							</div>
						</div>

						<div class="form-group col-lg-9 row">
							<label for="nama">Nama</label>
							<input class="form-control <?php form_error('nama') and print('is-invalid') ?>" type="text" name="nama"
								value="<?= set_value('nama', $employee->nama) ?>" />
							<div class="invalid-feedback">
								<?= form_error('nama') ?>
							</div>
						</div>

						<div class="form-group col-lg-9 row">
							<label for="nama">Sub Area</label>
							<input class="form-control <?php form_error('nama_subarea') and print('is-invalid') ?>" type="text" name="nama_subarea"
								value="<?= set_value('nama_subarea', $employee->nama_subarea) ?>" />
							<div class="invalid-feedback">
								<?= form_error('nama_subarea') ?>
							</div>
						</div>

						<div class="form-group col-lg-9 row">
							<label for="nama">Posisi</label>
							<input class="form-control <?php form_error('nama_posisi') and print('is-invalid') ?>" type="text" name="nama_posisi"
								value="<?= set_value('nama_posisi', $employee->nama_posisi) ?>" />
							<div class="invalid-feedback">
								<?= form_error('nama_posisi') ?>
							</div>
						</div>

						<div class="form-group">
							<label for="">Status</label>
							<div class="custom-controls-stacked">
								<div class="custom-control custom-radio">
									<input class="custom-control-input <?php form_error('jenis') and print('is-invalid') ?>" type="radio"
										id="jenis1" name="jenis" value="0" <?php set_value('jenis', $employee->jenis) == 0 and print('checked') ?>>
									<label for="jenis1" class="custom-control-label">Pegawai Non-shift</label>
								</div>
								<div class="custom-control custom-radio">
									<input class="custom-control-input <?php form_error('jenis') and print('is-invalid') ?>" type="radio"
										id="jenis2" name="jenis" value="1" <?php set_value('jenis', $employee->jenis) == 1 and print('checked') ?>>
									<label for="jenis2" class="custom-control-label">Pegawai shift</label>
								</div>
								<div class="invalid-feedback">
									<?= form_error('jenis') ?>
								</div>
							</div>
						</div>
					</div>
					<!-- /.card-body -->
					<div class="card-footer">
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</form>
			</div>
			<!-- /.card -->
		</div>
	</div>
</section>
<!-- /.content -->
