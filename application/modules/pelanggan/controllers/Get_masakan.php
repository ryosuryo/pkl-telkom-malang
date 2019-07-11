<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_masakan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Get_masakan_model','gmm');
    }
    public function detail($id_masakan)
    {
        if ($this->session->userdata('logged')== True)
        {
            $dt_mas = $this->gmm->get_detail_mas($id_masakan);
            echo json_encode($dt_mas);
        }
        else
        {
            
            redirect('pelanggan/Login_pelanggan/index','refresh');
            
        }
    }
    public function tm_pesan_masakan($id_restoran)
    {
        $data['dt_mas']=$this->gmm->get_masakan($id_restoran);
        $data['konten']='v_daftar_masakan';
        $this->load->view('Template', $data);
    }
}