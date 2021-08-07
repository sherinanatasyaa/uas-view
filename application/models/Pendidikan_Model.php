<?php

class Pendidikan_Model extends CI_model {
    public function get_all_pendidikan()
    {
        return $this->db->get('pendidikan')->result_array();
    }

    public function get_pendidikan_id($pend_id)
    {
        return $this->db->get_where('pendidikan', ['pend_id'=> $pend_id])->row_array();
    }

    public function caridatapendidikan()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('pend_id', $keyword);
        $this->db->or_like('profile_id', $keyword);
        $this->db->or_like('jenjang', $keyword);
        $this->db->or_like('nama_sekolah', $keyword);
        return $this->db->get('pendidikan')->result_array();
    }
}