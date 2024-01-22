<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Proyek extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Folder_Model');
        $this->load->model('Target_Model');
        $this->load->model('Proyek_Model');
    }

    public function index()
    {
        $data['judul'] = "PROYEK";
        $data['all_proyek'] = $this->Proyek_Model->getAllDataProyek();
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_topnav');
        $this->load->view('templates/user_sidebar');
        $this->load->view('user/proyek');
        $this->load->view('templates/user_footer');
    }

    public function tambahProyek()
    {
        date_default_timezone_set('Asia/Jakarta');
        $nama_proyek = $this->input->post('nama_proyek');
        $user_proyek = $this->input->post('user_proyek');
        $data = array(
            'nama_proyek' => $nama_proyek,
            'user_proyek' => $user_proyek,
            'create_proyek' => date('Y-m-d')
        );
        $this->Proyek_Model->insertDataProyek($data);
        redirect(base_url('proyek/'));
    }

    public function deleteProyek()
    {
        $kode_proyek = $this->input->post('id_proyek');
        $this->Proyek_Model->deleteDataProyek($kode_proyek);
        redirect(base_url('proyek/'));
    }

    public function editProyek()
    {
        $kode_proyek = $this->input->post('id_proyek');
        $nama_proyek = $this->input->post('nama_proyek');
        $deskripsi_proyek = $this->input->post('deskripsi_proyek');
        $deadline_proyek = $this->input->post('deadline_proyek');
        $tugas_proyek = $this->input->post('tugas_proyek');
        $target_proyek = $this->input->post('target_proyek');
        $status_proyek = $this->input->post('status_proyek');

        $data = array(
            'nama_proyek' => $nama_proyek,
            'deskripsi_proyek' => $deskripsi_proyek,
            'deadline_proyek' => $deadline_proyek,
            'tugas' => $tugas_proyek,
            'target' => $target_proyek,
            'status_proyek' => $status_proyek
        );
        $this->Proyek_Model->updateDataProyek($data, $kode_proyek);
        redirect(base_url('proyek/'));
    }
}
