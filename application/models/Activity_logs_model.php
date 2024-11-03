<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Activity_logs_model extends CI_Model
{
	private $_table_name = 'activity_logs';

	public function __construct()
	{
		parent::__construct();
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
