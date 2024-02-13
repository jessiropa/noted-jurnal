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

    // update folder
    function updateDataFolder($data, $kode_folder)
    {
        $this->db->where('id_folder', $kode_folder);
        return $this->db->update('folder_referensi', $data);
    }
    // update Link
    function updateDataLink($data, $kode_link)
    {
        $this->db->where('id_link', $kode_link);
        return $this->db->update('link_referensi', $data);
    }

    // delete folder
    function deleteFolder($kode_folder)
    {
        $this->db->where('id_folder', $kode_folder);
        return $this->db->delete('folder_referensi');
    }

    // delete link
    function deleteLink($kode_link)
    {
        $this->db->where('id_link', $kode_link);
        return $this->db->delete('link_referensi');
    }
}
