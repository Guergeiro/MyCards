<main class="container d-flex align-items-center justify-content-center">
	<div class="card">
		<div class="card-header bg-primary text-white text-center">
			<h3 class="h3">Inicio de Sessão</h3>
		</div>
		<div class="card-body">
			<?php echo form_open("authentication/signin", "class=\"form-row\" onsubmit=\"return validation(this);\""); ?>
			<?php if ($this->session->flashdata("flashData")): ?>
			<div class="col-12 col-md-8 offset-md-2 text-center">
				<div class="alert alert-danger"> <?= $this->session->flashdata("flashData") ?> </div>
			</div>
			<?php endif; ?>
			<div class="col-12 col-md-8 offset-md-2">
				<div class="md-form md-outline">
					<i class="fas fa-envelope prefix"></i>
					<input type="email" id="email" name="email" class="form-control">
					<label for="email">E-mail</label>
					<small class="form-text text-muted">O seu email nunca irá ser partilhado
						com ninguém.</small>
					<div class="form-text invalid-tooltip"></div>
				</div>
			</div>
			<div class="col-12 col-md-8 offset-md-2">
				<div class="md-form md-outline">
					<i class="fas fa-lock prefix"></i>
					<input type="password" id="password" name="password" class="form-control">
					<label for="password">Password</label>
				</div>
			</div>
			<div class="col-12 col-md-8 offset-md-2 text-center">
				<a href="<?php echo base_url("recoverPassword"); ?>">Esqueceu-se da password?</a>
			</div>
			<div class="col-12 col-md-8 offset-md-2 text-center my-3">
				<button type="submit" class="btn btn-outline-primary rounded-pill">Iniciar Sessão</button>
			</div>
			<div class="col-12 col-md-8 offset-md-2 text-center">
				Não possui conta? <a href="<?php echo base_url("signup"); ?>">Registe-se</a>
			</div>
			</form>
		</div>
	</div>
</main>