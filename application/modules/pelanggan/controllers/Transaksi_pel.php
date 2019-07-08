<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_pel extends CI_Controller {

	public function index()
	{
		$data['konten']="v_chart";
		$this->load->view('Template', $data);
	}

	public function tambah_cart($id_restoran,$no_meja)
	{
		$this->load->model('Get_restoran_model','gt_res');
		$dt_detail = $this->gt_res->get_detail_res($id_restoran);

		$data_produk = array(
			'id'      => $dt_detail->id_restoran,
			'number'  => $no_meja
		); 
		
		$add_cart=$this->cart->insert($data_produk);
		if ($add_cart) 
		{
			//$dt['total_cart']=$this->cart->total_items();
			$dt['status']=1;
			echo json_encode($dt);
		}
		else
		{
			//$dt['total_cart']=$this->cart->total_items();
			$dt['status']=0;
			echo json_encode($dt);
		}
	}

	public function tm_pesanan()
	{
			$data['total_seluruh']=$this->cart->total();
			$data['data_cart']=$this->cart->contents();
			echo json_encode($data);
	}

}

/* End of file Transaksi_pel.php */
/* Location: ./application/modules/pelanggan/controllers/Transaksi_pel.php */