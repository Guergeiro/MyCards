<main>
  <section id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel" data-slide-to="0" class="active"></li>
      <li data-target="#carousel" data-slide-to="1"></li>
      <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner h-100">
      <video src="<?php echo base_url("assets/videos/home/animation-intro.mp4"); ?>" class="position-absolute" autoplay
        loop muted type="video/mp4">
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

  <section class="container py-4">
    <div class="row py-5" id="row-1">
      <div class="col-md-6">
        <img srcset="<?php echo base_url("assets/imgs/home/empty-wallet.jpg"); ?>" alt="empty-wallet"
          class="d-block w-100 shadow">
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
        <img srcset="<?php echo base_url("assets/imgs/home/smartmockups_jxyscrtd.jpg"); ?>" alt="discount"
          class="d-block w-100 shadow">
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
        <img srcset="<?php echo base_url("assets/imgs/home/smartmockups_jxys61od.jpg"); ?>" alt="company-growth"
          class="d-block w-100 shadow">
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

  <section class="text-white text-center py-4" id="app">
    <div class="container">
      <h1 class="font-weight-bold">Cliente?</h1>
      <h3>Faça download da nossa app!</h3>
      <div class="row">
        <div class="col-12 my-4">
          <a href="<?php echo base_url("android/mycards.zip"); ?>" class="btn btn-success" target="_blank" rel="noopener noreferrer"><div><i class="fab fa-android fa-fw fa-10x"></i></div><div><span>Download for</span><br><h2>Android</h2></div></a>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-primary text-white text-center py-4">
    <div class="container">
      <h3 class="font-weight-bold my-4">Conheça um Sistema de Fidelização sem Limites</h3>
      <div class="row">
        <div class="col-md-6 col-lg-3 my-4">
          <i class="far fa-credit-card fa-fw fa-4x"></i>
          <p class="m-2">Crie um cartão para os seus clientes em apenas 10 minutos.</p>
        </div>
        <div class="col-md-6 col-lg-3 my-4">
          <i class="fas fa-mobile-alt fa-fw fa-4x"></i>
          <p class="m-2">Uma carteira digital com todos os seus descontos.</p>
        </div>
        <div class="col-md-6 col-lg-3 my-4">
          <i class="fas fa-chart-line fa-fw fa-4x"></i>
          <p class="m-2">Estatísticas detalhadas de todas as suas campanhas.</p>
        </div>
        <div class="col-md-6 col-lg-3 my-4">
          <i class="fas fa-infinity fa-fw fa-4x"></i>
          <p class="m-2">O número de clientes que se podem fidelizar à sua empresa é ilimitado.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 my-4">
          <i class="fas fa-wallet fa-fw fa-4x"></i>
          <p class="m-2">Livre-se do compromisso da sua carteira e dos seus clientes.</p>
        </div>
        <div class="col-md-4 my-4">
          <i class="far fa-eye fa-fw fa-4x"></i>
          <p class="m-2">Aproveite-se do facto de o ser humano olhar para o telémovel, em média, 4 horas por dia.</p>
        </div>
        <div class="col-md-4 my-4">
          <i class="fas fa-store-alt fa-fw fa-4x"></i>
          <p class="m-2">Dê a conhecer o seu negócio a clientes fora da sua área.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="text-center py-4" id="premium">
    <div class="container">
      <h1 class="text-white font-weight-bold">Premium</h1>
      <p></p>
      <div class="row">
        <div class="card-deck text-center">
          <div class="col-lg-4 col-md-6">
            <div class="card my-4">
              <div class="view overlay">
                <img class="card-img-top" srcset="<?php echo base_url("assets/imgs/home/level1.jpg"); ?>"
                  alt="Card image cap">
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
                <p class="card-text text-success">Cupões de Desconto Direto <i class="far fa-check-circle"></i>
                </p>
                <p class="card-text text-success">Estatísticas Gerais <i class="far fa-check-circle"></i>
                </p>
                <p class="card-text text-danger">Patamar de pontos <i class="far fa-times-circle"></i>
                </p>
                <p class="card-text text-danger">Cartão de Carimbos <i class="far fa-times-circle"></i>
                </p>
                <p class="card-text text-danger">Estatísticas por Campanha <i class="far fa-times-circle"></i>
                </p>
                <?php if (!($this->session->userdata("Email"))): ?>
                <a href="<?php echo base_url("comprar#1"); ?>" class="btn btn-primary rounded-pill">Comprar</a>
                <?php endif;?>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card my-4">
              <div class="view overlay">
                <img class="card-img-top" srcset="<?php echo base_url("assets/imgs/home/level2.jpg"); ?>"
                  alt="Card image cap">
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
                <?php if (!($this->session->userdata("Email"))): ?>
                <a href="<?php echo base_url("comprar#2"); ?>" class="btn btn-primary rounded-pill">Comprar</a>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12">
            <div class="card my-4">
              <div class="view overlay">
                <img class="card-img-top" srcset="<?php echo base_url("assets/imgs/home/level3.jpg"); ?>"
                  alt="Card image cap">
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
                <?php if (!($this->session->userdata("Email"))): ?>
                <a href="<?php echo base_url("comprar#3"); ?>" class="btn btn-primary rounded-pill">Comprar</a>
                <?php endif; ?>
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
        <?php echo form_open("", "class=\"form-row\" onsubmit=\"return validation(this);\""); ?>
        <!--Grid column-->
        <div class="col-md-6">
          <div class="md-form mb-0">
            <input type="text" id="name" name="name" class="form-control">
            <label for="name" class="">Nome</label>
            <div class="form-text"></div>
          </div>
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-md-6">
          <div class="md-form mb-0">
            <input type="email" id="email" name="email" class="form-control">
            <label for="email" class="">Email</label>
            <div class="form-text"></div>
          </div>
        </div>
        <!--Grid column-->
        <div class="col-md-12">
          <div class="md-form mb-0">
            <input type="text" id="subject" name="subject" class="form-control">
            <label for="subject" class="">Assunto</label>
            <div class="form-text"></div>
          </div>
        </div>
        <!--Grid column-->
        <div class="col-md-12">
          <div class="md-form">
            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
            <label for="message">Escreva aqui a sua mensagem</label>
            <div class="form-text"></div>
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
            <p>support@mycards.dsprojects.pt</p>
          </li>
        </ul>
      </div>
      <!--Grid column-->
    </div>
  </section>
</main>