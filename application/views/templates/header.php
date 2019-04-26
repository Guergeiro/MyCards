<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo ucfirst($title); ?></title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" rel="stylesheet">

	<!-- Page CSS -->
	<link rel="stylesheet" href="<?php echo base_url("assets/css/{$title}.css"); ?>">

	<!-- Core CSS -->
	<link rel="stylesheet" href="<?php echo base_url("assets/css/core.css"); ?>">

	<!-- FontAwesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body>

	<!-- Begining of Full Page Wrapper -->
	<div class="wrapper">

		<!-- Begining of Header Wrapper -->
		<div class="wrapper-header">

			<!-- Begining of NavBar -->
			<nav class="navbar navbar-expand navbar-light bg-white topbar static-top shadow">

				<!-- Begining of Fluid Container -->
				<div class="container-fluid">

					<!-- Toggle Btn - Targets the SideBar-->
					<button id="btnMenu" class="btn btn-link" onclick="showSideMenu()">
						<i class="fa fa-bars fa-lg text-primary"></i>
					</button>

					<!-- Begining of Inner Element of NavBar -->
					<div class="nav-inner justify-content-end">

						<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
							<ul class="navbar-nav ml-auto">

								<!-- Nav Item - Alerts -->
								<li class="nav-item dropdown no-arrow mt-3">
									<a class="nav-link " href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-bell fa-fw fa-lg text-muted"></i>
										<!-- Counter - Alerts -->
										<span class="badge badge-danger badge-counter ml-n3 align-top rounded-circle">3+</span>
									</a>
									<!-- Dropdown - Alerts -->
									<div id="dropList" class="dropdown-menu-right dropdown-menu shadow animated--grow-in" aria-labelledby="alertsDropdown">
										<h6 class="dropdown-header font-weight-bold">
											Alerts Center
										</h6>
										<a class="dropdown-item d-flex align-items-center" href="#">
											<div class="mr-2">
												<div class="icon-circle">
													<i class="fas fa-file-alt text-primary fa-lg mr-2"></i>
												</div>
											</div>
											<div>
												<div class="small text-gray-500 font-weight-bold">December 12, 2019</div>
												<div class="text-truncate">A new monthly report is ready to download!
												</div>
											</div>
										</a>
										<a class="dropdown-item text-center small text-gray-500" href="#">Carregar
											Alerts</a>
									</div>
								</li>


								<!-- Nav Item - Messages -->
								<li class="nav-item dropdown no-arrow mt-3">
									<a class="nav-link " href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-envelope fa-fw fa-lg text-muted"></i>
										<!-- Counter - Messages -->
										<span class="badge badge-danger badge-counter ml-n3 align-top rounded-circle">7+</span>
									</a>
									<!-- Dropdown - Messages -->
									<div id="dropList-msg" class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
										<h6 class="dropdown-header font-weight-bold">
											Message Center
										</h6>
										<a class="dropdown-item d-flex align-items-center" href="#">
											<div class="dropdown-list-image mr-2">
												<img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
												<div class="status-indicator bg-success"></div>
											</div>
											<div class="font-weight-bold">
												<div class="text-truncate">Hi there! I am wondering if you can help me
													with
													a
													problem I've been having.</div>
												<div class="small text-gray-500">Emily Fowler · 58m</div>
											</div>
										</a>
										<a class="dropdown-item text-center small text-gray-500" href="#">Carregar Mais
											Mensagens</a>
									</div>
								</li>

								<li class="nav-item dropdown">
									<a class="nav-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<div id="userName" class="mr-2 d-none d-inline text-gray-600 ">Valerie Luna
											<!-- USERNAME -->
										</div>
										<img id="imgProfile" class="img-profile rounded-circle " src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
									</a>
									<!-- Dropdown - User Information -->
									<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
										<a class="dropdown-item" href="#">
											<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
											Definições de Perfil
										</a>
										<a class="dropdown-item" href="#">
											<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
											Plano Comercial
										</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
											<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
											Logout
										</a>
									</div>
								</li>
							</ul>
						</div>

					</div>
					<!-- Ending of Inner Element of NavBar -->

				</div>
				<!-- Ending of Fluid Container -->

			</nav>
			<!-- Ending of the Navbar -->

		</div>
		<!-- Ending of Header Wrapper -->

		<!-- Begining of Body Wrapper -->
		<div class="wrapper-body">

			<!-- Begining of SideMenu -->
			<div class="nav-side-menu position-absolute" id="sidebarMenu">

				<!-- Begining of Menu-List -->
				<div class="menu-list">

					<!-- Begining of Unordered List Side-Menu -->
					<ul id="menu-content" class="menu-content">

						<!-- Begining List-Element DashBoard -->
						<li>
							<a href="#">
								<i class="fa fa-chart-area fa-lg"></i> Dashboard
							</a>
						</li>
						<!-- Ending List-Element DashBoard -->

						<!-- Begining List-Element Empresa -->
						<li data-toggle="collapse" data-target="#empresa" class="collapsed active">
							<a href="#"><i class="fa fa-building fa-lg"></i> Empresa <span class="arrow"></span></a>
						</li>
						<ul class="sub-menu collapse" id="empresa">
							<li class="active"><a href="#">Definições Empresariais</a></li>
							<li><a href="#">Rating Empresarial</a></li>
						</ul>
						<!-- Ending List-Element Empresa -->

						<!-- Begining List-Element Clientes -->
						<li>
							<a href="#">
								<i class="fa fa-users fa-lg"></i> Clientes
							</a>
						</li>
						<!-- Ending List-Element Clientes -->

						<!-- Begining List-Element Campanhas -->
						<li data-toggle="collapse" data-target="#campanhas" class="collapsed">
							<a href="#"><i class="fa fa-file-contract fa-lg"></i> Campanhas <span class="arrow"></span></a>
						</li>
						<ul class="sub-menu collapse" id="campanhas">
							<li>Criar Campanhas</li>
							<li>Listar Campanhas</li>
							<li>Ativar Campanha</li>
						</ul>
						<!-- Ending List-Element Campanhas -->

						<!-- Begining List-Element Reportings -->
						<li>
							<a href="#">
								<i class="fa fa-users fa-lg"></i> Reportings
							</a>
						</li>
						<!-- Ending List-Element Reportings -->

						<!-- Begining List-Element Profile -->
						<li data-toggle="collapse" data-target="#profile" class="collapsed">
							<a href="#"><i class="fa fa-file-contract fa-lg"></i> Profile <span class="arrow"></span></a>
						</li>
						<ul class="sub-menu collapse" id="profile">
							<li>Definições de Perfil</li>
							<li>Plano Comerical</li>
						</ul>
						<!-- Ending List-Element Profile -->

					</ul>
					<!-- Ending of Unordered List Side-Menu -->

				</div>
				<!-- Ending of Menu-List -->

			</div>
			<!-- Ending of SideMenu -->

		</div>
		<!-- Ending of Body Wrapper-->

	</div>
	<!-- Ending of Wrapper -->