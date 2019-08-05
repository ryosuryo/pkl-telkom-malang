<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_pelanggan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_pelanggan_model','lpm');
	}
	public function index()
	{
		$this->load->view('v_login_pelanggan');
	}
	public function proses_login()
	{
		if ($this->session->userdata('logged')==false) 
		{
			$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|required');

			if ($this->form_validation->run() == true) 
			{
				if ($this->lpm->cek_login()) {
					redirect('Dashboard/dashboard_pelanggan','refresh');
				}
				else
				{
					$this->session->set_flashdata('pesan', 'kombinasi username dan password tidak cocok');
					redirect('pelanggan/LandController','refresh');
				}
			} 
			else 
			{
				$this->session->set_flashdata('pesan',validation_errors());
				redirect('pelanggan/LandController','refresh');
			}
		}
		else
		{
			$this->session->set_flashdata('pesan','session yg sebelumnya belum dilogout');
			redirect('pelanggan/LandController','refresh');
		}
		
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('index.php/pelanggan/LandController'),'refresh');
	}

	public function proses_daftar()
	{
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[pelanggan.email]',[
			'is_unique' => 'email sudah didaftarkan'
		]);
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
		$this->form_validation->set_rules('telp', 'telp', 'trim|required');
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[3]',[
			'min_length' => 'Password Kurang panjang'
		]);
		

		if($this->form_validation->run()== true)
		{
			$this->lpm->daftar();
			$this->session->set_flashdata('pesan_login', 'Akun anda sudah didaftarkan, silahkan Login');
			redirect('pelanggan/LandController','refresh');
			
		} 
		else
		{
			$this->load->view('v_form_daftar');
		}
	}
	
}

/* End of file Login.php */
/* Location: ./application/modules/pelanggan/controllers/Login.php */