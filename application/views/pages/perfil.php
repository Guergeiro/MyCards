<main class="container my-3 py-3 d-flex align-items-center justify-content-center">
	<div class="card w-100">
		<div class="card-header">
			<h3 class="text-primary text-truncate">Perfil</h3>
			<small class="ml-1">Escolha o perfil de utilizador.</small>
		</div>
		<div class="card-body">
			<div class="row">
			<?php if ($this->session->flashdata("incorrectFlashData")): ?>
			<div class="col-12 col-md-8 offset-md-2 text-center">
				<div class="alert alert-danger"> <?= $this->session->flashdata("incorrectFlashData") ?> </div>
			</div>
			<?php endif; ?>
			</div>
		</div>
	</div>
</main>

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalTitle"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i class="fas fa-times"></i>
				</button>
			</div>
			<?php echo form_open("authentication/colaborador","onsubmit=\"return validation(this);\"") ?>
			<div class="modal-body">
				<div class="md-form">
					<input type="hidden" id="nome" name="nome" class="form-control" readonly>
				</div>
				<div class="md-form">
					<input type="password" name="codigoAcesso" id="codigoAcesso" class="form-control">
					<label for="codigoAcesso">Código de Acesso</label>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Fechar</button>
				<button type="submit" class="btn btn-primary">Entrar</button>
			</div>
			</form>
		</div>
	</div>
</div>