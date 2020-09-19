<?php

function check_already_login() {
    $ci =& get_instance();
    $user_session = $ci->session->userdata('userid');
    if($user_session){
        redirect('dashboard');
    }
}
function check_already_login2() {
    $ci =& get_instance();
    $user_session = $ci->session->userdata('pelanggan_id');
    if($user_session){
        redirect('dashboard_pelanggan');
    }
}
function check_not_login2(){
    $ci =& get_instance();
    $user_session = $ci->session->userdata('pelanggan_id');
    if(!$user_session){
        redirect('auth/login_pelanggan');
    }
}
function check_not_login(){
    $ci =& get_instance();
    $user_session = $ci->session->userdata('userid');
    if(!$user_session){
        redirect('auth/login');
    }
}

function check_admin() {
    $ci =& get_instance();
    $ci->load->library('fungsi');
    if($ci->fungsi->user_login()->level == 2) {
        redirect('dashboard_teknisi');
    }elseif($ci->fungsi->user_login()->level == 3){
        redirect('dashboard_pimpinan');
    }
    
}

function check_verif() {
    $ci =& get_instance();
    $ci->load->library('fungsi');
    if($ci->fungsi->user_login2()->active != 1) {
        redirect('auth/verif_email');
    }
}