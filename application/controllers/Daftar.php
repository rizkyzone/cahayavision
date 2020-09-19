<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->model('daftar_m');
        $this->load->model('pelanggan_m');
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');

        //get all users
	}

	public function index(){
        $data['kelurahan'] = $this->pelanggan_m->ambil_data_kelurahan();
		$this->load->view('daftar', $data);
	}

	public function daftarbaru(){
        $this->form_validation->set_rules('fullname', 'Nama', 'required');
		$this->form_validation->set_rules('nik', 'Nik', 'required');
		$this->form_validation->set_rules('address', 'address', 'required');
		$this->form_validation->set_rules('telepon', 'No Telp', 'required');
        $this->form_validation->set_rules('email', 'Email', 'valid_email|required');
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
        if ($this->form_validation->run() == FALSE) { 
            $data['kelurahan'] = $this->pelanggan_m->ambil_data_kelurahan();
            $this->load->view('daftar', $data);
		}
		else{
			//get user inputs
			$email = $this->input->post('email');
            $username = $this->input->post('username');
            $password = sha1($this->input->post("password"));   
            $nik = $this->input->post('nik');
            $nama = $this->input->post('fullname');
            $address = $this->input->post('address');
            $kelurahan_id = $this->input->post('kelurahan_id');
            $telepon = $this->input->post('telepon');
            
			//generate simple random code
			$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$code = substr(str_shuffle($set), 0, 12);

			//insert user to users table and get id
            $daftar['email'] = $email;
            $daftar['username'] = $username;
            $daftar['password'] = $password;
            $daftar['nik'] = $nik;
            $daftar['nama'] = $nama;
            $daftar['address'] = $address;
            $daftar['kelurahan_id'] = $kelurahan_id;
            $daftar['no_telp'] = $telepon;
			$daftar['code'] = $code;
			$daftar['active'] = false;
			$id = $this->daftar_m->insert($daftar);

			//set up email
			$config = array(
		  		'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'muhammad.rizky3148@gmail.com',  // Email gmail
            'smtp_pass'   => 'Rizky@789',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
			);

			$message = 	"
						<html>
						<head>
							<title>Verification Code</title>
						</head>
						<body>
							<h2>Terimakasih Telah Mendaftar.</h2>
                            <p>Informasi akun anda:</p>
                            <p>Nama: ".$nama."</p>
                            <p>Username: ".$username."</p>
                            <p>Email: ".$email."</p>
                            <p>No Telepon: ".$telepon."</p>
							<p>Klik link dibawah ini untuk mengaktifkan akun Anda.</p>
							<h4><a href='".base_url()."daftar/activate/".$id."/".$code."'>Activate My Account</a></h4>
						</body>
						</html>
						";
	 		
		    $this->load->library('email', $config);
		    $this->email->set_newline("\r\n");
		    $this->email->from($config['smtp_user']);
		    $this->email->to($email);
		    $this->email->subject('Verifikasi Email Anda');
		    $this->email->message($message);

		    //sending email
		    if($this->email->send()){
		    	$this->session->set_flashdata('message','Pendaftaran Berhasil Silahkan cek Email Anda');
		    }
		    else{
		    	$this->session->set_flashdata('message', $this->email->print_debugger());
	 
		    }

        	redirect('daftar');
		}

	}

	public function activate(){
		$id =  $this->uri->segment(3);
		$code = $this->uri->segment(4);

		//fetch user details
		$daftar = $this->daftar_m->getUser($id);

		//if code matches
		if($daftar['code'] == $code){
			//update user active status
			$data['active'] = true;
			$query = $this->daftar_m->activate($data, $id);

			if($query){
				$this->session->set_flashdata('message', 'Akun Anda Telah Aktif');
			}
			else{
				$this->session->set_flashdata('message', 'Something went wrong in activating account');
			}
		}
		else{
			$this->session->set_flashdata('message', 'Cannot activate account. Code didnt match');
		}

		redirect('auth/email_aktif');

	}

}
