<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemasangan_m extends CI_Model {
    public function get($id= null)
    {
        $this->db->from('pemasangan');
        if($id != null){
            $this->db->where('pemasangan_id', $id);
        }
        $this->db->join('pelanggan' , 'pelanggan.pelanggan_id=pemasangan.pelanggan_id' , 'left');
        $this->db->join('kelurahan' , 'kelurahan.kelurahan_id=pelanggan.kelurahan_id' , 'left');
        $this->db->join('teknisi' , 'teknisi.teknisi_id=pemasangan.teknisi_id' , 'left');
        $this->db->order_by('pemasangan.status','asc');
        $this->db->order_by('pemasangan.tanggal_pemasangan','asc');
        $query = $this->db->get();
        return $query;
    }
    public function getpe($id= null)
    {
        $this->db->from('pemasangan');
        if($id != null){
            $this->db->where('pemasangan_id', $id);
        }
        $this->db->join('pelanggan' , 'pelanggan.pelanggan_id=pemasangan.pelanggan_id' , 'left');
        $this->db->join('kelurahan' , 'kelurahan.kelurahan_id=pelanggan.kelurahan_id' , 'left');
        $query = $this->db->get();
        return $query;
    }
    public function getpending($id= null)
    {
        $this->db->from('pemasangan');
        if($id != null){
            $this->db->where('pemasangan_id', $id);
        }
        $this->db->where('status', 1);
        $query = $this->db->get();
        return $query;
    }
    public function getaktif($id= null)
    {
        $this->db->from('pemasangan');
        if($id != null){
            $this->db->where('pemasangan_id', $id);
        }
        $this->db->where('status', 2);
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
        $this->db->where('pemasangan_id', $id);
        $this->db->update('pemasangan', $params);
        return true;
    }
    public function add($post)
    {
        $params['pelanggan_id'] = $post['pelanggan_id'];
        $params['jumlah_televisi'] = $post['jumlah_televisi'];
        $params['tanggal_pemasangan'] = $post['tgl'];
        $params['teknisi_id'] = $post['teknisi_id'];
        $params['status'] = $post['status'];
        $this->db->insert('pemasangan', $params);
       
    }
    public function edit($post)
    {
        $params['pelanggan_id'] = $post['pelanggan_id'];
        $params['jumlah_televisi'] = $post['jumlah_televisi'];
        $params['tanggal_pemasangan'] = $post['tgl'];
        $params['teknisi_id'] = $post['teknisi_id'];
        $params['status'] = $post['status'];

        $this->db->where('pemasangan_id', $post['pemasangan_id']);
        $this->db->update('pemasangan', $params);
        if ($params['status'] == 2)
        $this->pembayaran_add($params['pelanggan_id']);
    }
    function pembayaran_add($pelanggan_id){
        
        $params['pelanggan_id'] = $pelanggan_id;
        $this->db->insert('pembayaran', $params);

    }
    public function del($id)
	{
		$this->db->where('pemasangan_id', $id);
		$this->db->delete('pemasangan');
    }
    public function getpenambahan($pemasangan)
    {
        $tahun = $this->input->post('tahun');
        $kondisi = "";
        $this->db->select('count(pemasangan_id) as num');
        $this->db->select('monthname(tanggal_pemasangan) as bulan');
        $this->db->from('pemasangan');
        $this->db->where('status','2');
        $this->db->where('year(tanggal_pemasangan)',$tahun);
        $this->db->group_by('month(tanggal_pemasangan)');
        $q = $this->db->get_where();
        $q = $q->result_array();
        //echo $this->db->last_query();die();
        return $q;
        
    }
    public function getByDate($tgl_awal, $tgl_akhir)
    {
        $kondisi = "";
        $this->db->select('');
        $this->db->from('pemasangan');
        $this->db->join('pelanggan','pelanggan.pelanggan_id=pemasangan.pelanggan_id','left');
        $this->db->order_by('pemasangan.status','asc');
        $this->db->order_by('pemasangan.tanggal_pemasangan','asc');
        $this->db->where('status',2);
        if ($tgl_awal != "" && $tgl_akhir==""){
            $this->db->where('tanggal_pemasangan >=',$tgl_awal);
        } else if ($tgl_awal == "" && $tgl_akhir!=""){
            $this->db->where('tanggal_pemasangan <=',$tgl_akhir);
        } else  if ($tgl_awal != "" && $tgl_akhir!=""){
            $this->db->where('tanggal_pemasangan >=',$tgl_awal);
            $this->db->where('tanggal_pemasangan <=',$tgl_akhir);
        }
        $q = $this->db->get_where();
        $q = $q->result_array();
        return $q;
        
    }
    public function getByDateUpDown($tgl_awal, $tgl_akhir)
    {
        $kondisi = "";
        $this->db->select('*');
        $this->db->select('count(status) as penambahan');
        $this->db->from('pelanggan');
        $this->db->join('pemasangan','pemasangan.pelanggan_id=pelanggan.pelanggan_id','left');
        $this->db->join('pemutusan','pemutusan.pelanggan_id=pelanggan.pelanggan_id','left');
        $this->db->where('status',2);
        if ($tgl_awal != "" && $tgl_akhir==""){
            $this->db->where('tanggal_pemasangan >=',$tgl_awal);
        } else if ($tgl_awal == "" && $tgl_akhir!=""){
            $this->db->where('tanggal_pemasangan <=',$tgl_akhir);
        } else  if ($tgl_awal != "" && $tgl_akhir!=""){
            $this->db->where('tanggal_pemasangan >=',$tgl_awal);
            $this->db->where('tanggal_pemasangan <=',$tgl_akhir);
        }
        $q = $this->db->get_where();
        $q = $q->result_array();
        //echo $this->db->last_query();die();
        //print_r($q);die();
        return $q;
        
        
        
    }

}