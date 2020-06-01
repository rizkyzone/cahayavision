<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemutusan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('pemutusan_m');
	}
	public function index()
	{
		$data['title'] = "Data Pemutusan";
		$data['row'] = $this->pemutusan_m->get();
		$this->template->load('template', 'pemutusan/pemutusan_data', $data);
	}


	public function add() #function edit dan add
	{
		$pemutusan = new stdClass();
		$pemutusan->pemutusan_id = null;
		$pemutusan->alasan_pemutusan = null;
		$pemutusan->tanggal_pemutusan = null;
		$data = array(
			'page' => 'add',
			'title' => 'Data pemutusan',
			'row' => $pemutusan
        );
		$data['pelanggan'] = $this->pemutusan_m->ambil_data('pelanggan');
       // print_r($data);die();
		$this->template->load('template', 'pemutusan/pemutusan_form', $data);
		
    }
    public function proses_status($id){
        $hasil = $this->pemutusan_m->rubah_status($id);
        if($hasil)
        {
            $this->index();
        } else{
            echo "<script> alert('Data tidak ditemukan');";
			echo "window.location='".site_url('pemutusan')."';</script>";
        }
    }

	public function edit($id)
	{
		$query = $this->pemutusan_m->get($id);
		if($query->num_rows() > 0) {
			$pemutusan = $query->row();
			$data = array(
				'page' => 'edit',
				'title' => 'Data pemutusan',
				'row' => $pemutusan
			);
			$data['pelanggan'] = $this->pemutusan_m->ambil_data('pelanggan');
			$data['teknisi'] = $this->pemutusan_m->ambil_data('teknisi');
			$this->template->load('template','pemutusan/pemutusan_form',$data);
		
		}else{
				echo "<script> alert('Data tidak ditemukan');";
				echo "window.location='".site_url('pemutusan')."';</script>";
		}
		
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])){
			$this->pemutusan_m->add($post);
		}else if(isset($_POST['edit'])){
			$this->pemutusan_m->edit($post);
			
		}
		if($this->db->affected_rows() > 0) {
			echo "<script> alert('Data berhasil disimpan');</script>";
		}
			echo "<script>window.location='".site_url('pemutusan')."';</script>";
	}

	public function del($id)
	{
		$this->pemutusan_m->del($id);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data Berhasil Dihapus');
		}
        redirect('pemutusan/');
	}

}
