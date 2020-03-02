<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PLN TELLO | Log in</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?= base_url('assets/adminlte/img/logo_pln.png') ?>">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css')?>">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?= base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/plugins/sweetalert2/sweetalert2.min.css')?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('assets/adminlte/css/adminlte.min.css')?>">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body>
	<div class="hold-transition login-page">
		<div class="login-box">
			<div class="login-logo">
				<img src="<?= base_url('assets/adminlte/img/logo_pln.png')?>" width="100" height="auto">
			</div>
			<!-- /.login-logo -->
			<div class="card">
				<div class="card-body login-card-body">
					<p class="login-box-msg">Silahkan Login</p>

					<form action="<?= site_url('login/process')?>" method="post" autocomplete="off">
						<div class="input-group mb-3">
							<input type="text" class="form-control" placeholder="Username" name="username" required>
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-user"></span>
								</div>
							</div>
						</div>
						<div class="input-group mb-3">
							<input type="password" class="form-control" placeholder="Password" name="password" required>
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-lock"></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-8">
								<div class="icheck-primary">
									<input type="checkbox" id="remember">
									<label for="remember">
										Ingatkan Saya
									</label>
								</div>
							</div>
							<!-- /.col -->
							<div class="col-4">
								<button type="submit" class="btn btn-primary btn-block">Masuk</button>
							</div>
							<!-- /.col -->
						</div>
					</form>
				</div>
				<!-- /.login-card-body -->
			</div>
		</div>
		<!-- /.login-box -->
	</div>

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
</body>

</html>
