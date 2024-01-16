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
        redirect(base_url('dashboard/target'));
    }

    public function editTarget()
    {
        $id_target = $this->input->post('id_target');
        var_dump($id_target);

        $data_target = $this->Target_Model->getDataTargetById($id_target)->row();

        $data['nama_target'] = $data_target->nama_target;
        $data['deskripsi_target'] = $data_target->nama_target;
        $data['pemilik'] = $data_target->pemilik;
        $data['deadline_target'] = $data_target->deadline_target;
        $data['tugas'] = $data_target->tugas;
        $data['proyek'] = $data_target->proyek;

        echo json_encode($data);
    }
}
