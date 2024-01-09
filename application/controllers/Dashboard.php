<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Folder_Model');
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

    public function target()
    {
        $data['all_target'] = $this->Target_Model->getAllDataTarget();
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

    public function proyek()
    {
        $data['judul'] = "PROYEK";
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_topnav');
        $this->load->view('templates/user_sidebar');
        $this->load->view('user/proyek');
        $this->load->view('templates/user_footer');
    }


    public function referensi()
    {
        $data['folder'] = $this->Folder_Model->getAllFolderLInk();
        $data['link_all'] = $this->Folder_Model->getAllDataLink();
        $data['judul'] = "REFERENSI";
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_topnav');
        $this->load->view('templates/user_sidebar');
        $this->load->view('user/referensi', $data);
        $this->load->view('templates/user_footer');
    }

    public function tambahFolder()
    {
        $namaFolder = $this->input->post('nama_folderlink');
        $insertFolder = array(
            'nama_folder' => $namaFolder
        );
        $this->Folder_Model->insertDataFolderLink($insertFolder);
        redirect(base_url('dashboard/referensi'));
    }

    // tambah link 
    public function tambahLink()
    {
        date_default_timezone_set('Asia/Jakarta');
        $folder_link = $this->input->post('folder_link');
        $judul_artikel = $this->input->post('judul_artikel');
        $link_artikel = $this->input->post('link_artikel');

        $data = array(
            'nama_artikel' => $judul_artikel,
            'link_artikel' => $link_artikel,
            'kode_folder' => $folder_link,
            'tgl_create' => date('Y-m-d')
        );

        $this->Folder_Model->insertDataLink($data);
        redirect(base_url('dashboard/referensi'));
    }

    // tambah target
    public function tambahTarget()
    {
        date_default_timezone_set('Asia/Jakarta');
        $nama_target = $this->input->post('nama_target');
        $user_target = $this->input->post('user_target');
        $tenggat_waktu = $this->input->post('tenggat_waktu');

        $data = array(
            'nama_target' => $nama_target,
            'pemilik' => $user_target,
            'deadline_target' => $tenggat_waktu,
            'create_target' => date('Y-m-d')
        );

        $this->Target_Model->insertDataTarget($data);
        redirect(base_url('dashboard/target'));
    }
}
