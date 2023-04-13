<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Web extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $data['judul'] = "Halaman Depan";
        $this->load->view('web/templates/v_header', $data);
        $this->load->view('web/v_index', $data);
        $this->load->view('web/templates/v_footer', $data);
    }

    public function about()
    {
        $data['judul'] = "Halaman About";
        $this->load->view('web/templates/v_header', $data);
        $this->load->view('web/v_about', $data);
        $this->load->view('web/templates/v_footer', $data);
    }
    public function form()
    {
        $data['judul'] = "Halaman Form";
        $this->load->view('web/templates/v_header', $data);
        $this->load->view('web/v_form', $data);
        $this->load->view('web/templates/v_footer', $data);
    }

    public function data()
    {
        $data = [
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'sks' => $this->input->post('sks')
        ];
        $data['judul'] = "Hasil Form";
        $this->load->view('web/templates/v_header', $data);
        $this->load->view('web/v_data', $data);
        $this->load->view('web/templates/v_footer', $data);
    }
}
