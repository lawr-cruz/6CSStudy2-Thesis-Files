<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users_model extends CI_Model
{
	private $_table_name = 'users';

	public function __construct()
	{
		parent::__construct();
	}

	public function login($username, $password)
	{
		$user = $this->db->where('LOWER(username)', strtolower($username))
			->where('deleted_at', null)
			->get($this->_table_name)
			->row_array();

		if ($user != null) {
			if (password_verify($password, $user['password'])) return $user;

			return null;
		}

		return null;
	}

	public function get_all()
	{
		return $this->db->where('deleted_at', null)
			->get($this->_table_name)
			->result_array();
	}

	public function get_all_by_role_id($role_id)
	{
		return $this->db->where('role_id', $role_id)
			->where('deleted_at', null)
			->get($this->_table_name)
			->result_array();
	}

	public function get($id)
	{
		return $this->db->where('id', $id)
			->where('deleted_at', null)
			->get($this->_table_name)
			->row_array();
	}

	public function insert($data)
	{
		$this->db->insert($this->_table_name, $data);
		return $this->db->insert_id();
	}

	public function update($data, $id)
	{
		$this->db->where('id', $id)
			->update($this->_table_name, $data);

		return $id;
	}

	public function delete($data, $id)
	{
		$this->db->where('id', $id)
			->update($this->_table_name, $data);

		return $id;
	}
}
