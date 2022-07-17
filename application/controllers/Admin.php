<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	// $this->load->helper('url');

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function halaman_login()
	{
		
		$title['title'] = 'Login';
		$data['beranda'] = $this->Crud->get('tb_produk');

		$this->load->view('Templates/AdminResource', $title, $data);
		$this->load->view('Admin/login', $data);
		$this->load->view('Templates/AdminFooter');
	}

	public function index()
	{
		$title['title'] = 'Dashboard Admin';
		$data['admin'] = $this->Crud->get('tb_produk');
		$data		   = $this->M_login->ambilData($this->session->userdata['username']);
		$data = array(
			'username'	=> $data->username,
			'role'		=> $data->role,
		);

		$this->load->view('Templates/AdminResource', $title, $data);
		$this->load->view('Templates/AdminNavbar', $data);
		$this->load->view('Templates/AdminSidebar', $data);
		$this->load->view('Admin/AdminIndex', $data);
		$this->load->view('Templates/AdminFooter');
	}

	public function produk()
	{
		$title['title'] = 'Kelola Produk';
		$admin['produk'] = $this->Crud->get('tb_produk');
		$data		   = $this->M_login->ambilData($this->session->userdata['username']);
		$data = array(
			'username'	=> $data->username,
			'role'		=> $data->role,
		);
	
		$this->load->view('Templates/AdminResource',$title,$data);
		$this->load->view('Templates/AdminNavbar',$data);
		$this->load->view('Templates/AdminSidebar',$data);
		$this->load->view('Admin/AdminProduk', $admin);
		$this->load->view('Templates/AdminFooter');
	}

	public function tambahProduk()
	{
		$this->form_validation->set_rules(
			'nama_usaha',
			'Nama Usaha',
			'required',
			['required' => 'Nama Usaha harus diisi!']
		);
		$this->form_validation->set_rules(
			'nama_pemilik',
			'Nama Pemilik',
			'required',
			['required' => 'Nama Pemilik harus diisi!']
		);
		$this->form_validation->set_rules(
			'jenis_usaha',
			'Jenis Usaha',
			'required',
			['required' => 'Jenis Usaha harus diisi!']
		);
		$this->form_validation->set_rules(
			'alamat',
			'Alamat',
			'required',
			['required' => 'Alamat harus diisi!']
		);
		$this->form_validation->set_rules(
			'lama_usaha',
			'Lama Usaha',
			'required',
			['required' => 'Lama Usaha harus diisi!']
		);
		$this->form_validation->set_rules(
			'hubungan_dgn_pemohon',
			'Hubungan Dengan Pemohon',
			'required',
			['required' => 'Hubungan dengan pemohon harus diisi!']
		);
		$this->form_validation->set_rules(
			'nama_pemohon',
			'Nama Pemohon',
			'required',
			['required' => 'Nama pemohon harus diisi!']
		);
		$this->form_validation->set_rules(
			'score',
			'Score',
			'required',
			['required' => 'Score harus diisi!']
		);
		$this->form_validation->set_rules(
			'harga',
			'Harga',
			'required',
			['required' => 'Harga harus diisi!']
		);

		if ($this->form_validation->run() == false) {
			$title['title']  = 'Tambah Produk';
			$admin['produk'] = $this->Crud->get('tb_produk');
			$data		   	 = $this->M_login->ambilData($this->session->userdata['username']);
			$data = array(
				'username'	=> $data->username,
				'role'		=> $data->role,
			);

			$this->load->view('Templates/AdminResource',$title,$data);
			$this->load->view('Templates/AdminNavbar',$data);
			$this->load->view('Templates/AdminSidebar',$data);
			$this->load->view('Admin/AdminTambah', $admin);
			$this->load->view('Templates/AdminFooter');

			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible show fade">
			<div class="alert-body">
				<button class="close" data-dismiss="alert">
					<span>×</span>
				</button>
				Maaf, data yang anda isi tidak lengkap!
				</div>
			</div>');
		} else {
			$nama_usaha					= $this->input->post('nama_usaha');
			$nama_pemilik			    = $this->input->post('nama_pemilik');
			$jenis_usaha			    = $this->input->post('jenis_usaha');
			$deskripsi			    	= $this->input->post('deskripsi');
			$alamat			    		= $this->input->post('alamat');
			$lama_usaha			    	= $this->input->post('lama_usaha');
			$hubungan_dgn_pemohon		= $this->input->post('hubungan_dgn_pemohon');
			$nama_pemohon			    = $this->input->post('nama_pemohon');
			$sosial_media			    = $this->input->post('sosial_media');
			$tersedia_juga_di			= $this->input->post('tersedia_juga_di');
			$score			    		= $this->input->post('score');
			$kontak_order			    = $this->input->post('kontak_order');
			$harga			    		= $this->input->post('harga');
			$foto_produk				= $_FILES['foto_produk'];

			$config['upload_path']		= './assets/img/fotoProduk/';
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['encrypt_name']		=  TRUE;
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('foto_produk')) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible show fade">
				<div class="alert-body">
					<button class="close" data-dismiss="alert">
						<span>×</span>
					</button>
					Kesalahan mengupload gambar!
					</div>
				</div>');
				Redirect('Admin/produk');
			} else {
				$foto_produk 	  				= $this->upload->data('file_name');
				$data = [
					'nama_usaha'				=> $nama_usaha,
					'nama_pemilik'				=> $nama_pemilik,
					'jenis_usaha'				=> $jenis_usaha,
					'deskripsi_produk'			=> $deskripsi,
					'foto_produk'				=> $foto_produk,
					'alamat'					=> $alamat,
					'lama_usaha'				=> $lama_usaha,
					'hubungan_dgn_pemohon'		=> $hubungan_dgn_pemohon,
					'nama_pemohon'				=> $nama_pemohon,
					'sosial_media'				=> $sosial_media,
					'tersedia_juga_di'			=> $tersedia_juga_di,
					'score'						=> $score,
					'kontak_order'				=> $kontak_order,
					'harga'						=> $harga,
					'created_by'				=> 'ADMIN'
				];
				$this->Crud->insert($data, 'tb_produk');
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible show fade">
				<div class="alert-body">
					<button class="close" data-dismiss="alert">
						<span>×</span>
					</button>
					Berhasil menambah produk!
					</div>
				</div>!');
				Redirect('Admin/produk');
			}
		}
	}

	public function editProduk($id)
	{
		$id = ['id' => $id];
		$title['title'] 	= 'Edit Produk';
		$admin['produk'] 	= $this->db->get_where('tb_produk',$id)->result();
		$data		   		= $this->M_login->ambilData($this->session->userdata['username']);
		$data = array(
			'username'	=> $data->username,
			'role'		=> $data->role,
		);
	
		$this->load->view('Templates/AdminResource',$title,$data);
		$this->load->view('Templates/AdminNavbar',$data);
		$this->load->view('Templates/AdminSidebar',$data);
		$this->load->view('Admin/AdminEdit', $admin);
		$this->load->view('Templates/AdminFooter');
	}

	public function postEditProduk($ids)
	{
		$id 						= ['id' => $ids];
		$nama_usaha					= $this->input->post('nama_usaha');
		$nama_pemilik			    = $this->input->post('nama_pemilik');
		$jenis_usaha			    = $this->input->post('jenis_usaha');
		$deskripsi			    	= $this->input->post('deskripsi');
		$alamat			    		= $this->input->post('alamat');
		$lama_usaha			    	= $this->input->post('lama_usaha');
		$hubungan_dgn_pemohon		= $this->input->post('hubungan_dgn_pemohon');
		$nama_pemohon			    = $this->input->post('nama_pemohon');
		$sosial_media			    = $this->input->post('sosial_media');
		$tersedia_juga_di			= $this->input->post('tersedia_juga_di');
		$score			    		= $this->input->post('score');
		$kontak_order			    = $this->input->post('kontak_order');
		$harga			    		= $this->input->post('harga');
		$foto_produk			    = $this->input->post('foto_produk');
		$foto_produk_lama			= $this->input->post('foto_produk_lama');
		// $foto_produk				= $_FILES['foto_produk'];
		// $foto_produk_lama		= $_FILES['foto_produk_lama'];

		if ($foto_produk !== '') {
			$config['upload_path']		= './assets/img/fotoProduk/';
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['encrypt_name']		=  TRUE;
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('foto_produk')) {
				$foto_produk 	= $foto_produk_lama;
				$hapus = 'false';
			} else {
				$upload_data	= $this->upload->data();
				$foto_produk 	= $upload_data['file_name'];
				$hapus 			= 'true';
			}
		}

		$data = [
			'nama_usaha'				=> $nama_usaha,
			'nama_pemilik'				=> $nama_pemilik,
			'jenis_usaha'				=> $jenis_usaha,
			'deskripsi_produk'			=> $deskripsi,
			'foto_produk'				=> $foto_produk,
			'alamat'					=> $alamat,
			'lama_usaha'				=> $lama_usaha,
			'hubungan_dgn_pemohon'		=> $hubungan_dgn_pemohon,
			'nama_pemohon'				=> $nama_pemohon,
			'sosial_media'				=> $sosial_media,
			'tersedia_juga_di'			=> $tersedia_juga_di,
			'score'						=> $score,
			'kontak_order'				=> $kontak_order,
			'harga'						=> $harga,
			'created_by'				=> 'ADMIN'
		];
		if ($hapus == 'true') {
			$this->Crud->deletePhoto($foto_produk_lama, 'fotoProduk');
		}
		$this->Crud->edit($id, $data, 'tb_produk');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible show fade">
		<div class="alert-body">
			<button class="close" data-dismiss="alert">
				<span>×</span>
			</button>
			Produk berhasil diupdate!
			</div>
		</div>');
	  	Redirect('Admin/produk');
	}

	public function hapusProduk($id)
	{
		$this->Crud->delete($id, 'tb_produk');
		$foto_produk_lama			= $this->input->post('foto_produk_lama');
		$this->Crud->deletePhoto($foto_produk_lama, 'fotoProduk');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible show fade">
		<div class="alert-body">
			<button class="close" data-dismiss="alert">
				<span>×</span>
			</button>
			Produk berhasil dihapus!
			</div>
		</div>');
		Redirect('Admin/produk');
	}

	
	public function login() {
		$this->form_validation->set_rules('username', 'Username', 'required', 
																			['required' => 'username harus diisi!']);
		$this->form_validation->set_rules('password', 'Password', 'required', 
																		['required' => 'password harus diisi!']);

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login';
			$data['admin'] = $this->Crud->get('tb_produk');

			$this->load->view('Templates/AdminResource', $data);
			$this->load->view('Admin/login', $data);
			$this->load->view('Templates/AdminFooter');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user = $username;
			$pass = MD5($password);
			
			$cek = $this->M_login->ceklogin($user, $password);
			
			if ($cek->num_rows() > 0) {

				foreach($cek->result() as $ck){
					$sess_data['username'] = $ck->username;
					$sess_data['role'] = $ck->role;

					$this->session->set_userdata($sess_data);
				}
				if ($sess_data['role'] === 'admin') {
					redirect('Admin');
				}else{
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible show fade">
					<div class="alert-body">
					  <button class="close" data-dismiss="alert">
						<span>×</span>
					  </button>
					  Maaf, username atau password anda salah!
					</div>
				  </div>');
					redirect('Admin/login');
				}
			}else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible show fade">
				<div class="alert-body">
				  <button class="close" data-dismiss="alert">
					<span>×</span>
				  </button>
				  Maaf, username atau password anda salah!
				</div>
			  </div>');
				redirect('Admin/login');
			}
		}
	}

	public function logout() {
		$data = ['id', 'username','role'];
		$this->session->unset_userdata($data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible show fade">
		<div class="alert-body">
		  <button class="close" data-dismiss="alert">
			<span>×</span>
		  </button>
		  Anda berhasil logout!
		</div>
	  </div>');
		redirect('Admin/halaman_login');	
	}
}
