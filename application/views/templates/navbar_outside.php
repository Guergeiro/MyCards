<nav class="navbar navbar-expand-md bg-blue navbar-dark fixed-top px-md-5 py-3">
	<a href="<?php echo base_url(); ?>" class="navbar-brand">MyCards</a>
	<button class="navbar-toggler" role="button" type="button" data-toggle="collapse" data-target="#navbar"
		id="navbarToggler">
		<i class="fas fa-bars fa-fw fa-lg"></i>
	</button>
	<div class="collapse navbar-collapse text-center justify-content-end" id="navbar">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url("login"); ?>">
					Iniciar Sessão
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url("signin"); ?>">
					Criar Conta
				</a>
			</li>
		</ul>
	</div>
</nav>