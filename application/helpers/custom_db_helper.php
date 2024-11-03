<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('get_person_name')) {
	function get_person_name($user_id)
	{
		$CI = &get_instance();
		$CI->load->model('Users_model', 'M_users');
		$user = $CI->M_users->get($user_id);

		if (empty($user)) return null;

		if (empty($user['last_name']))
		{
			return $user['first_name'];
		}

		return $user['last_name'] . ', ' . $user['first_name'];
	}
}

if (!function_exists('get_profile_username')) {
	function get_profile_username($user_id)
	{
		$CI = &get_instance();
		$CI->load->model('Users_model', 'M_users');
		$user = $CI->M_users->get($user_id);

		if (empty($user)) return null;


		return $user['username'];
	}
}

if (!function_exists('get_first_name')) {
	function get_first_name($user_id)
	{
		$CI = &get_instance();
		$CI->load->model('Users_model', 'M_users');
		$user = $CI->M_users->get($user_id);

		if (empty($user)) return null;

		return $user['first_name'];
	}
}


if (!function_exists('count_all')) {
	function count_all($tbl_name)
	{
		$CI = &get_instance();
		return $CI->db->where('deleted_at', null)
			->get($tbl_name)
			->num_rows();
	}
}

if (!function_exists('count_all_activity_logs_by_user_id')) {
	function count_all_activity_logs_by_user_id($user_id)
	{
		$CI = &get_instance();
		return $CI->db->where('created_by', $user_id)
			->where('deleted_at', null)
			->get('activity_logs')
			->num_rows();
	}
}

if (!function_exists('count_all_users_by_role_id')) {
	function count_all_users_by_role_id($role_id)
	{
		$CI = &get_instance();
		return $CI->db->where('role_id', $role_id)
			->where('deleted_at', null)
			->get('users')
			->num_rows();
	}
}


if (!function_exists('get_name_by_id')) {
	function get_name_by_id($id, $table_name)
	{
		$CI = &get_instance();
		$data = $CI->db->where('id', $id)
			->where('deleted_at', null)
			->get($table_name)
			->row_array();

		if (empty($data)) return null;

		return $data['name'];
	}
}

if (!function_exists('get_all_activity_logs')) {
	function get_all_activity_logs($limit = 5)
	{
		$CI = &get_instance();
		return $CI->db->where('deleted_at', null)
			->order_by('created_at', 'desc')
			->limit($limit)
			->get('activity_logs')
			->result_array();
	}
}

if (!function_exists('get_all_activity_logs_by_user_id')) {
	function get_all_activity_logs_by_user_id($user_id, $limit = 5)
	{
		$CI = &get_instance();
		return $CI->db->where('created_by', $user_id)
			->where('deleted_at', null)
			->order_by('created_at', 'desc')
			->limit($limit)
			->get('activity_logs')
			->result_array();
	}
}



if (!function_exists('get_all_users_not_in_id')) {
	function get_all_users_not_in_id($id)
	{
		$CI = &get_instance();
		return $CI->db->where('id !=', $id)
			->where('id !=', 1)
			->where('deleted_at', null)
			->get('users')
			->result_array();
	}
}


if (!function_exists('insert_activity_logs')) {
	function insert_activity_logs($data)
	{
		$CI = &get_instance();
		$CI->db->insert('activity_logs', $data);
		return $CI->db->insert_id();
	}
}


if (!function_exists('get_column_value')) {
	function get_column_value($id, $table_name, $column)
	{
		$CI = &get_instance();
		return $CI->db->where('id', $id)
			->get($table_name)
			->row_array()[$column];
	}
}

if (!function_exists('get_all_top_scores')) {
	function get_all_top_scores($limit = 3)
	{
		$CI = &get_instance();
		return $CI->db->select('category_id, score, no_of_questions, created_by')
			->where('deleted_at', null)
			->limit($limit)
			->order_by('score', 'desc')
			->get('quiz_history')
			->result_array();
	}
}
