<?php $this->load->view('partials/global_js') ?>
<?php if (!empty($page_data['header_scripts_path'])) : ?>
	<?php foreach ($page_data['header_scripts_path'] as $value) : ?>
		<script src="<?= site_url('assets/' . $value . '.js?v=' . CURRENT_VERSION); ?>"></script>
	<?php endforeach; ?>
<?php endif; ?>
