<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campanhas_model extends CI_Model {
	public function todas_campanhas_empresa($key) {
		$query = $this->db->get_where("Campanhas", "ID_Empresa = {$key}");
		return $query->result_array();
	}
}

?>