<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teknisi extends CI_Controller {

	
	function __construct()
	{
		parent::__construct();
		check_not_login();
		check_admin();
		$this->load->model('teknisi_m');
		$this->load->library('form_validation');
		
	}

	public function index()
	{
		$data['row'] = $this->teknisi_m->get();
		$this->template->load('template', 'teknisi/teknisi_data', $data);
	}
	
	public function add()
	{
		
		$this->form_validation->set_rules('fullname', 'Nama', 'required');
		$this->form_validation->set_rules('address', 'address', 'required');
		$this->form_validation->set_rules('telepon', 'No Telp', 'required|max_length[13]');
		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        $this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
        $this->form_validation->set_message('max_length', '{field} maksimal 13 karakter');
		$this->form_validation->set_message('is_unique', '{field} sudah dipakai');
		$this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');
		if ($this->form_validation->run() == FALSE) {
			
			$this->template->load('template', 'teknisi/teknisi_form_add');
		} else {
			$post = $this->input->post(null, TRUE);
			
			$this->teknisi_m->add($post);
			if($this->db->affected_rows() > 0) {
				echo "<script> alert('Data berhasil disimpan');</script>";
			}
				echo "<script>window.location='".site_url('teknisi')."';</script>";
		}
		
		
	}
	public function edit($id)
	{
	
		$this->form_validation->set_rules('fullname', 'Nama', 'required');
		$this->form_validation->set_rules('address', 'address', 'required');
		$this->form_validation->set_rules('telepon', 'No Telp', 'required|max_length[13]');
		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
		$this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
		$this->form_validation->set_message('is_unique', '{field} sudah dipakai');
		$this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');
		if ($this->form_validation->run() == FALSE) {
			$query = $this->teknisi_m->get($id);
			if($query->num_rows() > 0) {
				$data['row'] = $query->row();
				$this->template->load('template', 'teknisi/teknisi_form_edit', $data);
			}else {
				echo "<script> alert('Data tidak ditemukan');";
				echo "window.location='".site_url('teknisi')."';</script>";
			}
		} else {
			$post = $this->input->post(null, TRUE);
			$this->teknisi_m->edit($post);
			if($this->db->affected_rows() > 0) {
				echo "<script> alert('Data berhasil disimpan');</script>";
			}
				echo "<script>window.location='".site_url('teknisi')."';</script>";
		}
	}
	public function username_check(){
		$post = $this->input->post(null, TRUE);
		$query = $this->db->query("SELECT * FROM pelanggan WHERE username = '$post[username]' AND pelanggan_id != '$post[pelanggan_id]'");
		if($query->num_rows() > 0){
			$this->form_validation->set_message('username_check', '{field} ini sudah dipakai, silahkan ganti');
			return FALSE;
			
		}else {
			return TRUE;
		}
	}
	public function del()
	{
		$id = $this->input->post('pelanggan_id');
		$this->pelanggan_m->del($id);
		if($this->db->affected_rows() > 0) {
			echo "<script> alert('Data berhasil dihapus');</script>";
		}
			echo "<script>window.location='".site_url('pelanggan')."';</script>";
	}
	
}
