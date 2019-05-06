<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo ucfirst($title); ?></title>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.0/css/mdb.min.css" rel="stylesheet">

	<!-- Page CSS -->
	<link rel="stylesheet" href="<?php echo base_url("assets/css/{$title}.css"); ?>">
	<!-- Core CSS -->
	<link rel="stylesheet" href="<?php echo base_url("assets/css/core.css"); ?>">

</head>

<body style="padding-top: 60px;" class="grey lighten-5">
	<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top py-3">
		<button class="navbar-toggler d-inline" role="button" type="button" id="sidebarToggler">
			<i class="fas fa-chevron-right fa-fw"></i>
		</button>
		<button class="navbar-toggler" role="button" type="button" data-toggle="collapse" data-target="#navbar" id="navbarToggler">
			<i class="fas fa-bars fa-fw"></i>
		</button>
		<div class="collapse navbar-collapse text-center justify-content-end" id="navbar">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link py-md-0" href="<?php echo base_url("notificacoes"); ?>">
						<i class="fas fa-bell fa-fw fa-lg"></i>
						<span class="badge badge-danger ml-n3 align-top rounded-circle">4</span>
						<span class="d-md-none">Notificações</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link py-md-0" href="<?php echo base_url("mensagens"); ?>">
						<i class="fas fa-envelope fa-fw fa-lg"></i>
						<span class="badge badge-danger ml-n3 align-top rounded-circle">4</span>
						<span class="d-md-none">Mensangens</span>
					</a>
				</li>
				<li class="nav-item d-inline-block dropdown">
					<a class="nav-link dropdown-toggle py-md-0" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="<?php echo base_url('assets/avatar/920983_516047081776703_299333251_o.jpg'); ?>" alt="avatar_img" srcset="" width="24" height="24" class="rounded-circle">
						<span>John Doe</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?php echo base_url("perfil"); ?>"><i class="fas fa-user fa-fw"></i> Perfil</a>
						<a class="dropdown-item" href="<?php echo base_url("definicoes"); ?>"><i class="fas fa-cog fa-fw"></i> Definições</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo base_url("logout"); ?>"><i class="fas fa-power-off fa-fw"></i> Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>

	<div class="h-100 position-fixed text-dark grey lighten-3" id="ourNavbar" style="margin-left: -320px;">
		<ul class="list-group">
			<a class="list-group-item bg-transparent rounded-0 border-0 p-3 text-dark text-decoration-none active" href="<?php echo base_url("dashboard"); ?>">
				<i class="fas fa-chart-area fa-fw"></i> Dashboard
			</a>
			<a class="list-group-item bg-transparent rounded-0 border-0 p-3" role="button" data-toggle="collapse" data-target="#empresa">
				<i class="fas fa-building fa-fw"></i> Empresa
				<i class="fas fa-chevron-down float-right fa-fw"></i>
			</a>
			<div class="collapse bg-grey" id="empresa">
				<a class="d-block text-dark text-decoration-none p-3" href="<?php echo base_url("visualizarEmpresa"); ?>">
					Visualizar empresa
				</a>
				<a class="d-block text-dark text-decoration-none p-3" href="<?php echo base_url("definicoesEmpresa"); ?>">
					Definições empresa
				</a>
			</div>
			<a class="list-group-item bg-transparent rounded-0 border-0 p-3" role="button" data-toggle="collapse" data-target="#colaboradores">
				<i class="fas fa-user-tie fa-fw"></i> Colaboradores
				<i class="fas fa-chevron-down float-right fa-fw"></i>
			</a>
			<div class="collapse bg-grey" id="colaboradores">
				<a class="d-block text-dark text-decoration-none p-3" href="<?php echo base_url("visualizarColaboradores"); ?>">
					Visualizar colaboradores
				</a>
				<a class="d-block text-dark text-decoration-none p-3" href="<?php echo base_url("definicoesColaboradores"); ?>">
					Definições colaboradores
				</a>
			</div>
			<a class="list-group-item bg-transparent rounded-0 border-0 p-3 text-dark text-decoration-none" href="<?php echo base_url("clientes"); ?>">
				<i class="fas fa-users fa-fw"></i> Clientes
			</a>
			<a class="list-group-item bg-transparent rounded-0 border-0 p-3" role="button" data-toggle="collapse" data-target="#campanhas">
				<i class="fas fa-bullhorn fa-fw"></i> Campanhas
				<i class="fas fa-chevron-down float-right fa-fw"></i>
			</a>
			<div class="collapse bg-grey" id="campanhas">
				<a class="d-block text-dark text-decoration-none p-3" href="<?php echo base_url("criarCampanha"); ?>">
					Criar campanha
				</a>
				<a class="d-block text-dark text-decoration-none p-3" href="<?php echo base_url("listarCampanha"); ?>">
					Listar campanha
				</a>
				<a class="d-block text-dark text-decoration-none p-3" href="<?php echo base_url("ativarCampanha"); ?>">
					Ativar campanha
				</a>
			</div>
		</ul>
	</div>