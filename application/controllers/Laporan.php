<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

  function __construct()
  {

    parent::__construct();
    check_not_login();
    $this->load->model('pelanggan_m');
    $this->load->model('pembayaran_m');
    $this->load->model('pemasangan_m');
    $this->load->model('pengaduan_m');
    $this->load->model('pemutusan_m');
  }
  public function pembayaran()
  {
    $this->template->load('template', 'laporan/pembayaran');
  }

  public function pemutusan()
  {
    $this->template->load('template', 'laporan/pemutusan');
  }

  public function pengaduan()
  {
    $this->template->load('template', 'laporan/pengaduan');
  }

  public function pemasangan()
  {
    $this->template->load('template', 'laporan/pemasangan');
  }

  public function penambahan()
  {
    $this->template->load('template', 'laporan/penambahan');
  }
  public function rekap_teknisi()
  {
    $this->template->load('template', 'laporan/rekap_teknisi');
  }
  public function laporanpembayaran()
  {
    $tgl_awal = $this->input->post('tgl_awal');
    $tgl_akhir = $this->input->post('tgl_akhir');
    $data['p'] = $this->pembayaran_m->getByDate($tgl_awal, $tgl_akhir);
    $this->load->view('laporan/pembayaran_detail', $data);
  }

  public function laporanpemutusan()
  {
    $tgl_awal = $this->input->post('tgl_awal');
    $tgl_akhir = $this->input->post('tgl_akhir');
    $data['title'] = "Laporan Data Pemutusan";
    $data['p'] = $this->pemutusan_m->getByDate($tgl_awal, $tgl_akhir);
    $this->load->view('laporan/pemutusan_detail', $data);
  }

  public function laporanpemasangan()
  {
    $tgl_awal = $this->input->post('tgl_awal');
    $tgl_akhir = $this->input->post('tgl_akhir');
    $data['p'] = $this->pemasangan_m->getByDate($tgl_awal, $tgl_akhir);
    $this->load->view('laporan/pemasangan_detail', $data);
  }
  public function laporanpengaduan()
  {
    $tgl_awal = $this->input->post('tgl_awal');
    $tgl_akhir = $this->input->post('tgl_akhir');
    $data['title'] = "Laporan Data Pengaduan Pelanggan";
    $data['p'] = $this->pengaduan_m->getByDate($tgl_awal, $tgl_akhir);
    $this->load->view('laporan/pengaduan_detail', $data);
  }
  public function pelanggan()
  {
    $data['kelurahan'] = $this->pelanggan_m->ambil_data_kelurahan();
    $this->template->load('template', 'laporan/pelanggan', $data);
  }

  public function laporankelurahan()
  {
    $kelurahan = $this->input->post('kelurahan_id');
    $data['title'] = "Laporan Data Pelanggan Perkelurahan";
    $data['p'] = $this->pembayaran_m->getkelurahan($kelurahan);
    $this->load->view('laporan/pelanggan_detail', $data);
  }
  public function laporanpelanggan()
  {
    $data['title'] = "Laporan Data Pelanggan";
    $data['p'] = $this->pembayaran_m->getpelanggan();
    $this->load->view('laporan/pelanggan_detail', $data);
  }
  public function laporanpenambahan()
  {
    $pemasangan = $this->input->post('pemasangan_id');
    $data['p'] = $this->pemasangan_m->getpenambahan($pemasangan);
    $this->load->view('laporan/penambahan_detail', $data);
  }
}
