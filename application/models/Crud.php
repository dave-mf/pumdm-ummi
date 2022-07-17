<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud extends CI_Model {

	public function get($table) {
		return $this->db->get($table)->result();
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

	public function getById($table,$id)
	{
		return $this->db->get_where($table, $id)->result();
	}

	public function getMateriId($id)
	{
		return $this->db->get_where('tb_m_materi', array('id'=>$id));
	}

	public function deletePhoto($namafile,$tipe)
	{
		unlink("assets/img/".$tipe.'/'.$namafile);
	}

	public function deleteFile($namafile,$tipe)
	{
		unlink("assets/files/".$tipe.'/'.$namafile);
	}

	public function countAll($table)
	{
		$query = $this->db->query('SELECT * FROM '.$table);
        $total = $query->num_rows();
        return $total;
	}
	public function filterProduk($keyword)
	{
		$this->db->select('*');
		$this->db->from('tb_produk');
		$this->db->like('jenis_usaha',$keyword);
		return $this->db->get()->result();
	}

	// Tabel Materi
	public function searchMtr($keyword)
	{
		$this->db->select('*');
		$this->db->from('tb_m_materi');
		$this->db->like('judul_materi',$keyword);
		$this->db->or_like('kelas',$keyword);
		return $this->db->get()->result();
	}

	public function pencarianMateri($kelas, $jenis_mapel)
	{
		$this->db->where("kelas",$kelas);
		$this->db->where("jenis_mapel",$jenis_mapel);
		return $this->db->get("tb_m_materi")->result();
	}

	public function pencarianPembahasan($kelas, $jenis_mapel)
	{
		$this->db->where("kelas",$kelas);
		$this->db->where("jenis_mapel",$jenis_mapel);
		return $this->db->get("tb_m_pembahasan")->result();
	}

}    
