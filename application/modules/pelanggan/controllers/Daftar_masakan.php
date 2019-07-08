<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_masakan extends CI_Controller {

	public function index()
	{
		$data['konten']='v_daftar_masakan';
		$this->load->view('Template', $data);		
	}


}