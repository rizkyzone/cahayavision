<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('pembayaran_m');
	
	}
	public function index()
	{
		$data['title'] = "Data pembayaran";
		$data['row'] = $this->pembayaran_m->get();
		$this->template->load('template', 'pembayaran/pembayaran_data', $data);
	}

	

	public function add() #function edit dan add
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
		$this->template->load('template', 'pembayaran/pembayaran_form', $data);
		
    }
    public function proses_status($id){
        $hasil = $this->pembayaran_m->rubah_status($id);
        if($hasil)
        {
            $this->index();
        } else{
            echo "<script> alert('Data tidak ditemukan');";
			echo "window.location='".site_url('pembayaran')."';</script>";
        }
    }

	public function edit($id)
	{
		$query = $this->pembayaran_m->get($id);
		if($query->num_rows() > 0) {
			$pembayaran = $query->row();
			$data = array(
				'page' => 'edit',
				'title' => 'Data pembayaran',
				'row' => $pembayaran
			);
			$data['pelanggan'] = $this->pembayaran_m->ambil_data('pelanggan');
			$this->template->load('template','pembayaran/pembayaran_form',$data);
		
		}else{
				echo "<script> alert('Data tidak ditemukan');";
				echo "window.location='".site_url('pembayaran')."';</script>";
		}
		
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
                    redirect('pembayaran');
                 }else{
					$error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('pembayaran/add');
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
                    redirect('pembayaran');
                 }else{
					$error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('pembayaran/edit');
                }    
            }else {
                $post['image'] = null;
				$this->pembayaran_m->edit($post);
                    if($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('success', 'Data Berhasil Disimpan');
                    }
                    redirect('pembayaran');
            	}
		}
		
	}

	public function del($id)
	{
		$data = $this->pembayaran_m->get($id);
		$data = $data->result_array();
		$this->pembayaran_m->del($id);
		if($this->db->affected_rows() > 0) {
			if($data[0]['image'] != "default.jpg"){
				$filename = $data[0]['image'];
				//echo $filename;die();
				array_map('unlink', glob(FCPATH."uploads/".$filename));
			}
			$this->session->set_flashdata('success', 'Data Berhasil Dihapus');
		}
		redirect('pembayaran');
	}

}
