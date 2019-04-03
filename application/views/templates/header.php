<!DOCTYPE <!DOCTYPE html>
<html>

<head>
	<!-- MetaDados -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Titulo -->
	<title><?php echo $title; ?></title>

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
	<link rel="stylesheet" href="<?php echo base_url("assets/css/{$title}.css"); ?>">
</head>

<body>
	<nav class="navbar bg-light navbar-light fixed-top p-3 shadow">
		<button class="navbar-toggler mx-4" role="button" type="button">
			<i class="fas fa-bars"></i>
		</button>
		<div class="justify-content-end">
			<ul class="nav">
				<li class="nav-item ml-1 d-flex align-items-center dropdown">
					<a class="nav-link py-0 text-dark d-md-none" href="<?php echo base_url("notificacoes"); ?>">
						<i class="fas fa-bell fa-fw fa-lg"></i> <span
							class="badge badge-danger ml-n3 align-top rounded-circle">4</span>
					</a>
					<a class="nav-link py-0 text-dark d-none d-md-inline-block" href="#" id="navbarNotifications"
						role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-bell fa-fw fa-lg"></i> <span
							class="badge badge-danger ml-n3 align-top rounded-circle">4</span>
					</a>
					<ul class="list-unstyled dropdown-menu dropdown-menu-right overflow-auto"
						aria-labelledby="navbarNotifications">
						<a class="dropdown-header" href="<?php echo base_url("notificacoes"); ?>">Ver todas as notificações</a>
						<li class="dropdown-item media">
							<img src="avatar/42087367_983983231785555_8792497069429358592_o.jpg"
								class="align-self-center mr-3" alt="" srcset="" width="40" height="40">
							<div class="media-body text-wrap">
								<h5 class="m-0">this is title</h5>
								<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, mollitia?</span>
							</div>
						</li>
					</ul>
				</li>
				<li class="nav-item mr-1 d-flex align-items-center dropdown">
					<a class="nav-link py-0 text-dark d-md-none" href="<?php echo base_url("mensagens"); ?>">
						<i class="fas fa-envelope fa-fw fa-lg"></i> <span
							class="badge badge-danger ml-n3 align-top rounded-circle">4</span>
					</a>
					<a class="nav-link py-0 text-dark d-none d-md-inline-block" href="#" id="navbarMessages"
						role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-envelope fa-fw fa-lg"></i> <span
							class="badge badge-danger ml-n3 align-top rounded-circle">4</span>
					</a>
					<ul class="list-unstyled dropdown-menu dropdown-menu-right overflow-auto"
						aria-labelledby="navbarMessages">
						<a class="dropdown-header" href="<?php echo base_url("mensagens"); ?>">Ver todas as mensagens</a>
						<li class="dropdown-item media">
							<img src="avatar/920983_516047081776703_299333251_o.jpg" class="align-self-center mr-3"
								alt="" srcset="" width="40" height="40">
							<div class="media-body text-wrap">
								<h5 class="m-0">this is title</h5>
								<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint,
									mollitia?</span>
							</div>
						</li>
					</ul>
				</li>
				<li class="nav-item vertical-line bg-dark m-2"></li>
				<li class="nav-item mx-1 dropdown">
					<a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="avatar/18700412_1549755958375924_1739793708868521246_o.jpg" alt="" srcset=""
							width="40" height="40" class="rounded-circle">
						<span class="d-md-inline-block d-none">John Doe</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#"><i class="fas fa-user"></i> Perfil</a>
						<a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Settings</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#"><i class="fas fa-power-off"></i> Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>

	<div class="h-100 position-fixed text-light bg-blue" id="ourNavbar" style="width: 0px; margin-left: -250px;">
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
