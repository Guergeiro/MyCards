<main class="container my-3 py-3">
	<div class="row">
		<div class="col-md-6 my-3">
			<div class="card">
				<div class="card-header">
					<h3 class="text-primary">Segurança</h3>
				</div>
				<div class="card-body">
					<?php echo form_open("authentication/updatePassword", "class=\"form-row\" onsubmit=\"return validation(this);\""); ?>
					<?php if ($this->session->flashdata("segurancaFlashData")): ?>
					<?php echo $this->session->flashdata("segurancaFlashData"); ?>
					<?php endif; ?>
					<div class="col-12">
						<div class="md-form mb-0">
							<i class="fas fa-fw fa-lock prefix"></i>
							<input type="password" id="prepassword" name="prepassword" class="form-control">
							<label for="prepassword">Password Atual</label>
							<div class="form-text invalid-tooltip"></div>
						</div>
					</div>
					<div class="col-12">
						<div class="md-form mb-0">
							<i class="fas fa-fw fa-lock prefix"></i>
							<input type="password" id="password" name="password" class="form-control">
							<label for="password">Nova Password</label>
							<div class="form-text invalid-tooltip"></div>
						</div>
					</div>
					<div class="col-12">
						<div class="md-form mb-0">
							<i class="fas fa-fw fa-lock prefix"></i>
							<input type="password" id="repassword" name="repassword" class="form-control">
							<label for="repassword">Confirmar Password</label>
							<div class="form-text invalid-tooltip"></div>
						</div>
					</div>
					<div class="col-12 text-center">
						<button type="submit" class="btn btn-primary waves-effect waves-light mt-2">Guardar</button>
					</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-6 my-3">
			<div class="card">
				<div class="card-header">
					<h3 class="text-primary">Redes Sociais</h3>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-12">
							<div class="md-form mb-0">
								<i class="fab fa-fw fa-facebook-f prefix"></i>
								<input type="text" id="facebook" name="facebook" class="form-control">
								<label for="facebook">Facebook</label>
							</div>
						</div>
						<div class="col-12">
							<div class="md-form mb-0">
								<i class="fab fa-fw fa-twitter prefix"></i>
								<input type="text" id="twitter" name="twitter" class="form-control">
								<label for="twitter">Twitter</label>
							</div>
						</div>
						<div class="col-12">
							<div class="md-form mb-0">
								<i class="fab fa-fw fa-linkedin-in prefix"></i>
								<input type="text" id="linkedin" name="linkedin" class="form-control">
								<label for="linkedin">LinkedIn</label>
							</div>
						</div>
						<div class="col-12 text-center">
							<button type="button" class="btn btn-primary waves-effect waves-light mt-2"
								id="redes-sociais">Guardar</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 my-3">
			<div class="card">
				<div class="card-header">
					<h3 class="text-primary">Área de Interesse</h3>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-12">
							<div class="md-form mb-0">
								<select id="areainteresse" name="areainteresse" class="custom-select">
									<option value="agricultura">Agricultura</option>
									<option value="ciencia-tecnologia">Ciência e Tecnologia</option>
									<option value="desporto">Desporto</option>
									<option value="educacao">Educação</option>
									<option value="restauracao">Restauração</option>
									<option value="saude">Saúde</option>
									<option value="transportes-mercadorias">Transportes e Mercadorias</option>
									<option value="turismo">Turismo</option>
								</select>
							</div>
						</div>
						<div class="col-12 text-center">
							<button type="button" class="btn btn-primary waves-effect waves-light mt-2"
								id="area-interesse">Guardar</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 my-3">
			<div class="card">
				<div class="card-header">
					<h3 class="text-primary">Localização</h3>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-12">
							<div class="md-form mb-0">
								<select id="localizacao" name="localizacao" class="custom-select">
								</select>
							</div>
						</div>
						<div class="col-12 text-center">
							<button type="button" class="btn btn-primary waves-effect waves-light mt-2"
								id="localizacao-empresa">Guardar</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>