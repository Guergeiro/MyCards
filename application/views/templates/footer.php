<footer>
  <div class="bg-footer-up text-light">
    <div class="container p-5 text-center">
      <div class="row">
        <div class="col-md-4 my-2 p-2">
          <h6 class="h6 pb-1">MyCards</h6>
          <p>MyCards é uma plataforma de fidelização de clientes para PME e pequenos comerciantes</p>
        </div>
        <div class="col-md-4 my-2 p-4 py-md-2" id="midFooter">
          <h6 class="h6">Começar</h6>
          <ul>
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <li><a href="<?php echo base_url("#premium"); ?>">Premium</a></li>
            <li><a href="<?php echo base_url("#contato"); ?>">Contato</a></li>
            <li><a href="<?php echo base_url("signin"); ?>">Iniciar Sessão</a></li>
            <li><a href="<?php echo base_url("signup"); ?>">Criar Conta</a></li>
          </ul>
        </div>
        <div class="col-md-4 my-2 p-2">
          <h6 class="h6">Sobre nós</h6>
          <ul>
            <li><a href="<?php echo base_url("equipa");?>">Equipa</a></li>
            <li><a href="<?php echo base_url("faq");?>">FAQ</a></li>
            <li><a href="<?php echo base_url("politicaPrivacidade");?>" target="_blank"
                rel="noopener noreferrer">Politica de Privacidade</a></li>
                <li><a href="<?php echo base_url("api") ?>" target="_blank" rel="noopener noreferrer">API</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-footer-down text-light">
    <div class="container p-3">
      <div class="text-center mx-auto">
        &copy; 2019 MyCards - <a href="https://choosealicense.com/licenses/gpl-3.0/" target="_blank"
          rel="noopener noreferrer">GNU GPLv3</a>
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

<?php if (($this->uri->segment(1, 0) === "listarCampanha") || ($this->uri->segment(1, 0) === "clientes")): ?>
<!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="<?php echo base_url("assets/js/addons/datatables.min.js"); ?>"></script>
<?php endif; ?>

<!-- Core Script -->
<script text="text/javascript" src="<?php echo base_url("assets/js/core.js"); ?>"></script>

<?php if(file_exists(getcwd()."/assets/js/{$page}.js")): ?>
<!-- Page Script -->
<script text="text/javascript" src="<?php echo base_url("assets/js/{$page}.js"); ?>"></script>
<?php endif; ?>
</body>

</html>