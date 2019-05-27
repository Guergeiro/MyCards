<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_model extends CI_Model {
	// Select
	public function informacoesClientes() {
		$this->db->select("Clientes.ID_Cliente, Clientes.Email, Clientes.Localizacao, Clientes.DataRegisto, Clientes.Ativo, Clientes.PrimeiroNome, Clientes.UltimoNome, Clientes.DataNascimento");
		$query = $this->db->get("Clientes");
		return $query->result_array();
	}

	public function informacoesCliente($idCliente) {
		$this->db->select("Clientes.ID_Cliente, Clientes.Email, Clientes.Localizacao, Clientes.DataRegisto, Clientes.Ativo, Clientes.PrimeiroNome, Clientes.UltimoNome, Clientes.DataNascimento");
		$query = $this->db->get_where("Clientes", "Clientes.ID_Cliente = {$idCliente}");
		return $query->result_array();
	}

	public function ratingCliente($idCliente) {
		$query = $this->db->get_where("RatingCliente", "RatingCliente.ID_Cliente = {$idCliente}");
		return $query->result_array();
	}

	public function cartoesCliente($idCliente) {
		$query = $this->db->get_where("Cartoes", "Cartoes.ID_Cliente = {$idCliente}");
		return $query->result_array();
	}

	public function cartaoCliente($idCliente, $idCartao) {
		$query = $this->db->get_where("Cartoes", "Cartoes.ID_Cliente = {$idCliente} AND Cartoes.ID_Cartao = {$idCartao}");
		return $query->result_array();
	}

	public function instanciasCampanhaCartaoCliente($idCartao) {
		$query = $this->db->get_where("InstanciaCampanha", "InstanciaCampanha.ID_Cartao = {$idCartao}");
		return $query->result_array();
	}


	public function todos_clientes_empresa($key) {
		$this->db->select("Cartoes.ID_Cliente, Utilizadores.Localizacao, Clientes.DataNascimento, Cartoes.DataFidelizacao");
		$this->db->from("Cartoes");
		$this->db->join("Clientes", "Clientes.ID_Cliente = Cartoes.ID_Cliente", "inner");
		$this->db->join("Utilizadores","Utilizadores.ID_Utilizador = Cartoes.ID_Cliente","inner");
		$this->db->where("Cartoes.ID_Empresa = {$key}");
		$query = $this->db->get();
		return $query->result_array();
	}

	public function todos_clientes() {
		$query = $this->db->get("Clientes");
		return $query->result_array();
	}
}

?>