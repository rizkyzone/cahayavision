<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('mahasiswa_m');
	}
	public function index()
	{
		$data['title'] = "Data Mahasiswa";
		$data['row'] = $this->mahasiswa_m->get();
		$this->template->load('template', 'mahasiswa/mahasiswa_data', $data);
	}
	
	public function add() #function add
	{
		$mahasiswa = new stdClass();
		$mahasiswa->npm = null;
		$mahasiswa->nama = null;
		$mahasiswa->tanggal_lahir = null;
		$mahasiswa->status = null;
		$data = array(
			'page' => 'add',
			'title' => 'Data mahasiswa',
			'row' => $mahasiswa
        );
       // print_r($data);die();
		$this->template->load('template', 'mahasiswa/mahasiswa_form_add', $data);
		
    }
    

	public function edit($id)
	{
		$query = $this->mahasiswa_m->get($id);
		if($query->num_rows() > 0) {
			$mahasiswa = $query->row();
			$data = array(
				'page' => 'edit',
				'title' => 'Data mahasiswa',
				'row' => $mahasiswa
			);
			$this->template->load('template','mahasiswa/mahasiswa_form_edit',$data);
		
		}else{
				echo "<script> alert('Data tidak ditemukan');";
				echo "window.location='".site_url('mahasiswa')."';</script>";
		}
		
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])){
			$this->mahasiswa_m->add($post);
		}else if(isset($_POST['edit'])){
			$this->mahasiswa_m->edit($post);
			
		}
		if($this->db->affected_rows() > 0) {
			echo "<script> alert('Data berhasil disimpan');</script>";
		}
			echo "<script>window.location='".site_url('mahasiswa')."';</script>";
	}

	public function del($id)
	{
		$this->mahasiswa_m->del($id);
		if($this->db->affected_rows() > 0) {
			echo "<script> alert('Data berhasil dihapus');</script>";
		}
			echo "<script>window.location='".site_url('mahasiswa')."';</script>";
	}

}
