<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Scores extends CI_Controller
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
	public function my_score_history($category_id)
	{
		$data['items'] = $items = $this->M_quiz_history->get_all_by_user_id_and_category_id($this->session->userdata('user')['id'], $category_id);
		$data['page_data'] = array(
			'module' => 'Scores',
			'section' => 'My Score History',
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
		$this->load->view('modules/scores/' . strtolower(__FUNCTION__), $data);
		$this->load->view('layouts/dashboard/footer', $data);
	}

	public function overall_score_history($category_id)
	{
		$data['items'] = $items = $this->M_quiz_history->get_all_by_category_id($category_id);
		$data['page_data'] = array(
			'module' => 'Scores',
			'section' => 'Overall Score History',
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
		$this->load->view('modules/scores/' . strtolower(__FUNCTION__), $data);
		$this->load->view('layouts/dashboard/footer', $data);
	}
}
