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
		$dt = $this->grm->get_restoran();
		echo json_encode($dt);
	}
	public function detail($id_restoran)
	{
		$dt = $this->grm->get_detail_res($id_restoran);
		echo json_encode($dt);
	}

}

/* End of file Get_restoran.php */
/* Location: ./application/modules/pelanggan/controllers/Get_restoran.php */