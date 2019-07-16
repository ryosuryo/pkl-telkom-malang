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
					redirect('Dashboard/index','refresh');
				}
				else
				{
					$this->session->set_flashdata('pesan', 'gagal login');
					redirect('pelanggan/Login_pelanggan/index','refresh');
				}
			} 
			else 
			{
				$this->session->set_flashdata('pesan',validation_errors());
				redirect('pelanggan/Login_pelanggan/index','refresh');
			}
		}
		else
		{
			redirect('Template/index','refresh');
		}
		
	}
	public function logout()
	{
		//$this->lpm->hapus_meja();
		$this->session->sess_destroy();
		redirect(base_url('index.php/pelanggan/Login_pelanggan/index'),'refresh');
	}

	public function proses_daftar()
	{
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
		$this->form_validation->set_rules('telp', 'telp', 'trim|required');
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');

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
			redirect('pelanggan/Login_pelanggan/index','refresh');
		} else{

			$this->session->set_flashdata('pesan','gagal login, Mohon lengkapi data dulu');
			redirect('pelanggan/Login_pelanggan/index','refresh');
		}
	}
	public function reset_password()
	{
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
		if ($this->form_validation->run() == true) 
		{
			$email = $this->input->post('email');
			$reset = random_string('alnum', 50);

			if ($this->lpm->update_reset($email,$reset)) 
			{
				$this->load->library('email');
				$config = array();
				$config['charset'] = 'utf-8';
				$config['useragent'] = 'Codeigniter';
				$config['protocol']= "smtp";
				$config['mailtype']= "html";
				$config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
				$config['smtp_port']= "465";
				$config['smtp_timeout']= "5";
				$config['smtp_user']= "fanirahmatulloh842@gmail.com"; // isi dengan email kamu
				$config['smtp_pass']= "fanirahmat842"; // isi dengan password kamu
				$config['crlf']="\r\n"; 
				$config['newline']="\r\n"; 
				$config['wordwrap'] = TRUE;
				//memanggil library email dan set konfigurasi untuk pengiriman email

				$this->email->initialize($config);
				//konfigurasi pengiriman
				$this->email->from($config['smtp_user']);
				$this->email->to($this->input->post('email'));
				$this->email->subject("Reset your password");
 
				$message = "<p>Anda melakukan permintaan reset password</p>";
				$message .= "<a href='".site_url('welcome/reset_password/'.$reset)."'>klik reset password</a>";
				$this->email->message($message);

				if ($this->email->send()) 
				{
					echo "silahkan cek email <b>".$this->input->post('email').'<b> untuk melakukan reset';
				}
				else
				{
					echo "Berhasil melakukan registrasi, gagal mengirim verifikasi email";
				}

				echo "<br><br><a href='".site_url('Login_pelanggan')."'>Kembali Ke menu Login</a>";

			}
			else
			{
				die("Email yang anda masukan belum terdaftar");
			}
		} 
		else 
		{

			redirect('pelanggan/Login_pelanggan/index','refresh');
		}
	}
}

/* End of file Login.php */
/* Location: ./application/modules/pelanggan/controllers/Login.php */