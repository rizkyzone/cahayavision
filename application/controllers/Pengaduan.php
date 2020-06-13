<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('pengaduan_m');
	}
	public function index()
	{
		$data['title'] = "Data pengaduan";
		$data['row'] = $this->pengaduan_m->getstatus();
		$this->template->load('template', 'pengaduan/pengaduan_data', $data);
	}
	public function dalam_pengerjaan()
	{
		$data['title'] = "Data pengaduan";
		$data['row'] = $this->pengaduan_m->getstatus1();
		$this->template->load('template', 'pengaduan/pengaduan_data', $data);
	}
	public function sudah_dikerjakan()
	{
		$data['title'] = "Data pengaduan";
		$data['row'] = $this->pengaduan_m->getstatus2();
		$this->template->load('template', 'pengaduan/pengaduan_data', $data);
	}
	

	public function add() #function edit dan add
	{
		$pengaduan = new stdClass();
		$pengaduan->pengaduan_id = null;
		$pengaduan->nama = null;
		$pengaduan->nama_karyawan = null;
		$pengaduan->tanggal_pengaduan = null;
		$pengaduan->status = null;
		$data = array(
			'page' => 'add',
			'title' => 'Data pengaduan',
			'row' => $pengaduan
        );
		$data['pelanggan'] = $this->pengaduan_m->ambil_data_pelanggan('pelanggan');
		$data['teknisi'] = $this->pengaduan_m->ambil_data('teknisi');
       // print_r($data);die();
		$this->template->load('template', 'pengaduan/pengaduan_form_add', $data);
		
    }
    

	public function edit($id)
	{
		$query = $this->pengaduan_m->get($id);
		if($query->num_rows() > 0) {
			$pengaduan = $query->row();
			$data = array(
				'page' => 'edit',
				'title' => 'Data pengaduan',
				'row' => $pengaduan
			);
			$data['pelanggan'] = $this->pengaduan_m->ambil_data('pelanggan');
			$data['teknisi'] = $this->pengaduan_m->ambil_data('teknisi');
			$this->template->load('template','pengaduan/pengaduan_form',$data);
		
		}else{
				echo "<script> alert('Data tidak ditemukan');";
				echo "window.location='".site_url('pengaduan')."';</script>";
		}
		
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])){
			$this->pengaduan_m->add($post);
		}else if(isset($_POST['edit'])){
			$this->pengaduan_m->edit($post);
			
		}
		if($this->db->affected_rows() > 0) {
			echo "<script> alert('Data berhasil disimpan');</script>";
		}
			echo "<script>window.location='".site_url('pengaduan')."';</script>";
	}

	public function del($id)
	{
		$this->pengaduan_m->del($id);
		if($this->db->affected_rows() > 0) {
			echo "<script> alert('Data berhasil dihapus');</script>";
		}
			echo "<script>window.location='".site_url('pengaduan')."';</script>";
	}

}
