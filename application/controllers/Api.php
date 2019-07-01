<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Api extends CI_Controller {
	public function __construct() {
		header('Access-Control-Allow-Origin: *');
    	header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
    	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		$method = $_SERVER['REQUEST_METHOD'];
		if($method == "OPTIONS") {
			echo $method;
			die();
		}
		parent::__construct();
		$this->load->model("Api_model");
	}

	// Empresas
	// GET
	public function informacoesEmpresas() {
		$this->load->model("Empresas_model");
		echo json_encode($this->Empresas_model->informacoesEmpresas());
	}

	public function informacoesEmpresa($idEmpresa) {
		$this->load->model("Empresas_model");
		echo json_encode($this->Empresas_model->informacoesEmpresa($idEmpresa));
	}

	public function ratingEmpresa($idEmpresa) {
		$this->load->model("Empresas_model");
		echo json_encode($this->Empresas_model->ratingEmpresa($idEmpresa));
	}

	public function campanhasEmpresa($idEmpresa) {
		$this->load->model("Empresas_model");
		echo json_encode($this->Empresas_model->campanhasEmpresa($idEmpresa));
	}

	public function campanhaEmpresa($idEmpresa, $idCampanha) {
		$this->load->model("Empresas_model");
		echo json_encode($this->Empresas_model->campanhaEmpresa($idEmpresa, $idCampanha));
	}

	public function instanciasCampanhaEmpresa($idEmpresa, $idCampanha) {
		$this->load->model("Empresas_model");
		echo json_encode($this->Empresas_model->instanciasCampanhaEmpresa($idEmpresa, $idCampanha));
	}

	public function cartoesEmpresa($idEmpresa) {
		$this->load->model("Empresas_model");
		echo json_encode($this->Empresas_model->cartoesEmpresa($idEmpresa));
	}

	public function colaboradoresEmpresa($idEmpresa) {
		$this->load->model("Empresas_model");
		echo json_encode($this->Empresas_model->colaboradoresEmpresa($idEmpresa));
	}

	public function colaboradorEmpresa($idEmpresa, $idColaborador) {
		$this->load->model("Empresas_model");
		echo json_encode($this->Empresas_model->colaboradorEmpresa($idEmpresa, $idColaborador));
	}

	// Post
	public function novaEmpresa() {
		$this->load->model("Empresas_model");

		$data = array(
			"Email" => $this->input->post("email")
		);

	}

	public function alterarInstanciaCampanhaEmpresa($idEmpresa, $idCampanha, $idCartao) {
		$this->load->model("Empresas_model");
		$data = $this->input->post(NULL, FALSE);
		if ($this->Empresas_model->alterarInstanciaCampanhaEmpresa($idEmpresa, $idCampanha, $idCartao, $data)) {
			echo "Update Successful";
		} else {
			echo "Error Updating";
		}
		redirect("ativarCampanha");
	}

	public function alterarEmpresa($idEmpresa) {
		$this->load->model("Empresas_model");
		$data = $this->input->post(NULL, FALSE);
		if($data["tipoEmpresa"] < 0 || $data["tipoEmpresa"] > 4) {
			echo "Error Updating";
			return;
		}
		if ($this->Empresas_model->alterarEmpresa($idEmpresa, $data)) {
			echo "Update Successful";
		} else {
			echo "Error Updating";
		}
	}
	
	public function novoColaboradorEmpresa($idEmpresa) {
		$this->load->model("Empresas_model");
		$data = array(
			"Nome" => $this->input->post("nome"),
			"CodigoAcesso" => $this->input->post("codigoAcesso"),
			"Dono" => $this->input->post("dono"),
			"ID_Empresa" => $idEmpresa,
			"URL" => mt_rand(1,11)
		);
		if ($this->Empresas_model->novoColaboradorEmpresa($idEmpresa, $data)) {
			echo "Creation Successful";
		} else {
			echo "Error Updating";
		}
	}

	// Delete
	public function eliminarColaboradorEmpresa($idEmpresa, $idColaborador) {
		$this->load->model("Empresas_model");
		if ($this->Empresas_model->eliminarColaboradorEmpresa($idEmpresa, urldecode($idColaborador))) {
			echo "Delete Successful";
		} else {
			echo "Error Deleting";
		}
	}

	public function eliminarEmpresa($idEmpresa) {
		$this->load->model("Empresas_model");
		if ($this->Empresas_model->eliminarEmpresa($idEmpresa)) {
			echo "Delete Successful";
		} else {
			echo "Error Deleting";
		}
	}

	// Clientes
	// GET
	public function informacoesClientes() {
		$this->load->model("Clientes_model");
		echo json_encode($this->Clientes_model->informacoesClientes());
	}

	public function informacoesCliente($idCliente) {
		$this->load->model("Clientes_model");
		echo json_encode($this->Clientes_model->informacoesCliente($idCliente));
	}

	public function ratingCliente($idCliente) {
		$this->load->model("Clientes_model");
		echo json_encode($this->Clientes_model->ratingCliente($idCliente));
	}

	public function cartoesCliente($idCliente) {
		$this->load->model("Clientes_model");
		echo json_encode($this->Clientes_model->cartoesCliente($idCliente));
	}

	public function cartaoCliente($idCliente, $idCartao) {
		$this->load->model("Clientes_model");
		echo json_encode($this->Clientes_model->cartaoCliente($idCliente, $idCartao));
	}

	public function instanciasCampanhaCartaoCliente($idCartao) {
		$this->load->model("Clientes_model");
		echo json_encode($this->Clientes_model->instanciasCampanhaCartaoCliente($idCartao));
	}
}
?>