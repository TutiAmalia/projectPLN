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
						<p>Pegawai <i class="fas fa-angle-left right"></i></p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= site_url('employee') ?>" class="nav-link <?php $this->uri->segment(1) == 'employee' and $this->uri->segment(2) == '' and print('active') ?>">
								<i class="fa fa-table nav-icon"></i>
								<p>Lihat daftar pegawai</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= site_url('employee/add') ?>" class="nav-link <?php $this->uri->segment(1) == 'employee' and $this->uri->segment(2) == 'add' and print('active') ?>">
								<i class="fa fa-plus nav-icon"></i>
								<p>Tambah pegawai</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item has-treeview <?php $this->uri->segment(1) == 'holiday' and print('menu-open') ?>">
					<a href="#" class="nav-link <?php $this->uri->segment(1) == 'holiday' and print('active') ?>">
						<i class="nav-icon fa fa-calendar-alt"></i>
						<p>Hari Libur <i class="fas fa-angle-left right"></i></p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= site_url('holiday/clear') ?>" class="nav-link <?php $this->uri->segment(1) == 'holiday' and $this->uri->segment(2) == '' and print('active') ?>">
								<i class="fa fa-table nav-icon"></i>
								<p>Lihat daftar hari libur</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= site_url('holiday/add') ?>" class="nav-link <?php $this->uri->segment(1) == 'holiday' and $this->uri->segment(2) == 'add' and print('active') ?>">
								<i class="fa fa-plus nav-icon"></i>
								<p>Tambah hari libur</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item has-treeview <?php $this->uri->segment(1) == 'vacation' and print('menu-open') ?>">
					<a href="#" class="nav-link <?php $this->uri->segment(1) == 'vacation' and print('active') ?>">
						<i class="nav-icon fa fa-calendar-alt"></i>
						<p>Izin<i class="fas fa-angle-left right"></i></p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= site_url('vacation/clear') ?>" class="nav-link <?php $this->uri->segment(1) == 'vacation' and $this->uri->segment(2) == '' and print('active') ?>">
								<i class="fa fa-table nav-icon"></i>
								<p>Lihat daftar pegawai izin</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= site_url('vacation/add') ?>" class="nav-link <?php $this->uri->segment(1) == 'vacation' and $this->uri->segment(2) == 'add' and print('active') ?>">
								<i class="fa fa-plus nav-icon"></i>
								<p>Tambah pegawai izin</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item has-treeview <?php $this->uri->segment(1) == 'presence' and print('menu-open') ?>">
					<a href="#" class="nav-link <?php $this->uri->segment(1) == 'presence' and print('active') ?>">
						<i class="nav-icon fa fa-sliders-h"></i>
						<p>
							Data Presensi
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= site_url('presence/clear') ?>" class="nav-link <?php $this->uri->segment(1) == 'presence' and $this->uri->segment(2) == '' and $this->uri->segment(3) == '' and print('active') ?>">
								<i class="fa fa-file-upload nav-icon"></i>
								<p>Import file</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= site_url('presence/clear/report') ?>" class="nav-link <?php $this->uri->segment(1) == 'presence' and $this->uri->segment(2) == 'report' and $this->uri->segment(3) == '' and print('active') ?>">
								<i class="fa fa-file-pdf nav-icon"></i>
								<p>Laporan presensi</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= site_url('presence/clear/manual') ?>" class="nav-link <?php $this->uri->segment(1) == 'presence' and $this->uri->segment(2) == 'report' and $this->uri->segment(3) == 'manual' and print('active') ?>">
								<i class="fa fa-file-upload nav-icon"></i>
								<p>Manual Import File</p>
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
