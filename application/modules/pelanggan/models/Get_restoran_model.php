<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_restoran_model extends CI_Model {

	public function get_restoran()
	{
		return $this->db->get('restoran')->result();
	}	
	public function get_detail_res($id_restoran)
	{
		return $this->db->where('id_restoran', $id_restoran)->get('restoran')->row();
	}
	

}

/* End of file Get_restoran_model.php */
/* Location: ./application/modules/pelanggan/models/Get_restoran_model.php */