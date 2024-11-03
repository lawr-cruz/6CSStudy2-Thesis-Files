<!-- Core Css -->
<link rel="stylesheet" href="<?= site_url('assets/templates/modernize/css/styles.css')?>" />
<link rel="stylesheet" href="<?= site_url('assets/templates/modernize/libs/sweetalert2/dist/sweetalert2.min.css')?>" />
<link rel="stylesheet" href="<?= site_url('assets/templates/modernize/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css')?>" />
<link href='https://api.mapbox.com/mapbox-gl-js/v3.4.0/mapbox-gl.css' rel='stylesheet' />
<link rel="stylesheet" href="<?= site_url('assets/css/overall.css?v=' . CURRENT_VERSION)?>" />
<!-- favicon -->
<link rel="shortcut icon" href="<?= site_url('assets/images/scitology_logo.png') ?>"/>
<?php if (!empty($page_data['styles_path'])) : ?>
	<?php foreach ($page_data['styles_path'] as $value) : ?>
		<link href="<?= site_url('assets/') . $value . '.css?v=' . CURRENT_VERSION ?>" rel="stylesheet">
	<?php endforeach; ?>
<?php endif; ?>