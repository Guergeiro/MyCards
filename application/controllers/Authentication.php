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
				if($this->sendEmail(array(
					"Email" => $data["email"],
					"Subject" => "Bem vindo ao MyCards",
					"Message" => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
					<html style="width:100%;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0;">
					 <head> 
					  <meta charset="UTF-8"> 
					  <meta content="width=device-width, initial-scale=1" name="viewport"> 
					  <meta name="x-apple-disable-message-reformatting"> 
					  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
					  <meta content="telephone=no" name="format-detection"> 
					  <title>final?</title> 
					  <!--[if (mso 16)]>
						<style type="text/css">
						a {text-decoration: none;}
						</style>
						<![endif]--> 
					  <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--> 
					  <!--[if !mso]><!-- --> 
					  <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i" rel="stylesheet"> 
					  <!--<![endif]--> 
					  <style type="text/css">
					@media only screen and (max-width:600px) {p, ul li, ol li, a { font-size:17px!important; line-height:150%!important } h1 { font-size:30px!important; text-align:center; line-height:120%!important } h2 { font-size:26px!important; text-align:left; line-height:120%!important } h3 { font-size:20px!important; text-align:left; line-height:120%!important } h1 a { font-size:30px!important; text-align:center } h2 a { font-size:20px!important; text-align:left } h3 a { font-size:20px!important; text-align:left } .es-menu td a { font-size:16px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:16px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:17px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class="gmail-fix"] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:inline-block!important } a.es-button { font-size:14px!important; display:inline-block!important } .es-btn-fw { border-width:10px 0px!important; text-align:center!important } .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0px!important } .es-m-p0r { padding-right:0px!important } .es-m-p0l { padding-left:0px!important } .es-m-p0t { padding-top:0px!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } .es-desk-hidden { display:table-row!important; width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } .es-desk-menu-hidden { display:table-cell!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } }
					#outlook a {
						padding:0;
					}
					.ExternalClass {
						width:100%;
					}
					.ExternalClass,
					.ExternalClass p,
					.ExternalClass span,
					.ExternalClass font,
					.ExternalClass td,
					.ExternalClass div {
						line-height:100%;
					}
					.es-button {
						mso-style-priority:100!important;
						text-decoration:none!important;
						transition:all 100ms ease-in;
					}
					a[x-apple-data-detectors] {
						color:inherit!important;
						text-decoration:none!important;
						font-size:inherit!important;
						font-family:inherit!important;
						font-weight:inherit!important;
						line-height:inherit!important;
					}
					.es-button:hover {
						background:#555555!important;
						border-color:#555555!important;
					}
					.es-desk-hidden {
						display:none;
						float:left;
						overflow:hidden;
						width:0;
						max-height:0;
						line-height:0;
						mso-hide:all;
					}
					.es-button-border:hover a.es-button {
						background:#006ee5!important;
						border-color:#006ee5!important;
					}
					.es-button-border:hover {
						background:#006ee5!important;
						border-color:#006ee5 #006ee5 #006ee5 #006ee5!important;
					}
					</style> 
					 </head> 
					 <body style="width:100%;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0;"> 
					  <div class="es-wrapper-color" style="background-color:#F1F1F1;"> 
					   <!--[if gte mso 9]>
								<v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
									<v:fill type="tile" color="#f1f1f1"></v:fill>
								</v:background>
							<![endif]--> 
					   <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;"> 
						 <tr style="border-collapse:collapse;"> 
						  <td valign="top" style="padding:0;Margin:0;"> 
						   <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;"> 
							 <tr style="border-collapse:collapse;"> 
							  <td align="center" style="padding:0;Margin:0;"> 
							   <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#212121;" width="600" cellspacing="0" cellpadding="0" bgcolor="#212121" align="center"> 
								 <tr style="border-collapse:collapse;"> 
								  <td style="Margin:0;padding-top:40px;padding-bottom:40px;padding-left:40px;padding-right:40px;background-image:url(https://ybewp.stripocdn.email/content/guids/CABINET_85e4431b39e3c4492fca561009cef9b5/images/93491522393929597.png);background-repeat:no-repeat;background-position:left top;" align="left"> 
								   <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
									 <tr style="border-collapse:collapse;"> 
									  <td width="520" valign="top" align="center" style="padding:0;Margin:0;"> 
									   <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
										 <tr style="border-collapse:collapse;"> 
										  <td align="center" style="padding:0;Margin:0;padding-bottom:10px;padding-top:40px;"> <h1 style="Margin:0;line-height:36px;mso-line-height-rule:exactly;font-family:lato, "helvetica neue", helvetica, arial, sans-serif;font-size:30px;font-style:normal;font-weight:bold;color:#FFFFFF;">Bem Vindo</h1> </td> 
										 </tr> 
									   </table> </td> 
									 </tr> 
								   </table> </td> 
								 </tr> 
							   </table> </td> 
							 </tr> 
						   </table> 
						   <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;"> 
							 <tr style="border-collapse:collapse;"> 
							  <td align="center" style="padding:0;Margin:0;"> 
							   <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#f8f9fa" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#F8F9FA;"> 
								 <tr style="border-collapse:collapse;"> 
								  <td align="left" style="padding:0;Margin:0;padding-top:40px;padding-left:40px;padding-right:40px;"> 
								   <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
									 <tr style="border-collapse:collapse;"> 
									  <td width="520" valign="top" align="center" style="padding:0;Margin:0;"> 
									   <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
										 <tr style="border-collapse:collapse;"> 
										  <td class="es-m-txt-c" align="left" style="padding:0;Margin:0;padding-top:5px;padding-bottom:15px;"> <h2 style="Margin:0;line-height:24px;mso-line-height-rule:exactly;font-family:lato, "helvetica neue", helvetica, arial, sans-serif;font-size:20px;font-style:normal;font-weight:bold;color:#212121;">'.$data["nome"].',</h2> </td> 
										 </tr> 
										 <tr style="border-collapse:collapse;"> 
										  <td align="left" style="padding:0;Margin:0;padding-top:10px;padding-bottom:10px;"> <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:15px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:23px;color:#212121;">Obrigado por se registar no <strong>MyCards</strong>.</p><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:15px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:23px;color:#212121;">Estamos contentes com a nossa nova&nbsp;parceria.</p><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:15px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:23px;color:#212121;">As suas informações:</p> 
										   <ul> 
											<li style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:15px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:23px;Margin-bottom:15px;color:#212121;">Email: '.$data["email"].'</li> 
											<li style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:15px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:23px;Margin-bottom:15px;color:#212121;">Nome: '.$data["nome"].'</li> 
											<li style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:15px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:23px;Margin-bottom:15px;color:#212121;">NIF: '.$data["nif"].'</li> 
										   </ul><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:15px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:23px;color:#212121;">Para ativar a sua conta, pressione o botão em baixo.</p> </td> 
										 </tr> 
										 <tr style="border-collapse:collapse;"> 
										  <td align="center" style="padding:10px;Margin:0;"> <span class="es-button-border" style="border-style:solid;border-color:#0056B3;background:#0056B3;border-width:0px;display:inline-block;border-radius:50px;width:auto;"> <a href="http://dsprojects.pt/MyCards/verify/'.md5($data['email']).'" class="es-button" target="_blank" style="mso-style-priority:100 !important;text-decoration:none;transition:all 100ms ease-in;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;font-size:18px;color:#FFFFFF;border-style:solid;border-color:#0056B3;border-width:15px 30px 15px 30px;display:inline-block;background:#0056B3;border-radius:50px;font-weight:bold;font-style:normal;line-height:22px;width:auto;text-align:center;">Ativar Conta</a> </span> </td> 
										 </tr> 
										 <tr style="border-collapse:collapse;"> 
										  <td align="left" style="padding:0;Margin:0;padding-top:10px;padding-bottom:10px;"> <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:15px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:23px;color:#212121;">Caso não funcione, copie e cole este link no seu browser.</p><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:15px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:23px;color:#212121;"><a target="_blank" href="http://dsprojects.pt/MyCards/verify/'.md5($data['email']).'" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;font-size:15px;text-decoration:underline;color:#0056B3;">http://dsprojects.pt/MyCards/verify/".md5($data["email"])."</a></p><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:15px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:23px;color:#212121;"><br></p> </td> 
										 </tr> 
										 <tr style="border-collapse:collapse;"> 
										  <td align="left" style="padding:0;Margin:0;padding-top:10px;padding-bottom:10px;"> <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:15px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:23px;color:#212121;">Relembramos que, apesar da sua conta estar ativa, a sua empresa ainda precisa de ser aprovada pelos administradores.</p> </td> 
										 </tr> 
										 <tr style="border-collapse:collapse;"> 
										  <td align="left" style="padding:0;Margin:0;padding-top:10px;padding-bottom:10px;"> <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:15px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:23px;color:#212121;">Se tiver alguma questão, não hesite em contatar-nos. Ficaremos contentes em ajudar!</p> </td> 
										 </tr> 
										 <tr style="border-collapse:collapse;"> 
										  <td align="left" style="padding:0;Margin:0;padding-top:10px;padding-bottom:10px;"> <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:15px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:23px;color:#212121;">Cumprimentos,</p> </td> 
										 </tr> 
									   </table> </td> 
									 </tr> 
								   </table> </td> 
								 </tr> 
								 <tr style="border-collapse:collapse;"> 
								  <td align="left" style="Margin:0;padding-top:10px;padding-bottom:40px;padding-left:40px;padding-right:40px;"> 
								   <!--[if mso]><table width="520" cellpadding="0"
												cellspacing="0"><tr><td width="40" valign="top"><![endif]--> 
								   <table class="es-left" cellspacing="0" cellpadding="0" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left;"> 
									 <tr style="border-collapse:collapse;"> 
									  <td class="es-m-p0r es-m-p20b" width="40" valign="top" align="center" style="padding:0;Margin:0;"> 
									   <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
										 <tr style="border-collapse:collapse;"> 
										  <td align="left" style="padding:0;Margin:0;"> <img src="https://ybewp.stripocdn.email/content/guids/CABINET_85e4431b39e3c4492fca561009cef9b5/images/29241521207598269.jpg" alt style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;" width="40"></td> 
										 </tr> 
									   </table> </td> 
									 </tr> 
								   </table> 
								   <!--[if mso]></td><td width="20"></td><td width="460" valign="top"><![endif]--> 
								   <table cellspacing="0" cellpadding="0" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
									 <tr style="border-collapse:collapse;"> 
									  <td width="460" align="left" style="padding:0;Margin:0;"> 
									   <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
										 <tr style="border-collapse:collapse;"> 
										  <td align="left" style="padding:0;Margin:0;padding-top:10px;"> <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:21px;color:#222222;"><strong>Breno Salles</strong></p> </td> 
										 </tr> 
										 <tr style="border-collapse:collapse;"> 
										  <td align="left" style="padding:0;Margin:0;"> <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:21px;color:#666666;">CEO | MyCards</p> </td> 
										 </tr> 
									   </table> </td> 
									 </tr> 
								   </table> 
								   <!--[if mso]></td></tr></table><![endif]--> </td> 
								 </tr> 
							   </table> </td> 
							 </tr> 
						   </table> 
						   <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;"> 
							 <tr style="border-collapse:collapse;"> 
							  <td align="center" style="padding:0;Margin:0;"> 
							   <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;" width="600" cellspacing="0" cellpadding="0" align="center" bgcolor="#f8f9fa"> 
								 <tr style="border-collapse:collapse;"> 
								  <td align="left" style="Margin:0;padding-left:20px;padding-right:20px;padding-top:30px;padding-bottom:30px;"> 
								   <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
									 <tr style="border-collapse:collapse;"> 
									  <td width="560" valign="top" align="center" style="padding:0;Margin:0;"> 
									   <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
										 <tr style="border-collapse:collapse;"> 
										  <td class="es-infoblock" align="center" style="padding:0;Margin:0;line-height:14px;font-size:12px;color:#6C757D;"> <a target="_blank" href="http://viewstripo.email/?utm_source=templates&utm_medium=email&utm_campaign=information&utm_content=trigger_newsletter4" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;font-size:12px;text-decoration:underline;color:#6C757D;"> <img src="https://ybewp.stripocdn.email/content/guids/CABINET_303c4a4ab955293dce0e0fb1884eb374/images/82471559253329661.png" alt width="125" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;"> </a> </td> 
										 </tr> 
									   </table> </td> 
									 </tr> 
								   </table> </td> 
								 </tr> 
							   </table> </td> 
							 </tr> 
						   </table> </td> 
						 </tr> 
					   </table> 
					  </div>  
					 </body>
					</html>',
					"AltMessage" => "{$data["nome"]},\nObrigado por se registar no MyCards.\nEstamos contentes com a nossa nova parceria.\nAs suas informações:\n - Nome: {$data['nome']}\n - NIF: {$data['nif']}\nPara ativar a sua conta, clique neste link: http://dsprojects.pt/MyCards/verify/".md5($data["email"])."\nRelembramos que, apesar da sua conta estar ativa, a sua empresa ainda precisa de ser aprovada pelos administradores."
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

	public function verify($md5Email) {
		if($this->Authentication_model->verify($md5Email)) {
			$this->session->set_flashdata("correctFlashData", "Conta ativada com sucesso.");
		} else {
			$this->session->set_flashdata("incorrectFlashData", "Ocorreu um erro ao ativar a sua conta.");
		}
		redirect("signin");
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
		$this->email->set_alt_message($data["AltMessage"]);

		return $this->email->send();
	}
}
