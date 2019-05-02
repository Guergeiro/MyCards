<main class="container">
	<?php echo form_open_multipart("", "class=\"form-row m-3\" onsubmit=\"return validation(this);\""); ?>
		<div class="col-12 m-3 mx-auto p-0">
			<img src="<?php echo base_url('assets/avatar/920983_516047081776703_299333251_o.jpg'); ?>" class="border border-dark rounded-circle" alt="" srcset="">
		</div>
		<div class="col-12">
			<h5>Nome: </h5>
			<h5>Email: </h5>
			<h5>Rating: </h5>
		</div>
		<div class="form-group col-12">
			<label for="userfile">Nova imagem</label>
			<input type="file" name="userfile" id="userfile" class="form-control-file">
		</div>
		<div class="form-group col-md-6">
			<label for="password">Nova password</label>
			<input type="password" name="password" id="password" class="form-control">
			<div></div>
		</div>
		<div class="form-group col-md-6">
			<label for="re-password">Re-escreva a password</label>
			<input type="password" name="re-password" id="re-password" class="form-control">
			<div></div>
		</div>
		<div class="form-group col-12 text-center">
			<button type="submit" class="btn btn-primary">Update Account</button>
		</div>
	</form>
</main>