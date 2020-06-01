<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemutusan_m extends CI_Model {
    public function get($id= null)
    {
        $this->db->from('Pemutusan');
        if($id != null){
            $this->db->where('pemutusan_id', $id);
        }
        $this->db->join('pelanggan' , 'pelanggan.pelanggan_id=Pemutusan.pelanggan_id' , 'left');
        $query = $this->db->get();
        
        return $query;
    }
   
    
    public function ambil_data($tabel)
    {
        $this->db->from($tabel);
        
        $query = $this->db->get();
        return $query->result_array();
    }
    public function rubah_status($id){
        $data = $this->get($id);
        $data = $data->result_array();
        if ($data[0]['status'] == 'Belum'){
            $params['status'] = 'Sudah';
        }
        if ($data[0]['status'] == 'Sudah'){
            $params['status'] = 'Belum';
        }
        $this->db->where('pengaduan_id', $id);
        $this->db->update('pengaduan', $params);
        return true;
    }
    public function add($post)
    {
        $params['pelanggan_id'] = $post['pelanggan_id'];
        $params['tanggal_pemutusan'] = $post['tgl'];
        $params['alasan_pemutusan'] = $post['alasan_pemutusan'];
        $params['status_pemutusan'] = $post['status_pemutusan'];

        $this->db->insert('pemutusan', $params);
    }
    
    public function tambah_pemutusan($post)
    {
        $params['pelanggan_id'] = $post['pelanggan_id'];
        
        $params['alasan_pemutusan'] = $post['alasan_pemutusan'];
        $params['status_pemutusan'] = 1;

        $this->db->insert('pemutusan', $params);
    }
    
    public function edit($post)
    {
        $params['pelanggan_id'] = $post['pelanggan_id'];
        $params['tanggal_pemutusan'] = $post['tgl'];
        $params['alasan_pemutusan'] = $post['alasan_pemutusan'];
        $params['status_pemutusan'] = $post['status_pemutusan'];

        $this->db->where('pemutusan_id', $post['pemutusan_id']);
        $this->db->update('pemutusan', $params);
    }
    public function ubah($post)
    {
        $params['pelanggan_id'] = $post['pelanggan_id'];
        $params['tanggal_pengaduan'] = $post['tgl'];
        $params['keluhan'] = $post['keluhan'];
        $params['teknisi_id'] = $post['teknisi_id'];
        $params['status_pengaduan'] = $post['status_pengaduan'];

        $this->db->where('pengaduan_id', $post['pengaduan_id']);
        $this->db->update('pengaduan', $params);
    }
    public function del($id)
	{
		$this->db->where('pemutusan_id', $id);
		$this->db->delete('pemutusan');
    }
    public function get_pemutusan($id= null)
    {
        $this->db->from('pemutusan');
        if($id != null){
            $this->db->where('pemutusan.pelanggan_id', $id);
        }
        $this->db->join('pelanggan' , 'pelanggan.pelanggan_id=pemutusan.pelanggan_id' , 'left');
        $query = $this->db->get();
       // echo $this->db->last_query();die();
        return $query;
    }
    public function get_pengaduan_only($id= null)
    {
        $this->db->from('pengaduan');
        if($id != null){
            $this->db->where('pengaduan.pengaduan_id', $id);
        }
        $this->db->join('pelanggan' , 'pelanggan.pelanggan_id=pengaduan.pelanggan_id' , 'left');
        $this->db->join('teknisi' , 'teknisi.teknisi_id=pengaduan.teknisi_id' , 'left');
        $query = $this->db->get();
       // echo $this->db->last_query();die();
        return $query;
    }

}