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
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
		$this->form_validation->set_rules('telp', 'telp', 'trim|required');
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required');

		if($this->form_validation->run()== true)
		{
			$tambah = $this->lpm->daftar();
			if ($tambah) 
			{
				$this->session->set_flashdata('pesan','berhasil daftar, silahkan login');
				
			}

			else
			{
				$this->session->set_flashdata('pesan','gagal daftar,,lengkapi data dulu');
				
			}
			redirect('pelanggan/LandController','refresh');
		} else{

			$this->session->set_flashdata('pesan','gagal daftar, Mohon lengkapi data dulu');
			redirect('pelanggan/LandController','refresh');
		}
	}
	
}

/* End of file Login.php */
/* Location: ./application/modules/pelanggan/controllers/Login.php */