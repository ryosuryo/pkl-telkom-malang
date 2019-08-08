<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restoran_meja_model extends CI_Model {

	public function get_last_meja()
    {
        return $this->db->where('username', $this->session->userdata('username'))
                        ->limit('1')
                        ->order_by('id_pesanan')
                        ->limit('1')
                        ->get('pesanan_meja')
                        ->row();
    }

}

/* End of file Restoran_meja_model.php */
/* Location: ./application/modules/pelanggan/models/Restoran_meja_model.php */