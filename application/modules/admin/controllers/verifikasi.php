<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifikasi extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('logged')==true) {
			$this->load->model('Verif_model');
			$data['data_pel']=$this->Verif_model->get_order();
			$data['konten']="v_tb_order";
			$this->load->view('Template', $data);
		}
		else
		{
			redirect('Login/index','refresh');
		}
    }

    public function tampil_nota()
	{
		if ($this->session->userdata('logged')==true) {
			$this->load->model('Verif_model');
			$data['data_nota']=$this->Verif_model->get_nota();
			$data['konten']="v_detail_order";
			$this->load->view('Template', $data);
		}
		else
		{
			redirect('Login/index','refresh');
		}
		
    }
    
    public function get_detail_order($id_order)
    {
        $this->load->model('Verif_model','vm');
        $data_detail = $this->vm->detail('id_order');
        echo json_encode($data_detali);
        
    }

    public function update()
    {
        $this->load->model('verif_model','vm');
        $this->form_validation->set_rules('ubah_status','fieldlabel','trim|required');
        
        if ($this->form_validation->run() == TRUE) 
		{
			if ($this->vm->update()) 
			{
				$this->session->flashdata('pesan','berhasil ubah');
			}
			else
			{
				$this->session->flashdata('pesan','gagal ubah');
			}
			redirect('Verifikasi/index','refresh');
		} 
		else 
		{
			$this->session->flashdata('pesan',validation_errors());
			redirect('Verifikasi/index','refresh');
		}
		
	}

    public function cetak_nota($id_order){
        $this->load->model('verif_model');
        $data['data_order'] = $this->verif_model->cetak('$id_order');
        $this->load->view('v_cetak_nota',$data);
        
        
    }
}