<!DOCTYPE html>
<html>

<head data-session='<?php echo json_encode(array(
    "Username" => $this->session->userdata("Username")
)); ?>'>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Titulo -->
	<title><?php echo ucfirst(preg_replace("/(?<!\A)[A-Z]+/", ' $0', $page)); ?> - MyCards</title>

	<noscript>
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

		<!-- Bootstrap core CSS -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"
			rel="stylesheet">

		<!-- Material Design Bootstrap -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.0/css/mdb.min.css" rel="stylesheet">

		<!-- Core CSS -->
		<link href="<?php echo base_url("assets/css/core.css"); ?>" rel="stylesheet">

		<!-- Page CSS -->
		<link rel="stylesheet" href="<?php echo base_url("assets/css/{$page}.css"); ?>">
	</noscript>
</head>

<body style="padding-top: 72px;overflow:hidden;" class="grey lighten-5">
	<div id="loader"
		style="position:fixed;background-color:#0056b3;overflow:hidden;top:0;left:0;z-index:1080;width:100vw;height:100vh;text-align:center;align-items:center;justify-content:center;display:flex;display:-ms-flexbox;transition: all 1s;opacity:1;">
		<div style="display: inline-block;width: 2rem;height: 2rem;vertical-align: text-bottom;border: .25em solid currentColor;border-right-color: transparent;border-radius: 50%;-webkit-animation: spinner-border .75s linear infinite;animation: spinner-border .75s linear infinite;color:#e0e0e0;"
			role="status">
		</div>
	</div>
	<nav class="navbar navbar-expand-md bg-blue navbar-dark fixed-top px-md-5 py-3">
		<a href="<?php echo base_url(); ?>" class="navbar-brand">
			<img src="<?php echo base_url("assets/imgs/mycards_withoutname.png"); ?>" alt="mycards_withoutname"
				class="pb-1" style="width: auto; height: 26px;">
			MyCards
		</a>
		<?php if ($this->session->userdata("Username")) : ?>
		<button class="navbar-toggler" role="button" type="button" data-toggle="collapse" data-target="#navbar"
			id="navbarToggler">
			<i class="fas fa-bars fa-fw fa-lg"></i>
		</button>
		<div class="collapse navbar-collapse text-center" id="navbar">
			<ul class="navbar-nav ml-auto">
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url("authentication/signoff"); ?>">
						Logout
					</a>
				</li>
			</ul>
		</div>
		<?php endif; ?>
	</nav>
