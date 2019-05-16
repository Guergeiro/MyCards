<footer>
	<div class="bg-grey text-light">
		<div class="container p-5">
			<div class="col-md-3">
				<h6 class="h6">Empresa</h6>
				<a href="<?php echo base_url("faq"); ?>">FAQ</a>
			</div>
		</div>
	</div>
	<div class="bg-dark text-light">	
		<div class="container p-3">
			<div class="text-center mx-auto">
				&copy; 2019 MyCards - <a href="https://choosealicense.com/licenses/gpl-3.0/" target="_blank" rel="noopener noreferrer">GNU GPLv3</a>
			</div>
		</div>
	</div>
</footer>

<!-- Boostrap JavaScript -->
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js">
</script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.0/js/mdb.min.js"></script>

<?php if ($this->uri->segment(1,0) === "listarCampanha"): ?>
<!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="<?php echo base_url("assets/js/addons/datatables.min.js"); ?>"></script>
<?php endif; ?>

<script text="text/javascript" src="<?php echo base_url("assets/js/core.js"); ?>"></script>

<script text="text/javascript" src="<?php echo base_url("assets/js/{$page}.js"); ?>"></script>

</body>

</html>
