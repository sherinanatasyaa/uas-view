<?php

class Kontak extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kontak_Model');
        $this->load->model('Profile_Model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = 'Daftar Kontak';
        $data['kontak'] = $this->Kontak_Model->get_all_kontak();
        $data['profile'] = $this->Profile_Model->get_all_profile();
        if ($this->input->post('keyword')) {
            $data ['kontak'] = $this->Kontak_Model->caridatakontak();
        }

        $this->load->view('template/header', $data);
        $this->load->view('kontak/index', $data);
        $this->load->view('template/footer');
    }

    public function detail($kontak_id)
    {
        $data['judul'] = "Detail Data Kontak";
        $data['kontak'] = $this->db->get_where('kontak', ['kontak_id' => $kontak_id])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('kontak/detail', $data);
        $this->load->view('template/footer');
    }
}