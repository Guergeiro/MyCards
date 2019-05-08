<main class="container my-3 py-3 shadow">
	<h3>Ativar Campanha</h3>
	<?php echo form_open("", "class=\"form-row\" onsubmit=\"return validation(this);\""); ?>
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
</main>