<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['judul'] = "DASHBOARD";
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_topnav');
        $this->load->view('templates/user_sidebar');
        $this->load->view('user/dashboard');
        $this->load->view('templates/user_footer');
    }

    public function target()
    {
        $data['judul'] = "TARGET";
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_topnav');
        $this->load->view('templates/user_sidebar');
        $this->load->view('user/target');
        $this->load->view('templates/user_footer');
    }
    public function progres()
    {
        $data['judul'] = "PROGRES";
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_topnav');
        $this->load->view('templates/user_sidebar');
        $this->load->view('user/progres');
        $this->load->view('templates/user_footer');
    }

    public function referensi()
    {
        $data['judul'] = "REFERENSI";
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_topnav');
        $this->load->view('templates/user_sidebar');
        $this->load->view('user/referensi');
        $this->load->view('templates/user_footer');
    }
}
