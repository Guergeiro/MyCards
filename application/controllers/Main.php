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
						$this->load->view("pages/{$admin}");
					}
				}
				break;
			case "dashboard":
				if ($login) {
					redirect();
				} else {
					$this->load->view("templates/navbar");

					$this->load->Model("Campanhas_model");
					$data["campanhas"] = $this->Campanhas_model->todas_campanhas(1);
					$this->load->view("pages/dashboard", $data);
				}
				break;
			case "colaboradores":
				if (!$login) {
					redirect();
				} else {
					$this->load->view("templates/navbar");
					$this->load->view("pages/colaboradores");
				}
				break;
			case "clientes":
				if (!$login) {
					redirect();
				} else {
					$this->load->view("templates/navbar");
					$this->load->view("pages/clientes");
				}
				break;
			case "criarCampanha":
				if (!$login) {
					redirect();
				} else {
					$this->load->view("templates/navbar");
					$this->load->view("pages/criarCampanha");
				}
				break;
			case "listarCampanha":
				if (!$login) {
					redirect();
				} else {
					$this->load->view("templates/navbar");
					$this->load->view("pages/listarCampanha");
				}
				break;
			case "ativarCampanha":
				if (!$login) {
					redirect();
				} else {
					$this->load->view("templates/navbar");
					$this->load->view("pages/ativarCampanha");
				}
				break;
			default:
				$this->load->view("pages/home");
		}
	}
}
?>