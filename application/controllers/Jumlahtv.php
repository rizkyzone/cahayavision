<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jumlahtv extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('jumlahtv_m');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['title'] = "Data Harga";
		$data['row'] = $this->jumlahtv_m->get();
		$this->template->load('template', 'jumlahtv/jumlahtv_data', $data);
	}

	public function add()
	{
		
		$this->form_validation->set_rules('jumlah_tv', 'Jumlah TV', 'required|max_length[1]');
		$this->form_validation->set_rules('harga', 'Harga', 'required');
		$this->form_validation->set_rules('denda', 'Denda', 'required');
		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        $this->form_validation->set_message('max_length', '{field} maksimal 1 karakter');
		$this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');
		if ($this->form_validation->run() == FALSE) {
			
			$this->template->load('template', 'jumlahtv/jumlahtv_form_add');
		} else {
			$post = $this->input->post(null, TRUE);
			
			$this->jumlahtv_m->add($post);
			if($this->db->affected_rows() > 0) {
				echo "<script> alert('Data berhasil disimpan');</script>";
			}
				echo "<script>window.location='".site_url('jumlahtv')."';</script>";
		}
		
		
	}
    

	public function edit($id)
	{
	
		$this->form_validation->set_rules('jumlah_tv', 'Jumlah TV', 'required|max_length[1]');
		$this->form_validation->set_rules('harga', 'Harga', 'required');
		$this->form_validation->set_rules('denda', 'Denda', 'required');
		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        $this->form_validation->set_message('max_length', '{field} maksimal 1 karakter');
		$this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');
		if ($this->form_validation->run() == FALSE) {
			$query = $this->jumlahtv_m->get($id);
			if($query->num_rows() > 0) {
				$data['row'] = $query->row();
				$this->template->load('template', 'jumlahtv/jumlahtv_form_edit', $data);
			}else {
				echo "<script> alert('Data tidak ditemukan');";
				echo "window.location='".site_url('jumlahtv')."';</script>";
			}
		} else {
			$post = $this->input->post(null, TRUE);
			$this->jumlahtv_m->edit($post);
			if($this->db->affected_rows() > 0) {
				echo "<script> alert('Data berhasil disimpan');</script>";
			}
				echo "<script>window.location='".site_url('jumlahtv')."';</script>";
		}
	}

	public function del($id)
	{
		$this->jumlahtv_m->del($id);
		if($this->db->affected_rows() > 0) {
			echo "<script> alert('Data berhasil dihapus');</script>";
		}
			echo "<script>window.location='".site_url('jumlahtv')."';</script>";
	}

}
