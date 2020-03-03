<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-info elevation-4">
	<!-- Brand Logo -->
	<a href="<?= site_url() ?>" class="brand-link">
		<img src="<?= base_url('assets/adminlte/img/logo_pln.png') ?>" alt="Logo PLN" class="brand-image img-circle"
			style="opacity: .8">
		<span class="brand-text font-weight-bold">PLN Tello</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">

		<div class="user-panel mt-2 pb-2 mb-2 d-flex">
			<div class="info">
				<span class="d-block text-white font-weight-bold">MENU UTAMA</span>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column nav-legacy" data-widget="treeview" role="menu"
				data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
				 with font-awesome or any other icon font library -->
				 <li class="nav-item">
					<a href="<?= site_url('dashboard') ?>" class="nav-link <?php $this->uri->segment(1) == 'dashboard' and print('active') ?>">
						<i class="nav-icon fa fa-home"></i>
						<p>Dashboard</p>
					</a>
				</li>
				<li class="nav-item has-treeview <?php $this->uri->segment(1) == 'employee' and print('menu-open') ?>">
					<a href="#" class="nav-link <?php $this->uri->segment(1) == 'employee' and print('active') ?>">
						<i class="nav-icon fa fa-user-friends"></i>
						<p>Manajemen Pegawai <i class="fas fa-angle-left right"></i></p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= site_url('employee') ?>" class="nav-link <?php $this->uri->segment(1) == 'employee' and print('active') ?>">
								<i class="fa fa-table nav-icon"></i>
								<p>Lihat daftar pegawai</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="fa fa-plus nav-icon"></i>
								<p>Tambah pegawai</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item has-treeview">
					<a href="#" class="nav-link">
						<i class="nav-icon fa fa-sliders-h"></i>
						<p>
							Pengaturan Data
							<i class="fas fa-angle-left right"></i>
							<span class="badge badge-info right">6</span>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="pages/layout/top-nav.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Top Navigation</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/layout/top-nav-sidebar.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Top Navigation + Sidebar</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/layout/boxed.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Boxed</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/layout/fixed-sidebar.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Fixed Sidebar</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/layout/fixed-topnav.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Fixed Navbar</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/layout/fixed-footer.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Fixed Footer</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/layout/collapsed-sidebar.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Collapsed Sidebar</p>
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
