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
