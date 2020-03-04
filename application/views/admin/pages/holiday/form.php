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
    <div class="card-header">
    <h3 class="card-title">Hari Libur</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form">
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputDate">Tanggal</label>
            <input type="text" class="form-control" id="exampleInputDate">
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
            <label for="exampleInputKet">Keterangan</label>
            <input type="text" class="form-control" id="exampleInputKet">
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="save" class="btn btn-primary">Simpan</button>
    </div>
    </form>
</div>
<!-- /.card -->
<!-- /.content -->