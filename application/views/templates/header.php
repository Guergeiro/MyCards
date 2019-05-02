<!DOCTYPE <!DOCTYPE html>
<html>

<head>
	<!-- MetaDados -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Titulo -->
	<title><?php echo ucfirst($page); ?></title>

	<!-- Boostrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- FontAwesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
		integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<!-- Core CSS -->
	<link href="<?php echo base_url("assets/css/core.css"); ?>" rel="stylesheet">

	<!-- Page CSS -->
	<link rel="stylesheet" href="<?php echo base_url("assets/css/{$page}.css"); ?>">
</head>

<body>
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
					<a class="nav-link" href="<?php echo base_url("notificacoes"); ?>">
						<i class="fas fa-bell fa-fw fa-lg"></i>
						<span class="badge badge-danger ml-n3 align-top rounded-circle">4</span>
						<span class="d-md-none">Notificações</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url("mensagens"); ?>">
						<i class="fas fa-envelope fa-fw fa-lg"></i>
						<span class="badge badge-danger ml-n3 align-top rounded-circle">4</span>
						<span class="d-md-none">Mensangens</span>
					</a>
				</li>
				<li class="nav-item d-inline-block dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="<?php echo base_url('assets/avatar/920983_516047081776703_299333251_o.jpg'); ?>" alt="avatar_img" srcset="" width="24" height="24" class="rounded-circle">
						<span>John Doe</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#"><i class="fas fa-user fa-fw"></i> Perfil</a>
						<a class="dropdown-item" href="#"><i class="fas fa-cog fa-fw"></i> Definições</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#"><i class="fas fa-power-off fa-fw"></i> Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>

	<div class="h-100 position-fixed text-light bg-blue" id="ourNavbar" style="margin-left: -320px;">
		<ul class="list-group">
			<a class="list-group-item bg-transparent rounded-0 border-top-0 border-bottom-0 p-3 text-light text-decoration-none active"
				href="#">
				<i class="fas fa-chart-area"></i> Dashboard
			</a>
			<a class="list-group-item bg-transparent rounded-0 border-top-0 border-bottom-0 p-3" role="button"
				data-toggle="collapse" data-target="#empresa">
				<i class="fas fa-building"></i> Empresa
				<i class="fas fa-chevron-down float-right"></i>
			</a>
			<div class="collapse bg-primary" id="empresa">
				<a class="d-block text-light text-decoration-none p-3" href="#">
					Visualizar empresa
				</a>
				<a class="d-block text-light text-decoration-none p-3" href="#">
					Definições empresa
				</a>
			</div>
			<a class="list-group-item bg-transparent rounded-0 border-top-0 border-bottom-0 p-3" role="button"
				data-toggle="collapse" data-target="#colaboradores">
				<i class="fas fa-user-tie"></i> Colaboradores
				<i class="fas fa-chevron-down float-right"></i>
			</a>
			<div class="collapse bg-primary" id="colaboradores">
				<a class="d-block text-light text-decoration-none p-3" href="#">
					Visualizar colaboradores
				</a>
				<a class="d-block text-light text-decoration-none p-3" href="#">
					Definições colaboradores
				</a>
			</div>
			<a class="list-group-item bg-transparent rounded-0 border-top-0 border-bottom-0 p-3 text-light text-decoration-none"
				href="#">
				<i class="fas fa-users"></i> Clientes
			</a>
			<a class="list-group-item bg-transparent rounded-0 border-top-0 border-bottom-0 p-3" role="button"
				data-toggle="collapse" data-target="#campanhas">
				<i class="fas fa-bullhorn"></i> Campanhas
				<i class="fas fa-chevron-down float-right"></i>
			</a>
			<div class="collapse bg-primary" id="campanhas">
				<a class="d-block text-light text-decoration-none p-3" href="#">
					Criar campanha
				</a>
				<a class="d-block text-light text-decoration-none p-3" href="#">
					Listar campanha
				</a>
				<a class="d-block text-light text-decoration-none p-3" href="#">
					Ativar campanha
				</a>
			</div>
		</ul>
	</div>
