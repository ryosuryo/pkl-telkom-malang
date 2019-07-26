<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat extends CI_Controller {

	public function index()
	{
		$this->load->view('', $data, FALSE);
	}

}

/* End of file Riwayat.php */
/* Location: ./application/modules/pelanggan/controllers/Riwayat.php */