<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Main extends CI_Controller
{
    public function view($page = "home")
    {
        if (!file_exists(APPPATH."views/pages/{$page}.php")) {
            show_404();
        }

        $data["page"] = $page;
        
        $this->load->view("templates/header", $data);
        $this->loadPage($page);
        $this->load->view("templates/footer", $data);
    }
    
    private function loadPage($page)
    {
        switch ($page) {
            case "dashboard":
            case "clientes":
            case "criarCampanha":
            case "listarCampanha":
            case "ativarCampanha":
                if (!$this->session->userdata("Email")) {
                    redirect("signin");
                } elseif (!($this->session->userdata("Dono")) || ($this->session->userdata("TipoEmpresa") == "0")) {
                    redirect("perfil");
                } else {
                    $this->load->view("pages/{$page}");
                }
                break;
            case "signin":
            case "signup":
                if ($this->session->userdata("Email")) {
                    redirect("dashboard");
                } else {
                    $this->load->view("pages/{$page}");
                }
                break;
            case "definicoesEmpresa":
            case "visualizarEmpresa":
            case "colaboradores":
            case "comprar":
                if (!$this->session->userdata("Email")) {
                    redirect("signin");
                } elseif ($this->session->userdata("Dono") != "1" || ($this->session->userdata("TipoEmpresa") == "0")) {
                    redirect("perfil");
                } else {
                    $this->load->view("pages/{$page}");
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
    public function infoCampanha($campanha)
    {
        if (!file_exists(APPPATH."views/pages/infoCampanha.php")) {
            show_404();
        }

        if (!$this->session->userdata("Email")) {
            redirect("signin");
        } elseif (!($this->session->userdata("Dono")) || ($this->session->userdata("TipoEmpresa") == "0")) {
            redirect("perfil");
        }


        $data["page"] = "infoCampanha";

        $this->load->view("templates/header", $data);
        $this->load->view("pages/infoCampanha");
        $this->load->view("templates/footer", $data);
    }

    public function admin()
    {
        if (!file_exists(APPPATH."views/pages/admin.php")) {
            show_404();
        }
        $data["page"] = "admin";
        $this->load->view("pages/admin", $data);
    }
}
