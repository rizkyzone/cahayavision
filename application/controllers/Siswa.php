<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('siswa_m');
	}
	public function index()
	{
		$data['title'] = "Data Siswa";
		$data['row'] = $this->siswa_m->get();
		$this->template->load('template', 'siswa/siswa_data', $data);
	}
	
	public function add() #function add
	{
		$siswa = new stdClass();
		$siswa->npm = null;
		$siswa->nama = null;
		$siswa->prodi = null;
		$data = array(
			'page' => 'add',
			'title' => 'Data siswa',
			'row' => $siswa
        );
       // print_r($data);die();
		$this->template->load('template', 'siswa/siswa_form_add', $data);
		
    }
    

	public function edit($id)
	{
		$query = $this->siswa_m->get($id);
		if($query->num_rows() > 0) {
			$siswa = $query->row();
			$data = array(
				'page' => 'edit',
				'title' => 'Data siswa',
				'row' => $siswa
			);
			$this->template->load('template','siswa/siswa_form_edit',$data);
		
		}else{
				echo "<script> alert('Data tidak ditemukan');";
				echo "window.location='".site_url('siswa')."';</script>";
		}
		
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])){
			$this->siswa_m->add($post);
		}else if(isset($_POST['edit'])){
			$this->siswa_m->edit($post);
			
		}
		if($this->db->affected_rows() > 0) {
			echo "<script> alert('Data berhasil disimpan');</script>";
		}
			echo "<script>window.location='".site_url('siswa')."';</script>";
	}

	public function del($id)
	{
		$this->siswa_m->del($id);
		if($this->db->affected_rows() > 0) {
			echo "<script> alert('Data berhasil dihapus');</script>";
		}
			echo "<script>window.location='".site_url('siswa')."';</script>";
	}

}
