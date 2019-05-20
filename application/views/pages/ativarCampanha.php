<main class="container shadow">
	<div class="card">
		<div class="card-header">
			<h3 class="text-primary text-truncate">Ativar Campanha</h3>
			<small>Esta área serve para ativar as campanhas.</small>
		</div>
		<div class="card-body p-0">
			<?php echo form_open("api/ativarCampanha", "class=\"form-row\" onsubmit=\"return validation(this);\""); ?>
			<div class="row w-100 justify-content-center">
				<div class="col-12 col-lg-4 w-100">
					<div id="toastElement" class="toast show" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
						<div class="toast-header">
							<img src="assets\imgs\authentication\barcode.jpg" class="rounded mr-2 w-25" alt="...">
							<strong class="mr-auto">Bootstrap</strong>
							<small>11 mins ago</small>
							<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="toast-body">
							Hello, world! This is a toast message.
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-4 w-100">
					<div id="toastElement" class="toast show" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
						<div class="toast-header">
							<img src="assets\imgs\authentication\barcode.jpg" class="rounded mr-2 w-25" alt="...">
							<strong class="mr-auto">Bootstrap</strong>
							<small>11 mins ago</small>
							<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="toast-body">
							Hello, world! This is a toast message.
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-4 w-100">
					<div id="toastElement" class="toast show" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
						<div class="toast-header">
							<img src="assets\imgs\authentication\barcode.jpg" class="rounded mr-2 w-25" alt="...">
							<strong class="mr-auto">Bootstrap</strong>
							<small>11 mins ago</small>
							<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="toast-body">
							Hello, world! This is a toast message.
						</div>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="md-form form-lg mx-auto">
					<input type="number" name="codigo" id="codigo" class="form-control form-control-lg " min="0">
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