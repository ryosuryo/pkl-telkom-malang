<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_pelanggan_model extends CI_Model {

	
	public function daftar()
	{
		$data = array('nama' => $this->input->post('nama'),
						'email' => $this->input->post('email'),
						'alamat' => $this->input->post('alamat'),
						'telp' => $this->input->post('telp'),
						'username' => $this->input->post('username'),
						'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
						'is_actived' => 0,
						'date_created' => time());
		return $this->db->insert('pelanggan', $data);
	}
	
 
}

/* End of file Login_pelanggan_model.php */
/* Location: ./application/modules/pelanggan/models/Login_pelanggan_model.php */