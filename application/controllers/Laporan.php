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

  public function rekap_zona_belum_terjangkau()
  {
    $this->template->load('template', 'laporan/zona_belum_terjangkau');
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

  public function rekap_kelurahan()
  {
    $this->template->load('template', 'laporan/rekap_kelurahan');
  }

  public function rekap_updown()
  {
    $this->template->load('template', 'laporan/rekap_updown');
  }

  public function denda()
  {
    $this->template->load('template', 'laporan/denda');
  }

  public function bermasalah()
  {
    $this->template->load('template', 'laporan/bermasalah');
  }

  public function pelanggan()
  {
    $data['kelurahan'] = $this->pelanggan_m->ambil_data_kelurahan();
    $this->template->load('template', 'laporan/pelanggan', $data);
  }

  public function laporanbermasalah()
  {
    $tgl_awal = $this->input->post('tgl_awal');
    $tgl_akhir = $this->input->post('tgl_akhir');
    $data['title'] = "Laporan Data Pelanggan Bermasalah";
    $data['p'] = $this->pembayaran_m->getByDateBermasalah($tgl_awal, $tgl_akhir);
    $this->load->view('laporan/bermasalah_detail', $data);
  }

  public function laporandenda()
  {
    $tgl_awal = $this->input->post('tgl_awal');
    $tgl_akhir = $this->input->post('tgl_akhir');
    $data['title'] = "Laporan Data Denda Pelanggan";
    $data['p'] = $this->pembayaran_m->getByDateDenda($tgl_awal, $tgl_akhir);
    $this->load->view('laporan/denda_detail', $data);
  }

  public function laporanrekapteknisi()
  {
    $tgl_awal = $this->input->post('tgl_awal');
    $tgl_akhir = $this->input->post('tgl_akhir');
    $data['title'] = "Laporan Data Rekap Teknisi";
    $data['p'] = $this->pengaduan_m->getByDateTeknisi($tgl_awal, $tgl_akhir);
    $this->load->view('laporan/rekap_teknisi_detail', $data);
  }

  public function laporanrekapupdown()
  {
    $tgl_awal = $this->input->post('tgl_awal');
    $tgl_akhir = $this->input->post('tgl_akhir');
    $data['title'] = "Laporan Data Rekap Kenaikan Dan Penurunan";
    $data['p'] = $this->pemasangan_m->getByDateUp($tgl_awal, $tgl_akhir);
    $data['z'] = $this->pemasangan_m->getByDateDown($tgl_awal, $tgl_akhir);
    $this->load->view('laporan/rekap_updown_detail', $data);
  }

  public function laporanrekapkelurahan()
  {
    $tgl_awal = $this->input->post('tgl_awal');
    $tgl_akhir = $this->input->post('tgl_akhir');
    $data['title'] = "Laporan Data Rekap Kelurahan";
    $data['p'] = $this->pelanggan_m->getByDateKelurahan($tgl_awal, $tgl_akhir);
    $this->load->view('laporan/rekap_kelurahan_detail', $data);
  }

  public function laporanrekapzonakelurahan()
  {
    $tgl_awal = $this->input->post('tgl_awal');
    $tgl_akhir = $this->input->post('tgl_akhir');
    $data['title'] = "Laporan Data Rekap Zona Belum Terjangkau";
    $data['p'] = $this->pelanggan_m->getByDateRekapBelumTerjangkau($tgl_awal, $tgl_akhir);
    $this->load->view('laporan/rekap_belum_terjangkau_detail', $data);
  }

  public function laporanpembayaran()
  {
    $tgl_awal = $this->input->post('tgl_awal');
    $tgl_akhir = $this->input->post('tgl_akhir');
    $data['title'] = "Laporan Data Pembayaran";
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
    $data['title'] = "Laporan Data Pemasangan";
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
  

  public function laporankelurahan()
  {
    $kelurahan = $this->input->post('kelurahan_id');
    $data['kelurahan'] = $this->pelanggan_m->ambil_data_kelurahan();
    $data['title'] = "Laporan Data Pelanggan Perkelurahan";
    $data['p'] = $this->pembayaran_m->getkelurahan($kelurahan);
    $data['belum'] = $this->pelanggan_m->getjumlah1($kelurahan);
    $data['sudah'] = $this->pelanggan_m->getjumlah2($kelurahan);
    $data['tidak'] = $this->pelanggan_m->getjumlah3($kelurahan);
    $data['non'] = $this->pelanggan_m->getjumlah4($kelurahan);
    $this->load->view('laporan/pelanggan_detail', $data);
  }
  public function laporanpelanggan()
  {
    $data['title'] = "Laporan Data Pelanggan";
    $data['p'] = $this->pembayaran_m->getpelanggan();
    $data['belum'] = $this->pembayaran_m->getjumlah1();
    $data['sudah'] = $this->pembayaran_m->getjumlah2();
    $data['tidak'] = $this->pembayaran_m->getjumlah3();
    $data['non'] = $this->pembayaran_m->getjumlah4();
    $this->load->view('laporan/pelanggan_detail_all', $data);
  }
  public function laporanpenambahan()
  {
    $data['title'] = "Laporan Data Jumlah Pemasangan Tahun";
    $pemasangan = $this->input->post('pemasangan_id');
    $data['p'] = $this->pemasangan_m->getpenambahan($pemasangan);
    $this->load->view('laporan/penambahan_detail', $data);
  }
}
