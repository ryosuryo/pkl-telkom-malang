<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_pel extends CI_Controller {

	public function index()
	{
		$data['konten']="v_chart";
		$this->load->view('Template', $data);
	}

	public function pesan_meja($id_restoran,$no_meja)
	{
		
		$this->load->model('Get_restoran_model','gt_res');
		$dt_res = $this->gt_res->get_detail_res($id_restoran);

		$data = array('id_restoran' => $dt_res->id_restoran,
						'no_meja' => $no_meja,
						'username' => $this->session->userdata('username')
					);
		$pesan = $this->db->insert('pesanan_meja', $data);
		if ($pesan) 
		{
			$dt['status']=1;
			echo json_encode($dt);
		}
		else
		{
			$dt['status']=0;
			echo json_encode($dt);
		}
		
	}

}

/* End of file Transaksi_pel.php */
/* Location: ./application/modules/pelanggan/controllers/Transaksi_pel.php */