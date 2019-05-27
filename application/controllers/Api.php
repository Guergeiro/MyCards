<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Api extends CI_Controller {
	public function __construct() {
		header('Access-Control-Allow-Origin: *');
    	header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
    	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		$method = $_SERVER['REQUEST_METHOD'];
		if($method == "OPTIONS") {
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

	// Post
	public function novaEmpresa() {
		$this->load->model("Empresas_model");

		$data = array(
			"Email" => $this->input->post("email")
		);

	}

	public function alterarInstanciaCampanhaEmpresa($idEmpresa, $idCampanha, $idCartao) {
		$this->load->model("Empresas_model");
		$data = $this->input->post(NULL, TRUE);
		if ($this->Empresas_model->alterarInstanciaCampanhaEmpresa($idEmpresa, $idCampanha, $idCartao, $data)) {
			echo "Update Successful";
		} else {
			echo "Error Updating";
		}
		redirect("ativarCampanha");
	}

	public function alterarColaboradorEmpresa($idEmpresa, $idColaborador) {
		$this->load->model("Empresas_model");
		$data = $this->input->post(NULL, TRUE);
		if ($this->Empresas_model->alterarColaboradorEmpresa($idEmpresa, $idcolaborador, $data)) {
			echo "Update Successful";
		} else {
			echo "Error Updating";
		}
		redirect("colaboradores");
	}

	// Delete
	public function eliminarColaboradorEmpresa($idEmpresa, $idColaborador) {
		$this->load->model("Empresas_model");
		$data = $this->input->input_stream("NULL", TRUE);
		if ($this->Empresas_model->eliminarColaboradorEmpresa($idEmpresa, $idcolaborador, $data)) {
			echo "Delete Successful";
		} else {
			echo "Error Deleting";
		}
		redirect("colaboradores");
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

	public function test($key) {
		if ($this->Api_model->check_key($key)) {
			$object = array(
				"key" => $key,
				"img" => base_url("assets/avatar/18700412_1549755958375924_1739793708868521246_o.jpg")
			);
			echo json_encode($object);
		} else {
			echo "Wrong key";
		}
	}
}
?>