<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_model extends CI_Model {
	public function todos_clientes_empresa($key) {
		$this->db->select("Cartoes.ID_Cliente, Utilizadores.Localizacao, Clientes.DataNascimento");
		$this->db->from("Cartoes");
		$this->db->join("Clientes", "Clientes.ID_Cliente = Cartoes.ID_Cliente", "inner");
		$this->db->join("Utilizadores","Utilizadores.ID_Utilizador = Cartoes.ID_Cliente","inner");
		$this->db->where("Cartoes.ID_Empresa = {$key}");
		$query = $this->db->get();
		return $query->result_array();
	}
}

?>