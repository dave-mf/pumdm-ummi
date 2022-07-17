<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_login extends CI_Model {

	public function ceklogin($username, $password) {
        $this->db->where("username", $username);
        $this->db->where("password", $password);
        return $this->db->get('auth');
	}

    public function getLoginData($user, $pass)
    {
        $u = $user;
        $p = MD5($pass);

        $query_cekLogin = $this->db->get_where('auth', array('username' => $u, 'password' => $p));

        if(count($query_cekLogin->result()) > 0){
            foreach ($query_cekLogin->result() as $qck){
                foreach ($query_cekLogin->result() as $ck){
                    $sess_data  ['logged_in']   = TRUE;
                    $sess_data  ['username']    = $ck->username;
                    $sess_data  ['password']   = $ck->password;
                    $sess_data  ['role']   = $ck->role;
                    $this->session->set_userdata($sess_data);
                }
                redirect('Admin');
            }
        }else{
            $this->session->set_flashdata('pesan', 'Username dan Password anda salah!');
            redirect('Admin/halaman_login');
        }
    }

    public function ambilData($id)
    {
        $this->db->where('username', $id);
        return $this->db->get('auth')->row();
    }

}