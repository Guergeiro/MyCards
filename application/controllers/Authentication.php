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

	public function signin()
	{
		if ($this->session->userdata("Email")) {
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
			$this->session->set_flashdata("missingLoginData", "Por Favor, preencha todos os campos.");
			redirect("signin");
		} else {
			$data = array(
				"email" => $this->input->post("email"),
				"password" => $this->input->post("password")
			);

			$result = $this->Authentication_model->signin($data);

			if (!$result) {
				$this->session->set_flashdata("errorLoginData", "Email ou Password errados");
				redirect("signin");
			} else if ($result[0]["Admin"] == 1) {
				$this->session->set_userdata($result[0]);
				redirect("admin");
			} else {
				$this->session->set_userdata($result[0]);
				redirect("dashboard");
			}
		}
	}

	public function signup()
	{
		if ($this->session->userdata("Email")) {
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
				"rules" => "required|trim|is_unique[Utilizadores.Email]",
			),
			array(
				"field" => "password",
				"label" => "password",
				"rules" => "required|trim"
			),
			array(
				"field" => "repassword",
				"label" => "repassword",
				"rules" => "required|trim|matches[password]"
			)
		);

		$this->form_validation->set_rules($config);

		if (!($this->form_validation->run())) {
			$this->session->set_flashdata("wrongEmail", "O Email desejado não se encontra disponível.");
		} else {

			$data = array(
				"email" => $this->input->post("email"),
				"password" => $this->input->post("password")
			);

			$this->Authentication_model->signup($data);

			$this->session->set_flashdata("accountCreated", "Conta criada com sucesso.");
		};
		redirect("signup");
	}

	public function signoff()
	{
		$this->session->sess_destroy();
		redirect();
	}

	public function recoverPassword()
	{
		if ($this->session->userdata("Email")) {
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
		);

		$this->form_validation->set_rules($config);

		if (!($this->form_validation->run())) {
			$this->session->set_flashdata("wrongEmail", "O Email não se encontra na base de dados.");
		} else {

			$alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
			$password = array();
			$alpha_length = strlen($alphabet) - 1;
			for ($i = 0; $i < 16; $i++) {
				$n = mt_rand(0, $alpha_length);
				$password[] = $alphabet[$n];
			}
			$data = array(
				"Email" => $this->input->post("email"),
				"Password" => implode($password)
			);
			if(!$this->Authentication_model->recoverPassword($data))
			{
				$this->session->set_flashdata("wrongEmail", "O Email não se encontra na base de dados.");
			} else {
				$this->session->set_flashdata("passwordSent", "Email Enviado Com Sucesso.");
			}

		}
		redirect("recoverPassword");
	}

	public function updatePassword()
	{
		if (!$this->session->userdata("Email")) {
			// Não está login
			redirect();
		}
		$config = array(
			array(
				"field" => "prepassword",
				"label" => "prepassword",
				"rules" => "required|trim|differs[password]"
			),
			array(
				"field" => "password",
				"label" => "password",
				"rules" => "required|trim"
			),
			array(
				"field" => "repassword",
				"label" => "repassword",
				"rules" => "required|trim|matches[password]"
			)
		);
		$this->form_validation->set_rules($config);
		if (!($this->form_validation->run())) {
			$this->session->set_flashdata("wrongPassword", "A password inserida não é correta.");
		} else {

			$data = array(
				"ID_Utilizador" => $this->session->userdata("ID_Utilizador"),
				"Email" => $this->session->userdata("Email"),
				"Password" => $this->input->post("password"),
				"Localizacao" => $this->session->userdata("Localizacao"),
				"DataRegisto" => $this->session->userdata("DataRegisto"),
				"Admin" => $this->session->userdata("Admin")
			);

			if ($this->Authentication_model->updatePassword($data)) {
				$this->session->set_flashdata("updatedPassword", "Password alterada com sucesso.");
			} else {
				$this->session->set_flashdata("errorPassword", "Não foi possível alterar a password.");
			}
		}
		redirect("updatePassword");
	}
}
