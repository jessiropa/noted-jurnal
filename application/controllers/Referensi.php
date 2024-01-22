<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Referensi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Referensi_Model');
        $this->load->model('Target_Model');
    }

    public function index()
    {
        $data['folder'] = $this->Referensi_Model->getAllFolderLInk();
        $data['link_all'] = $this->Referensi_Model->getAllDataLink();
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
        $this->Referensi_Model->insertDataFolderLink($insertFolder);
        redirect(base_url('referensi/'));
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

        $this->Referensi_Model->insertDataLink($data);
        redirect(base_url('dashboard/referensi'));
    }
}
