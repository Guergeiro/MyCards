<main class="container my-3 py-3 shadow">
	<h3>Criar Campanha</h3>
	<?php echo form_open("", "class=\"form-row\" onsubmit=\"return validation(this);\""); ?>
		<div class="custom-control custom-radio custom-control-inline">
			<input class="custom-control-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
			<label class="custom-control-label" for="inlineRadio1">Cupões</label>
		</div>
		<div class="custom-control custom-radio custom-control-inline">
			<input class="custom-control-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
			<label class="custom-control-label" for="inlineRadio2">Carimbos</label>
		</div>
		<div class="custom-control custom-radio custom-control-inline">
			<input class="custom-control-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
			<label class="custom-control-label" for="inlineRadio3">Pontos</label>
		</div>
	</form>
</main>