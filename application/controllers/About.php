<?php

class About extends CI_Controller {
    public function index($nama = '')
    {
        $data['judul'] = 'Halaman About';
        $data['nama'] = $nama;
        $this->load->view('template/header', $data);
        $this->load->view('template/footer', $data);
        $this->load->view('about/index');
    }
}