<?php

class Pekerjaan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pekerjaan_Model');
        $this->load->model('Profile_Model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = 'Daftar Pekerjaan';
        $data['pekerjaan'] = $this->Pekerjaan_Model->get_all_pekerjaan();
        $data['profile'] = $this->Profile_Model->get_all_profile();
        if ($this->input->post('keyword')) {
            $data ['pekerjaan'] = $this->Pekerjaan_Model->caridatapekerjaan();
        }

        $this->load->view('template/header', $data);
        $this->load->view('pekerjaan/index', $data);
        $this->load->view('template/footer');
    }

    public function detail($pkj_id)
    {
        $data['judul'] = "Detail Data Pekerjaan";
        $data['pekerjaan'] = $this->db->get_where('pekerjaan', ['pkj_id' => $pkj_id])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('pekerjaan/detail', $data);
        $this->load->view('template/footer');
    }
}