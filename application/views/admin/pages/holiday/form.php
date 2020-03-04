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
<div class="card card-primary">
    <!-- form start -->
    <form role="form">
    <div class="card-body">
        <form action="<?php echo site_url('admin/pages/holiday/add') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input class="form-control <?php echo form_error('tanggal') ? 'is-invalid':'' ?>"
                    type="text" name="tanggal" />
                <div class="invalid-feedback">
                    <?php echo form_error('tanggal') ?>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-6">
                    <!-- select -->
                    <div class="form-group">
                    <label>Periode</label>
                    <select class="custom-select">
                        <?php foreach($holiday as $data) : ?>
                            <option value="<?= $data->id ?>"><?= $data->bulan." / ".$data->tahun ?></option>
                        <?php endforeach ?>
                    </select>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="name">Keterangan</label>
                <textarea class="form-control <?php echo form_error('ket') ? 'is-invalid':'' ?>"
                    name="ket"></textarea>
                <div class="invalid-feedback">
                    <?php echo form_error('description') ?>
                </div>
			</div>
        </form>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="save" class="btn btn-primary">Simpan</button>
    </div>
    </form>
</div>
<!-- /.card -->
<!-- /.content -->

