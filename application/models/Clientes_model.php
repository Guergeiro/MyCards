<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Clientes_model extends CI_Model
{
    // Select
    public function informacoesClientes()
    {
        $this->db->select("Clientes.ID_Cliente, Clientes.Email, Clientes.Localizacao, Clientes.DataRegisto, Clientes.Ativo, Clientes.PrimeiroNome, Clientes.UltimoNome, Clientes.DataNascimento, Clientes.Preferencias, Clientes.Notificacoes");
        $query = $this->db->get("Clientes");
        return $query->result_array();
    }

    public function informacoesCliente($idCliente)
    {
        $this->db->select("Clientes.ID_Cliente, Clientes.Email, Clientes.Localizacao, Clientes.DataRegisto, Clientes.Ativo, Clientes.PrimeiroNome, Clientes.UltimoNome, Clientes.DataNascimento, Clientes.Preferencias, Clientes.Notificacoes");
        $query = $this->db->get_where("Clientes", "Clientes.ID_Cliente = {$idCliente}");
        return $query->result_array();
    }

    public function todasNotificacoesCliente($idCliente) {
        $query = $this->db->get_where("Notificacoes", "Notificacoes.ID_Cliente = {$idCliente}");
        $query = $query->result_array();
        $this->db->delete("Notificacoes", "Notificacoes.ID_Cliente = {$idCliente}");
        return $query;
    }

    public function ratingCliente($idCliente)
    {
        $query = $this->db->get_where("RatingCliente", "RatingCliente.ID_Cliente = {$idCliente}");
        return $query->result_array();
    }

    public function ratingClienteEmpresa($idCliente, $idEmpresa)
    {
        $query = $this->db->get_where("RatingCliente", "RatingCliente.ID_Cliente = {$idCliente} AND RatingCliente.ID_Empresa = {$idEmpresa}");
        return $query->result_array();
    }

    public function cartoesCliente($idCliente)
    {
        $query = $this->db->get_where("Cartoes", "Cartoes.ID_Cliente = {$idCliente} AND Cartoes.Ativo = 1");
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
        $data["ID_Cliente"] = $idCliente;
        $query = $this->db->get_where("RatingCliente", "RatingCliente.ID_Cliente = {$idCliente} AND RatingCliente.ID_Empresa = {$data["ID_Empresa"]}");
        if ($query->num_rows() == 0) {
            return $this->db->insert("RatingCliente", $data);
        }
        $data["DataRating"] = date("Y-m-d H:i:s");
        $this->db->where("RatingCliente.ID_Cliente = {$idCliente} AND RatingCliente.ID_Empresa = {$data["ID_Empresa"]}");
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
        $query = $this->db->get_where("Empresas", "Empresas.ID_Empresa = {$data["ID_Empresa"]}");
        // Não existe empresa
        if ($query->num_rows() == 0) {
            return false;
        }
        $query = $query->result_array();
        if ($query[0]["Ativo"] == 0 || $query[0]["TipoEmpresa"] == 0) {
            // Empresa não ativa
            return false;
        }
        $query = $this->db->get_where("Cartoes", "Cartoes.ID_Cliente = {$idCliente} AND Cartoes.ID_Empresa = {$data["ID_Empresa"]}");
        $result = false;
        if ($query->num_rows() != 0) {
            // Já tem cartão, não está ativo
            $this->db->where("Cartoes.ID_Cliente = {$idCliente} AND Cartoes.ID_Empresa = {$data["ID_Empresa"]}");
            $this->db->set(array(
                "Ativo"=> 1
            ));
            $result = $this->db->update("Cartoes");
        } else {
            $data["ID_Cliente"] = $idCliente;
            $data["ID_Cartao"] = $idCliente.$data["ID_Empresa"];
            $result = $this->db->insert("Cartoes", $data);
            if (!$result) {
                return false;
            }
    
            // Ir buscar cartao inserido
            $cartao = $this->db->get_where("Cartoes", "Cartoes.ID_Empresa = {$data["ID_Empresa"]} AND Cartoes.ID_Cliente = {$idCliente}");
            $cartao = $cartao->result_array();
    
            // Inserir todas as campanhas existentes no cartao
            $query = $this->db->get_where("Campanhas", "Campanhas.ID_Empresa = {$data["ID_Empresa"]}");
            $query = $query->result_array();
            foreach ($query as $campanha) {
                $info = array(
                    "ID_Cartao" => $cartao[0]["ID_Cartao"],
                    "ID_Campanha" => $campanha["ID_Campanha"]
                );
                $this->db->insert("InstanciaCampanha", $info);
            }
        }
    
        return $result;
    }

    // Update
    public function alterarCliente($idCliente, $data)
    {
        $this->db->where("Clientes.ID_Cliente = {$idCliente}");
        $this->db->set($data);
        return $this->db->update("Clientes");
    }

    public function alterarInstanciaCampanhaCliente($idCliente, $idCartao, $idCampanha, $data)
    {
        $cartao = $this->db->get_where("Cartoes", "Cartoes.ID_Cliente = {$idCliente} AND Cartoes.ID_Cartao = {$idCartao}");
        if ($cartao->num_rows() == 0) {
            // Não existe cliente com esse cartao
            return false;
        }
        $this->db->where("InstanciaCampanha.ID_Campanha = {$idCampanha} AND InstanciaCampanha.ID_Cartao = {$idCartao}");
        $this->db->set($data);
        return $this->db->update("InstanciaCampanha");
    }

    // Delete
    public function apagarCliente($idCliente)
    {
        return $this->db->delete("Clientes", "Clientes.ID_Cliente = {$idCliente}");
    }

    public function apagarRatingCliente($idCliente, $idEmpresa)
    {
        return $this->db->delete("RatingCliente", "RatingCliente.ID_Cliente = {$idCliente} AND RatingCliente.ID_Empresa = {$idEmpresa}");
    }

    public function apagarCartaoCliente($idCliente, $idCartao)
    {
        $this->db->where("Cartoes.ID_Cliente = {$idCliente} AND Cartoes.ID_Cartao = {$idCartao}");
        $this->db->set(array(
            "Ativo"=> 0
        ));
        return $this->db->update("Cartoes");
    }
}
