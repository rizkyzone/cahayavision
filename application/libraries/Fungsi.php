<?php

Class Fungsi {
    protected $ci;

    function __construct() {
        $this->ci =& get_instance();
    }

    function user_login() {
        $this->ci->load->model('user_m');
        $user_id = $this->ci->session->userdata('userid');
        $user_data = $this->ci->user_m->get($user_id)->row();
        return $user_data;
    }
    function user_login2() {
        $this->ci->load->model('pelanggan_m');
        $pelanggan_id = $this->ci->session->userdata('pelanggan_id');
        $pelanggan_data = $this->ci->pelanggan_m->get_pelanggan_id($pelanggan_id)->row();
        return $pelanggan_data;
    }
}