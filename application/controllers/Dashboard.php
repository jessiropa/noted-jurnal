<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Target_Model');
    }

    public function index()
    {
        $data['judul'] = "DASHBOARD";
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_topnav');
        $this->load->view('templates/user_sidebar');
        $this->load->view('user/dashboard');
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
}
