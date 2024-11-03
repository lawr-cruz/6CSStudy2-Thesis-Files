<script type="text/javascript">
	const BASE_URL = '<?= base_url(); ?>';
	const RESULT_FAILED = '<?= RESULT_FAILED; ?>';
	const RESULT_SUCCESS = '<?= RESULT_SUCCESS; ?>';
	const RESULT_STATUS = '<?= $this->session->userdata('result_status'); ?>';
	const RESULT_MESSAGE = '<?= $this->session->userdata('result_message'); ?>';
	<?php
	$this->session->unset_userdata('result_status');
	$this->session->unset_userdata('result_message');
	?>
</script>
