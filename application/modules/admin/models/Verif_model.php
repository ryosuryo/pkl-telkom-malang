<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verif_model extends CI_Model {

	public function get_order()
	{
		return $this->db->join('pelanggan', 'pelanggan.id_pelanggan = tb_order.id_pelanggan')->get('tb_order')->result();
	}
	public function get_nota()
	{
		return $this->db->join('tb_order', 'tb_order.id_order = detail_order.id_order')
						->join('pelanggan','pelanggan.id_pelanggan=tb_order.id_pelanggan')
						->get('detail_order')->result();
	}
	public function detail($id_order)
	{
		return $this->db->join('pelanggan', 'pelanggan.id_pelanggan = tb_order.id_pelanggan')
						->where('id_order',$id_order)
						->get('tb_order')
						->row();
    }

    public function update()
    {
        $data = array('status' => $this->input->post('ubah_status'));
        $this->db->where('id_order',$this->input->post('id_order'))->update('tb_order',$data);
        
        if ($this->db->affected_rows()>0) {
			return true;
		}
		else
		{
			return false;
		}
	}
	public function cetak($id_order)
	{
		return $this->db->join('pelanggan', 'pelanggan.id_pelanggan = tb_order.id_pelanggan')
						->where('tb_order.id_order', $id_order)
						->join('detail_order' , 'detail_order.id_order = tb_order.id_order')
						->join('masakan' , 'masakan.id_masakan = detail_order.id_masakan')
						->get('tb_order')->result();
    }
    public function cari($tanggal)
    {
        $data = $this->db->where('tanggal',$tanggal)
                        ->join('tb_order','tb_order.id_order = detail_order.id_order')
                        ->join('pelanggan','pelanggan.id_pelanggan=tb_order.id_pelanggan')
					    ->get('detail_order')->result();
		return $data;
    }
}
