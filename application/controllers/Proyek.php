<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Proyek extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Folder_Model');
        $this->load->model('Target_Model');
    }

    public function index()
    {
        $data['judul'] = "PROYEK";
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_topnav');
        $this->load->view('templates/user_sidebar');
        $this->load->view('user/proyek');
        $this->load->view('templates/user_footer');
    }
}
