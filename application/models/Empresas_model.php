<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresas_model extends CI_Model {
	// Select
	public function informacoesEmpresas() {
		$this->db->select("Empresas.ID_Empresa, Empresas.Email, Empresas.Localizacao, Empresas.DataRegisto, Empresas.Ativo, Empresas.Nome, Empresas.NIF, Empresas.TipoEmpresa, Empresas.Rating");
		$query = $this->db->get("Empresas");
		return $query->result_array();
	}

	public function informacoesEmpresa($idEmpresa) {
		$this->db->select("Empresas.ID_Empresa, Empresas.Email, Empresas.Localizacao, Empresas.DataRegisto, Empresas.Ativo, Empresas.Nome, Empresas.NIF, Empresas.TipoEmpresa, Empresas.Rating");
		$query = $this->db->get_where("Empresas", "Empresas.ID_Empresa = {$idEmpresa}");
		return $query->result_array();
	}

	public function ratingEmpresa($idEmpresa) {
		$query = $this->db->get_where("RatingEmpresa", "RatingEmpresa.ID_Empresa = {$idEmpresa}");
		return $query->result_array();
	}

	public function campanhasEmpresa($idEmpresa) {
		$query = $this->db->get_where("Campanhas", "Campanhas.ID_Empresa = {$idEmpresa}");
		return $query->result_array();
	}

	public function campanhaEmpresa($idEmpresa, $idCampanha) {
		$query = $this->db->get_where("Campanhas", "Campanhas.ID_Empresa = {$idEmpresa} AND Campanhas.ID_Campanha = {$idCampanha}");
		return $query->result_array();
	}

	public function instanciasCampanhaEmpresa($idEmpresa, $idCampanha) {
		$query = $this->db->get_where("InstanciaCampanha", "InstanciaCampanha.ID_Campanha = {$idCampanha}");
		return $query->result_array();
	}

	public function cartoesEmpresa($idEmpresa) {
		$query = $this->db->get_where("Cartoes", "Cartoes.ID_Empresa = {$idEmpresa}");
		return $query->result_array();
	}

	public function colaboradoresEmpresa($idEmpresa) {
		$this->db->select("Colaboradores.Nome, Colaboradores.Dono");
		$query = $this->db->get_where("Colaboradores", "Colaboradores.ID_Empresa = {$idEmpresa}");
		return $query->result_array();
	}

	public function colaboradorEmpresa($idEmpresa, $idColaborador) {
		$this->db->select("Colaboradores.Nome, Colaboradores.Dono");
		$query = $this->db->get_where("Colaboradores", "Colaboradores.ID_Empresa = {$idEmpresa} AND Colaboradores.Nome = '{$idColaborador}'");
		return $query->result_array();
	}

	// Insert


	// Update
	public function alterarInstanciaCampanhaEmpresa($idEmpresa, $idCampanha, $idCartao, $data) {
		$this->db->where("InstanciaCampanha.ID_Campanha = {$idCampanha} AND InstanciaCampanha.ID_Cartao = {$idCartao}");
		$this->db->set($data);
		return $this->db->update("InstanciaCampanha");
	}

	public function alterarColaboradorEmpresa($idEmpresa, $idColaborador, $data) {
		$this->db->where("Colaboradores.ID_Empresa = {$idEmpresa} AND Colaboradores.Nome = '{$idColaborador}'");
		$this->db->set($data);
		return $this->db->update("Colaboradores");
	}

	// Delete
	public function eliminarColaboradorEmpresa($idEmpresa, $idColaborador) {
		$this->db->where("Colaboradores.ID_Empresa = {$idEmpresa} AND Colaboradores.Nome = '{$idColaborador}'");
		return $this->db->delete("Colaboradores");
	}
}

?>