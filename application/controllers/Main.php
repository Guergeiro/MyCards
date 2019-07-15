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

    private function checkPermission()
    {
        /*
        return true -> tem permissões
        return false -> não tem
        */
        return (($this->session->userdata("Dono") == "0") || ($this->session->userdata("Dono") == "1") && ($this->session->userdata("TipoEmpresa") != "0"));
    }

    private function checkPermissionDono()
    {
        /*
        return true -> tem permissoes
        return fasle -> não tem
        */
        return (($this->session->userdata("Dono") == "1") && ($this->session->userdata("TipoEmpresa") != "0"));
    }
    
    private function loadPage($page)
    {
        switch ($page) {
            case "dashboard":
            case "listarCampanha":
            case "ativarCampanha":
            case "criarCampanha":
            case "clientes":
                if (!$this->session->userdata("Email")) {
                    redirect("signin");
                } elseif ($this->checkPermission() == false) {
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
                } elseif ($this->checkPermissionDono() == false) {
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
        } elseif ($this->checkPermission() == false) {
            redirect("perfil");
        } elseif ($this->session->userdata("TipoEmpresa") != 3) {
            redirect("listarCampanha");
        }


        $data["page"] = "infoCampanha";

        $this->load->view("templates/header", $data);
        $this->load->view("pages/infoCampanha");
        $this->load->view("templates/footer", $data);
    }

    public function api() {
        if (!file_exists(APPPATH."views/pages/api.php")) {
            show_404();
        }
        $data["page"] = "api";
        $this->load->view("pages/api", $data);
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
