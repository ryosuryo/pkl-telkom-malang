<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat_model extends CI_Model {

	public function get_riwayat()
	{
		return $this->db->join('pelanggan', 'pelanggan.id_pelanggan = tb_order.id_pelanggan')
						->where('pelanggan.id_pelanggan', $this->session->userdata('id_pelanggan'))
						->join('detail_order', 'detail_order.id_order=tb_order.id_order')
						->join('restoran','restoran.id_restoran=detail_order.id_restoran')	
						->get('tb_order')->result();
	} 	

}

/* End of file Riwayat_model.php */
/* Location: ./application/modules/pelanggan/models/Riwayat_model.php */