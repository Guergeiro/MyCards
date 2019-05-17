<main class="container d-flex align-items-center justify-content-center">
	<div class="card">
		<div class="card-header bg-primary text-white text-center">
			<h3 class="h3">Criação de Conta</h3>
		</div>
		<div class="card-body">
			<?php echo form_open("authentication/signin", "class=\"form-row\" onsubmit=\"return validation(this);\""); ?>
			<div class="col-12 col-md-8 offset-md-2">
				<div class="md-form md-outline">
					<i class="fas fa-fw fa-envelope prefix"></i>
					<input type="email" id="email" name="email" class="form-control">
					<label for="email">E-mail</label>
					<small class="form-text text-muted">O seu email nunca irá ser partilhado
						com ninguém.</small>
				</div>
			</div>
			<div class="col-12 col-md-8 offset-md-2">
				<div class="md-form md-outline">
					<i class="fas fa-fw fa-lock prefix"></i>
					<input type="password" id="password" name="password" class="form-control" minlength="8">
					<label for="password">Password</label>
					<small class="form-text text-muted">Mínimo de 8 Caracteres, aceita apenas Números e Letras</small>
				</div>
			</div>
			<div class="col-12 col-md-8 offset-md-2">
				<div class="md-form md-outline">
					<i class="fas fa-fw fa-lock prefix"></i>
					<input type="password" id="repassword" name="repassword" class="form-control">
					<label for="repassword">Re-escreva password</label>
					<small class="form-text text-muted">Mínimo de 8 Caracteres, aceita apenas Números e Letras</small>
				</div>
			</div>
			<div class="col-12 col-md-8 offset-md-2 text-center my-3">
				<?php if ($this->session->flashdata('wrongEmail')) { ?>
					<div class="alert alert-danger"> <?= $this->session->flashdata('wrongEmail') ?> </div>
				<?php } ?>
				<?php if ($this->session->flashdata('accountCreated')) { ?>
					<div class="alert alert-success"> <?= $this->session->flashdata('accountCreated') ?> </div>
				<?php } ?>
			</div>
			<div class="col-12 col-md-8 offset-md-2 text-center my-3">
				<button type="submit" class="btn btn-outline-primary rounded-pill">Criar Conta</button>
			</div>
			<div class="col-12 col-md-8 offset-md-2 text-center">
				Já possui conta? <a href="<?php echo base_url("login"); ?>">Inicie sessão</a>
			</div>
			</form>
		</div>
	</div>
</main>