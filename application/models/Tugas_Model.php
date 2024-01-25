<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Tugas_Model extends CI_Model
{

    // insert data tugas
    function insertDataTugas($data)
    {
        return $this->db->insert('tugas', $data);
    }

    // tampilkan semua data tugas
    function getAllDataTugas()
    {
        // return $this->db->get('tugas')->result_array();
        return $this->db->query("SELECT ts.id_tugas, ts.nama_tugas, ts.deskripsi_tugas, ts.deadline_tugas, ts.proyek, ts.status_tugas, st.nama_status, pk.nama_proyek
        FROM 
        tugas ts 
        LEFT JOIN status_tugas st ON st.id_st = ts.status_tugas
        LEFT JOIN proyek pk ON pk.id_proyek = ts.proyek")->result_array();
    }
    // tampilkan berdasarkan id
    function getDataTugasById($id)
    {
        // return $this->db->get('tugas')->result_array();
        return $this->db->query("SELECT ts.id_tugas, ts.nama_tugas, ts.deskripsi_tugas, ts.deadline_tugas, ts.proyek, ts.status_tugas, st.nama_status, pk.nama_proyek
        FROM 
        tugas ts 
        LEFT JOIN status_tugas st ON st.id_st = ts.status_tugas
        LEFT JOIN proyek pk ON pk.id_proyek = ts.proyek
        WHERE ts.proyek = '$id'")->result_array();
    }

    function getDataTugas()
    {
        return $this->db->get('tugas')->result_array();
    }

    // get all data status tugas 
    function getAllStatusTugas()
    {
        return $this->db->get('status_tugas')->result_array();
    }

    // update data tugas
    function updateDataTugas($data, $kode_tugas)
    {
        $this->db->where('id_tugas', $kode_tugas);
        return $this->db->update('tugas', $data);
    }

    // delete data tugas
    function deleteDataTugas($kode_tugas)
    {
        $this->db->where('id_tugas', $kode_tugas);
        return $this->db->delete('tugas');
    }
}
