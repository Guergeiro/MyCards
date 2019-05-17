<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campanhas_model extends CI_Model {
	public function todas_campanhas_empresa($keyEmpresa) {
		$query = $this->db->get_where("Campanhas", "ID_Empresa = {$keyEmpresa}");
		return $query->result_array();
	}

	public function todas_campanhas_cartao($keyCliente, $keyEmpresa) {
		$this->db->select("InstanciaCampanha.ID_Campanha, InstanciaCampanha.ID_Cliente, InstanciaCampanha.ID_Empresa, InstanciaCampanha.Utilizado, InstaciaCampanha.DataUtilizacao, Campanhas.Designacao, Campanhas.Descricao, Campanhas.DataInicio, Campanhas.DataFim, Campanhas.Valor, Campanhas.TipoCampanha");
		$this->db->from("InstanciaCampanha");
		$this->db->join("Campanhas", "Campanhas.ID_Empresa = InstanciaCampanha.ID_Empresa", "inner");
		$this->db->where("InstanciaCampanha.ID_Cliente = {$keyCliente} AND InstanciaCampanha.ID_Empresa = {$keyEmpresa}");
		$query = $this->db->get();
		return $query->result_array();
	}

	public function todas_campanhas_cliente($keyCliente) {
		$this->db->select("InstanciaCampanha.ID_Campanha, InstanciaCampanha.ID_Cliente, InstanciaCampanha.ID_Empresa, InstanciaCampanha.Utilizado, InstaciaCampanha.DataUtilizacao, Campanhas.Designacao, Campanhas.Descricao, Campanhas.DataInicio, Campanhas.DataFim, Campanhas.Valor, Campanhas.TipoCampanha");
		$this->db->from("InstanciaCampanha");
		$this->db->join("Campanhas", "Campanhas.ID_Empresa = InstanciaCampanha.ID_Empresa", "inner");
		$this->db->where("InstanciaCampanha.ID_Cliente = {$keyCliente}");
		$query = $this->db->get();
		return $query->result_array();
	}
}

?>