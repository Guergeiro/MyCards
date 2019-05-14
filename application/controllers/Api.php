<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Api extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("Api_model");
	}

	public function todas_campanhas($key=0) {
		if ($this->Api_model->check_key($key)) {
			// echo json com todas as campanhas
			$this->load->model("Campanhas_model");
			echo json_encode($this->Campanhas_model->todas_campanhas($key));
		} else {
			echo "Wrong key";
		}
	}

	public function notificacao_ativacao_campanha($key) {
		if ($this->Api_model->check_key($key)) {
			// echo json com todas as notificaçoes
		} else {
			echo "Wrong key";
		}
	}

	public function ativar_campanha($key) {
		if ($this->Api_model->check_key($key)) {
			// Post->dados com id campanha
		} else {
			echo "Wrong key";
		}
	}

	public function criar_campanha($key) {
		if ($this->Api_model->check_key($key)) {
			// Post->dados nova campanha
		} else {
			echo "Wrong key";
		}
	}

	public function todos_colaboradores($key) {
		if ($this->Api_model->check_key($key)) {
			// echo json com todos os colaboradores 
		} else {
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
