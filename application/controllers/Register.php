<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{


	function __construct()
	{
		parent::__construct();
		$this->load->model('pelanggan_m');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['row'] = $this->pelanggan_m->get();
		$this->load->view('register');
	}
	public function new()
	{

		$this->form_validation->set_rules('fullname', 'Nama', 'required');
		$this->form_validation->set_rules('nik', 'Nik', 'required');
		$this->form_validation->set_rules('address', 'address', 'required');
		$this->form_validation->set_rules('telepon', 'No Telp', 'required');

		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[pelanggan.username]');

		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
		$this->form_validation->set_rules(
			'passconf',
			'Konfirmasi Password',
			'required|matches[password]',
			array('matches' => '%s tidak sesuai dengan password')
		);
		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
		$this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
		$this->form_validation->set_message('is_unique', '{field} sudah dipakai');
		$this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');
		if ($this->form_validation->run() == FALSE) {
			$data['kelurahan'] = $this->pelanggan_m->ambil_data_kelurahan();
			$this->load->view('register', $data);
		} else {
			$post = $this->input->post(null, TRUE);

			$this->pelanggan_m->add($post);
			if ($this->db->affected_rows() > 0) {
				echo "<script> alert('Data berhasil disimpan');</script>";
			}
			echo "<script>window.location='" . site_url('auth/login_pelanggan') . "';</script>";
		}
	}
	public function edit($id)
	{

		$this->form_validation->set_rules('fullname', 'Nama', 'required');
		$this->form_validation->set_rules('nik', 'Nik', 'required');
		$this->form_validation->set_rules('address', 'address', 'required');
		$this->form_validation->set_rules('telepon', 'No Telp', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|callback_username_check');

		if ($this->input->post('password')) {
			$this->form_validation->set_rules('password', 'Password', 'min_length[5]');
			$this->form_validation->set_rules(
				'passconf',
				'Konfirmasi Password',
				'matches[password]',
				array('matches' => '%s tidak sesuai dengan password')
			);
		}
		if ($this->input->post('passconf')) {
			$this->form_validation->set_rules(
				'passconf',
				'Konfirmasi Password',
				'required|matches[password]',
				array('matches' => '%s tidak sesuai dengan password')
			);
		}
		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
		$this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
		$this->form_validation->set_message('is_unique', '{field} sudah dipakai');
		$this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');
		if ($this->form_validation->run() == FALSE) {
			$query = $this->pelanggan_m->get($id);
			if ($query->num_rows() > 0) {
				$data['row'] = $query->row();
				$data['kelurahan'] = $this->pelanggan_m->ambil_data_kelurahan();
				$this->template->load('template', 'pelanggan/pelanggan_form_edit', $data);
			} else {
				echo "<script> alert('Data tidak ditemukan');";
				echo "window.location='" . site_url('pelanggan') . "';</script>";
			}
		} else {
			$post = $this->input->post(null, TRUE);
			$this->pelanggan_m->edit($post);
			if ($this->db->affected_rows() > 0) {
				echo "<script> alert('Data berhasil disimpan');</script>";
			}
			echo "<script>window.location='" . site_url('pelanggan') . "';</script>";
		}
	}
	public function username_check()
	{
		$post = $this->input->post(null, TRUE);
		$query = $this->db->query("SELECT * FROM pelanggan WHERE username = '$post[username]' AND pelanggan_id != '$post[pelanggan_id]'");
		if ($query->num_rows() > 0) {
			$this->form_validation->set_message('username_check', '{field} ini sudah dipakai, silahkan ganti');
			return FALSE;
		} else {
			return TRUE;
		}
	}
	public function del()
	{
		$id = $this->input->post('pelanggan_id');
		$this->pelanggan_m->del($id);
		if ($this->db->affected_rows() > 0) {
			echo "<script> alert('Data berhasil dihapus');</script>";
		}
		echo "<script>window.location='" . site_url('pelanggan') . "';</script>";
	}
}
