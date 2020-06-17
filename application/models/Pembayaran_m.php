<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran_m extends CI_Model {
    public function get($id= null)
    {
        $this->db->from('pembayaran');
        if($id != null){
            $this->db->where('pembayaran_id', $id);
        }
        $this->db->join('pelanggan' , 'pelanggan.pelanggan_id=pembayaran.pelanggan_id' , 'left');
        $this->db->join('pemasangan' , 'pemasangan.pelanggan_id=pembayaran.pelanggan_id' , 'left');
        $this->db->join('harga' , 'harga.jumlah_id=pemasangan.jumlah_id' , 'left');
        $query = $this->db->get();
        return $query;
    }

    public function getstatus()
    {
        $this->db->from('pembayaran');
        $this->db->join('pelanggan' , 'pelanggan.pelanggan_id=pembayaran.pelanggan_id' , 'left');
        $this->db->join('pemasangan' , 'pemasangan.pelanggan_id=pembayaran.pelanggan_id' , 'left');
        $this->db->join('harga' , 'harga.jumlah_id=pemasangan.jumlah_id' , 'left');
        $this->db->where('status_bayar', 1);
        $this->db->order_by('pembayaran.tanggal_pembayaran','asc');
        $query = $this->db->get();
        
        return $query;
    }
    public function getstatus1()
    {
        $this->db->from('pembayaran');
        $this->db->join('pelanggan' , 'pelanggan.pelanggan_id=pembayaran.pelanggan_id' , 'left');
        $this->db->join('pemasangan' , 'pemasangan.pelanggan_id=pembayaran.pelanggan_id' , 'left');
        $this->db->join('harga' , 'harga.jumlah_id=pemasangan.jumlah_id' , 'left');
        $this->db->where('status_bayar', 2);
        $this->db->order_by('pembayaran.tanggal_pembayaran','asc');
        $query = $this->db->get();
        
        return $query;
    }
    public function getstatus2()
    {
        $this->db->from('pembayaran');
        $this->db->join('pelanggan' , 'pelanggan.pelanggan_id=pembayaran.pelanggan_id' , 'left');
        $this->db->join('pemasangan' , 'pemasangan.pelanggan_id=pembayaran.pelanggan_id' , 'left');
        $this->db->join('harga' , 'harga.jumlah_id=pemasangan.jumlah_id' , 'left');
        $this->db->where('status_bayar', 3);
        $this->db->order_by('pembayaran.tanggal_pembayaran','asc');
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
        $this->db->where('pembayaran_id', $id);
        $this->db->update('pembayaran', $params);
        return true;
    }
    public function add($post)
    {
        $params['pelanggan_id'] = $post['pelanggan_id'];
        $params['tanggal_pembayaran'] = $post['tgl'];
        $params['status_bayar'] = $post['status_bayar'];
        $params['image'] = $post['image'];

        $this->db->insert('pembayaran', $params);
    }
    public function edit($post)
    {
        $params['pelanggan_id'] = $post['pelanggan_id'];
        $params['tanggal_pembayaran'] = date('Y-m-d');
        $params['status_bayar'] = $post['status_bayar'];
        $params['metode_pembayaran'] = $post['metode_pembayaran'];
        
        $params['total_pembayaran'] = $post['total_pembayaran'];
        if($post['image'] != null) {
        $params['image'] = $post['image'];
        }
        $this->db->where('pembayaran_id', $post['id']);
        $this->db->update('pembayaran', $params);
        if ($params['status_bayar'] == 3)
        
        $tgl = date('Y-m-d');
        $params2['pelanggan_id'] = $post['pelanggan_id'];
        $params2['tanggal_tagihan'] = $tgl;
        $this->db->insert('pembayaran', $params2);
    }

    public function bayar($post)
    {
        $params['pelanggan_id'] = $post['pelanggan_id'];
        $params['denda'] = $post['denda'];
        $params['total_pembayaran'] = $post['total'];
        $params['metode_pembayaran'] = $post['metode_pembayaran'];
        $params['status_pembayaran'] = $post['status_pembayaran'];
        $params['tanggal_pembayaran'] = date('Y-m-d');
        $params['status_bayar'] = $post['status_bayar'];
        $params['tujuan_transfer'] = $post['tujuan_transfer'];
        if($post['image'] != null) {
        $params['image'] = $post['image'];
        }
        $this->db->where('pembayaran_id', $post['id']);
        $this->db->update('pembayaran', $params);
    }

    function denda($pelanggan_id){
        $this->db->select('tgl_tempo');
        $this->db->from('pembayaran');

    }
    public function del($id)
	{
		$this->db->where('pembayaran_id', $id);
        $this->db->delete('pembayaran');
        
    }

    public function getByDate($tgl_awal, $tgl_akhir)
    {
        $kondisi = "";
        $this->db->select('');
        $this->db->from('pembayaran');
        $this->db->join('pelanggan','pelanggan.pelanggan_id=pembayaran.pelanggan_id','left');
        $this->db->join('pemasangan','pemasangan.pelanggan_id=pelanggan.pelanggan_id','left');
        $this->db->where('pembayaran.status_bayar',3);
        if ($tgl_awal != "" && $tgl_akhir==""){
            $this->db->where('tanggal_pembayaran >=',$tgl_awal);
        } else if ($tgl_awal == "" && $tgl_akhir!=""){
            $this->db->where('tanggal_pembayaran <=',$tgl_akhir);
        } else  if ($tgl_awal != "" && $tgl_akhir!=""){
            $this->db->where('tanggal_pembayaran >=',$tgl_awal);
            $this->db->where('tanggal_pembayaran <=',$tgl_akhir);
        }
        $q = $this->db->get_where();
        $q = $q->result_array();
        return $q;
        
    }
    public function getByDateTagihan($tgl_awal, $tgl_akhir)
    {
        $kondisi = "";
        $this->db->select('');
        $this->db->from('pembayaran');
        $this->db->join('pelanggan','pelanggan.pelanggan_id=pembayaran.pelanggan_id','left');
        $this->db->join('pemasangan','pemasangan.pelanggan_id=pelanggan.pelanggan_id','left');
        $this->db->join('harga','harga.jumlah_id=pemasangan.jumlah_id','left');
        $this->db->where('pembayaran.status_bayar',1);
        if ($tgl_awal != "" && $tgl_akhir==""){
            $this->db->where('tanggal_tagihan >=',$tgl_awal);
        } else if ($tgl_awal == "" && $tgl_akhir!=""){
            $this->db->where('tanggal_tagihan <=',$tgl_akhir);
        } else  if ($tgl_awal != "" && $tgl_akhir!=""){
            $this->db->where('tanggal_tagihan >=',$tgl_awal);
            $this->db->where('tanggal_tagihan <=',$tgl_akhir);
        }
        $q = $this->db->get_where();
        echo $this->db->last_query();
        $q = $q->result_array();
        return $q;
        
    }
    public function getByDateDenda($tgl_awal, $tgl_akhir)
    {
        $kondisi = "";
        $this->db->select('');
        $this->db->from('pembayaran');
        $this->db->join('pelanggan','pelanggan.pelanggan_id=pembayaran.pelanggan_id','left');
        $this->db->join('pemasangan','pemasangan.pelanggan_id=pelanggan.pelanggan_id','left');
        $this->db->where('status_pembayaran',2);
        if ($tgl_awal != "" && $tgl_akhir==""){
            $this->db->where('tanggal_pembayaran >=',$tgl_awal);
        } else if ($tgl_awal == "" && $tgl_akhir!=""){
            $this->db->where('tanggal_pembayaran <=',$tgl_akhir);
        } else  if ($tgl_awal != "" && $tgl_akhir!=""){
            $this->db->where('tanggal_pembayaran >=',$tgl_awal);
            $this->db->where('tanggal_pembayaran <=',$tgl_akhir);
        }
        $q = $this->db->get_where();
        $q = $q->result_array();
         //echo $this->db->last_query();
        //print_r($q);
        return $q;  
    }
    public function getByDateBermasalah($tgl_awal, $tgl_akhir)
    {
        $kondisi = "";
        $this->db->select('');
        $this->db->select('count(pembayaran_id)as num ,pelanggan.nama,pelanggan.no_telp');
        $this->db->from('pembayaran');
        $this->db->join('pelanggan' , 'pelanggan.pelanggan_id=pembayaran.pelanggan_id' , 'left');
        $this->db->group_by('nama');
        $this->db->order_by('num', 'desc');
        $this->db->where('status_pembayaran',2);
        if ($tgl_awal != "" && $tgl_akhir==""){
            $this->db->where('tanggal_pembayaran >=',$tgl_awal);
        } else if ($tgl_awal == "" && $tgl_akhir!=""){
            $this->db->where('tanggal_pembayaran <=',$tgl_akhir);
        } else  if ($tgl_awal != "" && $tgl_akhir!=""){
            $this->db->where('tanggal_pembayaran >=',$tgl_awal);
            $this->db->where('tanggal_pembayaran <=',$tgl_akhir);
        }
        $q = $this->db->get_where();
        $q = $q->result_array();
        //echo $this->db->last_query();die();
        //print_r($q);
        return $q;
        
    }


    public function getkelurahan($kelurahan)
    {
        $kondisi = "";
        $this->db->select('');
        $this->db->from('pelanggan');
        $this->db->join('kelurahan','kelurahan.kelurahan_id=pelanggan.kelurahan_id','left');
        $this->db->join('pemasangan','pemasangan.pelanggan_id=pelanggan.pelanggan_id','left');
        $this->db->where('pelanggan.kelurahan_id',$kelurahan);
        $this->db->order_by('status', 'asc');
        $q = $this->db->get_where();
        $q = $q->result_array();
        //echo $this->db->last_query();
        //print_r($q);
        return $q;
        
    }
    public function getpelanggan()
    {
        $kondisi = "";
        $this->db->select('');
        $this->db->from('pelanggan');
        $this->db->order_by('status', 'asc');
        $this->db->join('kelurahan','kelurahan.kelurahan_id=pelanggan.kelurahan_id','left');
        $this->db->join('pemasangan','pemasangan.pelanggan_id=pelanggan.pelanggan_id','left');
        $q = $this->db->get();
        $q = $q->result_array();
        //echo $this->db->last_query();
        //print_r($q);
        return $q;
        
    }

    public function getjumlah1()
    {
        $kondisi = "";
        $this->db->select('count(status) as sum');
        $this->db->from('pelanggan');
        $this->db->join('kelurahan','kelurahan.kelurahan_id=pelanggan.kelurahan_id','left');
        $this->db->join('pemasangan','pemasangan.pelanggan_id=pelanggan.pelanggan_id','left');
        $this->db->where('pemasangan.status',1);
        $q = $this->db->get();
        $q = $q->result_array();
        //echo $this->db->last_query();
        
        return $q;
    }
    public function getjumlah2()
    {
        $kondisi = "";
        $this->db->select('count(status) as sum');
        $this->db->from('pelanggan');
        $this->db->join('kelurahan','kelurahan.kelurahan_id=pelanggan.kelurahan_id','left');
        $this->db->join('pemasangan','pemasangan.pelanggan_id=pelanggan.pelanggan_id','left');
        $this->db->where('pemasangan.status',2);
        $q = $this->db->get();
        $q = $q->result_array();
        //echo $this->db->last_query();
        
        return $q;
    }
    public function getjumlah3()
    {
        $kondisi = "";
        $this->db->select('count(status) as sum');
        $this->db->from('pelanggan');
        $this->db->join('kelurahan','kelurahan.kelurahan_id=pelanggan.kelurahan_id','left');
        $this->db->join('pemasangan','pemasangan.pelanggan_id=pelanggan.pelanggan_id','left');
        $this->db->where('pemasangan.status',3);
        $q = $this->db->get();
        $q = $q->result_array();
        //echo $this->db->last_query();
        
        return $q;
    }
    public function getjumlah4()
    {
        $kondisi = "";
        $this->db->select('count(status) as sum');
        $this->db->from('pelanggan');
        $this->db->join('kelurahan','kelurahan.kelurahan_id=pelanggan.kelurahan_id','left');
        $this->db->join('pemasangan','pemasangan.pelanggan_id=pelanggan.pelanggan_id','left');
        $this->db->where('pemasangan.status',4);
        $q = $this->db->get();
        $q = $q->result_array();
        //echo $this->db->last_query();
        
        return $q;
    }
    
    public function get_pembayaran($id= null)
    {
        $this->db->from('pembayaran');
        if($id != null){
            $this->db->where('pembayaran.pelanggan_id', $id);
        }
        $this->db->join('pelanggan' , 'pelanggan.pelanggan_id=pembayaran.pelanggan_id' , 'left');
        $this->db->join('pemasangan' , 'pemasangan.pelanggan_id=pembayaran.pelanggan_id' , 'left');
        $this->db->join('harga' , 'harga.jumlah_id=pemasangan.jumlah_id' , 'left');
        $query = $this->db->get();
       // echo $this->db->last_query();die();
        return $query;
    }
    public function get_pembayarandua($id= null)
    {
        $this->db->from('pembayaran');
        if($id != null){
            $this->db->where('pembayaran.pelanggan_id', $id);
        }
        $this->db->join('pelanggan' , 'pelanggan.pelanggan_id=pembayaran.pelanggan_id' , 'left');
        $this->db->join('pemasangan' , 'pemasangan.pelanggan_id=pembayaran.pelanggan_id' , 'left');
        $this->db->join('harga' , 'harga.jumlah_id=pemasangan.jumlah_id' , 'left');
        $this->db->where('status_bayar', 3);
        $query = $this->db->get();
        //echo $this->db->last_query();die();
        return $query;
    }
    public function get_lastpembayaran($id= null)
    {
        $this->db->from('pembayaran');
        if($id != null){
            $this->db->where('pembayaran.pelanggan_id', $id);
        }
        $this->db->join('pelanggan' , 'pelanggan.pelanggan_id=pembayaran.pelanggan_id' , 'left');
        $this->db->join('pemasangan' , 'pemasangan.pelanggan_id=pembayaran.pelanggan_id' , 'left');
        $this->db->join('harga' , 'harga.jumlah_id=pemasangan.jumlah_id' , 'left');
        $this->db->limit(1);
        $this->db->order_by('pembayaran_id',"DESC");
        $query = $this->db->get();
        //echo $this->db->last_query();die();
        return $query;
    }
    public function get_pembayaran_only($id= null)
    {
        $this->db->from('pembayaran');
        if($id != null){
            $this->db->where('pembayaran.pembayaran_id', $id);
        }
        $this->db->join('pelanggan' , 'pelanggan.pelanggan_id=pembayaran.pelanggan_id' , 'left');
        $this->db->join('pemasangan' , 'pemasangan.pelanggan_id=pembayaran.pelanggan_id' , 'left');
        $this->db->join('harga' , 'harga.jumlah_id=pemasangan.jumlah_id' , 'left');
        $query = $this->db->get();
       // echo $this->db->last_query();die();
        return $query;
    }
    
}