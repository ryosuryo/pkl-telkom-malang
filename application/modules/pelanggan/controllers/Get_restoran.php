<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_restoran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Get_restoran_model','grm');
	}
	public function index()
	{
		if ($this->session->userdata('logged')==true) 
		{
			$dt = $this->grm->get_restoran();
			echo json_encode($dt);
		}
		else
		{
			redirect('pelanggan/Login_pelanggan','refresh');
		}
		
	}
	public function detail($id_restoran)
	{
		$dt = $this->grm->get_detail_res($id_restoran);
		echo json_encode($dt);
	}
	public function detail_mas($id_restoran)
	{
		$dt = $this->grm->get_detail_mas($id_restoran);
		echo json_encode($dt);
	}

}

/* End of file Get_restoran.php */
/* Location: ./application/modules/pelanggan/controllers/Get_restoran.php */