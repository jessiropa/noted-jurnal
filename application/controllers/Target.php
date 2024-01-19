<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Target extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Folder_Model');
        $this->load->model('Target_Model');
    }
    public function index()
    {
        $data['all_target'] = $this->Target_Model->getAllDataTarget();
        $data['judul'] = "TARGET";
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_topnav');
        $this->load->view('templates/user_sidebar');
        $this->load->view('user/target');
        $this->load->view('templates/user_footer');
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
        redirect(base_url('target/'));
    }

    public function editTarget()
    {
        $kode_target = $this->input->post('id_target');
        $nama_target = $this->input->post('nama_target');
        $deskripsi_target = $this->input->post('deskripsi_target');
        $deadline_target = $this->input->post('deadline_target');
        $tugas_target = $this->input->post('tugas_target');
        $proyek_target = $this->input->post('proyek_target');

        $data = array(
            'nama_target' => $nama_target,
            'deskripsi_target' => $deskripsi_target,
            'deadline_target' => $deadline_target,
            'tugas' => $tugas_target,
            'proyek' => $proyek_target
        );
        $this->Target_Model->updateDataTarget($data, $kode_target);
        redirect(base_url('target/'));
    }

    public function deleteTarget()
    {
        $kode_target = $this->input->post('id_target');
        $this->Target_Model->deleteDataTarget($kode_target);
        redirect(base_url('target/'));
    }
}
