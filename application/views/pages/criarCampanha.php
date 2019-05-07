<main class="container my-3 py-3 shadow">
	<h3>Criar Campanha</h3>
	<?php echo form_open("", "class=\"form-row\" onsubmit=\"return validation(this);\""); ?>
		<h5 class="col-12 my-3">Tipo Campanha</h5>
		<div class="col-12 my-3 media">
			<div class="align-self-center text-primary">
				<i class="fas fa-percent fa-fw fa-5x"></i>
			</div>
			<div class="media-body">
				<h5>Cupão</h5>
				<p>Ideal para a atribuição de desconto imediato sobre um ou mais produtos.</p>
				<a href="#" class="stretched-link text-primary">Clique para selecionar Cupão<i class="fas fa-level-down-alt ml-5"></i></a>
			</div>
		</div>
		<div class="col-12 my-3 media">
			<div class="align-self-center text-primary">
				<i class="fab fa-buromobelexperte fa-fw fa-5x" style="transform: rotate(180deg);"></i>
			</div>
			<div class="media-body">
				<h5>Carimbo</h5>
				<p>Ideal para atribuição de um prémio ao completar um certo número de compras.</p>
				<a href="#" class="stretched-link text-primary">Clique para selecionar Carimbo<i class="fas fa-level-down-alt ml-5"></i></a>
			</div>
		</div>
		<div class="col-12 my-3 media">
			<div class="align-self-center text-primary">
				<i class="fas fa-coins fa-fw fa-5x"></i>
			</div>
			<div class="media-body">
				<h5>Pontos</h5>
				<p>Ideal para atribuição de um prémio quando o utilizador atingir um certo patamar de pontos.</p>
				<a href="#" class="stretched-link text-primary">Clique para selecionar Pontos<i class="fas fa-level-down-alt ml-5"></i></a>
			</div>
		</div>

		<h5 class="col-12 my-3">Dados Campanha</h5>
		<div class="col-12 md-form md-outline">
			<input type="text" id="designacao" class="form-control" disabled readOnly>
			<label for="designacao">Designação da campanha</label>
		</div>
	</form>
</main>