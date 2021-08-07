<?php

class Pekerjaan_Model extends CI_model {
    public function get_all_pekerjaan()
    {
        return $this->db->get('pekerjaan')->result_array();
    }

    public function get_pekerjaan_id($pkj_id)
    {
        return $this->db->get_where('pekerjaan', ['pkj_id'=> $pkj_id])->row_array();
    }

    public function caridatapekerjaan()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('pkj_id', $keyword);
        $this->db->or_like('profile_id', $keyword);
        $this->db->or_like('jabatan', $keyword);
        return $this->db->get('pekerjaan')->result_array();
    }
}