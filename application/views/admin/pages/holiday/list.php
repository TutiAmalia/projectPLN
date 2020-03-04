<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>List Hari Libur</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?= site_url() ?>">Home</a></li>
					<li class="breadcrumb-item active">Haru=i Libur</li>
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
				<div class="card-body table-responsive">
					<table id="list-pegawai" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th style="width: 20px">No</th>
								<th>Tanggal</th>
								<th>Bulan</th>
                                <th>Tahun</th>
                                <th>Ket</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1 ?>
							<?php foreach($employees as $data) : ?>
								<tr>
									<td><?= $no ?></td>
									<td><?= $data->tanggal ?></td>
                                    <td><?= $data->bulan ?></td>
                                    <td><?= $data->tahun ?></td>
                                    <td><?= $data->ket ?></td>
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
