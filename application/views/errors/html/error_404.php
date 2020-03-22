<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $heading ?></title>
	<link rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap/css/bootstrap.min.css') ?>">
	<style>
	/*======================
    404 page
=======================*/
	.page_404 {
		padding: 40px 0;
		background: #fff;
		font-family: 'Montserrat', serif;
	}

	.page_404 img {
		width: 100%;
	}

	.four_zero_four_bg {

		background-image: url("<?= base_url('assets/own/404.gif') ?>");
		height: 400px;
		background-position: center;
	}

	.four_zero_four_bg h1 {
		font-size: 80px;
	}

	.four_zero_four_bg h3 {
		font-size: 80px;
	}

	.link_404 {
		color: #fff !important;
		padding: 10px 20px;
		background: #39ac31;
		margin: 20px 0;
		display: inline-block;
	}

	.contant_box_404 {
		margin-top: -50px;
	}

</style>
</head>


<body>
	<section class="page_404">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 justify-content-center align-items-center text-center">
					<div class="col-sm-10 mx-auto">
						<div class="four_zero_four_bg">
							<h1 class="font-weight-bold">404</h1>
						</div>

						<div class="contant_box_404">
							<h3 class="h2 font-weight-bold">
								Look like you're lost
							</h3>
							<p>the page you are looking for not avaible!</p>
							<a href="<?= site_url() ?>" class="link_404">Go to Home</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>

</html>
