<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model extends CI_Model {
	public function check_key ($key) {
		$query = $this->db->get_where("Utilizadores", "ID_Utilizador = {$key}");
		if ($query->num_rows() == 0) {
			return FALSE;
		}
		return TRUE;
	}

	public function check_admin ($key) {
		$query = $this->db->get_where("Utilizadores", "ID_Utilizador = {$key}");
		$query = $query->result_array();
		if ($query[0]["Admin"] != 0) {
			return FALSE;
		}
		return TRUE;
	}
}

?>