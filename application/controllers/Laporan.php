<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	function __construct(){

		parent::__construct();
        check_not_login();
        $this->load->model('pembayaran_m');
        $this->load->model('pemasangan_m');
    }
    public function pembayaran(){
        
		$this->template->load('template','laporan/pembayaran');
    }
    
    public function pemasangan(){
        
      $this->template->load('template','laporan/penambahan');
      }
    public function laporanpembayaran(){
        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');
        $data['p'] = $this->pembayaran_m->getByDate($tgl_awal,$tgl_akhir);
		$this->load->view('laporan/pembayaran_detail',$data);
    }
    public function pelanggan(){
        $data['kelurahan'] = $this->pembayaran_m->ambil_data('kelurahan');
		$this->template->load('template', 'laporan/pelanggan',$data);
    }

  public function laporankelurahan(){
        $kelurahan = $this->input->post('kelurahan_id');
        $data['p'] = $this->pembayaran_m->getkelurahan($kelurahan);
		$this->load->view('laporan/pelanggan_detail',$data);
    }
    public function laporanpenambahan(){
      $pemasangan = $this->input->post('pemasangan_id');
      $data['p'] = $this->pemasangan_m->getpenambahan($pemasangan);
      $this->load->view('laporan/pemasangan_detail',$data);
    }
}