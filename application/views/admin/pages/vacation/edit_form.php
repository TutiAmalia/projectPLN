<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Izin Pegawai</h1>
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
<!-- general form elements -->
<section class="content">
	<div class="row">
		<div class="col-12">
			<div class="card card-primary">
				<!-- form start -->
				<form role="form" action="" method="post" enctype="multipart/form-data">
					<div class="card-header">
						<a href="<?= site_url('vacation') ?>"><i class="fas fa-arrow-left"></i>
							Kembali</a>
					</div>
					<div class="card-body">
						<div class="form-group col-lg-9 row">
							<label>Pegawai</label>
							<select class="custom-select select2bs4  <?php form_error('id_pegawai') and print('is-invalid') ?>" name="id_pegawai">
								<option value="">Pilih Pegawai</option>
								<?php foreach($pegawai as $data) : ?>
								<option value="<?= $data->id ?>" <?php set_value('id_pegawai', $vacation->id_pegawai) == $data->id and print('selected') ?>>
									<?= $data->id." - ".$data->nama ?>
								</option>
								<?php endforeach ?>
							</select>
							<div class="invalid-feedback">
								<?= form_error('id_pegawai') ?>
							</div>
						</div>

						<div class="form-group col-lg-9 row">
							<label for="tanggal">Tanggal</label>
							<input class="form-control <?php form_error('tanggal') and print('is-invalid') ?>" type="text"
								name="tanggal" value="<?= set_value('tanggal', $vacation->tanggal) ?>" />
							<div class="invalid-feedback">
								<?= form_error('tanggal') ?>
							</div>
						</div>

						<div class="form-group col-lg-9 row">
							<label>Periode</label>
							<select class="custom-select select2bs4  <?php form_error('id_periode') and print('is-invalid') ?>" name="id_periode">
								<option value="">Pilih Periode</option>
								<?php foreach($periode as $data) : ?>
								<option value="<?= $data->id ?>" <?php set_value('id_periode', $vacation->id_periode) == $data->id and print('selected') ?>>
									<?= get_month_name($data->bulan)." ".$data->tahun ?>
								</option>
								<?php endforeach ?>
							</select>
							<div class="invalid-feedback">
								<?= form_error('id_periode') ?>
							</div>
						</div>

						<div class="form-group col-lg-9 row">
							<label for="name">Keterangan</label>
							<textarea class="form-control <?php form_error('keterangan', $vacation->keterangan) and print('is-invalid') ?>"
								name="keterangan"><?= set_value('keterangan', $vacation->keterangan) ?></textarea>
							<div class="invalid-feedback">
								<?= form_error('keterangan') ?>
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
