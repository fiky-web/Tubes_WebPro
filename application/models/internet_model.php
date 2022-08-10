<?php
defined('BASEPATH') or exit('No direct script access allowed');

class internet_model extends CI_Model
{
    public function get_internet()
    {
        $this->db->select('*');
        $this->db->from('layanan_internet');
        return $this->db->get()->result();
    }

    // add internet
    public function add_internet($data)
    {
        return $this->db->insert("layanan_internet", $data);
    }

    // edit internet
    public function edit_internet($id_internet, $data)
    {
        $this->db->set($data);
        $this->db->where('id_internet', $id_internet);
        return $this->db->update('layanan_internet');
    }

    // delete internet
    public function delete_internet($id_internet)
    {
        return $this->db->delete("layanan_internet", array("id_internet" => $id_internet));
    }
}
