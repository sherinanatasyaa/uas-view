<?php

class Pendidikan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pendidikan_Model');
        $this->load->model('Profile_Model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = 'Daftar Pendidikan';
        $data['pendidikan'] = $this->Pendidikan_Model->get_all_pendidikan();
        $data['profile'] = $this->Profile_Model->get_all_profile();
        if ($this->input->post('keyword')) {
            $data ['pendidikan'] = $this->Pendidikan_Model->caridatapendidikan();
        }

        $this->load->view('template/header', $data);
        $this->load->view('pendidikan/index', $data);
        $this->load->view('template/footer');
    }

    public function detail($pend_id)
    {
        $data['judul'] = "Detail Data Pendidikan";
        $data['pendidikan'] = $this->db->get_where('pendidikan', ['pend_id' => $pend_id])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('pendidikan/detail', $data);
        $this->load->view('template/footer');
    }
}