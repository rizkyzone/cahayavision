<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('mahasiswa');
        if ($id != null) {
            $this->db->where('npm', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params['npm'] = $post['npm'];
        $params['nama'] = $post['nama'];
        $params['tgl_lahir'] = $post['tgl_lahir'];
        $params['status'] = $post['status'];

        $this->db->insert('mahasiswa', $params);
    }
    public function edit($post)
    {
        $params['npm'] = $post['npm'];
        $params['nama'] = $post['nama'];
        $params['tgl_lahir'] = $post['tgl_lahir'];
        $params['status'] = $post['status'];
        $this->db->where('npm', $post['npm']);
        $this->db->update('mahasiswa', $params);
    }

    public function del($id)
    {
        $this->db->where('npm', $id);
        $this->db->delete('mahasiswa');
    }
}
