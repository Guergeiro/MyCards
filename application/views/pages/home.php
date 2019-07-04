<main>
  <section id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel" data-slide-to="0" class="active"></li>
      <li data-target="#carousel" data-slide-to="1"></li>
      <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner h-100">
      <video src="<?php echo base_url("assets/videos/home/animation-intro.mp4"); ?>" class="position-absolute" autoplay loop muted type="video/mp4">
      </video>
      <div class="carousel-item h-100 active">
        <div class="carousel-caption d-block text-md-left">
          <h3 class="h3 my-5">Simplifique a sua vida com MyCards</h3>
          <p>Simplifique a vida dos seus clientes.</p>
          <a class="btn btn-outline-light" href="#row-1">Saiba mais</a>
        </div>
      </div>
      <div class="carousel-item h-100">
        <div class="carousel-caption d-block text-md-left">
          <h3 class="h3 my-5">Simplifique a sua vida com MyCards</h3>
          <p>Crie campanhas para os seus clientes.</p>
          <a class="btn btn-outline-light" href="#row-2">Saiba mais</a>
        </div>
      </div>
      <div class="carousel-item h-100">
        <div class="carousel-caption d-block text-md-left">
          <h3 class="h3 my-5">Simplifique a sua vida com MyCards</h3>
          <p>Acompanhe o crescimento da sua empresa.</p>
          <a class="btn btn-outline-light" href="#row-3">Saiba mais</a>
        </div>
      </div>
    </div>


    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Seguinte</span>
    </a>
  </section>

  <section class="container">
    <div class="row py-5" id="row-1">
      <div class="col-md-6">
        <img src="<?php echo base_url("assets/imgs/home/empty-wallet.jpg"); ?>" alt="empty-wallet" class="d-block w-100 shadow">
      </div>
      <div class="col-md-6">
        <h3 class="h3 mt-3">Simplifique a vida dos seus clientes</h3>
        <p class="text-justify">
          Com o MyCards, pode criar um cartão virtual de fidelização para os seus clientes.
          Com este cartão, elimina mais um problema para os seus clientes e torna a vida dos mesmos mais
          simples.
        </p>
        <div class="text-center">
          <a class="btn btn-outline-primary" href="<?php echo base_url("signin"); ?>">Começar</a>
        </div>
      </div>
    </div>
    <hr class="my-2">
    <div class="row py-5" id="row-2">
      <div class="col-md-6 order-md-last">
        <img src="<?php echo base_url("assets/imgs/home/discount.jpg"); ?>" alt="discount" class="d-block w-100 shadow">
      </div>
      <div class="col-md-6">
        <h3 class="h3 mt-3">Crie campanhas para os seus clientes</h3>
        <p class="text-justify">
          Com o MyCards, pode criar vários tipos de campanhas
          <ul>
            <li>Cupões de desconto direto</li>
            <li>Cartão de carimbos</li>
            <li>Recompensas pontuais</li>
            <li>Patamares de pontos</li>
          </ul>
        </p>
        <div class="text-center">
          <a class="btn btn-outline-primary" href="<?php echo base_url("signin"); ?>">Começar</a>
        </div>
      </div>
    </div>
    <hr class="my-2">
    <div class="row py-5" id="row-3">
      <div class="col-md-6">
        <img src="<?php echo base_url("assets/imgs/home/company-growth.jpg"); ?>" alt="company-growth" class="d-block w-100 shadow">
      </div>
      <div class="col-md-6">
        <h3 class="h3 mt-3">Acompanhe o crescimento da sua empresa</h3>
        <p class="text-justify">
          Com o MyCards, nunca foi mais fácil acompanhar o crescimento da sua empresa.
          Visualize o quão popular é uma dada campanha, a quantidade de novos clientes que se fidelizam, entre
          outros.
        </p>
        <div class="text-center">
          <a class="btn btn-outline-primary" href="<?php echo base_url("signin"); ?>">Começar</a>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-primary" id="premium">
    <div class="container p-4">
      <h3 class="display-4 text-center text-white font-weight-bold">Premium</h3>
      <p></p>
      <div class="row">
        <div class="card-deck text-center">
          <div class="col-lg-4 col-md-6">
            <div class="card my-4">
              <div class="view overlay">
                <img class="card-img-top" src="<?php echo base_url("assets/imgs/home/level1.jpg"); ?>" alt="Card image cap">
                <a href="<?php echo base_url("comprar#1"); ?>">
                  <div class="mask rgba-white-strong d-flex align-items-center justify-content-center">
                    <h3>Básico</h3>
                  </div>
                </a>
              </div>
              <div class="card-header">
                <small>Desde</small>
                <h1 class="text-primary">Gratuíto</h1>
                <span>&nbsp;</span>
              </div>
              <div class="card-body">
                <h4 class="card-title">Inclui</h4>
                <p class="card-text text-success">3 campanhas simultâneas <i class="far fa-check-circle"></i>
                </p>
                <p class="card-text text-success">Cupões de Desconto Direto <i class="far fa-check-circle"></i>
                </p>
                <p class="card-text text-success">Estatísticas Gerais <i class="far fa-check-circle"></i>
                </p>
                <p class="card-text text-danger">Patamar de pontos <i class="far fa-times-circle"></i>
                </p>
                <p class="card-text text-danger">Estatísticas por Campanha <i class="far fa-times-circle"></i>
                </p>
                <p class="card-text text-danger">Cartão de Carimbos <i class="far fa-times-circle"></i>
                </p>
                <a href="<?php echo base_url("comprar#1"); ?>" class="btn btn-primary rounded-pill">Comprar</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card my-4">
              <div class="view overlay">
                <img class="card-img-top" src="<?php echo base_url("assets/imgs/home/level2.jpg"); ?>" alt="Card image cap">
                <a href="<?php echo base_url("comprar#2"); ?>">
                  <div class="mask rgba-white-strong d-flex align-items-center justify-content-center">
                    <h3>Intermédio</h3>
                  </div>
                </a>
              </div>
              <div class="card-header">
                <small>Desde</small>
                <h1 class="text-primary">50&euro;</h1>
                <small>/mês</small>
              </div>
              <div class="card-body">
                <h4 class="card-title">Inclui</h4>
                <p class="card-text text-success">6 campanhas simultâneas <i class="far fa-check-circle"></i>
                </p>
                <p class="card-text text-success">Cupões de Desconto Direto <i class="far fa-check-circle"></i>
                </p>
                <p class="card-text text-success">Estatísticas Gerais <i class="far fa-check-circle"></i>
                </p>
                <p class="card-text text-success">Cartão de Carimbos <i class="far fa-check-circle"></i>
                </p>
                <p class="card-text text-success">Patamar de pontos <i class="far fa-check-circle"></i>
                </p>
                <p class="card-text text-danger">Estatísticas por Campanha <i class="far fa-times-circle"></i>
                </p>
                <a href="<?php echo base_url("comprar#2"); ?>" class="btn btn-primary rounded-pill">Comprar</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12">
            <div class="card my-4">
              <div class="view overlay">
                <img class="card-img-top" src="<?php echo base_url("assets/imgs/home/level3.jpg"); ?>" alt="Card image cap">
                <a href="<?php echo base_url("comprar#3"); ?>">
                  <div class="mask rgba-white-strong d-flex align-items-center justify-content-center">
                    <h3>Profissional</h3>
                  </div>
                </a>
              </div>
              <div class="card-header">
                <small>Desde</small>
                <h1 class="text-primary">75&euro;</h1>
                <small>/mês</small>
              </div>
              <div class="card-body">
                <h4 class="card-title">Inclui</h4>
                <p class="card-text text-success">Campanhas Ilimitadas <i class="far fa-check-circle"></i>
                </p>
                <p class="card-text text-success">Cupões de Desconto Direto <i class="far fa-check-circle"></i>
                </p>
                <p class="card-text text-success">Estatísticas Gerais <i class="far fa-check-circle"></i>
                </p>
                <p class="card-text text-success">Cartão de Carimbos <i class="far fa-check-circle"></i>
                </p>
                <p class="card-text text-success">Patamar de pontos <i class="far fa-check-circle"></i>
                </p>
                <p class="card-text text-success">Estatísticas por Campanha <i class="far fa-check-circle"></i>
                </p>
                <a href="<?php echo base_url("comprar#3"); ?>" class="btn btn-primary rounded-pill">Comprar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="container py-4" id="contato">
    <h3 class="h3 text-center">Contato</h3>
    <p class="text-center">Tem alguma questão? Não hesite a contactar-nos diretamente. Seremos o mais breves possiveis.
    </p>
    <div class="row">
      <!--Grid column-->
      <div class="col-md-9 mb-md-0 mb-5">
        <?php echo form_open("email", "class=\"form-row\""); ?>
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
        <div class="col-md-12">
          <div class="md-form mb-0">
            <input type="text" id="subject" name="subject" class="form-control">
            <label for="subject" class="">Assunto</label>
          </div>
        </div>
        <!--Grid column-->
        <div class="col-md-12">
          <div class="md-form">
            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
            <label for="message">Escreva aqui a sua mensagem</label>
          </div>
        </div>
        <div class="col-12 text-center text-md-left">
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
        </form>
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
  </section>
</main>