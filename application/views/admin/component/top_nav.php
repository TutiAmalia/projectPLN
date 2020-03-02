<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
		</li>
	</ul>

	<!-- Right navbar links -->
	<ul class="navbar-nav ml-auto">
		<!-- Messages Dropdown Menu -->
		<li class="nav-item dropdown">
			<a class="nav-link" data-toggle="dropdown" href="#">
				<img src="<?= base_url('assets/adminlte/img/avatar5.png') ?>" class="img-circle elevation-1" alt="Foto Profil" width="30px">
				<span class="ml-2">Administrator</span>
			</a>
			<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right mt-1">
				<a href="<?= site_url('logout') ?>" class="dropdown-item">
					<i class="fas fa-sign-out-alt mr-2"></i> Keluar Aplikasi
				</a>
			</div>
		</li>
	</ul>
</nav>
<!-- /.navbar -->
