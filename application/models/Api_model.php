<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model extends CI_Model {
	public function check_key ($key) {
		$this->db->select("ID_Utilizador");
		$this->db->where("ID_Utilizador", $key);
		$query = $this->db->get("Utilizadores");
		if ($query->num_rows() == 0) {
			return FALSE;
		}
		return TRUE;
	}
}

?>