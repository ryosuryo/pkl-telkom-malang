<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat extends CI_Controller {

	public function index()
	{
		$data['konten_pel']='v_riwayat';
		$this->load->view('Template_pel', $data);
	}

}

/* End of file Riwayat.php */
/* Location: ./application/modules/pelanggan/controllers/Riwayat.php */