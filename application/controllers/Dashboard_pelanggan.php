<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_pelanggan extends CI_Controller {

	
	public function index()
	{
		check_not_login2();
		$this->template->load('template4', 'dashboard_pelanggan');
	}
}
