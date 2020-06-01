<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Teknisi_m extends CI_Model
{


    public function get($id = null)
    {
        $this->db->from('teknisi');
        if ($id != null) {
            $this->db->where('teknisi_id', $id);
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

        $params['nama_teknisi'] = $post['fullname'];
        $params['alamat'] = $post['address'];
        $params['no_telpon'] = $post['telepon'];

        $this->db->insert('teknisi', $params);
    }
    public function edit($post)
    {
        $params['nama_teknisi'] = $post['fullname'];
        $params['alamat'] = $post['address'];
        $params['no_telpon'] = $post['telepon'];
        $this->db->where('teknisi_id', $post['teknisi_id']);
        $this->db->update('teknisi', $params);
    }

    public function del($id)
    {
        $this->db->where('teknisi_id', $id);
        $this->db->delete('teknisi');
    }
}
