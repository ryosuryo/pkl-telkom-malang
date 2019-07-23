<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LandController extends CI_Controller {

	public function index()
	{
		$this->load->view('pelanggan/land');		
	}
	public function form_daftar()
	{
		$data['konten_pel']='v_form_daftar';
		$this->load->view('Template_pel', $data);
	}

}

/* End of file LandController.php */
/* Location: ./application/controllers/LandController.php */