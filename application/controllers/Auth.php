<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
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

	public function update_profile()
	{
		if ($post_data = $this->input->post()) {
			$info_data = array(
					'first_name' => set_string_value($post_data['first_name']),
					'middle_name' => set_string_value($post_data['middle_name']),
					'last_name' => set_string_value($post_data['last_name']),
					'contact_no' => $post_data['contact_no'],
					'address' => $post_data['address'],
					'gender' => $post_data['gender'],
					'dob' => $post_data['dob']
				) + $this->_update_additional;
			$this->M_users->update($info_data, $this->session->userdata('user')['id']);
			exit(json_encode(array(
				'status' => RESULT_SUCCESS,
				'message' => 'Account profile has been successfully updated.'
			)));
		}
		$data['info'] = $info = $this->M_users->get($this->session->userdata('user')['id']);
		$data['page_data'] = array(
			'module' => 'Auth',
			'section' => 'Update Profile',
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
		$this->load->view('modules/auth/' . strtolower(__FUNCTION__), $data);
		$this->load->view('layouts/dashboard/footer', $data);
	}

	public function index()
	{
		if ($post_data = $this->input->post()) {
			$user = $this->M_users->login($post_data['username'], $post_data['password']);

			if (empty($user)) {
				exit(json_encode(
					array(
						'status' => RESULT_FAILED,
						'message' => 'Username/password is invalid.'
					)
				));
			}

			if ($user['is_activated'] != BOOL_YES) {
				exit(json_encode(
					array(
						'status' => RESULT_FAILED,
						'message' => 'It seems that your account is not activated. Please check your email inbox to activate your account.'
					)
				));
			}

			switch ($user['role_id']) {
				case ROLE_ADMINISTRATOR:
					$redirect_url = site_url('dashboard/admin_main');
					break;
				case ROLE_STUDENT:
					$redirect_url = site_url('dashboard/student_main');
					break;
				default:
					$redirect_url = '';
					break;
			}

			$logs_data = array(
				'action_taken' => 'LOGIN',
				'created_by' => $user['id'],
				'created_at' => DATETIME_NOW
			);
			insert_activity_logs($logs_data);


			$this->session->set_userdata('user', $user);
			exit(json_encode(
				array(
					'status' => RESULT_SUCCESS,
					'message' => 'Account has been successfully logged in.',
					'redirect_url' => $redirect_url
				)
			));
		}
		$data['page_data'] = array(
			'module' => 'Auth',
			'section' => 'Login',
			'styles_path' => array(
				'modules/' . strtolower(get_class()) . '/' . strtolower(__FUNCTION__)
			),
			'header_scripts_path' => array(
				'modules/' . strtolower(get_class()) . '/header_' . strtolower(__FUNCTION__)
			),
			'footer_scripts_path' => array(
				'modules/' . strtolower(get_class()) . '/footer_' . strtolower(__FUNCTION__)
			)
		);
		$this->load->view('layouts/auth/header', $data);
		$this->load->view('modules/auth/index', $data);
		$this->load->view('layouts/auth/footer', $data);
	}

	public function logout()
	{
		$logs_data = array(
				'action_taken' => 'LOGOUT'
			) + $this->_create_additional;
		insert_activity_logs($logs_data);

		$this->session->unset_userdata('user');
		$this->session->set_userdata('result_status', RESULT_SUCCESS);
		$this->session->set_userdata('result_message', 'Account has been successfully logged out.');
		redirect('auth');
	}
}
