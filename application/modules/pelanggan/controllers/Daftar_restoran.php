<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_restoran extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('logged')==true) 
		{
			$data['konten']='v_daftar_restoran';
			$this->load->view('Template', $data);
		}
		else
		{
			redirect('pelanggan/Login_pelanggan/index','refresh');
		}
				
	}


	


}

/* End of file Daftar_restoran.php */
/* Location: ./application/modules/pelanggan/controllers/Daftar_restoran.php */