<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan_m extends CI_Model {

    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->where('username', $post['username']);
        $this->db->where('password', sha1($post['password']));
        $query = $this->db->get();
        return $query;
    }
    
    public function get($id= null)
    {
        $this->db->from('pelanggan');
        if($id != null){
            $this->db->where('pelanggan.pelanggan_id', $id);
        }
        $this->db->join('kelurahan' , 'kelurahan.kelurahan_id=pelanggan.kelurahan_id' , 'left');
        $this->db->join('pemasangan' , 'pemasangan.pelanggan_id=pelanggan.pelanggan_id' , 'left');
        $this->db->join('pembayaran' , 'pembayaran.pelanggan_id=pelanggan.pelanggan_id' , 'left');
        $this->db->join('pengaduan' , 'pengaduan.pelanggan_id=pelanggan.pelanggan_id' , 'left');
        $this->db->join('teknisi' , 'pengaduan.pelanggan_id=pelanggan.pelanggan_id' , 'left');
        //$this->db->group_by('pembayaran_id');
        $query = $this->db->get();
        //echo $this->db->last_query();die();
        return $query;
    }
    public function get_pelanggan_id($id= null)
    {
        $this->db->from('pelanggan');
        if($id != null){
            $this->db->where('pelanggan.pelanggan_id', $id);
        }
        //$this->db->group_by('pembayaran_id');
        $query = $this->db->get();
        //echo $this->db->last_query();die();
        return $query;
    }

    public function ambil_data($tabel)
    {
        $this->db->from($tabel);
        
        $query = $this->db->get();
        return $query->result_array();
    }
    public function add($post)
    {
        $params['nik'] = $post['nik'];
        $params['nama'] = $post['fullname'];
        $params['address'] = $post['address'];
        $params['no_telp'] = $post['telepon'];
        $params['username'] = $post['username'];
        $params['password'] = sha1($post['password']);
        $params['kelurahan_id'] = $post['kelurahan_id'];
        $this->db->insert('pelanggan', $params);
        $getid=$this->db->insert_id();
        $params2['pelanggan_id'] = $getid;
        $this->db->insert('pemasangan', $params2);
        
    }
    public function edit($post)
    {
        $params['nik'] = $post['nik'];
        $params['nama'] = $post['fullname'];
        $params['address'] = $post['address'];
        $params['no_telp'] = $post['telepon'];
        $params['kelurahan_id'] = $post['kelurahan_id'];
        $params['username'] = $post['username'];
        if(!empty($post['password'])){
            $params['password'] = sha1($post['password']);
        }
        $this->db->where('pelanggan_id', $post['pelanggan_id']);
        $this->db->update('pelanggan', $params);
    }
    
	public function del($id)
	{
		$this->db->where('pelanggan_id', $id);
		$this->db->delete('pelanggan');
    }

}
