<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tugas_Model');
        $this->load->model('Target_Model');
        $this->load->model('Proyek_Model');
    }
    public function index()
    {
        $data['all_target'] = $this->Target_Model->getAllDataTarget();
        $data['all_tugas'] = $this->Tugas_Model->getAllDataTugas();
        $data['all_proyek'] = $this->Proyek_Model->getAllDataProyek();
        $data['status_tugas'] = $this->Tugas_Model->getAllStatusTugas();
        $data['judul'] = "TUGAS";
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_topnav');
        $this->load->view('templates/user_sidebar');
        $this->load->view('user/tugas');
        $this->load->view('templates/user_footer');
    }

    public function tugasById($id)
    {
        $data['all_target'] = $this->Target_Model->getAllDataTarget();
        $data['all_tugas'] = $this->Tugas_Model->getDataTugasById($id);
        $data['all_proyek'] = $this->Proyek_Model->getAllDataProyek();
        $data['status_tugas'] = $this->Tugas_Model->getAllStatusTugas();
        $data['judul'] = "TUGAS";
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_topnav');
        $this->load->view('templates/user_sidebar');
        $this->load->view('user/tugas', $data);
        $this->load->view('templates/user_footer');
    }

    // tambah target
    public function tambahTugas()
    {
        date_default_timezone_set('Asia/Jakarta');
        $nama_tugas = $this->input->post('nama_tugas');


        $data = array(
            'nama_tugas' => $nama_tugas,
            'create_tugas' => date('Y-m-d'),
            'proyek' => $proyek
        );

        $this->Tugas_Model->insertDataTugas($data);
        redirect(base_url('tugas/'));
    }
    public function tambahTugasById()
    {
        date_default_timezone_set('Asia/Jakarta');
        $nama_tugas = $this->input->post('nama_tugas');
        $proyek = $this->input->post('id_proyek');

        $data = array(
            'nama_tugas' => $nama_tugas,
            'create_tugas' => date('Y-m-d'),
            'proyek' => $proyek
        );

        $this->Tugas_Model->insertDataTugas($data);
        redirect(base_url('tugas/'));
    }

    public function editTugas()
    {
        $kode_tugas = $this->input->post('id_tugas');
        $nama_tugas = $this->input->post('nama_tugas');
        $deskripsi_tugas = $this->input->post('deskripsi_tugas');
        $deadline_tugas = $this->input->post('deadline_tugas');
        $status_tugas = $this->input->post('status_tugas');
        $proyek_tugas = $this->input->post('proyek_tugas');

        $data = array(
            'nama_tugas' => $nama_tugas,
            'deskripsi_tugas' => $deskripsi_tugas,
            'deadline_tugas' => $deadline_tugas,
            'status_tugas' => $status_tugas,
            'proyek' => $proyek_tugas
        );
        $this->Tugas_Model->updateDataTugas($data, $kode_tugas);
        redirect(base_url('tugas/'));
    }

    public function deleteTugas()
    {
        $kode_tugas = $this->input->post('id_tugas');
        $this->Tugas_Model->deleteDataTugas($kode_tugas);
        redirect(base_url('tugas/'));
    }
}
