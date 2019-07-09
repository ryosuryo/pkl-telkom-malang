<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_pel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Get_restoran_model','gt_res');
	}
	public function index()
	{
		$data['konten']="v_chart";
		$data['data_m']=$this->gt_res->get_p_meja();
		$this->load->view('Template', $data);
	}

	public function pesan_meja($id_restoran,$no_meja)
	{
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

	public function tambah_cart($id_masakan, $jumlah){
		$this->load->model('Get_masakan_model', 'gt_mas');
		$dt_detail = $this->gt_mas->get_detail_mas($id_masakan);

		$data = array('id' => $dt_detail->id_masakan,
					'qty' => $jumlah,
					'price' => $dt_detail->harga,
					'name' => $dt_detail->nama_masakan,
	);
	
	$tambah_cart=$this->cart->insert($data);
			if ($tambah_cart) 
			{
				$dt['total_cart']=$this->cart->total_items();
				$dt['status']=1;
				echo json_encode($dt);
			}
			else
			{
				$dt['total_cart']=$this->cart->total_items();
				$dt['status']=0;
				echo json_encode($dt);
			}
		
	}

	public function show_chart_item()
	{
		if ($this->session->userdata('logged')==TRUE) {
			$dt['total_cart']=$this->cart->total_items(); 
			echo json_encode($dt);
		}
		else
		{
			redirect('Login_pelanggan/index','refresh');
		}
		
	}
	public function tm_pesanan()
	{
		if ($this->session->userdata('logged')==TRUE) {
			$data['total_seluruh']=$this->cart->total();
			$data['data_cart']=$this->cart->contents();
			echo json_encode($data);
		}
		else
		{
			redirect('Login_pelanggan/index','refresh');
		}
		
	}
	public function simpan_bayar()
	{
		if ($this->session->userdata('logged')==TRUE) {
			$this->load->model('Get_masakan_model','gt_mas');
			$buat_order = $this->gt_mas->buat_order();
			if ($buat_order) 
			{
				$dt_order=$this->gt_mas->get_last_order();
				foreach ($this->cart->contents() as $item)  
				{	
					$object[] = array('id_order' => $dt_order->id_order,
									'id_masakan' => $item['id'],
									'jumlah' => $item['qty']

								);
				}
					$masuk_data=$this->db->insert_batch('detail_order', $object);
					if ($masuk_data) {
						$this->gt_mas->update_total($dt_order->id_order);

						$data['status']=1;
						$data['id_order']=$dt_order->id_order;
						$data['total']=$this->cart->total();
						$this->cart->destroy();
						echo json_encode($data);
					}
					else
					{
						$data['status']=0;
						echo json_encode($data);
					}
				}
			}
		
		else
		{
			redirect('Login_pelanggan/index','refresh');
		}
		
		
	}

	public function hapus_cart($id)
	{
		$dt_cart = array('rowid' => $id, 'qty' => 0);

		$ubah_cart = $this->cart->update($dt_cart);
		if ($ubah_cart) {
			$data['status']=1;
			echo json_encode($data);
		}
		else{
			$data['status']=o;
			echo json_encode($data);
		}
		
	}
	public function hapus_semua()
	{
		$this->cart->detroy();
		$data['status']=1;
		echo json_encode($data);
	}

}

/* End of file Transaksi_pel.php */
/* Location: ./application/modules/pelanggan/controllers/Transaksi_pel.php */