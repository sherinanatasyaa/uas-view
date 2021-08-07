<?php

class Profile extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profile_Model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Pegawai';
        $data['profile'] = $this->Profile_Model->get_all_profile();
        if ($this->input->post('keyword')) {
            $data ['profile'] = $this->Profile_Model->caridataprofile();
        }
        $this->load->view('template/header', $data);
        $this->load->view('profile/index', $data);
        $this->load->view('template/footer');
    }

    public function detail($profile_id)
    {
        $data['judul'] = 'Detail Data Pegawai';
        $data['profile'] = $this->Profile_Model->get_profile_id($profile_id);

        $this->load->view('template/header', $data);
        $this->load->view('profile/detail', $data);
        $this->load->view('template/footer');
    }
}