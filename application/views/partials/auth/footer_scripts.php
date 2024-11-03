
<script src="<?= site_url('assets/templates/modernize/libs/jquery/dist/jquery.min.js') ?>"></script>
<script src="<?= site_url('assets/templates/modernize/libs/jquery-validation/dist/jquery.validate.min.js') ?>"></script>
<script src="<?= site_url('assets/templates/modernize/js/app.min.js') ?>"></script>
<script src="<?= site_url('assets/templates/modernize/js/app.init.js') ?>"></script>
<script src="<?= site_url('assets/templates/modernize/libs/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= site_url('assets/templates/modernize/libs/simplebar/dist/simplebar.min.js') ?>"></script>
<script src="<?= site_url('assets/templates/modernize/js/sidebarmenu.js') ?>"></script>
<script src="<?= site_url('assets/templates/modernize/js/theme.js') ?>"></script>
<script src="<?= site_url('assets/templates/modernize/libs/sweetalert2/dist/sweetalert2.min.js') ?>"></script>
<script src="<?= site_url('assets/js/amagiloader.js') ?>"></script>
<script src="<?= site_url('assets/js/overall.js') ?>"></script>
<script src="<?= site_url('assets/modules/auth/overall.js') ?>"></script>
<!-- end js include path -->
<?php if (!empty($page_data['footer_scripts_path'])) : ?>
	<?php foreach ($page_data['footer_scripts_path'] as $value) : ?>
		<script src="<?= site_url('assets/' . $value . '.js?v=' . CURRENT_VERSION); ?>"></script>
	<?php endforeach; ?>
<?php endif; ?>
