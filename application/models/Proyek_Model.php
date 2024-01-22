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
        return $this->db->get('proyek')->result_array();
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
}
