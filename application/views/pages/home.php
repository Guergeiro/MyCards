<main>
	<section id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel" data-slide-to="0" class="active"></li>
			<li data-target="#carousel" data-slide-to="1"></li>
			<li data-target="#carousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner h-100">
			<video src="<?php echo base_url("assets/videos/home/animation-intro.mp4"); ?>" class="position-absolute"
				autoplay loop muted type="video/mp4">
			</video>
			<div class="carousel-item h-100 active">
				<div class="carousel-caption d-block text-md-left">
					<h3 class="h3 my-5">Simplifique a sua vida com MyCards</h3>
					<p>Simplifique a vida dos seus clientes.</p>
					<a class="btn btn-outline-light" href="#section-a">Saiba mais</a>
				</div>
			</div>
			<div class="carousel-item h-100">
				<div class="carousel-caption d-block text-md-left">
					<h3 class="h3 my-5">Simplifique a sua vida com MyCards</h3>
					<p>Crie campanhas para os seus clientes.</p>
					<a class="btn btn-outline-light" href="#section-a">Saiba mais</a>
				</div>
			</div>
			<div class="carousel-item h-100">
				<div class="carousel-caption d-block text-md-left">
					<h3 class="h3 my-5">Simplifique a sua vida com MyCards</h3>
					<p>Acompanhe o crescimento da sua empresa.</p>
					<a class="btn btn-outline-light" href="#section-a">Saiba mais</a>
				</div>
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

	<section class="container" id="section-a">
		<div class="row my-5">
			<div class="col-md-6">
				<img src="<?php echo base_url("assets/imgs/home/empty-wallet.jpg"); ?>" alt="empty-wallet"
					class="d-block w-100 shadow">
			</div>
			<div class="col-md-6">
				<h3 class="h3 mt-3">Simplifique a vida dos seus clientes</h3>
				<p class="text-justify">
					Com o MyCards, pode criar um cartão virtual de fidelização para os seus clientes.
					Com este cartão, elimina mais um problema para os seus clientes e torna a vida dos mesmos mais simples.
				</p>
				<div class="text-center">
					<a class="btn btn-outline-primary" href="<?php echo base_url("signin"); ?>">Começar</a>
				</div>
			</div>
		</div>
		<hr class="my-5">
		<div class="row my-5">
			<div class="col-md-6 order-md-last">
				<img src="<?php echo base_url("assets/imgs/home/discount.jpg"); ?>" alt="discount"
					class="d-block w-100 shadow">
			</div>
			<div class="col-md-6">
				<h3 class="h3 mt-3">Crie campanhas para os seus clientes</h3>
				<p class="text-justify">
					Com o MyCards, pode criar vários tipos de campanhas
					<ul>
						<li>Cupões de desconto direto</li>
						<li>Cartão de carimbos</li>
						<li>Recompensas pontuais</li>
						<li>Patamares de pontos</li>
					</ul>
				</p>
				<div class="text-center">
					<a class="btn btn-outline-primary" href="<?php echo base_url("signin"); ?>">Começar</a>
				</div>
			</div>
		</div>
		<hr class="my-5">
		<div class="row my-5">
			<div class="col-md-6">
				<img src="<?php echo base_url("assets/imgs/home/company-growth.jpg"); ?>" alt="company-growth"
					class="d-block w-100 shadow">
			</div>
			<div class="col-md-6">
				<h3 class="h3 mt-3">Acompanhe o crescimento da sua empresa</h3>
				<p class="text-justify">
					Com o MyCards, nunca foi mais fácil acompanhar o crescimento da sua empresa.
					Visualize o quão popular é uma dada campanha, a quantidade de novos clientes que se fidelizam, entre outros.
				</p>
				<div class="text-center">
					<a class="btn btn-outline-primary" href="<?php echo base_url("signin"); ?>">Começar</a>
				</div>
			</div>
		</div>
	</section>
</main>
