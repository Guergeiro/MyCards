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
                "rules" => "required|trim|valid_email",
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
                "Email" => $this->input->post("email", true),
                "Password" => $this->input->post("password", true)
            );

            $result = $this->Authentication_model->signin($data);

            if ($result == "email") {
                $this->session->set_flashdata("incorrectFlashData", "Email ou Password errados.");
                redirect("signin");
            } elseif ($result == "ativo") {
                $data["CodigoAtivacao"] = $this->generateRandomChars(256);
                if ($this->sendEmail(array(
                    "Email" => $data["Email"],
                    "Subject" => "Verificação de conta",
                    "Message" => "No seguimento da sua tentativa de acesso, para ativar a sua conta, clique neste link: ".base_url()."verify/{$data["CodigoAtivacao"]}\nRelembramos que, apesar da sua conta estar ativa, a sua empresa ainda precisa de ser aprovada pelos administradores."
                ))) {
                    $this->Authentication_model->codigoCliente($data);
                    $this->session->set_flashdata("incorrectFlashData", "Conta não ativa. Reenviado email de confirmação.");
                } else {
                    $this->session->set_flashdata("incorrectFlashData", "Conta não ativa. Contate o suporte.");
                }
                redirect("signin");
            } else {
                unset($result[0]["Password"]);
                $this->session->set_userdata($result[0]);
                redirect("dashboard");
            }
        }
    }

    public function signin_admin()
    {
        $config = array(
            array(
                "field" => "username",
                "label" => "username",
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
            $this->session->set_flashdata("FlashMessage", "<div class=\"col-md-4 offset-md-4 text-center\"><div class=\"alert alert-danger\">Por Favor, preencha todos os campos.</div></div>");
        } else {
            $data = array(
                "Username" => $this->input->post("username", true),
                "Password" => $this->input->post("password", true)
            );
            $result = $this->Authentication_model->signin_admin($data);
            if ($result) {
                unset($result[0]["Password"]);
                $this->session->set_userdata($result[0]);
            } else {
                $this->session->set_flashdata("FlashMessage", "<div class=\"col-md-4 offset-md-4 text-center\"><div class=\"alert alert-danger\">Utilizador ou Password errados.</div></div>");
            }
        }
        redirect("admin");
    }

    public function signup_admin()
    {
        $config = array(
            array(
                "field" => "username",
                "label" => "username",
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
            $this->session->set_flashdata("FlashMessage", "<div class=\"col-12 text-center\"><div class=\"alert alert-danger\">Por Favor, preencha todos os campos.</div></div>");
        } else {
            $data = array(
                "Username" => $this->input->post("username", true),
                "Password" => $this->input->post("password", true)
            );
            if ($this->Authentication_model->signup_admin($data)) {
                $this->session->set_flashdata("FlashMessage", "<div class=\"col-12 text-center\"><div class=\"alert alert-success\">Admin atualizado.</div></div>");
            } else {
                $this->session->set_flashdata("FlashMessage", "<div class=\"col-12 text-center\"><div class=\"alert alert-danger\">Erro ao criar admin.</div></div>");
            }
        }
        redirect("admin");
    }

    public function colaborador()
    {
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
                "Nome" => $this->input->post("nome", true),
                "CodigoAcesso" => $this->input->post("codigoAcesso", true),
                "ID_Empresa" => $this->session->userdata("ID_Empresa", true)
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
                "rules" => "required|trim|is_unique[Empresas.Email]|valid_email",
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
            ),
            array(
                "field" => "areainteresse",
                "rules" => "required|trim"
            ),
            array(
                "field" => "localizacao",
                "rules" => "required|trim"
            )
        );

        $this->form_validation->set_rules($config);

        if (!($this->form_validation->run())) {
            $this->session->set_flashdata("incorrectFlashData", "O Email desejado não se encontra disponível.");
        } else {
            $data = array(
                "Email" => $this->input->post("email", true),
                "Password" => $this->input->post("password", true),
                "Nome" => $this->input->post("nome", true),
                "Nif" => $this->input->post("nif", true),
                "AreaInteresse" => $this->input->post("areainteresse", true),
                "Localizacao" => $this->input->post("localizacao", true),
                "CodigoAtivacao" => $this->generateRandomChars(256)
            );

            if ($this->Authentication_model->signup($data)) {
                if ($this->sendEmail(array(
                    "Email" => $data["Email"],
                    "Subject" => "Bem vindo ao MyCards",
                    "Message" => "{$data["Nome"]},\nObrigado por se registar no MyCards.\nEstamos contentes com a nossa nova parceria.\nAs suas informações:\n - Nome: {$data['Nome']}\n - NIF: {$data['Nif']}\nPara ativar a sua conta, clique neste link: ".base_url()."verify/{$data["CodigoAtivacao"]}\nRelembramos que, apesar da sua conta estar ativa, a sua empresa ainda precisa de ser aprovada pelos administradores."
                ))) {
                    $this->session->set_flashdata("correctFlashData", "Conta criada com sucesso. Verifique o seu email.");
                } else {
                    $this->session->set_flashdata("correctFlashData", "Conta criada com sucesso.");
                }
            } else {
                $this->session->set_flashdata("incorrectFlashData", "Ocorreu um erro ao criar a sua conta.");
            }
        }
        redirect("signup");
    }

    public function signup_cliente()
    {
        $data = array(
            "Email" => $this->input->post("email", true),
            "Password" => $this->input->post("password", true),
            "PrimeiroNome" => $this->input->post("primeironome", true),
            "UltimoNome" => $this->input->post("ultimonome", true),
            "DataNascimento" => $this->input->post("datanascimento", true),
            "Localizacao" => $this->input->post("localizacao", true),
            "Preferencias" => $this->input->post("preferencias", true),
            "Notificacoes" => $this->input->post("notificacoes", true),
            "CodigoAtivacao" => $this->generateRandomChars(5)
        );

        if ($this->Authentication_model->signup_cliente($data)) {
            if ($this->sendEmail(array(
                "Email" => $data["Email"],
                "Subject" => "Bem vindo ao MyCards",
                "Message" => "{$data["PrimeiroNome"]} {$data["UltimoNome"]},\nObrigado por se registar no MyCards.\nEstamos contentes com a nossa nova parceria.\nAs suas informações:\n - Nome: {$data['PrimeiroNome']} {$data["UltimoNome"]}\nPara ativar a sua conta, utilize este código: {$data["CodigoAtivacao"]}"
            ))) {
                $data = array(
                    "status" => "true",
                    "message" => "Conta criada com sucesso. Verifique o seu email."
                );
                echo json_encode($data);
            } else {
                $data = array(
                    "status" => "true",
                    "message" => "Conta criada com sucesso."
                );
                echo json_encode($data);
            }
        } else {
            $data = array(
                "status" => "false",
                "message" => "Ocorreu um erro ao criar a conta."
            );
            echo json_encode($data);
        }
    }

    public function signin_cliente()
    {
        $info = array(
            "Email" => $this->input->post("email", true),
            "Password" => $this->input->post("password", true)
        );

        $result = $this->Authentication_model->signin_cliente($info);

        if ($result == "email") {
            $data = array(
                "status" => "false",
                "message" => "Email ou Password errados."
            );
            echo json_encode($data);
        } elseif ($result == "ativo") {
            $info["CodigoAtivacao"] = $this->generateRandomChars(5);
            if ($this->sendEmail(array(
                "Email" => $info["Email"],
                "Subject" => "Verificação de conta",
                "Message" => "No seguimento da sua tentativa de acesso, para ativar a sua conta, utilize este código: {$info["CodigoAtivacao"]}"
            ))) {
                $this->Authentication_model->codigoCliente($info);
                $data = array(
                "status" => "false",
                "message" => "Conta não ativa. Reenviado email de confirmação."
            );
                echo json_encode($data);
            } else {
                $data = array(
                "status" => "false",
                "message" => "Conta não ativa. Contate o suporte."
            );
                echo json_encode($data);
            }
        } else {
            unset($result[0]["Password"]);
            $data = array(
                "status" => "true",
                "message" => $result[0]
            );
            echo json_encode($data);
        }
    }

    public function signoff()
    {
        $this->session->sess_destroy();
        redirect();
    }

    public function recoverPassword_cliente()
    {
        $data = array(
            "Email" => $this->input->post("email", true),
            "Password" => $this->generateRandomChars(16)
        );
        if (!$this->Authentication_model->recoverPassword_cliente($data)) {
            $data = array(
                "status" => "false",
                "message" => "O Email não se encontra na base de dados."
            );
            echo json_encode($data);
        } else {
            if ($this->sendEmail(array(
                "Email" => $data["Email"],
                "Subject" => "Recuperação de password",
                "Message" => "No seguimento do seu pedido de recuperação de password, foi gerada uma aleatória. Por favor, altere-a assim que possível.\nPassword: {$data['Password']}"
            ))) {
                $data = array(
                "status" => "true",
                "message" => "Uma nova password foi enviada para o seu email"
            );
                echo json_encode($data);
            }
        }
    }

    public function updatePassword_cliente()
    {
        $data = array(
            "Email" => $this->input->post("email", true),
            "Prepassword" => $this->input->post("prepassword", true),
            "Password" => $this->input->post("password", true)
        );

        if ($this->Authentication_model->updatePassword_cliente($data)) {
            $data = array(
                "status" => "true",
                "message" => "Password alterada com sucesso."
            );
            echo json_encode($data);
        } else {
            $data = array(
                "status" => "false",
                "message" => "Não foi possível alterar a password"
            );
            echo json_encode($data);
        }
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
            $data = array(
                "Email" => $this->input->post("email", true),
                "Password" => $this->generateRandomChars(16)
            );
            if (!$this->Authentication_model->recoverPassword($data)) {
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
                "Prepassword" => $this->input->post("prepassword", true),
                "Password" => $this->input->post("password", true)
            );

            if ($this->Authentication_model->updatePassword($data)) {
                $this->session->set_flashdata("segurancaFlashData", "<div class=\"col-12\"><div class=\"alert alert-success\">Password alterada com sucesso.</div></div>");
            } else {
                $this->session->set_flashdata("segurancaFlashData", "<div class=\"col-12\"><div class=\"alert alert-danger\">Não foi possível alterar a password.</div></div>");
            }
        }
        redirect("definicoesEmpresa");
    }

    public function verify($codigoAtivacao)
    {
        if ($this->Authentication_model->verify($codigoAtivacao)) {
            $this->session->set_flashdata("correctFlashData", "Conta ativada com sucesso.");
        } else {
            $this->session->set_flashdata("incorrectFlashData", "Ocorreu um erro ao ativar a sua conta.");
        }
        redirect("signin");
    }

    public function activate_cliente()
    {
        $data = array(
            "Email" => $this->input->post("email", true),
            "Password" => $this->input->post("password", true),
            "CodigoAtivacao" => $this->input->post("codigoativacao", true)
        );
        $return = array(
            "status" => "",
            "message" => ""
        );
        if ($this->Authentication_model->activate_cliente($data)) {
            $return["status"] = "true";
            $return["message"] = "Conta ativada com sucesso.";
        } else {
            $return["status"] = "false";
            $return["message"] = "Ocorreu um erro ao ativar a sua conta";
        }
        echo json_encode($return);
    }

    private function generateRandomChars($tamanho)
    {
        $alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
        $password = array();
        $alpha_length = strlen($alphabet) - 1;
        for ($i = 0; $i < $tamanho; $i++) {
            $n = mt_rand(0, $alpha_length);
            $password[] = $alphabet[$n];
        }
        return implode($password);
    }

    private function sendEmail($data)
    {
        $email = array(
            "protocol" => "smtp",
            "smtp_host" => "mycards.dsprojects.pt",
            "smtp_user" => "support@mycards.dsprojects.pt",
            "smtp_pass" => "-Pint2019",
            "smtp_port" => 465,
            "smtp_crypto" => "ssl",
            "mailtype" => "text"
        );

        $this->load->library("email", $email);

        $this->email->from("support@mycards.dsprojects.pt", "My Cards");
        $this->email->to($data["Email"]);

        $this->email->subject($data["Subject"]);
        $this->email->message($data["Message"]);

        return $this->email->send();
    }
}
