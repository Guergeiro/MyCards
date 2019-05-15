<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Colaboradores_model extends CI_Model {
	public function todos_colaboradores_empresa($key) {
		$query = $this->db->get_where("Colaboradores", "ID_Empresa = {$key}");
		return $query->result_array();
	}

	public function novo_colaborador_empresa ($data) {
		return $this->db->insert("Colaboradores", $data);
	}
}

?>