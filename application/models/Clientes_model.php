<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Clientes_model extends CI_Model
{
    // Select
    public function informacoesClientes()
    {
        $this->db->select("*");
        $query = $this->db->get("Clientes");
        return $query->result_array();
    }

    public function informacoesCliente($idCliente)
    {
        $this->db->select("*");
        $query = $this->db->get_where("Clientes", "Clientes.ID_Cliente = {$idCliente}");
        return $query->result_array();
    }

    public function ratingCliente($idCliente)
    {
        $query = $this->db->get_where("RatingCliente", "RatingCliente.ID_Cliente = {$idCliente}");
        return $query->result_array();
    }

    public function cartoesCliente($idCliente)
    {
        $query = $this->db->get_where("Cartoes", "Cartoes.ID_Cliente = {$idCliente}");
        return $query->result_array();
    }

    public function cartaoCliente($idCliente, $idCartao)
    {
        $query = $this->db->get_where("Cartoes", "Cartoes.ID_Cliente = {$idCliente} AND Cartoes.ID_Cartao = {$idCartao}");
        return $query->result_array();
    }

    public function instanciasCampanhaCartaoCliente($idCartao)
    {
        $query = $this->db->get_where("InstanciaCampanha", "InstanciaCampanha.ID_Cartao = {$idCartao}");
        return $query->result_array();
    }

    // Insert + Update
    public function alterarRatingCliente($idCliente, $data)
    {
        $query = $this->db->get_where("RatingCliente", "RatingCliente.ID_Cliente = {$idCliente} AND RatingCliente.ID_Empresa = {$data["ID_Empresa"]}");
        if ($query->num_rows() == 0) {
            return $this->db->insert("RatingCliente", $data);
        }
        $data["DataRating"] = date("Y-m-d H:i:s");
        $this->db->where("RatingCliente.ID_Cliente = {$idCliente}");
        $this->db->set($data);
        return $this->db->update("RatingCliente", $data);
    }

    // Insert
    public function novoCliente($data)
    {
        $data["Password"] = password_hash($data["Password"], PASSWORD_DEFAULT);
        return $this->db->insert("Clientes", $data);
    }

    public function novoCartaoCliente($idCliente, $data)
    {
        $data["ID_Cliente"] = $idCliente;
        return $this->db->insert("Cartoes", $data);
    }

    // Update
    public function alterarCliente($idCliente, $data)
    {
        $this->db->where("Clientes.ID_Cliente = {$idCliente}");
        $this->db->set($data);
        return $this->db->update("Clientes");
    }

    // Delete
    public function apagarCliente($idCliente)
    {
        return $this->db->delete("Clientes", "Clientes.ID_Cliente = {$idCliente}");
    }

    public function apagarCartaoCliente($idCliente, $idCartao)
    {
        return $this->db->delete("Cartoes", "Cartoes.ID_Cliente = {$idCliente} AND Cartoes.ID_Cartao = {$idCartao}");
    }
}
