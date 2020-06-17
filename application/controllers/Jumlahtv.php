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

	public function add() #function edit dan add
	{
		$jumlahtv = new stdClass();
		$jumlahtv->jumlah_id = null;
		$jumlahtv->jumlah_tv = null;
		$jumlahtv->harga = null;
		$jumlahtv->denda = null;
		$data = array(
			'page' => 'add',
			'title' => 'Data Harga',
			'row' => $jumlahtv
        );
		
       // print_r($data);die();
		$this->template->load('template', 'jumlahtv/jumlahtv_form', $data);
		
    }
    

	public function edit($id)
	{
		$query = $this->jumlahtv_m->get($id);
		if($query->num_rows() > 0) {
			$jumlahtv = $query->row();
			$data = array(
				'page' => 'edit',
				'title' => 'Data Harga',
				'row' => $jumlahtv
			);
			
			$this->template->load('template','jumlahtv/jumlahtv_form',$data);
		
		}else{
				echo "<script> alert('Data tidak ditemukan');";
				echo "window.location='".site_url('jumlahtv')."';</script>";
		}
		
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])){
			$this->jumlahtv_m->add($post);
		}else if(isset($_POST['edit'])){
			$this->jumlahtv_m->edit($post);
			
		}
		if($this->db->affected_rows() > 0) {
			echo "<script> alert('Data berhasil disimpan');</script>";
		}
			echo "<script>window.location='".site_url('jumlahtv')."';</script>";
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
