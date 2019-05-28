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
			case "dashboard":
				if (!$login) {
					redirect("signin");
				} else {
					$this->load->view("pages/dashboard");
				}
				break;
			case "colaboradores":
				if (!$login) {
					redirect("signin");
				} else {
					$this->load->view("pages/colaboradores");
				}
				break;
			case "clientes":
				if (!$login) {
					redirect("signin");
				} else {
					$this->load->view("pages/clientes");
				}
				break;
			case "criarCampanha":
				if (!$login) {
					redirect("signin");
				} else {
					$this->load->view("pages/criarCampanha");
				}
				break;
			case "listarCampanha":
				if (!$login) {
					redirect("signin");
				} else {
					$this->load->view("pages/listarCampanha");
				}
				break;
			case "ativarCampanha":
				if (!$login) {
					redirect("signin");
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
					redirect("signin");
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

		if (!$this->session->userdata("Email")) {
			redirect("signin");
		}


		$data["page"] = "infoCampanha";

		$this->load->view("templates/header", $data);
		$this->load->view("pages/infoCampanha");
		$this->load->view("templates/footer", $data);
	}

	public function admin($page = "admin") {
		if (!file_exists(APPPATH."views/pages/{$page}.php")) {
			show_404();
		}
		if ($this->session->userdata("Admin") != 1) {
			redirect();
		}
		$this->load->view("pages/{$page}");
	}
}
?>