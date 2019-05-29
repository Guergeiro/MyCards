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
			redirect("dashboard");
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
			$this->session->set_flashdata("incorrectFlashData", "Por Favor, preencha todos os campos.");
			redirect("signin");
		} else {
			$data = array(
				"email" => $this->input->post("email"),
				"password" => $this->input->post("password")
			);

			$result = $this->Authentication_model->signin($data);

			if ($result == "email") {
				$this->session->set_flashdata("incorrectFlashData", "Email ou Password errados.");
				redirect("signin");
			}else if ($result == "ativo") {
				$this->session->set_flashdata("incorrectFlashData", "Conta não ativa.");
				redirect("signin");
			} else {
				unset($result[0]["Password"]);
				$this->session->set_userdata($result[0]);
				redirect("dashboard");
			}
		}
	}

	public function colaborador() {
		if (!$this->session->userdata("Email")) {
			redirect("signin");
		}
		$config = array(
			array(
				"field" => "nome",
				"label" => "nome",
				"rules" => "required|trim"
			),
			array(
				"field" => "codigoAcesso",
				"label" => "codigoAcesso",
				"rules" => "required|trim"
			)
		);
		$this->form_validation->set_rules($config);
		if (!($this->form_validation->run())) {
			$this->session->set_flashdata("incorrectFlashData", "Alguma coisa correu mal.");
			redirect("perfil");
		} else {

			$data = array(
				"Nome" => $this->input->post("nome"),
				"CodigoAcesso" => $this->input->post("codigoAcesso"),
				"ID_Empresa" => $this->session->userdata("ID_Empresa")
			);

			$result = $this->Authentication_model->colaborador($data);
			if (!$result) {
				$this->session->set_flashdata("incorrectFlashData", "Código de Acesso incorreto.");
				redirect("perfil");
			} else {
				$this->session->set_userdata($result[0]);
				redirect("dashboard");
			}
		};

	}

	public function signup()
	{
		if ($this->session->userdata("Email")) {
			redirect("dashboard");
		}

		$config = array(
			array(
				"field" => "email",
				"label" => "email",
				"rules" => "required|trim|is_unique[Empresas.Email]",
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
			),
			array(
				"field" => "nome",
				"label" => "nome",
				"rules" => "required|trim"
			),
			array(
				"field" => "nif",
				"label" => "nif",
				"rules" => "required|trim|numeric"
			)
		);

		$this->form_validation->set_rules($config);

		if (!($this->form_validation->run())) {
			$this->session->set_flashdata("incorrectFlashData", "O Email desejado não se encontra disponível.");
		} else {

			$data = array(
				"email" => $this->input->post("email"),
				"password" => $this->input->post("password"),
				"nome" => $this->input->post("nome"),
				"nif" => $this->input->post("nif")
			);

			if($this->Authentication_model->signup($data)) {
				$email = array(
				"protocol" => "smtp",
				"smtp_host" => "mail.dsprojects.pt",
				"smtp_user" => "pint@dsprojects.pt",
				"smtp_pass" => "-Pint2019",
				"smtp_port" => "465",
				"smtp_crypto" => "ssl",
				"mailtype" => "text"
			);
 			$this->load->library("email", $email);
 			$this->email->from("pint@dsprojects.pt", "Your Name");
			$this->email->to("breno-salles@hotmail.com");
 			$this->email->subject("Email Test");
			$this->email->message("Testing the email class.");
				if($this->email->send()) {
					$this->session->set_flashdata("correctFlashData", "Conta criada com sucesso. Verifique o seu email.");
				} else {
					$this->session->set_flashdata("correctFlashData", "Conta criada com sucesso.");
				}
			} else {
				$this->session->set_flashdata("incorrectFlashData", "Ocorreu um erro ao criar a sua conta.");
			}

			
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
			redirect("dashboard");
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
			$this->session->set_flashdata("incorrectFlashData", "O Email não se encontra na base de dados.");
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
			if(!$this->Authentication_model->recoverPassword($data)) {
				$this->session->set_flashdata("incorrectFlashData", "O Email não se encontra na base de dados.");
			} else {
				if ($this->sendEmail(array(
					"Email" => $data["Email"],
					"Subject" => "Recuperação de password",
					"Message" => "No seguimento do seu pedido de recuperação de password, foi gerada uma aleatória. Por favor, altere-a assim que possível.\nPassword: {$data['Password']}"
				))) {
					$this->session->set_flashdata("correctFlashData", "Uma nova password foi enviada para o seu email.");
				} else {
					$this->session->set_flashdata("incorrectFlashData", "Ocorreu um erro. Tente mais tarde.");
				}
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
			$this->session->set_flashdata("incorrectFlashData", "A password inserida não é correta.");
		} else {

			$data = array(
				"Email" => $this->session->userdata("Email"),
				"Password" => $this->input->post("password")
			);

			if ($this->Authentication_model->updatePassword($data)) {
				$this->session->set_flashdata("correctFlashData", "Password alterada com sucesso.");
			} else {
				$this->session->set_flashdata("incorrectFlashData", "Não foi possível alterar a password.");
			}
		}
		redirect("updatePassword");
	}

	private function sendEmail($data) {
		$email = array(
			"protocol" => "smtp",
			"smtp_host" => "mail.dsprojects.pt",
			"smtp_user" => "pint@dsprojects.pt",
			"smtp_pass" => "-Pint2019",
			"smtp_port" => 465,
			"smtp_crypto" => "ssl",
			"mailtype" => "text"
		);

		$this->load->library("email", $email);

		$this->email->from("pint@dsprojects.pt", "My Cards");
		$this->email->to($data["Email"]);

		$this->email->subject($data["Subject"]);
		$this->email->message($data["Message"]);

		return $this->email->send();
	}
}
