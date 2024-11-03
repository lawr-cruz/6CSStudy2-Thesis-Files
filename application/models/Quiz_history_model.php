<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Quiz_history_model extends CI_Model
{
	private $_table_name = 'quiz_history';

	public function __construct()
	{
		parent::__construct();
	}

	public function get_all_by_user_id($user_id)
	{
		return $this->db->select('a.*, b.first_name, b.middle_name, b.last_name')
			->from($this->_table_name . ' a')
			->join('users b', 'a.user_id = b.id')
			->where('a.user_id', $user_id)
			->where('a.deleted_at', null)
			->get()
			->result_array();
	}

	public function get_all_by_category_id($category_id)
	{
		return $this->db->select('a.*, b.first_name, b.middle_name, b.last_name, b.username')
			->from($this->_table_name . ' a')
			->join('users b', 'a.user_id = b.id')
			->where('a.category_id', $category_id)
			->where('a.deleted_at', null)
			->get()
			->result_array();
	}
	public function get_all_by_user_id_and_category_id_with_limit($user_id, $category_id, $quiz_history_date, $limit = 3)
	{
		return $this->db->select('a.*, b.first_name, b.middle_name, b.last_name, b.username')
			->from($this->_table_name . ' a')
			->join('users b', 'a.user_id = b.id')
			->where('a.user_id', $user_id)
			->where('a.category_id', $category_id)
			->where('a.deleted_at', null)
			->where('a.created_at >=', $quiz_history_date)
			->order_by('created_at', 'desc')
			->limit($limit)
			->get()
			->result_array();
	}

	public function get_all_by_user_id_and_category_id($user_id, $category_id)
	{
		return $this->db->select('a.*, b.first_name, b.middle_name, b.last_name, b.username')
			->from($this->_table_name . ' a')
			->join('users b', 'a.user_id = b.id')
			->where('a.user_id', $user_id)
			->where('a.category_id', $category_id)
			->where('a.deleted_at', null)
			->get()
			->result_array();
	}

	public function get_latest_by_user_id_and_category_id($user_id, $category_id)
	{
		return $this->db->where('user_id', $user_id)
			->where('category_id', $category_id)
			->where('deleted_at', null)
			->order_by('created_at', 'desc')
			->get($this->_table_name)
			->row_array();
	}

	public function get_all($limit = 100)
	{
		return $this->db->where('deleted_at', null)
			->limit($limit)
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
