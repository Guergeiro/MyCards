<main class="container d-flex align-items-center justify-content-center">
  <div class="card w-100">
    <div class="card-header bg-primary text-white text-center">
      <h3 class="h3">Contactar</h3>
    </div>
    <div class="card-body">
      <p class="text-center w-responsive mx-auto mb-5">Tem alguma questão? Não hesite a contactar-nos diretamente.
        Seremos o mais breves possiveis.</p>

      <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
          <form id="contact-form" name="contact-form" action="mail.php" method="POST">

            <!--Grid row-->
            <div class="row">

              <!--Grid column-->
              <div class="col-md-6">
                <div class="md-form mb-0">
                  <input type="text" id="name" name="name" class="form-control">
                  <label for="name" class="">Nome</label>
                </div>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-md-6">
                <div class="md-form mb-0">
                  <input type="text" id="email" name="email" class="form-control">
                  <label for="email" class="">Email</label>
                </div>
              </div>
              <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
              <div class="col-md-12">
                <div class="md-form mb-0">
                  <input type="text" id="subject" name="subject" class="form-control">
                  <label for="subject" class="">Assunto</label>
                </div>
              </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

              <!--Grid column-->
              <div class="col-md-12">

                <div class="md-form">
                  <textarea type="text" id="message" name="message" rows="2"
                    class="form-control md-textarea"></textarea>
                  <label for="message">Escreve aqui a sua mensagem</label>
                </div>

              </div>
            </div>
            <!--Grid row-->

          </form>

          <div class="text-center text-md-left">
            <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Contactar</a>
          </div>
          <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
          <ul class="list-unstyled mb-0">
            <li><i class="fas fa-map-marker-alt fa-2x"></i>
              <p>Viseu, 3500, PT</p>
            </li>

            <li><i class="fas fa-phone mt-4 fa-2x"></i>
              <p>+351 9123456789</p>
            </li>

            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
              <p>pint@dsprojects.pt</p>
            </li>
          </ul>
        </div>
        <!--Grid column-->

      </div>
    </div>
</main>