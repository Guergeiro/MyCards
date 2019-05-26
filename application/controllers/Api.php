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
	public function campanha_empresa() {
		if ($this->Api_model->check_key($this->input->post("keyEmpresa"))) {
			// echo json com todas as campanhas de uma empresa
			$this->load->model("Campanhas_model");
			echo json_encode($this->Campanhas_model->campanha_empresa($this->input->post("keyCampanha"),$this->input->post("keyEmpresa")));
		} else {
			echo "Wrong key";
		}
	}
	public function todas_instanciascampanhas_empresa() {
		if ($this->Api_model->check_key($this->input->post("keyEmpresa"))) {
			// echo json com todas as campanhas de uma empresa
			$this->load->model("Campanhas_model");
			echo json_encode($this->Campanhas_model->todas_instanciascampanhas_empresa($this->input->post("keyEmpresa")));
		} else {
			echo "Wrong key";
		}
	}

	public function todas_campanhas_empresa() {
		if ($this->Api_model->check_key($this->input->post("keyEmpresa"))) {
			// echo json com todas as campanhas de uma empresa
			$this->load->model("Campanhas_model");
			echo json_encode($this->Campanhas_model->todas_campanhas_empresa($this->input->post("keyEmpresa")));
		} else {
			echo "Wrong key";
		}
	}

	public function todas_campanhas_cartao() {
		if ($this->Api_model->check_key($this->input->post("keyCliente")) && $this->Api_model->check_key($this->input->post("keyEmpresa"))) {
			// echo json com todas as campanhas de um cartao
			$this->load->model("Campanhas_model");
			echo json_encode($this->Campanhas_model->todas_campanhas_cartao($this->input->post("keyCliente"), $this->input->post("keyEmpresa")));
		} else {
			echo "Wrong key";
		}
	}

	public function todas_campanhas_cliente() {
		if ($this->Api_model->check_key($this->input->post("keyCliente"))) {
			// echo json com todas as campanhas de um cliente
			$this->load->model("Campanhas_model");
			echo json_encode($this->Campanhas_model->todas_campanhas_cliente($this->input->post("keyCliente")));
		} else {
			echo "Wrong key";
		}
	}

	// Colaboradores
	public function todos_colaboradores_empresa() {
		if ($this->Api_model->check_key($this->input->post("keyEmpresa"))) {
			// echo json com todos os colaboradores 
			$this->load->model("Colaboradores_model");
			echo json_encode($this->Colaboradores_model->todos_colaboradores_empresa($this->input->post("keyEmpresa")));
		} else {
			echo "Wrong key";
		}
	}

	public function novo_colaborador_empresa() {
		if ($this->Api_model->check_key($this->input->post("keyEmpresa"))) {
			$this->load->model("Colaboradores_model");
			$data = array(
				"Nome" => $this->input->post("nome"),
				"CodigoAcesso" => $this->input->post("codigoAcesso"),
				"Dono" => $this->input->post("dono"),
				"ID_Empresa" => $this->input->post("keyEmpresa")
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

	public function eliminar_colaborador_empresa() {
		if ($this->Api_model->check_key($this->input->post("keyEmpresa"))) {
			$this->load->model("Colaboradores_model");
			$data = array(
				"Nome" => $this->input->post("nome"),
				"ID_Empresa" => $this->input->post("keyEmpresa")
			);
			if ($this->Colaboradores_model->eliminar_colaborador_empresa($data)) {
				echo "Colaborador Removido";
			} else {
				echo "Erro ao eliminar colaborador";
			}
		} else {
			echo "Wrong key";
		}
	}

	// Clientes
	public function todos_clientes_empresa() {
		if ($this->Api_model->check_key($this->input->post("keyEmpresa"))) {
			// echo json com todos os clientes de uma empresa
			$this->load->model("Clientes_model");
			echo json_encode($this->Clientes_model->todos_clientes_empresa($this->input->post("keyEmpresa")));
		}else {
			echo "Wrong key";
		}
	}

	public function todos_clientes() {
		// Apenas admins podem usar
		if ($this->Api_model->check_key($this->input->post("key")) && $this->Api_model->check_admin($this->input->post("key"))) {
			// echo json com todos os clientes
			$this->load->model("Clientes_model");
			echo json_encode($this->Clientes_model->todos_clientes());
		} else {
			echo "Wrong key";
		}
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


	public function todas_empresas() {
		// Apenas admins podem usar
		if ($this->Api_model->check_key($this->input->post("key")) && $this->Api_model->check_admin($this->input->post("key"))) {
			// echo jsno com todas as empresas
			$this->load->model("Empresas_model");
			echo json_encode($this->Empresas_model->todas_empresas());
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