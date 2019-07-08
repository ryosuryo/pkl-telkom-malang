<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_pel extends CI_Controller {

	public function index()
	{
		$data['konten']="v_chart";
		$this->load->view('Template', $data);
	}
	public function tambah_cart($id_restoran)
	{
		$this->load->model('Get_restoran_model','gt_res');
		$dt_detail = $this->gt_res->get_detail_res($id_restoran);

		$data = array('id' => $dt_detail->id_restoran,
					  'nomor' => $no_meja  );

		$tambah_cart=$this->cart->insert($data);
		if ($tambah_cart) 
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