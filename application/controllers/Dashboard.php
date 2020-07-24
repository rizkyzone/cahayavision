<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	public function index()
	{
		$this->load->model('pelanggan_m');
		$this->load->model('pembayaran_m');
		check_not_login();
		check_admin();
		$data['p'] = $this->pelanggan_m->jumlahKelurahan();
		$data['hasil'] = $this->pelanggan_m->chartkelurahan();
		$data['hasil2'] = $this->pelanggan_m->chartpenambahan();
		$data['lastpembayaran'] = $this->pembayaran_m->lastpayment();
		$this->template->load('template', 'dashboard', $data);
	}

	
}
