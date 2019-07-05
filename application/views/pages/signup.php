<main class="container d-flex align-items-center justify-content-center">
	<div class="card">
		<div class="card-header bg-primary text-white text-center">
			<h3 class="h3">Criação de Conta</h3>
		</div>
		<div class="card-body">
			<?php echo form_open("authentication/signup", "class=\"form-row\" onsubmit=\"return validation(this);\""); ?>
			<?php if ($this->session->flashdata("incorrectFlashData")): ?>
			<div class="col-12 col-md-8 offset-md-2 text-center my-3">
				<div class="alert alert-danger"><?php echo $this->session->flashdata("incorrectFlashData") ?></div>
			</div>
			<?php endif; ?>

			<?php if ($this->session->flashdata("correctFlashData")): ?>
			<div class="col-12 col-md-8 offset-md-2 text-center my-3">
				<div class="alert alert-success"> <?php echo $this->session->flashdata("correctFlashData") ?></div>
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
					<input type="number" id="nif" name="nif" class="form-control" min="100000000" max="999999999">
					<label for="nif">NIF</label>
					<div class="form-text invalid-tooltip"></div>
				</div>
			</div>
            <div class="col-12 col-md-8 offset-md-2">
				<div class="md-form md-outline">
					<i class="fas fa-palette prefix fa-fw"></i>
					<input type="text" id="cor" name="cor" class="form-control">
					<label for="cor">Cor</label>
					<div class="form-text invalid-tooltip"></div>
				</div>
			</div>
			<div class="col-12 col-md-8 offset-md-2">
				<div class="md-form md-outline">
					<select id="areainteresse" name="areainteresse" class="custom-select">
						<option value="null" disabled selected>Área de Interesse</option>
						<option value="Agricultura">Agricultura</option>
                        <option value="Ciência e Tecnologia">Ciência e Tecnologia</option>
                        <option value="Desporto">Desporto</option>
                        <option value="Educação">Educação</option>
                        <option value="Restauração">Restauração</option>
                        <option value="Saúde">Saúde</option>
                        <option value="Transportes e Mercadorias">Transportes e Mercadorias</option>
                        <option value="Turismo">Turismo</option>
					</select>
					<div class="form-text invalid-tooltip"></div>
				</div>
			</div>
			<div class="col-12 col-md-8 offset-md-2">
				<div class="md-form md-outline">
					<select id="localizacao" name="localizacao" class="custom-select">
						<option value="null" disabled selected>Distrito</option>
					</select>
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