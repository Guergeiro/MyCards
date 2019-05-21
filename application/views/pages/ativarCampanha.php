<main class="container p-2">
	<div class="card">
		<div class="card-header">
			<h3 class="text-primary text-truncate">Ativar Campanha</h3>
			<small>Esta área serve para ativar as campanhas.</small>
		</div>
		<div class="card-body p-0">
			<div class="row w-100 mx-auto">
				<div class="col-12 col-sm-5 h-100">
					<div class="row text-center mx-auto d-block">
						<div id="notificationElement" class="col-12 w-100 h-100 p-2" onclick="getID()">
							<div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
								<div class="toast-header">
									<img src="..." class="rounded mr-2" alt="...">
									<strong class="mr-auto">João Tiago Almeida</strong>
									<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="toast-body">
									<label for="nomeCampanha">Vila dos Frutos</label>
									<br>
									<label for="descricaoCampanha">Compre os Frutos mais frescos.</label>
									<label for="idCampanha" class="d-none" id="idCampanha">1315513175884123</label>
								</div>
							</div>
						</div>
						<div id="notificationElement" class="col-12 w-100 h-100 p-2" onclick="getID()">
							<div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
								<div class="toast-header">
									<img src="..." class="rounded mr-2" alt="...">
									<strong class="mr-auto">João Tiago Almeida</strong>
									<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="toast-body">
									<label for="nomeCampanha">Vila dos Frutos</label>
									<br>
									<label for="descricaoCampanha">Compre os Frutos mais frescos.</label>
									<label for="idCampanha" class="d-none" id="idCampanha">2435635635</label>
								</div>
							</div>
						</div>
						<div id="notificationElement" class="col-12 w-100 h-100 p-2" onclick="getID()">
							<div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
								<div class="toast-header">
									<img src="..." class="rounded mr-2" alt="...">
									<strong class="mr-auto">João Tiago Almeida</strong>
									<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="toast-body">
									<label for="nomeCampanha">Vila dos Frutos</label>
									<br>
									<label for="descricaoCampanha">Compre os Frutos mais frescos.</label>
									<label for="idCampanha" class="d-none" id="idCampanha">1291381983</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-7 p-2">
					<?php echo form_open("api/ativarCampanha", "class=\"form-row\" onsubmit=\"return validation(this);\""); ?>
					<div class="row mx-auto p-0">
						<div class="col-12 p-0">
							<div class="md-form w-100">
								<input type="number" name="codigo" id="codigo" class="form-control" placeholder=" " min="0">
								<label for="codigo">Código</label>
							</div>
						</div>
						<div class="col-12">
							<button type="submit" class="btn btn-primary btn-sm w-100">Utilizar Código</button>
						</div>
					</div>
					</form>
					<hr>
					<div class="row d-block mx-auto">
						<h6 id="clienteNome">Nome do Cliente</h6>
						<small>Nome do Cliente que vai ativar a Campanha!</small>
						<hr>
						<h6 id="campanhaNome">Nome da Campanha</h6>
						<small>Nome da Campanha que vai ser ativada!</small>
						<hr>
						<h6 id="avaliacaoData">Data Ativação</h6>
						<small>Data de Ativação da Campanha!</small>
						<hr>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>