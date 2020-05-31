<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_teknisi extends CI_Controller {

	
	public function index()
	{
		check_not_login();
		$this->template->load('template2', 'dashboard_teknisi');
	}
}
