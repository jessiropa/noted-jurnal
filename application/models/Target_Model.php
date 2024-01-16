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
    function insertDataLink($data)
    {
        return $this->db->insert('link_referensi', $data);
    }
}
