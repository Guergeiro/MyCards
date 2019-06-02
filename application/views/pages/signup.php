<main class="container d-flex align-items-center justify-content-center">
	<div class="card">
		<div class="card-header bg-primary text-white text-center">
			<h3 class="h3">Criação de Conta</h3>
		</div>
		<div class="card-body">
			<?php echo form_open("authentication/signup", "class=\"form-row\" onsubmit=\"return validation(this);\""); ?>
			<?php if ($this->session->flashdata("incorrectFlashData")): ?>
			<div class="col-12 col-md-8 offset-md-2 text-center my-3">
				<div class="alert alert-danger"><?= $this->session->flashdata("incorrectFlashData") ?></div>
			</div>
			<?php endif; ?>

			<?php if ($this->session->flashdata("correctFlashData")): ?>
			<div class="col-12 col-md-8 offset-md-2 text-center my-3">
				<div class="alert alert-success"> <?= $this->session->flashdata("correctFlashData") ?></div>
			</div>
			<?php endif; ?>
			<div class="col-12 col-md-8 offset-md-2">
				<div class="md-form md-outline">
					<i class="fas fa-fw fa-envelope prefix"></i>
					<input type="text" id="email" name="email" class="form-control">
					<label for="email">E-mail</label>
					<small class="form-text text-muted">O seu email nunca irá ser partilhado
						com ninguém.</small>
					<div class="form-text invalid-tooltip"></div>
				</div>
			</div>
			<div class="col-12 col-md-8 offset-md-2">
				<div class="md-form md-outline">
					<i class="fas fa-fw fa-lock prefix"></i>
					<input type="password" id="password" name="password" class="form-control">
					<label for="password">Password</label>
					<div class="form-text invalid-tooltip"></div>
				</div>
			</div>
			<div class="col-12 col-md-8 offset-md-2">
				<div class="md-form md-outline">
					<i class="fas fa-fw fa-lock prefix"></i>
					<input type="password" id="repassword" name="repassword" class="form-control">
					<label for="repassword">Re-escreva password</label>
					<div class="form-text invalid-tooltip"></div>
				</div>
			</div>
			<div class="col-12 col-md-8 offset-md-2">
				<div class="md-form md-outline">
					<i class="fas fa-fw fa-signature prefix"></i>
					<input type="text" id="nome" name="nome" class="form-control">
					<label for="nome">Nome</label>
					<div class="form-text invalid-tooltip"></div>
				</div>
			</div>
			<div class="col-12 col-md-8 offset-md-2">
				<div class="md-form md-outline">
					<i class="far fa-fw fa-closed-captioning prefix"></i>
					<input type="number" id="nif" name="nif" class="form-control">
					<label for="nif">NIF</label>
					<div class="form-text invalid-tooltip"></div>
				</div>
			</div>
			<div class="col-12 col-md-8 offset-md-2 text-center my-3">
				<button type="submit" class="btn btn-outline-primary rounded-pill">Criar Conta</button>
			</div>
			<div class="col-12 col-md-8 offset-md-2 text-center">
				Já possui conta? <a href="<?php echo base_url("signin"); ?>">Inicie sessão</a>
			</div>
			</form>
		</div>
	</div>
</main>