<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Api extends CI_Controller
{
    public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method == "OPTIONS") {
            echo $method;
            die();
        }
        parent::__construct();
        $this->load->model("Api_model");
    }

    // Empresas
    // GET
    public function informacoesEmpresas()
    {
        $this->load->model("Empresas_model");
        echo json_encode($this->Empresas_model->informacoesEmpresas());
    }

    public function informacoesEmpresa($idEmpresa)
    {
        $this->load->model("Empresas_model");
        echo json_encode($this->Empresas_model->informacoesEmpresa($idEmpresa));
    }

    public function ratingEmpresa($idEmpresa)
    {
        $this->load->model("Empresas_model");
        echo json_encode($this->Empresas_model->ratingEmpresa($idEmpresa));
    }

    public function ratingEmpresaCliente($idEmpresa, $idCliente)
    {
        $this->load->model("Empresas_model");
        $return = array(
            "status" => "",
            "message" => ""
        );
        $data = $this->Empresas_model->ratingEmpresaCliente($idEmpresa, $idCliente);
        if (sizeof($data) != 0) {
            $return["status"] = "true";
            $return["message"] = $data;
        } else {
            $return["status"] = "false";
            $return["message"] = "Error Getting Rating";
        }
        echo json_encode($return);
    }

    public function campanhasEmpresa($idEmpresa)
    {
        $this->load->model("Empresas_model");
        echo json_encode($this->Empresas_model->campanhasEmpresa($idEmpresa));
    }

    public function campanhaEmpresa($idEmpresa, $idCampanha)
    {
        $this->load->model("Empresas_model");
        echo json_encode($this->Empresas_model->campanhaEmpresa($idEmpresa, $idCampanha));
    }

    public function instanciasCampanhaEmpresa($idEmpresa, $idCampanha)
    {
        $this->load->model("Empresas_model");
        echo json_encode($this->Empresas_model->instanciasCampanhaEmpresa($idEmpresa, $idCampanha));
    }

    public function cartoesEmpresa($idEmpresa)
    {
        $this->load->model("Empresas_model");
        echo json_encode($this->Empresas_model->cartoesEmpresa($idEmpresa));
    }

    public function colaboradoresEmpresa($idEmpresa)
    {
        $this->load->model("Empresas_model");
        echo json_encode($this->Empresas_model->colaboradoresEmpresa($idEmpresa));
    }

    public function colaboradorEmpresa($idEmpresa, $idColaborador)
    {
        $this->load->model("Empresas_model");
        echo json_encode($this->Empresas_model->colaboradorEmpresa($idEmpresa, $idColaborador));
    }

    // Post
    public function novaEmpresa()
    {
        $this->load->model("Empresas_model");
    }

    public function alterarEmpresa($idEmpresa)
    {
        $this->load->model("Empresas_model");
        $data = $this->input->post(null, true);
        $return = array(
            "status" => "",
            "message" => ""
        );
        if ($data["tipoEmpresa"] < 0 || $data["tipoEmpresa"] > 4) {
            $return["status"] = "false";
            $return["message"] = "Error Updating";
            echo json_encode($return);
            return;
        }
        if ($this->Empresas_model->alterarEmpresa($idEmpresa, $data)) {
            $return["status"] = "true";
            $return["message"] = "Update Successful";
        } else {
            $return["status"] = "false";
            $return["message"] = "Error Updating";
        }
        echo json_encode($return);
    }

    public function alterarRatingEmpresa($idEmpresa)
    {
        $this->load->model("Empresas_model");
        $data = array(
            "ID_Cliente" => $this->input->post("idCliente", true),
            "Rating" => $this->input->post("rating", true)
        );
        $return = array(
            "status" => "",
            "message" => ""
        );
        if ($this->Empresas_model->alterarRatingEmpresa($idEmpresa, $data)) {
            $return["status"] = "true";
            $return["message"] = "Update Successful";
        } else {
            $return["status"] = "false";
            $return["message"] = "Error Updating";
        }
        echo json_encode($return);
    }

    public function novaCampanha($idEmpresa)
    {
        $this->load->model("Empresas_model");
        $data = $this->input->post(null, true);
        $return = array(
            "status" => "",
            "message" => ""
        );
        if ($this->Empresas_model->novaCampanha($idEmpresa, $data)) {
            $return["status"] = "true";
            $return["message"] = "Insert Successful";
        } else {
            $return["status"] = "false";
            $return["message"] = "Error Inserting";
        }
        echo json_encode($return);
    }

    public function alterarInstanciaCampanhaEmpresa($idEmpresa, $idCampanha, $idCartao)
    {
        $this->load->model("Empresas_model");
        $data = $this->input->post(null, true);
        $result = $this->Empresas_model->alterarInstanciaCampanhaEmpresa($idEmpresa, $idCampanha, $idCartao, $data);
        $return = array(
            "status" => "",
            "message" => ""
        );
        switch ($result) {
            case "notificacao_criada":
            $return["status"] = "true";
            $return["message"] = "Notificação criada.";
            break;
            case "notificacao_apagada":
            $return["status"] = "true";
            $return["message"] = "Notificação apagada.";
            break;
            case "data":
            $return["status"] = "false";
            $return["message"] = "A data da campanha já passou.";
            break;
            case "limite":
            $return["status"] = "false";
            $return["message"] = "Este cartão já não pode usufruir desta campanha.";
            break;
            case "pontos":
            $return["status"] = "false";
            $return["message"] = "Este cartão não possui pontos suficientes.";
            break;
            case "false":
            $return["status"] = "false";
            $return["message"] = "Ocorreu um erro. Tente mais tarde.";
            break;
            case "true":
            $return["status"] = "true";
            $return["message"] = "Campanha utilizada com sucesso.";
        }
        echo json_encode($return);
    }
    
    public function novoColaboradorEmpresa($idEmpresa)
    {
        $this->load->model("Empresas_model");
        $data = array(
            "Nome" => $this->input->post("nome", true),
            "CodigoAcesso" => $this->input->post("codigoAcesso", true),
            "Dono" => $this->input->post("dono", true),
            "ID_Empresa" => $idEmpresa,
            "URL" => mt_rand(1, 11)
        );
        if ($this->Empresas_model->novoColaboradorEmpresa($idEmpresa, $data)) {
            echo "Creation Successful";
        } else {
            echo "Error Updating";
        }
    }

    // Delete
    public function eliminarEmpresa($idEmpresa)
    {
        $this->load->model("Empresas_model");
        if ($this->Empresas_model->eliminarEmpresa($idEmpresa)) {
            echo "Delete Successful";
        } else {
            echo "Error Deleting";
        }
    }
    
    public function apagarRatingEmpresa($idEmpresa, $idCliente)
    {
        $this->load->model("Empresas_model");
        $return = array(
            "status" => "",
            "message" => ""
        );
        if ($this->Empresas_model->apagarRatingEmpresa($idCliente, $idEmpresa)) {
            $return["status"] = "true";
            $return["message"] = "Delete Successful";
        } else {
            $return["status"] = "false";
            $return["message"] = "Error Deleting";
        }
        echo json_encode($return);
    }

    public function eliminarColaboradorEmpresa($idEmpresa, $idColaborador)
    {
        $this->load->model("Empresas_model");
        if ($this->Empresas_model->eliminarColaboradorEmpresa($idEmpresa, urldecode($idColaborador))) {
            echo "Delete Successful";
        } else {
            echo "Error Deleting";
        }
    }

    // Clientes
    // GET
    public function informacoesClientes()
    {
        $this->load->model("Clientes_model");
        echo json_encode($this->Clientes_model->informacoesClientes());
    }

    public function informacoesCliente($idCliente)
    {
        $this->load->model("Clientes_model");
        echo json_encode($this->Clientes_model->informacoesCliente($idCliente));
    }

    public function ratingCliente($idCliente)
    {
        $this->load->model("Clientes_model");
        echo json_encode($this->Clientes_model->ratingCliente($idCliente));
    }

    public function ratingClienteEmpresa($idCliente, $idEmpresa)
    {
        $this->load->model("Clientes_model");
        $return = array(
            "status" => "",
            "message" => ""
        );
        $data = $this->Clientes_model->ratingClienteEmpresa($idCliente, $idEmpresa);
        if (sizeof($data) != 0) {
            $return["status"] = "true";
            $return["message"] = $data;
        } else {
            $return["status"] = "false";
            $return["message"] = "Error Getting Rating";
        }
        echo json_encode($return);
    }

    public function cartoesCliente($idCliente)
    {
        $this->load->model("Clientes_model");
        echo json_encode($this->Clientes_model->cartoesCliente($idCliente));
    }

    public function cartaoCliente($idCliente, $idCartao)
    {
        $this->load->model("Clientes_model");
        echo json_encode($this->Clientes_model->cartaoCliente($idCliente, $idCartao));
    }

    public function instanciasCampanhaCartaoCliente($idCartao)
    {
        $this->load->model("Clientes_model");
        echo json_encode($this->Clientes_model->instanciasCampanhaCartaoCliente($idCartao));
    }

    // POST
    public function novoCliente()
    {
        $this->load->model("Clientes_model");
        $data = $this->input->post(null, true);
        $return = array(
            "status" => "",
            "message" => ""
        );
        if ($this->Clientes_model->novoCliente($data)) {
            $return["status"] = "true";
            $return["message"] = "Update Successful";
        } else {
            $return["status"] = "false";
            $return["message"] = "Error Updating";
        }
        echo json_encode($return);
    }

    public function alterarCliente($idCliente)
    {
        $this->load->model("Clientes_model");
        $data = $this->input->post(null, true);
        $return = array(
            "status" => "",
            "message" => ""
        );
        if ($this->Clientes_model->alterarCliente($idCliente, $data)) {
            $return["status"] = "true";
            $return["message"] = "Update Successful";
        } else {
            $return["status"] = "false";
            $return["message"] = "Error Updating";
        }
        echo json_encode($return);
    }

    public function novoCartaoCliente($idCliente)
    {
        $this->load->model("Clientes_model");
        $data = array(
            "ID_Empresa" => $this->input->post("idempresa", true)
        );
        $return = array(
            "status" => "",
            "message" => ""
        );
        if ($this->Clientes_model->novoCartaoCliente($idCliente, $data)) {
            $return["status"] = "true";
            $return["message"] = "Update Successful";
        } else {
            $return["status"] = "false";
            $return["message"] = "Error Updating";
        }
        echo json_encode($return);
    }

    // DELETE
    public function apagarCliente($idCliente)
    {
        $this->load->model("Clientes_model");
        $return = array(
            "status" => "",
            "message" => ""
        );
        if ($this->Clientes_model->apagarCliente($idCliente)) {
            $return["status"] = "true";
            $return["message"] = "Update Successful";
        } else {
            $return["status"] = "false";
            $return["message"] = "Error Updating";
        }
        echo json_encode($return);
    }

    public function apagarRatingCliente($idCliente, $idEmpresa)
    {
        $this->load->model("Clientes_model");
        $return = array(
            "status" => "",
            "message" => ""
        );
        if ($this->Clientes_model->apagarRatingCliente($idCliente, $idEmpresa)) {
            $return["status"] = "true";
            $return["message"] = "Update Successful";
        } else {
            $return["status"] = "false";
            $return["message"] = "Error Updating";
        }
        echo json_encode($return);
    }

    public function apagarCartaoCliente($idCliente, $idCartao)
    {
        $this->load->model("Clientes_model");
        $return = array(
            "status" => "",
            "message" => ""
        );
        if ($this->Clientes_model->apagarCartaoCliente($idCliente, $data)) {
            $return["status"] = "true";
            $return["message"] = "Update Successful";
        } else {
            $return["status"] = "false";
            $return["message"] = "Error Updating";
        }
        echo json_encode($return);
    }
}
