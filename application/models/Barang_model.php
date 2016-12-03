<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

	public function data_barang($value='')
	{
		$query = $this->db->get('barang');
		return $query->result_array();
	}

	public function find_barang($id)
	{
		$this->db->from('barang');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function delete_barang($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('barang');
		return true;
	}

	public function input_barang($data)
	{
    	$this->db->insert('barang', $data);
		return $this->db->insert_id();
	}

	public function edit_barang($data, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('barang', $data);
	}

}

/* End of file Barang_model.php */
/* Location: ./application/models/Barang_model.php */