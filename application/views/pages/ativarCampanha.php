<main class="container p-2 d-flex align-items-center justify-content-center">
	<div class="card">
		<div class="card-header">
			<h3 class="text-primary text-truncate">Ativar Campanha</h3>
			<small>Esta área serve para ativar as campanhas.</small>
		</div>
		<div class="card-body">
			<?php echo form_open("api/ativarCampanha", "class=\"form-row\" onsubmit=\"return validation(this);\""); ?>
			<div class="col-sm-6 col-md-4 ">
				<div class="toast mx-auto my-1" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
					<div class="toast-header">
						<img src="..." class="rounded mr-2" alt="...">
						<strong class="mr-auto">Bootstrap</strong>
						<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
							<span aria-hidden="true"><i class="fas fa-times"></i></span>
						</button>
					</div>
					<div class="toast-body text-center">
						<span class="id-campanha">123456789</span>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-md-4 ">
				<div class="toast mx-auto my-1" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
					<div class="toast-header">
						<img src="..." class="rounded mr-2" alt="...">
						<strong class="mr-auto">Bootstrap</strong>
						<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
							<span aria-hidden="true"><i class="fas fa-times"></i></span>
						</button>
					</div>
					<div class="toast-body text-center">
						<span class="id-campanha">123456789</span>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-md-4 ">
				<div class="toast mx-auto my-1" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
					<div class="toast-header">
						<img src="..." class="rounded mr-2" alt="...">
						<strong class="mr-auto">Bootstrap</strong>
						<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
							<span aria-hidden="true"><i class="fas fa-times"></i></span>
						</button>
					</div>
					<div class="toast-body text-center">
						<span class="id-campanha">123456789</span>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-md-4 ">
				<div class="toast mx-auto my-1" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
					<div class="toast-header">
						<img src="..." class="rounded mr-2" alt="...">
						<strong class="mr-auto">Bootstrap</strong>
						<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
							<span aria-hidden="true"><i class="fas fa-times"></i></span>
						</button>
					</div>
					<div class="toast-body text-center">
						<span class="id-campanha">123456789</span>
					</div>
				</div>
			</div>

			<div class="col-12">
				<div class="md-form form-lg mx-auto">
					<input type="number" name="codigo" id="codigo" class="form-control form-control-lg">
					<label for="codigo">Código</label>
				</div>
			</div>

			<div class="col-12 text-center">
				<button type="submit" class="btn btn-primary">Utilizar Código</button>
			</div>
			</form>
		</div>
	</div>
</main>