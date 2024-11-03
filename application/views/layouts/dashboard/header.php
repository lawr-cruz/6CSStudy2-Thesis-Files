<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="<?= SYSTEM_TITLE; ?>" />
	<meta name="author" content="<?= SYSTEM_TITLE; ?>" />
	<title><?= $page_data['module'] . ' ' . $page_data['section'] . ' | ' . SYSTEM_TITLE ;?></title>
	<?php $this->load->view('partials/dashboard/styles') ?>
	<?php $this->load->view('partials/dashboard/header_scripts') ?>
</head>

<body>
<?php $this->load->vieW('partials/preloader_partial') ?>
<div id="main-wrapper">
	<?php $this->load->vieW('partials/dashboard/left_sidebar_partial') ?>
	<div class="page-wrapper">

		<?php $this->load->view('partials/dashboard/headerbar_partial') ?>
		<?php $this->load->view('partials/dashboard/train_baseline_modal_partial') ?>
