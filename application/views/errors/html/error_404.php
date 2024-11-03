<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">

<head>
	<!-- Required meta tags -->
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Favicon icon-->
	<link
		rel="shortcut icon"
		type="image/png"
		href="<?=site_url('assets/images/scitology_logo.png')?>"
	/>

	<!-- Core Css -->
	<link rel="stylesheet" href="<?=site_url('assets/templates/modernize/css/styles.css')?>" />

	<title><?= SYSTEM_TITLE; ?></title>
</head>

<body>
<!-- Preloader -->
<div class="preloader">
	<img src="<?=site_url('assets/images/scitology_logo.png')?>" alt="loader" class="lds-ripple img-fluid" />
</div>
<div id="main-wrapper">
	<div class="position-relative overflow-hidden min-vh-100 w-100 d-flex align-items-center justify-content-center">
		<div class="d-flex align-items-center justify-content-center w-100">
			<div class="row justify-content-center w-100">
				<div class="col-lg-4">
					<div class="text-center">
						<img src="<?=site_url('assets/templates/modernize/images/backgrounds/errorimg.svg')?>" alt="" class="img-fluid" width="500">
						<h1 class="fw-semibold mb-7 fs-9">Opps!!!</h1>
						<h4 class="fw-semibold mb-7">This page you are looking for could not be found.</h4>
						<?php if (!isset($_SESSION['user'])) : ?>
							<a class="btn btn-primary" href="<?= site_url('auth')?>" role="button">Go Back to Home</a>
						<?php else: ?>
						<?php if ($_SESSION['user']['role_id'] == ROLE_ADMINISTRATOR) :  ?>
								<a class="btn btn-primary" href="<?= site_url('dashboard/admin_main')?>" role="button">Go Back to Home</a>
						<?php else: ?>
								<a class="btn btn-primary" href="<?= site_url('dashboard/student_main')?>" role="button">Go Back to Home</a>
						<?php endif; ?>
						<?php endif; ?>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="dark-transparent sidebartoggler"></div>
<!-- Import Js Files -->

<script src="<?=site_url('assets/templates/modernize/libs/jquery/dist/jquery.min.js')?>"></script>
<script src="<?=site_url('assets/templates/modernize/js/app.min.js')?>"></script>
<script src="<?=site_url('assets/templates/modernize/js/app.init.js')?>"></script>
<script src="<?=site_url('assets/templates/modernize/libs/bootstrap/dist/js/bootstrap.bundle.min.js')?>"></script>
<script src="<?=site_url('assets/templates/modernize/libs/simplebar/dist/simplebar.min.js')?>"></script>

<script src="<?=site_url('assets/templates/modernize/js/sidebarmenu.js')?>"></script>
<script src="<?=site_url('assets/templates/modernize/js/theme.js')?>"></script>

</body>

</html>
