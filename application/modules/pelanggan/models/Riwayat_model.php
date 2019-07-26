<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat_model extends CI_Model {

	public function get_riwayat()
	{
		$query = $this->db->join('tb_order', 'tb_order.id_order = detail_order.id_order')
						->join('pelanggan','pelanggan.id_pelanggan=tb_order.id_pelanggan')
						->where('pelanggan.id_pelanggan', $this->session->userdata('id_pelanggan'))
						->join('restoran','restoran.id_restoran=detail_order.id_restoran')
						->join('masakan','masakan.id_masakan=detail_order.id_masakan')
						->get('detail_order')->result();
			return $query;
	} 	

}

/* End of file Riwayat_model.php */
/* Location: ./application/modules/pelanggan/models/Riwayat_model.php */