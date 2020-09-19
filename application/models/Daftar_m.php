<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_m extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function insert($daftar){
		$this->db->insert('pelanggan', $daftar);
		return $this->db->insert_id(); 
	}
	public function ambil_data_kelurahan()
    {
        $this->db->from('kelurahan');
        $this->db->order_by('nama_kelurahan', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

	public function getUser($id){
		$query = $this->db->get_where('pelanggan',array('pelanggan_id'=>$id));
		return $query->row_array();
	}

	public function activate($data, $id){
		$this->db->where('pelanggan.pelanggan_id', $id);
		return $this->db->update('pelanggan', $data);
	}

}
