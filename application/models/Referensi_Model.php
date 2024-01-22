<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Referensi_Model extends CI_Model
{
    function getAllFolderLink()
    {
        return $this->db->get('folder_referensi')->result_array();
    }

    function insertDataFolderLink($data)
    {
        return $this->db->insert('folder_referensi', $data);
    }

    function insertDataLink($data)
    {
        return $this->db->insert('link_referensi', $data);
    }

    function getAllDataLink()
    {
        return $this->db->get('link_referensi')->result_array();
    }
}
