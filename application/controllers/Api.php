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

	// Campanhas
	public function todas_campanhas_empresa() {
		if ($this->Api_model->check_key($this->input->post("key"))) {
			// echo json com todas as campanhas
			$this->load->model("Campanhas_model");
			echo json_encode($this->Campanhas_model->todas_campanhas_empresa($this->input->post("key")));
		} else {
			echo "Wrong key";
		}
	}

	// Colaboradores
	public function todos_colaboradores_empresa() {
		if ($this->Api_model->check_key($this->input->post("key"))) {
			// echo json com todos os colaboradores 
			$this->load->model("Colaboradores_model");
			echo json_encode($this->Colaboradores_model->todos_colaboradores_empresa($this->input->post("key")));
		} else {
			echo "Wrong key";
		}
	}

	public function novo_colaborador_empresa() {
		if ($this->Api_model->check_key($this->input->post("key"))) {
			$this->load->model("Colaboradores_model");
			$data = array(
				"Nome" => $this->input->post("nome"),
				"CodigoAcesso" => $this->input->post("codigoAcesso"),
				"Dono" => $this->input->post("dono"),
				"ID_Empresa" => $this->input->post("key")
			);
			if ($this->Colaboradores_model->novo_colaborador_empresa($data)) {
				echo "Colaborador inserido";
			} else {
				echo "Erro ao criar colaborador";
			}
		} else {
			echo "Wrong key";
		}
	}

	// Clientes
	public function todos_clientes_empresa() {
		if ($this->Api_model->check_key($this->input->post("key"))) {
			// echo json com todos os clientes de uma empresa
			$this->load->model("Clientes_model");
			echo json_encode($this->Clientes_model->todos_clientes_empresa($this->input->post("key")));
		}else {
			echo "Wrong key";
		}
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