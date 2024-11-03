<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Students extends CI_Controller
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
			$this->M_users->delete($this->_delete_additional, $post_data['id']);
			exit(json_encode(array(
				'status' => RESULT_SUCCESS,
				'message' => 'Student has been successfully deleted.'
			)));
		}
		show_404();
		die();
	}

	public function view($id)
	{
		$data['info'] = $info = $this->M_users->get($id);

		if (empty($info)) {
			show_404();
			die();
		}

		$data['page_data'] = array(
			'module' => 'Students',
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
		$this->load->view('modules/students/' . strtolower(__FUNCTION__), $data);
		$this->load->view('layouts/dashboard/footer', $data);
	}

	public function form($id = null)
	{
		if ($post_data = $this->input->post()) {

			if (!empty($id)) {
				$info_data = array(
						'first_name' => set_string_value($post_data['first_name']),
						'middle_name' => set_string_value($post_data['middle_name']),
						'last_name' => set_string_value($post_data['last_name']),
					) + $this->_update_additional;
				$this->M_users->update($info_data, $post_data['id']);
				exit(json_encode(array(
					'status' => RESULT_SUCCESS,
					'message' => 'Student profile has been successfully updated.'
				)));
			}

			$info_data = array(
					'username' => $post_data['username'],
					'password' => password_hash($post_data['password'], PASSWORD_DEFAULT),
					'first_name' => set_string_value($post_data['first_name']),
					'middle_name' => set_string_value($post_data['middle_name']),
					'last_name' => set_string_value($post_data['last_name']),
					'role_id' => ROLE_STUDENT,
					'is_activated' => BOOL_YES
				) + $this->_create_additional;
			$this->M_users->insert($info_data);
			exit(json_encode(array(
				'status' => RESULT_SUCCESS,
				'message' => 'Student profile has been successfully created.'
			)));
		}
		if (!empty($id)) {
			$data['info'] = $info = $this->M_users->get($id);
			if (empty($info)) {
				show_404();
				die();
			}
		}

		$data['page_data'] = array(
			'module' => 'Students',
			'section' => empty($id) ? 'Add Student' : 'Edit Student',
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
		$this->load->view('modules/students/' . strtolower(__FUNCTION__), $data);
		$this->load->view('layouts/dashboard/footer', $data);
	}

	public function index()
	{
		// Get data from the database while applying XSS filtering
		$data['items'] = $items = $this->security->xss_clean($this->M_users->get_all_by_role_id(ROLE_STUDENT));

		// Use html_escape to escape dynamic data for output in the view
		$data['page_data'] = array(
			'module' => html_escape('Students'),
			'section' => html_escape('Index'),
			'styles_path' => array(
				'modules/' . html_escape(strtolower(get_class())) . '/' . html_escape(strtolower(__FUNCTION__))
			),
			'header_scripts_path' => array(
				'modules/' . html_escape(strtolower(get_class())) . '/header_' . html_escape(strtolower(__FUNCTION__))
			),
			'footer_scripts_path' => array(
				'modules/' . html_escape(strtolower(get_class())) . '/footer_' . html_escape(strtolower(__FUNCTION__)),
			)
		);

		// Load the header view
		$this->load->view('layouts/dashboard/header', $data);

		// Load the main view for the module, ensure safe rendering of dynamic content inside the view
		$this->load->view('modules/students/' . strtolower(__FUNCTION__), $data);

		// Load the footer view
		$this->load->view('layouts/dashboard/footer', $data);
	}

}
