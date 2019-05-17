<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresas_model extends CI_Model {
	public function todas_empresas() {
		$query = $this->db->get("Empresas");
		return $query->result_array();
	}
}

?>