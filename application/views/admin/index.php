<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $title ?> - PLN Tello</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Font Awesome -->
	<?php $this->load->view('admin/component/source_css') ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed control-sidebar-slide-open text-sm">
	<div class="wrapper">

		<?php $this->load->view('admin/component/top_nav') ?>
		<?php $this->load->view('admin/component/sidebar') ?>
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<?php $this->load->view($page) ?>
		</div>
		<!-- /.content-wrapper -->
		<?php $this->load->view('admin/component/footer') ?>
	</div>
	<!-- ./wrapper -->
	<?php $this->load->view('admin/component/source_js') ?>	
	<script>
		$('#calendar').datetimepicker({
			format: 'L',
			inline: true
		})

	</script>
</body>

</html>
