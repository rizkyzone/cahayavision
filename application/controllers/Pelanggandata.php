<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggandata extends CI_Controller {

	
	function __construct()
	{
		parent::__construct();
		$this->load->model('pelanggan_m');
		$this->load->model('pemasangan_m');
		$this->load->model('pembayaran_m');
		$this->load->model('pengaduan_m');
		$this->load->library('form_validation');	
    }
    public function index()
	{
		$this->template->load('template4', 'dashboard_pelanggan');
	}
	public function add()
	{
		$pembayaran = new stdClass();
		$pembayaran->pembayaran_id = null;
        $pembayaran->tanggal_pembayaran = null;
        $pembayaran->metode_pembayaran = null;
        $pembayaran->total_pembayaran = null;
        $pembayaran->status = null;
		$data = array(
			'page' => 'add',
			'title' => 'Data pembayaran',
            'row' => $pembayaran
        );
	   // print_r($data);die();
	   	$data['pelanggan'] = $this->pembayaran_m->ambil_data('pelanggan');
		$this->template->load('template4', 'pembayaran/pembayaran_pelanggan', $data);
	}
	public function process()
	{
			$config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']            = 2048;
			$config['file_name']            = 'pembayaran-'.date('Y-m-d H-i-s');
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])){
            if (@$_FILES['image']['name'] != null){
                if ($this->upload->do_upload('image')) {
                    $post['image'] = $this->upload->data("file_name");
                    $this->pembayaran_m->add($post);
                    if($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('success', 'Data Berhasil Disimpan');
                    }
                    redirect('pelanggandata');
                 }else{
					$error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('pelanggandata/add');
                }    
            }else {
                $post['image'] = 'default.jpg';
                    $this->pembayaran_m->add($post);
                    if($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('success', 'Data Berhasil Disimpan');
                    }
                    redirect('pembayaran');
            	}
        
			
		}else if(isset($_POST['edit'])){
			
			if (@$_FILES['image']['name'] != null){
                if ($this->upload->do_upload('image')) {

					$pembayaran = $this->pembayaran_m->get($post['id'])->row();
					if($pembayaran->image != 'default.jpg') {
						$target_file = './uploads/'.$pembayaran->image;
						unlink($target_file);
					}

		
                    $post['image'] = $this->upload->data("file_name");
                    $this->pembayaran_m->edit($post);;
                    if($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('success', 'Data Berhasil Disimpan');
                    }
                    redirect('pelanggandata/status_pembayaran/'.$post['pelanggan_id']);
                 }else{
					$error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('pelanggandata/status_pembayaran/'.$post['pelanggan_id']);
                }    
            }else {
                $post['image'] = null;
				$this->pembayaran_m->edit($post);
                    if($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('success', 'Data Berhasil Disimpan');
                    }
                    redirect('pelanggandata/status_pembayaran/'.$post['pelanggan_id']);
            	}
		}
		
    }
    public function edit($id)
	{
		$query = $this->pembayaran_m->get_pembayaran_only($id);
		if($query->num_rows() > 0) {
			$pelanggan = $query->row();
			$data = array(
				'page' => 'edit',
				'title' => 'Data pembayaran',
				'row' => $pelanggan
			);
            $data['pembayaran'] = $this->pelanggan_m->ambil_data('kelurahan');
            $data['pemasangan'] = $this->pelanggan_m->ambil_data('pemasangan');
			$this->template->load('template4','pembayaran/pembayaran_pelanggan',$data);
		
		}else{
				echo "<script> alert('Data tidak ditemukan');";
				echo "window.location='".site_url('pembayaran')."';</script>";
		}
		
	}
	public function ubah($id)
	{
		$query = $this->pengaduan_m->get_pengaduan_only($id);
		if($query->num_rows() > 0) {
			$pelanggan = $query->row();
			$data = array(
				'page' => 'ubah',
				'title' => 'Data pembayaran',
				'row' => $pelanggan
			);
            $data['pelanggan'] = $this->pengaduan_m->ambil_data('pelanggan');
			$this->template->load('template4','pengaduan/pengaduan_pelanggan',$data);
		
		}else{
				echo "<script> alert('Data tidak ditemukan');";
				echo "window.location='".site_url('pembayaran')."';</script>";
		}
		
	}
    public function status_pemasangan($id)
	{
		$query = $this->pelanggan_m->get($id);
			
		$data['row'] = $query->row();
        $data['kelurahan'] = $this->pelanggan_m->ambil_data('kelurahan');
        $data['pemasangan'] = $this->pelanggan_m->ambil_data('pemasangan');
		$this->template->load('template4', 'pelanggan/view_status', $data);
			
    }

    public function status_pembayaran($id)
	{
		$query = $this->pembayaran_m->get_pembayaran($id);
			
		$data['row'] = $query->result();
        $data['pembayaran'] = $this->pelanggan_m->ambil_data('kelurahan');
        $data['pemasangan'] = $this->pelanggan_m->ambil_data('pemasangan');
		$this->template->load('template4', 'pembayaran/data_pembayaran', $data);
			
	}

	public function pengaduan($id)
	{
		$query = $this->pengaduan_m->get_pengaduan($id);
			
		$data['row'] = $query->result();
		$data['pengaduan'] = $this->pelanggan_m->ambil_data('pengaduan');
        $data['teknisi'] = $this->pelanggan_m->ambil_data('teknisi');
		$this->template->load('template4', 'pengaduan/data_pengaduan', $data);
			
	}

	
}