<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_pelanggan_model extends CI_Model {

	public function cek_login()
	{
		$login = $this->db->where('username', $this->input->post('username'))
							->where('password', $this->input->post('password')) 
							->get('pelanggan');

		if ($this->db->affected_rows()>0) 
		{
			$cek=$login->row();
			$array = array('id_pelanggan' => $cek->id_pelanggan,
						'username' => $cek->username,
						'password' => $cek->password,
						'logged' => true
					);

			$this->session->set_userdata($array);
			return true;
		}
		else
		{
			return false;
		}
	}	


	public function daftar()
	{
		$data = array('nama' => $this->input->post('nama'),
						'email' => $this->input->post('email'),
						'alamat' => $this->input->post('alamat'),
						'telp' => $this->input->post('telp'),
						'username' => $this->input->post('username'),
						'password' => $this->input->post('password'),
						'is_actived' => 0,
						'date_created' => time());
		return $this->db->insert('pelanggan', $data);
	}
	
 
}

/* End of file Login_pelanggan_model.php */
/* Location: ./application/modules/pelanggan/models/Login_pelanggan_model.php */