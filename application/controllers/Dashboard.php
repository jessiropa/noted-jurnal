<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('Folder_Model');
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
        $data['folder'] = $this->Folder_Model->getAllFolderLInk();
        $data['judul'] = "REFERENSI";
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_topnav');
        $this->load->view('templates/user_sidebar');
        $this->load->view('user/referensi', $data);
        $this->load->view('templates/user_footer');
    }

    public function tambahFolder(){
        $namaFolder = $this->input->post('nama_folderlink');
        $insertFolder = array(
            'nama_folder' => $namaFolder
        );
        $this->Folder_Model->insertDataFolderLink($insertFolder);
        redirect(base_url('dashboard/referensi'));
    }

    public function tambahLink(){
        date_default_timezone_set('Asia/Jakarta');
        $folder_link = $this->input->post('folder_link');
        $judul_artikel = $this->input->post('judul_artikel');
        $link_artikel = $this->input->post('link_artikel');
        // var_dump($folder_link);

        $data = array(
            'nama_artikel' => $judul_artikel,
            'link_artikel' => $link_artikel,
            'kode_folder' => $folder_link,
            'tgl_create' => date('Y-m-d')
        );

        $this->Folder_Model->insertDataLink($data);
        redirect(base_url('dashboard/referensi'));
    }
}
