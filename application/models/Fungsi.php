<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fungsi extends CI_Model {

	public function add_data($table,$data)
	{
    	$this->db->insert($table, $data);
		return $this->db->insert_id();
	}

	public function where_id($table, $where, $id)
	{
		$this->db->from($table);
		$this->db->where($where, $id);
		$query = $this->db->get();

		return $query->result_array();
	}

	public function where_id_ob($table, $where, $id)
	{
		$this->db->from($table);
		$this->db->where($where, $id);
		$query = $this->db->get();

		return $query->result();
	}

	public function where_id_ob_order($table, $where, $id)
	{
		$this->db->from($table);
		$this->db->where($where, $id);
		$this->db->order_by("id", "DESC");
		$query = $this->db->get();

		return $query->result();
	}

	public function delete_id($table, $id)
	{
		$this->db->where('id', $id);
		$this->db->delete($table);
	}

	public function edit_id($table, $id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update($table, $data);
	}

	
}
