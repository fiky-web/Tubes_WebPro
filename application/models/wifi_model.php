<?php
defined('BASEPATH') or exit('No direct script access allowed');

class wifi_model extends CI_Model
{
	public function get_wifi()
	{
		$this->db->select('*');
		$this->db->from('layanan_wifi');
		return $this->db->get()->result();
	}

	// add wifi
	public function add_wifi($data)
	{
		return $this->db->insert("layanan_wifi", $data);
	}

	// edit wifi
	public function edit_wifi($id_wifi, $data)
	{
		$this->db->set($data);
		$this->db->where('id_wifi', $id_wifi);
		return $this->db->update('layanan_wifi');
	}

	// delete wifi
	public function delete_wifi($id_wifi)
	{
		return $this->db->delete("layanan_wifi", array("id_wifi" => $id_wifi));
	}
}
