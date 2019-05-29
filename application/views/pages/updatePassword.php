<main class="container d-flex align-items-center justify-content-center">
	<div class="card">
		<div class="card-header bg-primary text-white text-center">
			<h3 class="h3">Alteração de Password</h3>
		</div>
		<div class="card-body">
			<?php echo form_open("authentication/updatePassword", "class=\"form-row\" onsubmit=\"return validation(this);\""); ?>
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
					<i class="fas fa-fw fa-lock prefix"></i>
					<input type="password" id="prepassword" name="prepassword" class="form-control">
					<label for="prepassword">Password atual</label>
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
			<div class="col-12 col-md-8 offset-md-2 text-center my-3">
				<button type="submit" class="btn btn-outline-primary rounded-pill">Alterar Password</button>
			</div>
			</form>
		</div>
	</div>
</main>