<!DOCTYPE html>
<html>

<head data-session='<?php echo json_encode(array(
	"ID_Empresa" => $this->session->userdata("ID_Empresa"),
	"Email" => $this->session->userdata("Email"),
	"Localizacao" => $this->session->userdata("Localizacao"),
	"DataRegisto" => $this->session->userdata("DataRegisto"),
	"Nome" => $this->session->userdata("Nome"),
	"NIF" => $this->session->userdata("NIF"),
	"Dono" => $this->session->userdata("Dono")
)); ?>'>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Titulo -->
	<title><?php echo ucfirst(preg_replace("/(?<!\A)[A-Z]+/", ' $0', $page)); ?> - MyCards</title>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.0/css/mdb.min.css" rel="stylesheet">

	<!-- Core CSS -->
	<link href="<?php echo base_url("assets/css/core.css"); ?>" rel="stylesheet">

	<!-- Page CSS -->
	<link rel="stylesheet" href="<?php echo base_url("assets/css/{$page}.css"); ?>">

	<?php if ($this->uri->segment(1, 0) === "listarCampanha") : ?>
		<link href="<?php echo base_url("assets/css/addons/datatables.min.css"); ?>" rel="stylesheet">
	<?php endif; ?>
</head>

<body style="padding-top: 72px;" class="grey lighten-5">
	<nav class="navbar navbar-expand-md bg-blue navbar-dark fixed-top px-md-5 py-3">
		<?php if ($this->session->userdata("Email") && ($this->session->userdata("Dono") == "0" || $this->session->userdata("Dono") == "1")): ?>
			<button class="navbar-toggler d-inline" role="button" type="button" id="sidebarToggler">
				<i class="fas fa-chevron-right fa-fw"></i>
			</button>
		<?php else : ?>
			<a href="<?php echo base_url(); ?>" class="navbar-brand">MyCards</a>
		<?php endif; ?>
		<button class="navbar-toggler" role="button" type="button" data-toggle="collapse" data-target="#navbar" id="navbarToggler">
			<i class="fas fa-bars fa-fw fa-lg"></i>
		</button>
		<div class="collapse navbar-collapse text-center justify-content-end" id="navbar">
			<ul class="navbar-nav">
				<?php if ($this->session->userdata("Email")) : ?>
				<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url("perfil"); ?>">
							Perfil
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url("authentication/signoff"); ?>">
							Logout
						</a>
					</li>
				<?php else : ?>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url("signin"); ?>">
							Iniciar Sessão
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url("signup"); ?>">
							Criar Conta
						</a>
					</li>
				<?php endif; ?>
			</ul>
		</div>
	</nav>

	<button id="moveUp" type="button" class="btn btn-primary bg-blue rounded-circle p-2 fixed-bottom position-fixed m-4" style="opacity: 0;"><i class="fas fa-chevron-up fa-2x fa-fw"></i></button>

	<?php if ($this->session->userdata("Email")): ?>
		<div class="h-100 position-fixed text-dark grey lighten-3" id="ourNavbar" style="margin-left: -320px;">
			<ul class="list-group">
				<a class="list-group-item bg-transparent rounded-0 border-0 p-3 text-dark text-decoration-none <?php if ($this->uri->segment(1, 0) === "dashboard") : ?>active<?php endif; ?>" href="<?php echo base_url("dashboard"); ?>">
					<i class="fas fa-chart-area fa-fw"></i> Dashboard
				</a>
				<?php if ($this->session->userdata("Dono") == "1"): ?>
				<a class="list-group-item bg-transparent rounded-0 border-0 p-3 <?php if (strpos($this->uri->segment(1, 0), "Empresa") !== FALSE) : ?>active<?php endif; ?>" role="button" data-toggle="collapse" data-target="#empresa">
					<i class="fas fa-building fa-fw"></i> Empresa
					<i class="fas fa-chevron-down float-right fa-fw"></i>
				</a>
				<div class="collapse bg-grey" id="empresa">
					<a class="d-block text-dark text-decoration-none p-3 <?php if ($this->uri->segment(1, 0) === "visualizarEmpresa") : ?>active<?php endif; ?>" href="<?php echo base_url("visualizarEmpresa"); ?>">
						Visualizar empresa
					</a>
					<a class="d-block text-dark text-decoration-none p-3 <?php if ($this->uri->segment(1, 0) === "definicoesEmpresa") : ?>active<?php endif; ?>" href="<?php echo base_url("definicoesEmpresa"); ?>">
						Definições empresa
					</a>
				</div>
				<a class="list-group-item bg-transparent rounded-0 border-0 p-3 text-dark text-decoration-none <?php if ($this->uri->segment(1, 0) === "colaboradores") : ?>active<?php endif; ?>" href="<?php echo base_url("colaboradores"); ?>">
					<i class="fas fa-users fa-fw"></i> Colaboradores
				</a>
				<?php endif; ?>
				<a class="list-group-item bg-transparent rounded-0 border-0 p-3 text-dark text-decoration-none <?php if ($this->uri->segment(1, 0) === "clientes") : ?>active<?php endif; ?>" href="<?php echo base_url("clientes"); ?>">
					<i class="fas fa-users fa-fw"></i> Clientes
				</a>
				<a class="list-group-item bg-transparent rounded-0 border-0 p-3 <?php if (strpos($this->uri->segment(1, 0), "Campanha") !== FALSE) : ?>active<?php endif; ?>" role="button" data-toggle="collapse" data-target="#campanhas">
					<i class="fas fa-bullhorn fa-fw"></i> Campanhas
					<i class="fas fa-chevron-down float-right fa-fw"></i>
				</a>
				<div class="collapse bg-grey" id="campanhas">
					<a class="d-block text-dark text-decoration-none p-3 <?php if ($this->uri->segment(1, 0) === "criarCampanha") : ?>active<?php endif; ?>" href="<?php echo base_url("criarCampanha"); ?>">
						Criar campanha
					</a>
					<a class="d-block text-dark text-decoration-none p-3 <?php if ($this->uri->segment(1, 0) === "listarCampanha") : ?>active<?php endif; ?>" href="<?php echo base_url("listarCampanha"); ?>">
						Listar campanha
					</a>
					<a class="d-block text-dark text-decoration-none p-3 <?php if ($this->uri->segment(1, 0) === "ativarCampanha") : ?>active<?php endif; ?>" href="<?php echo base_url("ativarCampanha"); ?>">
						Ativar campanha
					</a>
				</div>
			</ul>
		</div>
	<?php endif; ?>