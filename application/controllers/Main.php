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
				if (!$this->session->userdata("Email")) {
					redirect("signin");
				} else if (!($this->session->userdata("Dono") == "0" || $this->session->userdata("Dono") == "1")) {
					redirect("perfil");
				} else {
					$this->load->view("pages/dashboard");
				}
				break;
			case "colaboradores":
				if (!$this->session->userdata("Email")) {
					redirect("signin");
				} else if ($this->session->userdata("Dono") != "1") {
					redirect("perfil");
				} else {
					$this->load->view("pages/colaboradores");
				}
				break;
			case "clientes":
				if (!$this->session->userdata("Email")) {
					redirect("signin");
				} else if (!($this->session->userdata("Dono") == "0" || $this->session->userdata("Dono") == "1")) {
					redirect("perfil");
				} else {
					$this->load->view("pages/clientes");
				}
				break;
			case "criarCampanha":
				if (!$this->session->userdata("Email")) {
					redirect("signin");
				} else if (!($this->session->userdata("Dono") == "0" || $this->session->userdata("Dono") == "1")) {
					redirect("perfil");
				} else {
					$this->load->view("pages/criarCampanha");
				}
				break;
			case "listarCampanha":
				if (!$this->session->userdata("Email")) {
					redirect("signin");
				} else if (!($this->session->userdata("Dono") == "0" || $this->session->userdata("Dono") == "1")) {
					redirect("perfil");
				} else {
					$this->load->view("pages/listarCampanha");
				}
				break;
			case "ativarCampanha":
				if (!$this->session->userdata("Email")) {
					redirect("signin");
				} else if (!($this->session->userdata("Dono") == "0" || $this->session->userdata("Dono") == "1")) {
					redirect("perfil");
					}else {
					$this->load->view("pages/ativarCampanha");
				}
				break;
			case "signin":
				if ($this->session->userdata("Email")) {
					redirect("dashboard");
				} else {
					$this->load->view("pages/signin");
				}
				break;
			case "signup":
				if ($this->session->userdata("Email")) {
					redirect("dashboard");
				} else {
					$this->load->view("pages/signup");
				}
				break;
			case "recoverPassword":
				if ($this->session->userdata("Email")) {
					redirect("dashboard");
				} else {
					$this->load->view("pages/recoverPassword");
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
			case "home":
				$this->load->view("pages/home");
				break;
			case "politicaPrivacidade":
				$this->load->view("pages/politicaPrivacidade");
				break;
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