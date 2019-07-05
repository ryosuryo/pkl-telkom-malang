<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengurus_model extends CI_Model {

	public function get_pengurus()
	{
		return $this->db->join('level', 'level.id_level= pengurus.id_level')->get('pengurus')->result();
	}
	public function get_level()
	{
		return $this->db->get('level')->result();
	}
	public function tambah()
	{
		$data = array('username' => $this->input->post('username'),
						'password' => $this->input->post('password'),
						'nama_pengurus' => $this->input->post('nama_pengurus'),
						'id_level' => $this->input->post('id_level') 
					);
		return $this->db->insert('pengurus', $data);
	}
	public function detail($id_pengurus)
	{
		return $this->db->where('id_pengurus', $id_pengurus)->get('pengurus')->row();
	}
	public function update()
	{
		$data = array('username' => $this->input->post('username'),
						'password' => $this->input->post('password'),
						'nama_pengurus' => $this->input->post('nama_pengurus'),
						'id_level' => $this->input->post('id_level') 
					);
		return $this->db->where('id_pengurus',  $this->input->post('id_pengurus'))->update('pengurus',$data);
	}
	public function hapus($id_pengurus)
	{
		return $this->db->where('id_pengurus', $id_pengurus)->delete('pengurus');
	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */