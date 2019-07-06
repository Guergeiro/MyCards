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

    public function ratingEmpresaCliente($idEmpresa, $idCliente)
    {
        $query = $this->db->get_where("RatingEmpresa", "RatingEmpresa.ID_Empresa = {$idEmpresa} AND RatingEmpresa.ID_Cliente = {$idCliente}");
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
        $data["ID_Empresa"] = $idEmpresa;
        $result = $this->db->insert("Campanhas", $data);
        if ($result) {
            // Ir buscar ultima campanha da empresa
            $idCampanha = $this->db->get_where("Campanhas", "Campanhas.ID_Empresa = {$idEmpresa}");
            $idCampanha = $idCampanha->result_array();
            $idCampanha = $idCampanha[sizeof($idCampanha) - 1]["ID_Campanha"];

            // Inserir a campanha em todos os cartoes
            $query = $this->db->get_where("Cartoes", "Cartoes.ID_Empresa = {$idEmpresa}");
            $query = $query->result_array();
            foreach ($query as $cartao) {
                $info = array(
                "ID_Cartao" => $cartao["ID_Cartao"],
                "ID_Campanha" => $idCampanha
            );
                $this->db->insert("InstanciaCampanha", $info);
            }
        }
        return $result;
    }

    // Insert + Update
    public function alterarRatingEmpresa($idEmpresa, $data)
    {
        $data["ID_Empresa"] = $idEmpresa;
        $query = $this->db->get_where("RatingEmpresa", "RatingEmpresa.ID_Empresa = {$idEmpresa} AND RatingEmpresa.ID_Cliente = {$data["ID_Cliente"]}");
        if ($query->num_rows() == 0) {
            return $this->db->insert("RatingEmpresa", $data);
        }
        $data["DataRating"] = date("Y-m-d H:i:s");
        $this->db->where("RatingEmpresa.ID_Empresa = {$idEmpresa} AND RatingEmpresa.ID_Cliente = {$data["ID_Cliente"]}");
        $this->db->set($data);
        return $this->db->update("RatingEmpresa", $data);
    }

    // Update
    public function alterarInstanciaCampanhaEmpresa($idEmpresa, $idCampanha, $idCartao, $data)
    {
        $campanha = $this->db->get_where("Campanhas", "Campanhas.ID_Campanha = {$idCampanha}");
        if ($campanha->num_rows() == 0) {
            // Não existem campanhas com esse id
            return false;
        }
        if (array_key_exists("notificacao", $data)) {
            // Queremos apagar/criar notificacao
            switch ($data["notificacao"]) {
                case "0":
                $this->db->where("InstanciaCampanha.ID_Campanha = {$idCampanha} AND InstanciaCampanha.ID_Cartao = {$idCartao}");
                $this->db->set(array(
                    "Notificacao" => 0
                ));
                return $this->db->update("InstanciaCampanha") == true ? "notificacao_apagada" : "false";
                break;
                case "1":
                $this->db->where("InstanciaCampanha.ID_Campanha = {$idCampanha} AND InstanciaCampanha.ID_Cartao = {$idCartao}");
                $this->db->set(array(
                    "Notificacao" => 1
                ));
                return $this->db->update("InstanciaCampanha") == true ? "notificacao_criada" : "false";
                break;
            }
        }
        $campanha = $campanha->result_array();
        $dataCampanha = explode("-", $campanha[0]["DataFim"]);
        if (date("Y") > $dataCampanha[0]) {
            // Ano já foi
            return "data";
        }
        if (date("m") > $dataCampanha[1]) {
            // Mes já foi
            return "data";
        }
        if (date("d") > $dataCampanha[2]) {
            // Dia já foi
            return "data";
        }
        
        $query = $this->db->get_where("InstanciaCampanha", "InstanciaCampanha.ID_Campanha = {$idCampanha} AND InstanciaCampanha.ID_Cartao = {$idCartao}");
        $query = $query->result_array();
        switch ($campanha[0]["TipoCampanha"]) {
            case "0":
            // Cupoes == 1 utilização
            if ($query[0]["Utilizado"] != 0) {
                // Campanha já utilizada
                return "limite";
            }
            // Adicionar Pontos ao Cartao
            $cartao = $this->db->get_where("Cartoes", "Cartoes.ID_Cartao = {$idCartao}");
            $cartao = $cartao->result_array();
            $this->db->where("Cartoes.ID_Cartao = {$idCartao}");
            $this->db->set(array(
                "Pontos" => $cartao[0]["Pontos"]+$data["valor"]
            ));
            $this->db->update("Cartoes");

            // Utilizar Campanha
            $this->db->where("InstanciaCampanha.ID_Campanha = {$idCampanha} AND InstanciaCampanha.ID_Cartao = {$idCartao}");
            $this->db->set(array(
                "Utilizado" => 1,
                "Notificacao" => 0,
                "DataUtilizacao" => date("Y-m-d H:i:s")
            ));

            break;
            case "1":
            // Carimbos == 10 utilizações
            if ($query[0]["Utilizado"] > 9) {
                return "limite";
            }
            // Adicionar Pontos ao Cartao
            $cartao = $this->db->get_where("Cartoes", "Cartoes.ID_Cartao = {$idCartao}");
            $cartao = $cartao->result_array();
            $this->db->where("Cartoes.ID_Cartao = {$idCartao}");
            $this->db->set(array(
                "Pontos" => $cartao[0]["Pontos"]+$data["valor"]
            ));
            $this->db->update("Cartoes");

            // Utilizar Campanha
            $this->db->where("InstanciaCampanha.ID_Campanha = {$idCampanha} AND InstanciaCampanha.ID_Cartao = {$idCartao}");
            $this->db->set(array(
                "Utilizado" => $query[0]["Utilizado"]+1,
                "Notificacao" => 0,
                "DataUtilizacao" => date("Y-m-d H:i:s")
            ));

            break;
            case "2":
            // Utilizar apenas se NPontos > valor
            $cartao = $this->db->get_where("Cartoes", "Cartoes.ID_Cartao = {$idCartao}");
            $cartao = $cartao->result_array();
            if ($cartao[0]["Pontos"] < $campanha["Valor"]) {
                // Não tem pontos
                return "pontos";
            }
            $this->db->where("Cartoes.ID_Cartao = {$idCartao}");
            $this->db->set(array(
                "Pontos" => $cartao[0]["Pontos"]-$campanha["Valor"]
            ));
            $this->db->update("Cartoes");

            $this->db->where("InstanciaCampanha.ID_Campanha = {$idCampanha} AND InstanciaCampanha.ID_Cartao = {$idCartao}");
            $this->db->set(array(
                "Utilizado" => $query[0]["Utilizado"]+1,
                "Notificacao" => 0,
                "DataUtilizacao" => date("Y-m-d H:i:s")
            ));
            break;
        }
        if ($this->db->update("InstanciaCampanha")) {
            return "true";
        }
        return "false";
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
