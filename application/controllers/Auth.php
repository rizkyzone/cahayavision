<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		check_already_login();
		$this->load->view('login');
	}
	public function login_pelanggan()
	{
		check_already_login2();
		$this->load->view('login_pelanggan');
	}
	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])){
			$this->load->model('user_m');
			$query = $this->user_m->login($post);
			if($query->num_rows()> 0){
				$row = $query->row();
				$params = array(
					'userid' => $row->user_id,
					'level' => $row->level
				);
				$this->session->set_userdata($params);
				if($this->session->userdata('level') == 1) {
				echo "<script>
				alert('Selamat, Login Berhasil');
				window.location='".site_url('dashboard')."';	
				</script>";
				}elseif($this->session->userdata('level') == 2) {
				echo "<script>
				alert('Selamat, Login Berhasil');
				window.location='".site_url('dashboard_teknisi')."';	
				</script>";
				}elseif($this->session->userdata('level') ==3) {
				echo "<script>
				alert('Selamat, Login Berhasil');
				window.location='".site_url('dashboard_pimpinan')."';	
				</script>";
				}
				
			} else {
				echo "<script>
				alert('Maaf Password Salah');
				window.location='".site_url('auth/login')."';	
				</script>";
			}
		}
	}
	public function process_login()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])){
			$this->load->model('pelanggan_m');
			$query = $this->pelanggan_m->login($post);
			if($query->num_rows()> 0){
				$row = $query->row();
				$params = array(
					'pelanggan_id' => $row->pelanggan_id
				);
				$this->session->set_userdata($params);
				echo "<script>
				alert('Selamat, Login Berhasil');
				window.location='".site_url('dashboard_pelanggan')."';	
				</script>";
				
			} else {
				echo "<script>
				alert('Maaf Password Salah');
				window.location='".site_url('auth/login_pelanggan')."';	
				</script>";
			}
		}
	}
	public function logout()
	{
		$params = array('userid', 'level');
		$this->session->unset_userdata($params);
		redirect('auth/login');
	}
	public function logout2()
	{
		$params = array('pelanggan_id');
		$this->session->unset_userdata($params);
		redirect('auth/login_pelanggan');
	}
}
