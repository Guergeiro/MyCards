<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Main extends CI_Controller {
	public function view($page = "dashboard") {
        
		if (!file_exists(APPPATH."views/pages/{$page}.php")) {
            show_404();
        }

        $data["page"] = $page;
        
        $this->load->view("templates/header", $data);
        $this->loadPage($page);
        $this->load->view("templates/footer", $data);
	}
	
	private function loadPage($page) {
        switch($page) {
            case "admin":
				// When user tries to access "admin" page but isn't logged int
				if (!$this->session->userdata("email")) {
					redirect();
				}
            default:
            $this->load->view("pages/{$page}", $this->getAllUserData());
        }
	}

	private function getAllUserData() {
		/*
        $this->load->model("Media_model");
        $media["media"] = $this->Media_model->getAllMedia();
		return $media;
		*/
	}
}
?>