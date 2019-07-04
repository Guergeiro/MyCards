<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Empresas_model extends CI_Model
{
    // Select
    public function informacoesEmpresas()
    {
        $this->db->select("*");
        $query = $this->db->get("Empresas");
        return $query->result_array();
    }

    public function informacoesEmpresa($idEmpresa)
    {
        $this->db->select("*");
        $query = $this->db->get_where("Empresas", "Empresas.ID_Empresa = {$idEmpresa}");
        return $query->result_array();
    }

    public function ratingEmpresa($idEmpresa)
    {
        $query = $this->db->get_where("RatingEmpresa", "RatingEmpresa.ID_Empresa = {$idEmpresa}");
        return $query->result_array();
    }

    public function campanhasEmpresa($idEmpresa)
    {
        $query = $this->db->get_where("Campanhas", "Campanhas.ID_Empresa = {$idEmpresa}");
        return $query->result_array();
    }

    public function campanhaEmpresa($idEmpresa, $idCampanha)
    {
        $query = $this->db->get_where("Campanhas", "Campanhas.ID_Empresa = {$idEmpresa} AND Campanhas.ID_Campanha = {$idCampanha}");
        return $query->result_array();
    }

    public function instanciasCampanhaEmpresa($idEmpresa, $idCampanha)
    {
        $query = $this->db->get_where("InstanciaCampanha", "InstanciaCampanha.ID_Campanha = {$idCampanha}");
        return $query->result_array();
    }

    public function cartoesEmpresa($idEmpresa)
    {
        $query = $this->db->get_where("Cartoes", "Cartoes.ID_Empresa = {$idEmpresa}");
        return $query->result_array();
    }

    public function colaboradoresEmpresa($idEmpresa)
    {
        $this->db->select("Colaboradores.Nome, Colaboradores.Dono, Colaboradores.URL");
        $query = $this->db->get_where("Colaboradores", "Colaboradores.ID_Empresa = {$idEmpresa}");
        return $query->result_array();
    }

    public function colaboradorEmpresa($idEmpresa, $idColaborador)
    {
        $this->db->select("Colaboradores.Nome, Colaboradores.Dono, Colaboradores.URL");
        $query = $this->db->get_where("Colaboradores", "Colaboradores.ID_Empresa = {$idEmpresa} AND Colaboradores.Nome = '{$idColaborador}'");
        return $query->result_array();
    }

    // Insert
    public function novoColaboradorEmpresa($idEmpresa, $data)
    {
        return $this->db->insert("Colaboradores", $data);
    }

    public function novaCampanha($idEmpresa, $data)
    {
        $query = $this->db->get_where("Cartoes", "Cartoes.ID_Empresa = {$idEmpresa}");
        $query = $query->result_array();
        foreach ($query as $cartao) {
            $info = array(
                "ID_Cartao" => $cartao["ID_Cartao"],
                "ID_Campanha" => $data["ID_Campanha"]
            );
            $this->db->insert("InstanciaCampanha", $info);
        }
        return $this->db->insert("Campanhas", $data);
    }

    // Insert + Update
    public function alterarRatingEmpresa($idEmpresa, $data)
    {
        $query = $this->db->get_where("RatingEmpresa", "RatingEmpresa.ID_Empresa = {$idEmpresa} AND RatingEmpresa.ID_Cliente = {$data["ID_Cliente"]}");
        if ($query->num_rows() == 0) {
            return $this->db->insert("RatingEmpresa", $data);
        }
        $data["DataRating"] = date("Y-m-d H:i:s");
        $this->db->where("RatingEmpresa.ID_Empresa = {$idEmpresa}");
        $this->db->set($data);
        return $this->db->update("RatingEmpresa", $data);
    }

    // Update
    public function alterarInstanciaCampanhaEmpresa($idEmpresa, $idCampanha, $idCartao, $data)
    {
        $this->db->where("InstanciaCampanha.ID_Campanha = {$idCampanha} AND InstanciaCampanha.ID_Cartao = {$idCartao}");
        $this->db->set($data);
        return $this->db->update("InstanciaCampanha");
    }

    public function alterarEmpresa($idEmpresa, $data)
    {
        $this->db->where("Empresas.ID_Empresa = {$idEmpresa}");
        $this->db->set($data);
        return $this->db->update("Empresas");
    }


    // Delete
    public function eliminarEmpresa($idEmpresa)
    {
        return $this->db->delete("Empresas", "Empresas.ID_Empresa = {$idEmpresa}");
    }

    public function apagarRatingEmpresa($idEmpresa, $idCliente)
    {
        return $this->db->delete("RatingEmpresa", "RatingEmpresa.ID_Empresa = {$idEmpresa} AND RatingEmpresa.ID_Cliente = {$idCliente}");
    }

    public function eliminarColaboradorEmpresa($idEmpresa, $idColaborador)
    {
        return $this->db->delete("Colaboradores", "Colaboradores.ID_Empresa = {$idEmpresa} AND Colaboradores.Nome = '{$idColaborador}'");
    }
}
