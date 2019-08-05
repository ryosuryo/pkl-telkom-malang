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
			//memnyiapkan token
			$token = base64_encode(random_bytes(32));
			$user_token = [
				'email' => $this->input->post('email'),
				'token' => $token,
				'date_created' => time()
			];

			$this->lpm->daftar();
			$this->db->insert('user_token', $user_token);
			$this->_sendEmail($token, 'verify');
			$this->session->set_flashdata('pesan_login', 'Akun anda sudah didaftarkan, silahkan actived');
			redirect('pelanggan/LandController','refresh');
			
		} 
		else
		{
			$this->load->view('v_form_daftar');
		}
	}

	private function _sendEmail($token, $type)
	{
		$config = [
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'boogjaofc@gmail.com',
			'smtp_pass' => 'Bookingsaja123',
			'smtp_port' => 465,
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n"
		];

		$this->load->library('email', $config);
		$this->email->from('boogjaofc@gmail.com','Booking Saja Official');
		$this->email->to($this->input->post('email'));
		if ($type == 'verify') 
		{
			$this->email->subject('Account Verification');
			$this->email->message('Click This link to verify your account : <a href="'. base_url() .'index.php/pelanggan/Login_pelanggan/verify?email='. 
				$this->input->post('email') . '&token='. urlencode($token) .'">Activate</a>');
		}
		else
		{
			redirect('pelanggan/LandController','refresh');
		}
		

		if ($this->email->send()) {
			return true;
		}
		else
		{
			echo $this->email->print_debugger();
			die;
		}
	}

	public function verify()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->db->get_where('pelanggan', ['email' => $email])->row_array();

		if ($user) {
				
			$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
			if ($user_token) {
				if (time() - $user_token['date_created'] < (60*60*24)) {
					$this->db->set('is_actived', 1);
					$this->db->where('email', $email);
					$this->db->update('pelanggan');
					$this->db->delete('user_token', ['email' => $email]);
					$this->session->set_flashdata('pesan_login', '<div class="alert alert-success">'. $email .' telah aktif </div>');
					redirect('pelanggan/LandController','refresh');
				}
				else
				{
					$this->db->delete('pelanggan', ['email' => $email]);
					$this->db->delete('user_token', ['email' => $email]);
					$this->session->set_flashdata('pesan_login', '<div class="alert alert-danger">Activation Failed; Token Kadaluarsa</div>');
					redirect('pelanggan/LandController','refresh');
				}
			}
			else
			{
				$this->session->set_flashdata('pesan_login', '<div class="alert alert-danger">Activation Failed; Token Salah</div>');
				redirect('pelanggan/LandController','refresh');
			}
		}
		else
		{
			$this->session->set_flashdata('pesan_login', '<div class="alert alert-danger">Activation Failed; Email Salah</div>');
			redirect('pelanggan/LandController','refresh');
		}
	}
	
}

/* End of file Login.php */
/* Location: ./application/modules/pelanggan/controllers/Login.php */