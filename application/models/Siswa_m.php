<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('siswa');
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
        $params['prodi'] = $post['prodi'];

        $this->db->insert('siswa', $params);
    }
    public function edit($post)
    {
        $params['npm'] = $post['npm'];
        $params['nama'] = $post['nama'];
        $params['prodi'] = $post['prodi'];
        $this->db->where('npm', $post['npm']);
        $this->db->update('siswa', $params);
    }

    public function del($id)
    {
        $this->db->where('npm', $id);
        $this->db->delete('siswa');
    }
}
