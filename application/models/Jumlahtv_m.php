<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jumlahtv_m extends CI_Model {
    public function get($id= null)
    {
        $this->db->from('harga');
        if($id != null){
            $this->db->where('jumlah_id', $id);
        }
       
        $query = $this->db->get();
        
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
        $params['jumlah_tv'] = $post['jumlah_tv'];
        $params['harga'] = $post['harga'];
        $params['denda'] = $post['denda'];

        $this->db->insert('harga', $params);
    }

    
    public function edit($post)
    {
        $params['jumlah_tv'] = $post['jumlah_tv'];
        $params['harga'] = $post['harga'];
        $params['denda'] = $post['denda'];

        $this->db->where('jumlah_id', $post['jumlah_id']);
        $this->db->update('harga', $params);
    }
   
    public function del($id)
	{
		$this->db->where('jumlah_id', $id);
		$this->db->delete('harga');
    }

}