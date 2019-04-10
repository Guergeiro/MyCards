<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class controller_CarregarViews extends CI_Controller {

    /*Carregar view página Login*/
    public function viewLogin()  {
        $this->load->view('Comerciante/Login');
    }

    /*Carregar view página RegistarConta*/
    public function viewRegistarConta() {
        $this->load->view('Comerciante/RegistarConta');
    }

    /*Carregar view página EnviaEmail*/
    public function viewEnviaEmail() {
        $this->load->view('Comerciante/EnviaEmail');
    }

    /*Carregar view página DashBoard*/
    public function viewDashboard() {
        $this->load->view('Comerciante/Dashboard');
    }

    /*Carregar view página Cliente*/
    public function viewCliente() {
        $this->load->view('Comerciante/Clientes/Clientes');
    }

    /*Carregar views páginas Empresa*/
    public function viewEmpresa_DefinicoesEmpresa() {
        $this->load->view('Comerciante/Empresa/DefinicoesEmpresa');
    }

    public function viewEmpresa_RatingEmpresa() {
        $this->load->view('Comerciante/Empresa/RatingEmpresarial');
    }

    /*Carregar views páginas Campanhas*/
    public function viewCampanhas_CriarCampanhas() {
        $this->load->view('Comerciante/Campanhas/CriarCampanhas');
    }

    public function viewCampanhas_ListarCampanhas() {
        $this->load->view('Comerciante/Campanhas/ListarCampanhas');
    }

    public function viewCampanhas_AtivarCampanhas() {
        $this->load->view('Comerciante/Campanhas/AtivarCampanhas');
    }

    /*Carregar views páginas Profile*/
    public function viewProfile_DefinicoesPerfil() {
        $this->load->view('Comerciante/Profile/DefinicoesPerfil');
    }

    public function viewProfile_PlanoComercial() {
        $this->load->view('Comerciante/Profile/PlanoComercial');
    }
    
    /*Carregar viws páginas ReportingsDados*/
    public function viewReportingsDados() {
        $this->load->view('Comerciante/ReportingsDados/Reportings');
    }
}?>