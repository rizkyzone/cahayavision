<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemasangan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('pemasangan_m');
		
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['title'] = "Data Pemasangan";
		$data['row'] = $this->pemasangan_m->getpending();
		$this->template->load('template', 'pemasangan/pemasangan_data_pending', $data);
	}
	public function terpasang()
	{
		$data['title'] = "Data Pemasangan";
		$data['row'] = $this->pemasangan_m->getterpasang();
		$this->template->load('template', 'pemasangan/pemasangan_data', $data);
	}
	public function tidak_terjangkau()
	{
		$data['title'] = "Data Pemasangan";
		$data['row'] = $this->pemasangan_m->getjangkauan();
		$this->template->load('template', 'pemasangan/pemasangan_data', $data);
	}
	public function non_aktif()
	{
		$data['title'] = "Data Pemasangan";
		$data['row'] = $this->pemasangan_m->getnonaktif();
		$this->template->load('template', 'pemasangan/pemasangan_data', $data);
	}
	public function lap_pemasangan()
	{
		$data['title'] = "Laporan Data Pemasangan";
		$data['row'] = $this->pemasangan_m->get();
		$this->template->load('template', 'pemasangan/lap_pemasangan', $data);

	}

	public function add() #function edit dan add
	{
		$pemasangan = new stdClass();
		$pemasangan->pemasangan_id = null;
		$pemasangan->nama = null;
		$pemasangan->nama_karyawan = null;
		$pemasangan->tanggal_pemasangan = null;
		$pemasangan->status = null;
		$data = array(
			'page' => 'add',
			'title' => 'Data Pemasangan',
			'row' => $pemasangan
        );
		$data['pelanggan'] = $this->pemasangan_m->ambil_data('pelanggan');
		$data['teknisi'] = $this->pemasangan_m->ambil_data('teknisi');
		$data['harga'] = $this->pemasangan_m->ambil_data('harga');
       // print_r($data);die();
		$this->template->load('template', 'pemasangan/pemasangan_form', $data);
		
    }
    public function proses_status($id){
        $hasil = $this->pemasangan_m->rubah_status($id);
        if($hasil)
        {
            $this->index();
        } else{
            echo "<script> alert('Data tidak ditemukan');";
			echo "window.location='".site_url('pemasangan')."';</script>";
        }
    }

	public function edit($id)
	{
		$query = $this->pemasangan_m->get($id);
		if($query->num_rows() > 0) {
			$pemasangan = $query->row();
			$data = array(
				'page' => 'edit',
				'title' => 'Data pemasangan',
				'row' => $pemasangan
			);
			$data['pelanggan'] = $this->pemasangan_m->ambil_data('pelanggan');
			$data['harga'] = $this->pemasangan_m->ambil_data('harga');
			
		$data['teknisi'] = $this->pemasangan_m->ambil_data('teknisi');
			$this->template->load('template','pemasangan/pemasangan_form',$data);
		
		}else{
				echo "<script> alert('Data tidak ditemukan');";
				echo "window.location='".site_url('pemasangan')."';</script>";
		}
		
	}

	public function proses($id)
	{
		$this->form_validation->set_rules('tgl', 'Tanggal', 'required');
		$this->form_validation->set_rules('jumlah_id', 'Jumlah TV', 'required');
		$this->form_validation->set_rules('teknisi_id', 'Teknisi', 'required');
		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
		$this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
		$this->form_validation->set_message('is_unique', '{field} sudah dipakai');
		$this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');

		if ($this->form_validation->run() == FALSE) {
			$query = $this->pemasangan_m->get($id);
			if ($query->num_rows() > 0) {
				$data['row'] = $query->row();
				$data['pelanggan'] = $this->pemasangan_m->ambil_data('pelanggan');
				$data['teknisi'] = $this->pemasangan_m->ambil_data('teknisi');
				$data['harga'] = $this->pemasangan_m->ambil_data('harga');
				$this->template->load('template', 'pemasangan/pemasangan_form_proses', $data);
			} else {
				echo "<script> alert('Data tidak ditemukan');";
				echo "window.location='" . site_url('pemasangan') . "';</script>";
			}
		} else {
			$post = $this->input->post(null, TRUE);
			$this->pemasangan_m->proses($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
			}
			redirect('pemasangan');
		}
		
	}
		

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])){
			$this->pemasangan_m->add($post);
		}else if(isset($_POST['edit'])){
			$this->pemasangan_m->edit($post);
		}
		if($this->db->affected_rows() > 0) {
			echo "<script> alert('Data berhasil disimpan');</script>";
		}
			echo "<script>window.location='".site_url('pemasangan')."';</script>";
	}

	public function del($id)
	{
		$this->pemasangan_m->del($id);
		if($this->db->affected_rows() > 0) {
			echo "<script> alert('Data berhasil dihapus');</script>";
		}
			echo "<script>window.location='".site_url('pemasangan')."';</script>";
	}
	

}
