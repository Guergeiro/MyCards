<main class="container d-flex align-items-center justify-content-center">
	<div class="card">
		<div class="card-header bg-primary text-white text-center">
			<h3 class="h3">Recuperação de Password</h3>
		</div>
		<div class="card-body">
			<?php echo form_open("authentication/recoverPassword", "class=\"form-row\" onsubmit=\"return validation(this);\""); ?>
			<div class="col-12 col-md-8 offset-md-2">
				<div class="md-form md-outline">
					<i class="fas fa-fw fa-envelope prefix"></i>
					<input type="email" id="email" name="email" class="form-control">
					<label for="email">E-mail</label>
					<div class="form-text invalid-tooltip"></div>
				</div>
			</div>

			<?php if ($this->session->flashdata("wrongEmail")): ?>
			<div class="col-12 col-md-8 offset-md-2 text-center my-3">
				<div class="alert alert-danger"><?= $this->session->flashdata("wrongEmail") ?></div>
			</div>
			<?php endif; ?>

			<?php if ($this->session->flashdata("passwordSent")): ?>
			<div class="col-12 col-md-8 offset-md-2 text-center my-3">
				<div class="alert alert-success"> <?= $this->session->flashdata("passwordSent") ?></div>

			</div>
			<?php endif; ?>
			<div class="col-12 col-md-8 offset-md-2 text-center my-3">
				<button type="submit" class="btn btn-outline-primary rounded-pill">Recuperar Password</button>
			</div>
			<div class="col-12 col-md-8 offset-md-2 text-center">
				Já possui conta? <a href="<?php echo base_url("signin"); ?>">Inicie sessão</a>
			</div>
			<div class="col-12 col-md-8 offset-md-2 text-center">
				Não possui conta? <a href="<?php echo base_url("signup"); ?>">Registe-se</a>
			</div>
			</form>
		</div>
	</div>
</main>