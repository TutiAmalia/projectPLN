<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Import File Log</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?= site_url() ?>">Home</a></li>
					<li class="breadcrumb-item active">Import File Log</li>
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
				<form role="form" action="<?= site_url('presence') ?>" method="post" enctype="multipart/form-data">
					<div class="card-body">
						<div class="alert alert-info alert-dismissible col-lg-9">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h5><i class="icon fas fa-info-circle"></i> Informasi</h5>
							Sebelum melakukan import file data presensi pegawai, agar memperhatikan prosedur berikut:
							<ul>
								<li>Apabila periode yang dipilih memiliki <strong>paling sedikit 1 hari libur</strong> pada hari kerja (bukan hari libur yang bertepatan akhir pekan) maka perlu menambahkan datanya pada menu <strong>Hari Libur</strong></li>
								<li>Apabila ada pegawai yang mengajukan izin/cuti karena sakit atau keperluan lain pada periode yang hendak dipilih, maka harus menambahkan data izin pegawai tersebut ke menu <strong>Izin Cuti</strong></li>
								<li>Pastikan file log presensi yang akan diunggah telah lengkap satu periode (bulanan)</li>
								<li>Apabila terjadi <strong>Error</strong> saat proses import data, <strong>Save as File</strong> dengan format yang sama kemudian import file baru yang telah di save as</li>
							</ul>
						</div>
								
						<div class="form-group col-lg-9 row">
							<label>Periode</label>
							<select class="custom-select select2bs4  <?php form_error('id_periode') and print('is-invalid') ?>" name="id_periode">
								<option value="">Pilih Periode</option>
								<?php foreach($periode as $data) : ?>
								<option value="<?= $data->id ?>" <?php set_value('id_periode') == $data->id and print('selected') ?>>
									<?= get_month_name($data->bulan)." ".$data->tahun ?>
								</option>
								<?php endforeach ?>
							</select>
							<div class="invalid-feedback">
								<?= form_error('id_periode') ?>
							</div>
						</div>

						<div class="form-group col-lg-9 row">
							<label for="file-excel">File Log</label>
							<div class="custom-file d-block">
								<input type="file" class="custom-file-input <?php $this->session->flashdata('file_excel') and print('is-invalid') ?>" id="file-excel" name="file_excel">
								<label class="custom-file-label" for="file-excel">Pilih file</label>
								<div class="invalid-feedback">
									<?= $this->session->flashdata('file_excel') ?>
								</div>
							</div>
						</div>
					</div>
					<!-- /.card-body -->
					<div class="card-footer">
						<button type="submit" class="btn btn-primary"><i class="fa fa-file-upload"></i> Import</button>
					</div>
				</form>
			</div>
			<!-- /.card -->
		</div>
	</div>
</section>
<!-- /.content -->
