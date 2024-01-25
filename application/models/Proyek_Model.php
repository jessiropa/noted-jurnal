<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Proyek_Model extends CI_Model
{
    // insert data proyek
    function insertDataProyek($data)
    {
        return $this->db->insert('proyek', $data);
    }

    // tampilkan semua data proyek
    function getAllDataProyek()
    {
        // return $this->db->get('proyek')->result_array();
        return $this->db->query("SELECT pk.id_proyek, pk.nama_proyek, pk.deskripsi_proyek, pk.deadline_proyek, pk.target, pk.status_proyek, pk.tugas, pk.user_proyek, pk.create_proyek, sp.id_sp, sp.nama_status, ts.id_tugas, ts.nama_tugas, tg.id_target, tg.nama_target
        FROM proyek pk
        LEFT JOIN status_proyek sp ON sp.id_sp = pk.status_proyek
        LEFT JOIN tugas ts ON ts.id_tugas = pk.tugas
        LEFT JOIN target tg ON tg.id_target = pk.target")->result_array();
    }

    // hapus semua data proyek
    function deleteDataProyek($kode_proyek)
    {
        $this->db->where('id_proyek', $kode_proyek);
        return $this->db->delete('proyek');
    }

    // update data proyek
    function updateDataProyek($data, $kode_proyek)
    {
        $this->db->where('id_proyek', $kode_proyek);
        return $this->db->update('proyek', $data);
    }

    // status proyek 
    function getStatusProyek()
    {
        return $this->db->get('status_proyek')->result_array();
    }
}
