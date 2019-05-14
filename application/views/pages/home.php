<nav class="navbar navbar-expand bg-blue navbar-dark fixed-top px-md-5 py-3">
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

<main>
	<section id="carousel" class="carousel slide carousel-slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel" data-slide-to="0" class="active"></li>
			<li data-target="#carousel" data-slide-to="1"></li>
			<li data-target="#carousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="..." class="d-block w-100" alt="first-slide">
			</div>
			<div class="carousel-item">
				<img src="..." class="d-block w-100" alt="second-slide">
			</div>
			<div class="carousel-item">
				<img src="..." class="d-block w-100" alt="third-slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Anterior</span>
		</a>
		<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Seguinte</span>
		</a>
	</section>

	<section class="container">
		<div class="row my-5">
			<div class="col-md-6">
				<img src="<?php echo base_url("assets/imgs/home/empty-wallet.jpg"); ?>" alt="empty-wallet" class="d-block w-100">
			</div>
			<div class="col-md-6">
				<h3 class="h3">Ola</h3>
				<p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat voluptas libero corrupti aliquam, laboriosam vitae maxime nihil porro placeat esse, quam minus doloremque veritatis similique laudantium aliquid molestias, consequuntur unde!</p>
				<div class="text-center">
					<a class="btn btn-outline-primary" href="<?php echo base_url("signin"); ?>">Começar</a>
				</div>
			</div>
		</div>
		<hr class="my-5">
		<div class="row my-5">
			<div class="col-md-6">
				<h3 class="h3 text-right">Ola</h3>
				<p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat voluptas libero corrupti aliquam, laboriosam vitae maxime nihil porro placeat esse, quam minus doloremque veritatis similique laudantium aliquid molestias, consequuntur unde!</p>
				<div class="text-center">
					<a class="btn btn-outline-primary" href="<?php echo base_url("signin"); ?>">Começar</a>
				</div>
			</div>
			<div class="col-md-6">
				<img src="<?php echo base_url("assets/imgs/home/empty-wallet.jpg"); ?>" alt="empty-wallet" class="d-block w-100">
			</div>
		</div>
	</section>
</main>
