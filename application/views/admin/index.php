<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $title ?> - PLN Tello</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/jqvmap/jqvmap.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/css/adminlte.min.css') ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/daterangepicker/daterangepicker.css') ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/summernote/summernote-bs4.css') ?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed control-sidebar-slide-open text-sm">
<div class="wrapper">

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
		  <a href="#" class="dropdown-item">
				<i class="fas fa-sign-out-alt mr-2"></i> Keluar Aplikasi
		  </a>
		</div>
	  </li>
	</ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-info elevation-4">
	<!-- Brand Logo -->
	<a href="index3.html" class="brand-link">
	  <img src="<?= base_url('assets/adminlte/img/logo_pln.png') ?>" alt="Logo PLN" class="brand-image img-circle"
		   style="opacity: .8">
	  <span class="brand-text font-weight-light">PLN Tello</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">

	  <!-- Sidebar Menu -->
	  <nav class="mt-4">
		<ul class="nav nav-pills nav-sidebar flex-column nav-legacy nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
		  <!-- Add icons to the links using the .nav-icon class
			   with font-awesome or any other icon font library -->
		  <li class="nav-item has-treeview menu-open">
			<a href="#" class="nav-link active">
			  <i class="nav-icon fas fa-tachometer-alt"></i>
			  <p>
				Dashboard
				<i class="right fas fa-angle-left"></i>
			  </p>
			</a>
			<ul class="nav nav-treeview">
			  <li class="nav-item">
				<a href="./index.html" class="nav-link active">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Dashboard v1</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="./index2.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Dashboard v2</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="./index3.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Dashboard v3</p>
				</a>
			  </li>
			</ul>
		  </li>
		  <li class="nav-item">
			<a href="pages/widgets.html" class="nav-link">
			  <i class="nav-icon fas fa-th"></i>
			  <p>
				Widgets
				<span class="right badge badge-danger">New</span>
			  </p>
			</a>
		  </li>
		  <li class="nav-item has-treeview">
			<a href="#" class="nav-link">
			  <i class="nav-icon fas fa-copy"></i>
			  <p>
				Layout Options
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
		  <li class="nav-item has-treeview">
			<a href="#" class="nav-link">
			  <i class="nav-icon fas fa-chart-pie"></i>
			  <p>
				Charts
				<i class="right fas fa-angle-left"></i>
			  </p>
			</a>
			<ul class="nav nav-treeview">
			  <li class="nav-item">
				<a href="pages/charts/chartjs.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>ChartJS</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="pages/charts/flot.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Flot</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="pages/charts/inline.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Inline</p>
				</a>
			  </li>
			</ul>
		  </li>
		  <li class="nav-item has-treeview">
			<a href="#" class="nav-link">
			  <i class="nav-icon fas fa-tree"></i>
			  <p>
				UI Elements
				<i class="fas fa-angle-left right"></i>
			  </p>
			</a>
			<ul class="nav nav-treeview">
			  <li class="nav-item">
				<a href="pages/UI/general.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>General</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="pages/UI/icons.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Icons</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="pages/UI/buttons.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Buttons</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="pages/UI/sliders.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Sliders</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="pages/UI/modals.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Modals & Alerts</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="pages/UI/navbar.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Navbar & Tabs</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="pages/UI/timeline.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Timeline</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="pages/UI/ribbons.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Ribbons</p>
				</a>
			  </li>
			</ul>
		  </li>
		  <li class="nav-item has-treeview">
			<a href="#" class="nav-link">
			  <i class="nav-icon fas fa-edit"></i>
			  <p>
				Forms
				<i class="fas fa-angle-left right"></i>
			  </p>
			</a>
			<ul class="nav nav-treeview">
			  <li class="nav-item">
				<a href="pages/forms/general.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>General Elements</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="pages/forms/advanced.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Advanced Elements</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="pages/forms/editors.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Editors</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="pages/forms/validation.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Validation</p>
				</a>
			  </li>
			</ul>
		  </li>
		  <li class="nav-item has-treeview">
			<a href="#" class="nav-link">
			  <i class="nav-icon fas fa-table"></i>
			  <p>
				Tables
				<i class="fas fa-angle-left right"></i>
			  </p>
			</a>
			<ul class="nav nav-treeview">
			  <li class="nav-item">
				<a href="pages/tables/simple.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Simple Tables</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="pages/tables/data.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>DataTables</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="pages/tables/jsgrid.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>jsGrid</p>
				</a>
			  </li>
			</ul>
		  </li>
		  <li class="nav-header">EXAMPLES</li>
		  <li class="nav-item">
			<a href="pages/calendar.html" class="nav-link">
			  <i class="nav-icon far fa-calendar-alt"></i>
			  <p>
				Calendar
				<span class="badge badge-info right">2</span>
			  </p>
			</a>
		  </li>
		  <li class="nav-item">
			<a href="pages/gallery.html" class="nav-link">
			  <i class="nav-icon far fa-image"></i>
			  <p>
				Gallery
			  </p>
			</a>
		  </li>
		  <li class="nav-item has-treeview">
			<a href="#" class="nav-link">
			  <i class="nav-icon far fa-envelope"></i>
			  <p>
				Mailbox
				<i class="fas fa-angle-left right"></i>
			  </p>
			</a>
			<ul class="nav nav-treeview">
			  <li class="nav-item">
				<a href="pages/mailbox/mailbox.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Inbox</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="pages/mailbox/compose.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Compose</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="pages/mailbox/read-mail.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Read</p>
				</a>
			  </li>
			</ul>
		  </li>
		  <li class="nav-item has-treeview">
			<a href="#" class="nav-link">
			  <i class="nav-icon fas fa-book"></i>
			  <p>
				Pages
				<i class="fas fa-angle-left right"></i>
			  </p>
			</a>
			<ul class="nav nav-treeview">
			  <li class="nav-item">
				<a href="pages/examples/invoice.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Invoice</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="pages/examples/profile.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Profile</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="pages/examples/e_commerce.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>E-commerce</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="pages/examples/projects.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Projects</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="pages/examples/project_add.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Project Add</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="pages/examples/project_edit.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Project Edit</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="pages/examples/project_detail.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Project Detail</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="pages/examples/contacts.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Contacts</p>
				</a>
			  </li>
			</ul>
		  </li>
		  <li class="nav-item has-treeview">
			<a href="#" class="nav-link">
			  <i class="nav-icon far fa-plus-square"></i>
			  <p>
				Extras
				<i class="fas fa-angle-left right"></i>
			  </p>
			</a>
			<ul class="nav nav-treeview">
			  <li class="nav-item">
				<a href="pages/examples/login.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Login</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="pages/examples/register.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Register</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="pages/examples/forgot-password.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Forgot Password</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="pages/examples/recover-password.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Recover Password</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="pages/examples/lockscreen.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Lockscreen</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="pages/examples/legacy-user-menu.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Legacy User Menu</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="pages/examples/language-menu.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Language Menu</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="pages/examples/404.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Error 404</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="pages/examples/500.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Error 500</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="pages/examples/pace.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Pace</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="pages/examples/blank.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Blank Page</p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="starter.html" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Starter Page</p>
				</a>
			  </li>
			</ul>
		  </li>
		  <li class="nav-header">MISCELLANEOUS</li>
		  <li class="nav-item">
			<a href="https://adminlte.io/docs/3.0" class="nav-link">
			  <i class="nav-icon fas fa-file"></i>
			  <p>Documentation</p>
			</a>
		  </li>
		  <li class="nav-header">MULTI LEVEL EXAMPLE</li>
		  <li class="nav-item">
			<a href="#" class="nav-link">
			  <i class="fas fa-circle nav-icon"></i>
			  <p>Level 1</p>
			</a>
		  </li>
		  <li class="nav-item has-treeview">
			<a href="#" class="nav-link">
			  <i class="nav-icon fas fa-circle"></i>
			  <p>
				Level 1
				<i class="right fas fa-angle-left"></i>
			  </p>
			</a>
			<ul class="nav nav-treeview">
			  <li class="nav-item">
				<a href="#" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Level 2</p>
				</a>
			  </li>
			  <li class="nav-item has-treeview">
				<a href="#" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>
					Level 2
					<i class="right fas fa-angle-left"></i>
				  </p>
				</a>
				<ul class="nav nav-treeview">
				  <li class="nav-item">
					<a href="#" class="nav-link">
					  <i class="far fa-dot-circle nav-icon"></i>
					  <p>Level 3</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="#" class="nav-link">
					  <i class="far fa-dot-circle nav-icon"></i>
					  <p>Level 3</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="#" class="nav-link">
					  <i class="far fa-dot-circle nav-icon"></i>
					  <p>Level 3</p>
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="nav-item">
				<a href="#" class="nav-link">
				  <i class="far fa-circle nav-icon"></i>
				  <p>Level 2</p>
				</a>
			  </li>
			</ul>
		  </li>
		  <li class="nav-item">
			<a href="#" class="nav-link">
			  <i class="fas fa-circle nav-icon"></i>
			  <p>Level 1</p>
			</a>
		  </li>
		  <li class="nav-header">LABELS</li>
		  <li class="nav-item">
			<a href="#" class="nav-link">
			  <i class="nav-icon far fa-circle text-danger"></i>
			  <p class="text">Important</p>
			</a>
		  </li>
		  <li class="nav-item">
			<a href="#" class="nav-link">
			  <i class="nav-icon far fa-circle text-warning"></i>
			  <p>Warning</p>
			</a>
		  </li>
		  <li class="nav-item">
			<a href="#" class="nav-link">
			  <i class="nav-icon far fa-circle text-info"></i>
			  <p>Informational</p>
			</a>
		  </li>
		</ul>
	  </nav>
	  <!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
		<?php $this->load->view($page) ?>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
	<strong>Copyright &copy; 2020-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
	All rights reserved.
	<div class="float-right d-none d-sm-inline-block">
	  <b>Version</b> 3.0.2
	</div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('assets/plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- ChartJS -->
<script src="<?= base_url('assets/plugins/chart.js/Chart.min.js') ?>"></script>
<!-- Sparkline -->
<script src="<?= base_url('assets/plugins/sparklines/sparkline.js') ?>"></script>
<!-- JQVMap -->
<script src="<?= base_url('assets/plugins/jqvmap/jquery.vmap.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('assets/plugins/jquery-knob/jquery.knob.min.js') ?>"></script>
<!-- daterangepicker -->
<script src="<?= base_url('assets/plugins/moment/moment.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/daterangepicker/daterangepicker.js') ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
<!-- Summernote -->
<script src="<?= base_url('assets/plugins/summernote/summernote-bs4.min.js') ?>"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/adminlte/js/adminlte.js') ?>"></script>
<script>
	$('#calendar').datetimepicker({
    format: 'L',
    inline: true
  })
</script>
</body>
</html>
