<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Hari Libur</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?= site_url() ?>">Home</a></li>
					<li class="breadcrumb-item active">Hari Libur</li>
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
						<a href="<?= site_url('holiday') ?>"><i class="fas fa-arrow-left"></i>
							Kembali</a>
					</div>
					<div class="card-body">
						<div class="form-group col-lg-9 row">
							<label for="tanggal">Tanggal</label>
							<input class="form-control <?php form_error('tanggal') and print('is-invalid') ?>" type="text"
								name="tanggal" value="<?= set_value('tanggal', $holiday->tanggal) ?>" />
							<div class="invalid-feedback">
								<?= form_error('tanggal') ?>
							</div>
						</div>

						<div class="form-group col-lg-9 row">
							<label>Periode</label>
							<select class="custom-select select2bs4  <?php form_error('id_periode') and print('is-invalid') ?>" name="id_periode">
								<option value="">Pilih Periode</option>
								<?php foreach($periode as $data) : ?>
								<option value="<?= $data->id ?>" <?php set_value('id_periode',$holiday->id_periode) == $data->id and print('selected') ?>>
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
							<textarea class="form-control <?php form_error('keterangan') and print('is-invalid') ?>"
								name="keterangan"><?= set_value('keterangan', $holiday->keterangan) ?></textarea>
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
