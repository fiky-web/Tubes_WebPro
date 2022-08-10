<?php
defined('BASEPATH') or exit('No direct script access allowed');

class promo_model extends CI_Model
{
	public function get_promo()
	{
		$this->db->select('*');
		$this->db->from('promo');
		return $this->db->get()->result();
	}

	// add promo
	public function add_promo($data)
	{
		return $this->db->insert("promo", $data);
	}

	// edit promo
	public function edit_promo($id_promo, $data)
	{
		$this->db->set($data);
		$this->db->where('id_promo', $id_promo);
		return $this->db->update('promo');
	}

	// delete promo
	public function delete_promo($id_promo)
	{
		return $this->db->delete("promo", array("id_promo" => $id_promo));
	}
}
