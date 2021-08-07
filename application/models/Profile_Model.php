<?php

class Profile_Model extends CI_model {
    public function get_all_profile()
    {
        return $this->db->get('profile')->result_array();
    }

    public function get_profile_id($profile_id)
    {
        return $this->db->get_where('profile', ['profile_id'=> $profile_id])->row_array();
    }

    public function caridataprofile()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('profile_id', $keyword);
        $this->db->or_like('nama', $keyword);
        return $this->db->get('profile')->result_array();
    }
}