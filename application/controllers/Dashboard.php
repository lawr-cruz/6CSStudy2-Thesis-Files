<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->_create_additional = array(
			'created_by' => isset($_SESSION['user']) ? $this->session->userdata('user')['id'] : DEFAULT_ADMIN_ID,
			'created_at' => DATETIME_NOW
		);

		$this->_update_additional = array(
			'updated_by' => isset($_SESSION['user']) ? $this->session->userdata('user')['id'] : DEFAULT_ADMIN_ID,
			'updated_at' => DATETIME_NOW
		);

		$this->_delete_additional = array(
			'deleted_by' => isset($_SESSION['user']) ? $this->session->userdata('user')['id'] : DEFAULT_ADMIN_ID,
			'deleted_at' => DATETIME_NOW
		);
	}

	public function assign_current_location()
	{
		if ($post_data = $this->input->post()) {
			$this->session->set_userdata('current_longitude', $post_data['longitude']);
			$this->session->set_userdata('current_latitude', $post_data['latitude']);
		} else{
			show_404();
		}
	}
	public function student_main()
	{
		$data['page_data'] = array(
			'module' => 'Dashboard',
			'section' => 'Main',
			'styles_path' => array(
				'modules/' . strtolower(get_class()) . '/' . strtolower(__FUNCTION__)
			),
			'header_scripts_path' => array(
				'modules/' . strtolower(get_class()) . '/header_' . strtolower(__FUNCTION__)
			),
			'footer_scripts_path' => array(
				'modules/' . strtolower(get_class()) . '/footer_' . strtolower(__FUNCTION__),
			)
		);
		$this->load->view('layouts/dashboard/header', $data);
		$this->load->view('modules/dashboard/' . strtolower(__FUNCTION__), $data);
		$this->load->view('layouts/dashboard/footer', $data);
	}

	public function admin_main()
	{
		$data['page_data'] = array(
			'module' => 'Dashboard',
			'section' => 'Main',
			'styles_path' => array(
				'modules/' . strtolower(get_class()) . '/' . strtolower(__FUNCTION__)
			),
			'header_scripts_path' => array(
				'modules/' . strtolower(get_class()) . '/header_' . strtolower(__FUNCTION__)
			),
			'footer_scripts_path' => array(
				'modules/' . strtolower(get_class()) . '/footer_' . strtolower(__FUNCTION__),
			)
		);
		$this->load->view('layouts/dashboard/header', $data);
		$this->load->view('modules/dashboard/' . strtolower(__FUNCTION__), $data);
		$this->load->view('layouts/dashboard/footer', $data);
	}

	public function predict_csv($uploaded_csv_path)
	{
		// Simulating loading and preprocessing the data

		$data = array(
			'Previous Score' => 0,
			'Current Score' => 5,
		);

// Extracting scores
		$previous_scores = array_column($data, 'Previous Score');
		$current_scores = array_column($data, 'Current Score');

// Simulating normalization (MinMaxScaler)
		$scaler = new MinMaxScaler();
		$scores_scaled = $scaler->fit_transform($previous_scores);

// Preparing the data for LSTM
		$X = [];
		$y = [];
		for ($i = 1; $i < count($scores_scaled); $i++) {
			$X[] = [$scores_scaled[$i - 1]];
			$y[] = $scores_scaled[$i];
		}

// Creating and training the LSTM model
		$model = new LSTM(50);
		$model->fit($X, $y, 200);

// Making a prediction
		$predicted_scaled = $model->predict($X, $uploaded_csv_path);
		$predicted_score = $scaler->inverse_transform();
		$_SESSION['predicted_results'] = $predicted_score;
		echo "Predicted future score: " . $predicted_score[0] . "\n";
	}
}
