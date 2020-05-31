<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman_awal extends CI_Controller {

	
	public function index()
	{
		
		$this->load->view('halamanawal');
	}
}
