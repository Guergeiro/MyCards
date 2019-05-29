<main class="container my-3 py-3 d-flex align-items-center justify-content-center">
	<div class="card w-100">
		<div class="card-header">
			<h3 class="text-primary text-truncate">Colaboradores</h3>
			<small class="ml-1">Nesta área estão presentes as definições relacionadas com os colaboradores.</small>
		</div>
		<div class="card-body">
			<div class="row">
				
			</div>
			<div class="text-center">
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal"><i class="fas fa-plus fa-fw"></i></button>
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
			<form>
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
					<select id="colaboradorOption" name="dono" class="custom-select">
						<option value="0" selected>Colaborador</option>
						<option value="1">Dono</option>
					</select>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Fechar</button>
				<button type="button" class="btn btn-primary">Criar</button>
			</div>
			</form>
		</div>
	</div>
</div>