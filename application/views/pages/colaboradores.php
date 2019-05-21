<main class="container my-3 py-3 shadow d-flex align-items-center justify-content-center">
	<div class="card">
		<div class="card-header">
			<h3 class="text-primary text-truncate">Colaboradores</h3>
			<small class="ml-1">Nesta área estão presentes as definições relacionadas com os colaboradores.</small>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-sm-6 col-md-3 p-3">
					<div class="card">
						<img class="card-img-top"
							src="<?php echo base_url("assets/avatar/920983_516047081776703_299333251_o.jpg"); ?>">
						<div class="card-body">
							<h4 class="card-title">Nome</h4>
							<p class="card-text">Tipo</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 p-3">
					<div class="card">
						<img class="card-img-top"
							src="<?php echo base_url("assets/avatar/920983_516047081776703_299333251_o.jpg"); ?>">
						<div class="card-body">
							<h4 class="card-title">Nome</h4>
							<p class="card-text">Tipo</p>
							<div class="text-right">
								<a href="#" class="btn btn-danger"><i class="fas fa-trash-alt fa-fw"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 p-3">
					<div class="card">
						<img class="card-img-top"
							src="<?php echo base_url("assets/avatar/920983_516047081776703_299333251_o.jpg"); ?>">
						<div class="card-body">
							<h4 class="card-title">Nome</h4>
							<p class="card-text">Tipo</p>
							<div class="text-right">
								<a href="#" class="btn btn-danger"><i class="fas fa-trash-alt fa-fw"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 p-3">
					<div class="card">
						<img class="card-img-top"
							src="<?php echo base_url("assets/avatar/920983_516047081776703_299333251_o.jpg"); ?>">
						<div class="card-body">
							<h4 class="card-title">Nome</h4>
							<p class="card-text">Tipo</p>
							<div class="text-right">
								<a href="#" class="btn btn-danger"><i class="fas fa-trash-alt fa-fw"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center">
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal"><i
						class="fas fa-plus fa-fw"></i></button>
			</div>
		</div>
	</div>
</main>

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalTitle">Novo colaborador</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i class="fas fa-times"></i>
				</button>
			</div>
			<?php echo form_open("", "onsubmit=\"return validation(this);\""); ?>
			<div class="modal-body">
				<div class="md-form">
					<input type="text" name="nome" id="nome" class="form-control">
					<label for="nome">Nome</label>
				</div>
				<div class="md-form">
					<input type="password" name="codigoAcesso" id="codigoAcesso" class="form-control">
					<label for="codigoAcesso">Código de Acesso</label>
				</div>
				<div class="md-form">
					<select name="dono" class="custom-select">
						<option value="0" selected>Colaborador</option>
						<option value="1">Dono</option>
					</select>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Fechar</button>
				<button type="submit" class="btn btn-primary">Criar</button>
			</div>
			</form>
		</div>
	</div>
</div>