<main class="container my-3 py-3 <?php if (!$this->session->userdata("Username")) :?>d-flex align-items-center justify-content-center<?php endif;?>">
		<?php if (!$this->session->userdata("Username")) :?>
		<?php echo form_open("authentication/signin_admin", "class=\"form-row\" onsubmit=\"return validation(this);\""); ?>
		<?php if ($this->session->flashdata("FlashMessage")): ?>
		<?php echo $this->session->flashdata("FlashMessage") ?>
		<?php endif; ?>
		<div class="col-12 text-center">
			<img src="<?php echo base_url("assets/imgs/mycards_withname.png"); ?>" class="img-fluid"
				alt="mycards_withname">
		</div>
		<div class="col-12 text-center">
			<h3>Admin</h3>
		</div>
		<div class="col-md-4 offset-md-4">
			<div class="md-form md-outline">
				<i class="fas fa-user prefix fa-fw"></i>
				<input type="text" id="username" name="username" class="form-control">
				<label for="username">Utilizador</label>
				<div class="form-text invalid-tooltip"></div>
			</div>
		</div>
		<div class="col-md-4 offset-md-4">
			<div class="md-form md-outline">
				<i class="fas fa-lock prefix"></i>
				<input type="password" id="password" name="password" class="form-control">
				<label for="password">Password</label>
			</div>
		</div>
		<div class="col-12 text-center">
			<button type="submit" class="btn btn-primary">Iniciar Sessão</button>
		</div>
		</form>
		<?php else: ?>
		<div class="row">
			<div class="col-md-6">
				<?php echo form_open("authentication/signup_admin", "class=\"form-row shadow m-2 p-4\" onsubmit=\"return validation(this);\""); ?>
				<?php if ($this->session->flashdata("FlashMessage")): ?>
				<?php echo $this->session->flashdata("FlashMessage") ?>
				<?php endif; ?>
				<div class="col-12 text-center">
					<h3>Atualizar admin</h3>
				</div>
				<div class="col-12">
					<div class="md-form md-outline">
						<i class="fas fa-user prefix fa-fw"></i>
						<input type="text" id="username" name="username" class="form-control">
						<label for="username">Utilizador</label>
						<div class="form-text invalid-tooltip"></div>
					</div>
				</div>
				<div class="col-12">
					<div class="md-form md-outline">
						<i class="fas fa-lock prefix"></i>
						<input type="password" id="password" name="password" class="form-control">
						<label for="password">Password</label>
					</div>
				</div>
				<div class="col-12 text-justify"><small>Nota: Caso o utilizador exista, irá alterá-lo. Caso contrário,
						irá criá-lo.</small></div>
				<div class="col-12 text-center">
					<button type="submit" class="btn btn-primary">Atualizar</button>
				</div>
				</form>
			</div>
			<div class="col-md-6">
				<div class="row shadow m-2 p-4">
					<div class="col-12 text-center">
						<h3>Registos</h3>
					</div>
					<div class="col-12">
						<div id="chart_container">
							<canvas id="myChart"></canvas>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="row shadow m-2 p-4">
					<div class="col-12 text-center">
						<h3>Novas Empresas</h3>
					</div>
					<div class="col-12">
						<div class="table-responsive text-center">
							<table class="table table-striped">
								<thead class="thead-dark">
									<tr>
										<th scope="col" class="align-middle">ID</th>
										<th scope="col" class="align-middle">Nome</th>
										<th scope="col" class="align-middle">Email</th>
										<th scope="col" class="align-middle">Actions</th>
									</tr>
								</thead>
								<tbody>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</main>

	<footer>
		<div class="bg-footer-up text-light">
			<div class="container p-5 text-center">
				<div class="row">
					<div class="col-md-4 my-2 p-2">
						<h6 class="h6 pb-1">MyCards</h6>
						<p>MyCards é uma plataforma de fidelização de clientes para PME e pequenos comerciantes</p>
					</div>
					<div class="col-md-4 my-2 p-4 py-md-2" id="midFooter">
						<h6 class="h6">Começar</h6>
						<ul>
							<li><a href="<?php echo base_url();?>">Home</a></li>
							<li><a href="<?php echo base_url("#premium"); ?>">Premium</a></li>
							<li><a href="<?php echo base_url("#contato"); ?>">Contato</a></li>
							<li><a href="<?php echo base_url("signin"); ?>">Iniciar Sessão</a></li>
							<li><a href="<?php echo base_url("signup"); ?>">Criar Conta</a></li>
						</ul>
					</div>
					<div class="col-md-4 my-2 p-2">
						<h6 class="h6">Sobre nós</h6>
						<ul>
							<li><a href="<?php echo base_url("equipa");?>">Equipa</a></li>
							<li><a href="<?php echo base_url("faq");?>">FAQ</a></li>
							<li><a href="<?php echo base_url("politicaPrivacidade");?>" target="_blank"
									rel="noopener noreferrer">Politica de Privacidade</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-footer-down text-light">
			<div class="container p-3">
				<div class="text-center mx-auto">
					&copy; 2019 MyCards - <a href="https://choosealicense.com/licenses/gpl-3.0/" target="_blank"
						rel="noopener noreferrer">GNU GPLv3</a>
				</div>
			</div>
		</div>
	</footer>
	<?php if ($this->session->userdata("Username")) :?>
	<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalTitle"></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fas fa-times"></i>
					</button>
				</div>
				<div class="modal-body">
					<div class="chart-container">
						<canvas id="chart"></canvas>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<script>
		const head = document.querySelector("head");
		let array = [
			"https://use.fontawesome.com/releases/v5.8.1/css/all.css",
			"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css",
			"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.0/css/mdb.min.css",
			"<?php echo base_url("assets/css/core.css"); ?>",
			"<?php echo base_url("assets/css/{$page}.css"); ?>"
		];
		array.forEach(element => {
			let link = document.createElement("link");
			link.rel = "stylesheet";
			link.href = element;
			link.type = "text/css";
			head.appendChild(link);
		});
	</script>

	<!-- Boostrap JavaScript -->
	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
	</script>

	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript"
		src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js">
	</script>

	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.0/js/mdb.min.js">
	</script>

	<script text="text/javascript" src="<?php echo base_url("assets/js/{$page}.js"); ?>"></script>
	<?php if ($this->session->userdata("Username")) :?>
	<script text="text/javascript" src="<?php echo base_url("assets/js/{$page}_admin.js"); ?>"></script>
	<?php endif; ?>

</body>

</html>