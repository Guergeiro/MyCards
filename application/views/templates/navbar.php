<nav class="navbar navbar-expand bg-blue navbar-dark fixed-top py-3">
	<button class="navbar-toggler d-inline" role="button" type="button" id="sidebarToggler">
		<i class="fas fa-chevron-right fa-fw"></i>
	</button>
	<button class="navbar-toggler" role="button" type="button" data-toggle="collapse" data-target="#navbar"
		id="navbarToggler">
		<i class="fas fa-bars fa-fw fa-lg"></i>
	</button>
	<div class="collapse navbar-collapse text-center justify-content-end" id="navbar">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url("logout"); ?>">
					<i class="fas fa-power-off fa-fw fa-lg"></i>
					<span class="d-md-none">Logout</span>
				</a>
			</li>
		</ul>
	</div>
</nav>

<div class="h-100 position-fixed text-dark grey lighten-3" id="ourNavbar" style="margin-left: -320px;">
	<ul class="list-group">
		<a class="list-group-item bg-transparent rounded-0 border-0 p-3 text-dark text-decoration-none <?php if($this->uri->segment(1,0) === "dashboard"): ?>active<?php endif; ?>"
			href="<?php echo base_url("dashboard"); ?>">
			<i class="fas fa-chart-area fa-fw"></i> Dashboard
		</a>
		<a class="list-group-item bg-transparent rounded-0 border-0 p-3 <?php if(strpos($this->uri->segment(1,0), "Empresa") !== FALSE): ?>active<?php endif; ?>"
			role="button" data-toggle="collapse" data-target="#empresa">
			<i class="fas fa-building fa-fw"></i> Empresa
			<i class="fas fa-chevron-down float-right fa-fw"></i>
		</a>
		<div class="collapse bg-grey" id="empresa">
			<a class="d-block text-dark text-decoration-none p-3 <?php if($this->uri->segment(1,0) === "visualizarEmpresa"): ?>active<?php endif; ?>"
				href="<?php echo base_url("visualizarEmpresa"); ?>">
				Visualizar empresa
			</a>
			<a class="d-block text-dark text-decoration-none p-3 <?php if($this->uri->segment(1,0) === "definicoesEmpresa"): ?>active<?php endif; ?>"
				href="<?php echo base_url("definicoesEmpresa"); ?>">
				Definições empresa
			</a>
		</div>
		<a class="list-group-item bg-transparent rounded-0 border-0 p-3 text-dark text-decoration-none <?php if($this->uri->segment(1,0) === "colaboradores"): ?>active<?php endif; ?>"
			href="<?php echo base_url("colaboradores"); ?>">
			<i class="fas fa-users fa-fw"></i> Colaboradores
		</a>
		<a class="list-group-item bg-transparent rounded-0 border-0 p-3 text-dark text-decoration-none <?php if($this->uri->segment(1,0) === "clientes"): ?>active<?php endif; ?>"
			href="<?php echo base_url("clientes"); ?>">
			<i class="fas fa-users fa-fw"></i> Clientes
		</a>
		<a class="list-group-item bg-transparent rounded-0 border-0 p-3 <?php if(strpos($this->uri->segment(1,0), "Campanha") !== FALSE): ?>active<?php endif; ?>"
			role="button" data-toggle="collapse" data-target="#campanhas">
			<i class="fas fa-bullhorn fa-fw"></i> Campanhas
			<i class="fas fa-chevron-down float-right fa-fw"></i>
		</a>
		<div class="collapse bg-grey" id="campanhas">
			<a class="d-block text-dark text-decoration-none p-3 <?php if($this->uri->segment(1,0) === "criarCampanha"): ?>active<?php endif; ?>"
				href="<?php echo base_url("criarCampanha"); ?>">
				Criar campanha
			</a>
			<a class="d-block text-dark text-decoration-none p-3 <?php if($this->uri->segment(1,0) === "listarCampanha"): ?>active<?php endif; ?>"
				href="<?php echo base_url("listarCampanha"); ?>">
				Listar campanha
			</a>
			<a class="d-block text-dark text-decoration-none p-3 <?php if($this->uri->segment(1,0) === "ativarCampanha"): ?>active<?php endif; ?>"
				href="<?php echo base_url("ativarCampanha"); ?>">
				Ativar campanha
			</a>
		</div>
	</ul>
</div>
