<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Questions extends CI_Controller
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


	public function delete()
	{
		if ($post_data = $this->input->post()) {
			$this->M_questions->delete($this->_delete_additional, $post_data['id']);
			exit(json_encode(array(
				'status' => RESULT_SUCCESS,
				'message' => 'Question has been successfully deleted.'
			)));
		}
		show_404();
		die();
	}

	public function view($id)
	{
		$data['info'] = $info = $this->M_questions->get($id);

		if (empty($info)) {
			show_404();
			die();
		}

		$data['page_data'] = array(
			'module' => 'Questions',
			'section' => 'View',
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
		$this->load->view('modules/questions/' . strtolower(__FUNCTION__), $data);
		$this->load->view('layouts/dashboard/footer', $data);
	}

	public function form($id = null)
	{
		if ($post_data = $this->input->post()) {

			if (!empty($id)) {
				$info_data = array(
						'question' => $post_data['question'],
						'category_id' => $post_data['category_id'],
						'option_a' => set_string_value($post_data['option_a']),
						'option_b' => set_string_value($post_data['option_b']),
						'option_c' => set_string_value($post_data['option_c']),
						'option_d' => set_string_value($post_data['option_d']),
						'answer' => set_string_value($post_data['answer'])
					) + $this->_update_additional;
				$this->M_questions->update($info_data, $post_data['id']);
				exit(json_encode(array(
					'status' => RESULT_SUCCESS,
					'message' => 'Question has been successfully updated.'
				)));
			}

			$info_data = array(
					'question' => $post_data['question'],
					'category_id' => $post_data['category_id'],
					'option_a' => set_string_value($post_data['option_a']),
					'option_b' => set_string_value($post_data['option_b']),
					'option_c' => set_string_value($post_data['option_c']),
					'option_d' => set_string_value($post_data['option_d']),
					'answer' => set_string_value($post_data['answer'])
				) + $this->_create_additional;
			$this->M_questions->insert($info_data);
			exit(json_encode(array(
				'status' => RESULT_SUCCESS,
				'message' => 'Question has been successfully created.'
			)));
		}
		if (!empty($id)) {
			$data['info'] = $info = $this->M_questions->get($id);
			if (empty($info)) {
				show_404();
				die();
			}
		}

		$data['page_data'] = array(
			'module' => 'Questions',
			'section' => empty($id) ? 'Add Question' : 'Edit Question',
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
		$this->load->view('modules/questions/' . strtolower(__FUNCTION__), $data);
		$this->load->view('layouts/dashboard/footer', $data);
	}

	public function index()
	{
		$data['items'] = $items = $this->M_questions->get_all();
		$data['page_data'] = array(
			'module' => 'Questions',
			'section' => 'Index',
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
		$this->load->view('modules/questions/' . strtolower(__FUNCTION__), $data);
		$this->load->view('layouts/dashboard/footer', $data);
	}

}
