<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Main extends CI_Controller {
	public function view($page = "home") {
        
		if (!file_exists(APPPATH."views/pages/{$page}.php")) {
            show_404();
        }

        $data["page"] = $page;
        
        $this->load->view("templates/header", $data);
        $this->loadPage($page);
        $this->load->view("templates/footer", $data);
	}
	
	private function loadPage($page) {
		$login = $this->session->userdata("Email");	// NULL caso esteja logout
		switch ($page) {
			case "admin":
				if (!$login) {
					redirect();
				} else {
					if ($this->session->userdata("Admin") == 0) {
						redirect("dashboard");
					} else {
						$this->load->view("pages/admin");
					}
				}
				break;
			case "dashboard":
				if (!$login) {
					redirect();
				} else {
					$data = array('keyEmpresa' => 1);
					$options = array(
						'http' => array(
								'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
								'method'  => 'POST',
								'content' => http_build_query($data)
						)
				);
				$context  = stream_context_create($options);
				$data["campanhas"] = json_decode(file_get_contents("http://127.0.0.1/PINT-Web/api/todas_campanhas_empresa", false, $context));
				$this->load->view("pages/dashboard", $data);
				}
				break;
			case "colaboradores":
				if (!$login) {
					redirect();
				} else {
					$this->load->view("pages/colaboradores");
				}
				break;
			case "clientes":
				if (!$login) {
					redirect();
				} else {
					$this->load->view("pages/clientes");
				}
				break;
			case "criarCampanha":
				if (!$login) {
					redirect();
				} else {
					$this->load->view("pages/criarCampanha");
				}
				break;
			case "listarCampanha":
				if (!$login) {
					redirect();
				} else {
					$this->load->view("pages/listarCampanha");
				}
				break;
			case "ativarCampanha":
				if (!$login) {
					redirect();
				} else {
					$this->load->view("pages/ativarCampanha");
				}
				break;
			case "signin":
				if ($login) {
					redirect("dashboard");
				} else {
					$this->load->view("pages/signin");
				}
				break;
			case "signup":
				if ($login) {
					redirect("dashboard");
				} else {
					$this->load->view("pages/signup");
				}
				break;
			case "updatePassword":
				if (!$login) {
					redirect();
				} else {
					$this->load->view("pages/updatePassword");
				}
				break;
			default:
				$this->load->view("pages/{$page}");
		}
	}
	public function infoCampanha($campanha) {
		if (!file_exists(APPPATH."views/pages/infoCampanha.php")) {
			show_404();
	}

	$data["page"] = "infoCampanha";

	$this->load->view("templates/header", $data);
	$this->load->view("pages/infoCampanha");
	$this->load->view("templates/footer", $data);
	}
}
?>