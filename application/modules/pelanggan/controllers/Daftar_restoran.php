<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_restoran extends CI_Controller {

	public function index()
	{
		$data['konten']='v_daftar_restoran';
		$this->load->view('Template', $data);		
	}


}

/* End of file Daftar_restoran.php */
/* Location: ./application/modules/pelanggan/controllers/Daftar_restoran.php */