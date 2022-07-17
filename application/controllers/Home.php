<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$title['title'] 				= 'Beranda';
		$data['foto_produk_limit']	= $this->M_galeri->getFotoLimit();
		$data['beranda']			= $this->Crud->get('tb_produk');
		// $data['beranda'] 			= $this->Crud->get('tb_m_beranda');

		$this->load->view('Templates/navbar', $title, $data);
		$this->load->view('index', $data);
		$this->load->view('Templates/footer', $data);
	}

	public function blog()
	{
		$this->load->view('Templates/navbar');
		$this->load->view('blog');
		$this->load->view('Templates/footer');
	}

	public function semua_produk()
	{
		$data['title'] = 'Semua Produk';
		$data['semua_produk']		= $this->Crud->get('tb_produk');
		
		$this->load->view('Templates/navbar', $data);
		$this->load->view('semuaProduk', $data);
		$this->load->view('Templates/footer', $data);
	}

	public function filter_produk()
	{
		$data['title'] = 'Semua Produk';

		$keyword			    	= $this->input->post('jenis_usaha');
		$data['semua_produk']		= $this->Crud->filterProduk($keyword);
		
		$this->load->view('Templates/navbar', $data);
		$this->load->view('semuaProduk', $data);
		$this->load->view('Templates/footer', $data);
	}

	public function detail_produk($id)
	{
		$id = ['id' => $id];
		$nama 				= $this->db->get_where('tb_produk',$id)->row_array();
		$title['title'] 	= 'Detail Produk | '.$nama['nama_usaha'];
		$data['produk']		= $this->Crud->getById('tb_produk',$id);

		$this->load->view('Templates/navbar', $title);
		$this->load->view('detailProduk', $data);
		$this->load->view('Templates/footer');
	}

}
