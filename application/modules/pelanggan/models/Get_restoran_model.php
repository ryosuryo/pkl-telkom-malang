<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_restoran_model extends CI_Model {

	public function get_restoran()
	{
		return $this->db->get('restoran')->result();
	}	
	public function get_detail_res($id_restoran)
	{
		return $this->db->where('id_restoran', $id_restoran)
						->get('restoran')->row();
	}
	public function get_detail_mas($id_restoran)
	{
		return $this->db->where('id_restoran',$id_restoran)
						->get('masakan')
						->row();
	}
	public function get_p_meja()
	{
		$query = $this->db->where('username', $this->session->userdata('username'))->get('pesanan_meja')->result();
		return $query;
	}
	

}

/* End of file Get_restoran_model.php */
/* Location: ./application/modules/pelanggan/models/Get_restoran_model.php */