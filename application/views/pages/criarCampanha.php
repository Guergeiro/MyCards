<main class="container my-3 py-3 d-flex align-items-center justify-content-center">
	<div class="card">
		<div class="card-header">
			<h3 class="text-primary text-truncate">Criar Campanha</h3>
			<small>Esta área serve para criação de campanhas.</small>
		</div>
		<div class="card-body">
			<?php echo form_open("", "class=\"form-row\" onsubmit=\"return validation(this);\""); ?>
			<h5 class="col-12 my-3">Tipo Campanha</h5>
			<div class="col-xl-4 col-lg-6 my-3 p-3 media shadow" data-type="&#37;">
				<div class="align-self-center text-primary">
					<i class="fas fa-percent fa-fw fa-5x"></i>
				</div>
				<div class="media-body">
					<h5>Cupão</h5>
					<p>Ideal para a atribuição de desconto imediato sobre um ou mais produtos.</p>
					<span class="text-primary">Selecionar Cupão<i class="fas fa-level-down-alt fa-fw ml-5"></i></span>
				</div>
			</div>
			<div class="col-xl-4 col-lg-6 my-3 p-3 media shadow" data-type="carimbos">
				<div class="align-self-center text-primary">
					<i class="fab fa-buromobelexperte fa-fw fa-5x" style="transform: rotate(180deg);"></i>
				</div>
				<div class="media-body">
					<h5>Carimbo</h5>
					<p>Ideal para atribuição de um prémio ao completar um certo número de compras.</p>
					<span class="text-primary">Selecionar Carimbo<i class="fas fa-level-down-alt fa-fw ml-5"></i></span>
				</div>
			</div>
			<div class="col-xl-4 col-lg-12 my-3 p-3 media shadow" data-type="pontos">
				<div class="align-self-center text-primary">
					<i class="fas fa-coins fa-fw fa-5x"></i>
				</div>
				<div class="media-body">
					<h5>Pontos</h5>
					<p>Ideal para atribuição de um prémio quando o utilizador atingir um certo patamar de pontos.</p>
					<span class="text-primary">Selecionar Pontos<i class="fas fa-level-down-alt fa-fw ml-5"></i></span>
				</div>
			</div>

			<h5 class="col-12 my-3">Dados Campanha</h5>
			<div class="col-lg-8">
				<div class="row">
					<div class="col-12 md-form">
						<input type="text" name="designacao" id="designacao" class="form-control" disabled readOnly>
						<label class="ml-3" for="designacao">Designação da campanha</label>
						<small max="50" class="text-muted float-right m-0 p-0 mr-3">0/50</small>
					</div>
					<div class="col-12 md-form">
						<input type="text" name="descricao" id="descricao" class="form-control" disabled readOnly>
						<label class="ml-3" for="descricao">Descrição da campanha</label>
						<small max="100" class="text-muted float-right m-0 p-0 mr-3">0/100</small>
					</div>
					<div class="col-12 md-form">
						<input type="number" name="valor" id="valor" class="form-control" min="0" disabled readOnly>
						<label class="ml-3" for="valor">Valor da campanha</label>
					</div>
					<div class="col-6 md-form">
						<input type="date" name="dataInicio" id="dataInicio" class="form-control" disabled readOnly>
						<label class="ml-3" for="dataInicio">Data de inicio da campanha</label>
					</div>
					<div class="col-6 md-form">
						<input type="date" name="dataFim" id="dataFim" class="form-control" disabled readOnly>
						<label class="ml-3" for="dataFim">Data de fim da campanha</label>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="row">
					<div class="col-12">
						<h6>Pré-visualização</h6>
					</div>
					<div id="preVisualizacao" class="col m-3 p-3 shadow text-primary text-center text-break">
						<h5 data-name="designacao"></h5>
						<h4 data-name="valor"></h4>
						<h5 data-name="descricao"></h5>
						<h6 data-name="dataInicio"></h6>
						<h6 data-name="dataFim"></h6>
					</div>
				</div>
			</div>
			<div class="col-12 text-center">
				<button type="submit" class="btn btn-primary" disabled>Criar campanha</button>
			</div>
			</form>
		</div>
	</div>
</main>
