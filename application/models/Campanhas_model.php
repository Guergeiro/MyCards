<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campanhas_model extends CI_Model {
	public function todas_campanhas($key) {
		$this->db->select("ID_Empresa,Designacao, Descricao, DataInicio, DataFim, Valor, TipoCampanha");
		$this->db->where("ID_Empresa", $key);
		$query = $this->db->get("Campanhas");
		return $query->result();
	}
}

?>