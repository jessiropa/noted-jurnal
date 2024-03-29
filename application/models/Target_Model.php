<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Target_Model extends CI_Model
{

    // insert data target
    function insertDataTarget($data)
    {
        return $this->db->insert('target', $data);
    }

    // tampilkan semua data target
    function getAllDataTarget()
    {
        return $this->db->get('target')->result_array();
    }

    // insert data link
    function insertDataLink($data)
    {
        return $this->db->insert('link_referensi', $data);
    }

    // update data target
    function updateDataTarget($data, $kode_target)
    {
        $this->db->where('id_target', $kode_target);
        return $this->db->update('target', $data);
    }

    function deleteDataTarget($kode_target)
    {
        $this->db->where('id_target', $kode_target);
        return $this->db->delete('target');
    }
}
