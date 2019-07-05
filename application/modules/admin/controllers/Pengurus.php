<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengurus extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengurus_model','um');
	}
	public function index()
	{
		if ($this->session->userdata('logged')==true) 
		{
			$data['konten']="v_pengurus";
			$data['data_pengurus']=$this->um->get_pengurus();
			$data['level']=$this->um->get_level();
			$this->load->view('Template', $data);
		}
		else
		{
			redirect('Login/index','refresh');
		}
		
	}
	public function proses_tambah()
	{
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		$this->form_validation->set_rules('nama_pengurus', 'Nama pengurus', 'trim|required');
		$this->form_validation->set_rules('id_level', 'id_level', 'trim|required');

		if ($this->form_validation->run() == TRUE) 
		{
			if ($this->um->tambah()) 
			{
				$this->session->set_flashdata('pesan','berhasil tambah');
			}
			else
			{
				$this->session->set_flashdata('pesan','gagal tambah');
			}
			redirect('admin/Pengurus/index','refresh');
		} 
		else 
		{
			$this->session->flashdata('pesan',validation_errors());
			redirect('admin/Pengurus/index','refresh');
		}
	}
	public function detail($id_pengurus)
	{
		$dt = $this->um->detail($id_pengurus);
		echo json_encode($dt);
	}
	public function proses_update()
	{
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		$this->form_validation->set_rules('nama_pengurus', 'Nama pengurus', 'trim|required');
		$this->form_validation->set_rules('id_level', 'id_level', 'trim|required');

		if ($this->form_validation->run() == TRUE) 
		{
			if ($this->um->update()) 
			{
				$this->session->set_flashdata('pesan','berhasil ubah');
			}
			else
			{
				$this->session->set_flashdata('pesan','gagal ubah');
			}
			redirect('admin/Pengurus/index','refresh');
		} 
		else 
		{
			$this->session->flashdata('pesan',validation_errors());
			redirect('admin/Pengurus/index','refresh');
		}
	}
	public function hapus($id_pengurus)
	{
		$hapus = $this->um->hapus($id_pengurus);
			if ($hapus) {
				$this->session->set_flashdata('pesan','berhasil hapus');
			}
			else
			{
				$this->session->set_flashdata('pesan','gagal hapus');
			}
			redirect('admin/Pengurus/index','refresh');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */