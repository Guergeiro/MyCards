<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Authentication extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library("form_validation");
		$this->load->model("Authentication_model");
	}

	public function login()
	{
		if($this->session->userdata("Email")) {
			if ($this->session->userdata("Admin") == 1) {
				redirect("admin");
			} else {
				redirect("dashboard");
			}
		}

		$config = array(
			array(
				"field" => "email",
				"label" => "email",
				"rules" => "required|trim",
			),
			array(
				"field" => "password",
				"label" => "password",
				"rules" => "required|trim"
			)
		);

		$this->form_validation->set_rules($config);

		if (!$this->form_validation->run()) {
			$this->session->set_flashdata('missingLoginData', 'Por Favor, preencha todos os campos.');
			redirect('login');
		} else {
			$data = array(
				"email" => $this->input->post("email"),
				"password" => $this->input->post("password")
			);

			$result = $this->Authentication_model->login_call($data);

			if (!$result) {
				$this->session->set_flashdata('errorLoginData', 'Email ou Password Errados');
				redirect("login");
			} else if ($result[0]['Admin'] == 1) {
				$this->session->set_userdata($result[0]);
				redirect("admin");
			} else {
				$this->session->set_userdata($result[0]);
				redirect("dashboard");
			}
		}
	}
}
