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
		switch ($page) {
			case "dashboard":
			case "colaboradores":
			case "clientes":
			case "criarCampanha":
			case "listarCampanha":
			case "ativarCampanha":
				if (!$this->session->userdata("Email")) {
					redirect("signin");
				} else if (!($this->session->userdata("Dono") == "0" || $this->session->userdata("Dono") == "1")) {
					redirect("perfil");
				} else {
					$this->load->view("pages/{$page}");
				}
				break;
			case "signin":
			case "signup":
			case "recoverPassword":
				if ($this->session->userdata("Email")) {
					redirect("dashboard");
				} else {
					$this->load->view("pages/{$page}");
				}
				break;
			case "updatePassword":
				if (!$this->session->userdata("Email")) {
					redirect("signin");
				} else if ($this->session->userdata("Dono") != "1") {
					redirect("perfil");
				} else {
					$this->load->view("pages/updatePassword");
				}
				break;
			case "perfil":
				if (!$this->session->userdata("Email")) {
					redirect("signin");
				} else {
					$this->load->view("pages/perfil");
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
		} else if (!($this->session->userdata("Dono") == "0" || $this->session->userdata("Dono") == "1")) {
			redirect("perfil");
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
		if ($this->session->userdata("Admin") == "1") {
			redirect();
		}
		$this->load->view("pages/{$page}");
	}
}
?>