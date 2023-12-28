<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
    }

    public function index()
    {
        $this->load->view('templates/login_header');
        $this->load->view('login/login');
        $this->load->view('templates/login_footer');
    }
    public function registrasi()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $data['judul'] = 'REGISTRASI ANGGOTA';
        $this->load->view('templates/login_header', $data);
        $this->load->view('login/registrasi');
        $this->load->view('templates/login_footer');
    }
}
