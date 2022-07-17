<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_galeri extends CI_Model {

	public function get() {
		return $this->db->get('tb_produk')->result();
	}

	public function insert($data, $table) {
		$this->db->insert($table, $data);
	}

	public function edit($id, $data, $table) {
		$this->db->where($id);
		$this->db->update($table, $data);
	}

	public function delete($id, $table) {
		$this->db->where_in('id', $id);
		$this->db->delete($table);
	}

	public function getFoto() {
		$query = $this->db->get_where('tb_produk',array('kategori'=>'foto'));
        return $query->result();  
	}

	public function getFotoLimit() {
		$this->db->order_by('created_dt', 'ASC');
        $this->db->limit(6);
		$query = $this->db->get_where('tb_produk');
        return $query->result();  
	}

	public function getVideo() {
		$query = $this->db->get_where('tb_m_galeri',array('kategori'=>'video'));
        return $query->result();  
	}

	public function countFoto()
	{
		$query = $this->db->query('SELECT * FROM tb_m_galeri WHERE kategori = "foto" ');
		$total = $query->num_rows();
		return $total;
	}

	public function countVideo()
	{
		$query = $this->db->query('SELECT * FROM tb_m_galeri WHERE kategori = "video" ');
		$total = $query->num_rows();
		return $total;
	}

}