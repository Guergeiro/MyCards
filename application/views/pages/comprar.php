<main class="container my-3 py-3 d-flex align-items-center justify-content-center">
  <div class="card w-100">
    <div class="card-header">
      <h3 class="text-primary text-truncate text-center">Informações de Pagamento</h3>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-6" id="preview">
          <div class="card my-4 text-center">
            <div class="card-header">
              <small>Desde</small>
              <h1 class="text-primary">25&euro;</h1>
              <small>/mês</small>
            </div>
            <div class="card-body">
              <h4 class="card-title">Inclui</h4>
              <p class="card-text text-success">3 campanhas simultâneas <i class="far fa-check-circle"></i>
              </p>
              <p class="card-text text-success">Cupões de Desconto Direto <i class="far fa-check-circle"></i>
              </p>
              <p class="card-text text-success">Cartão de Carimbos <i class="far fa-check-circle"></i>
              </p>
              <p class="card-text text-success">Estatísticas Gerais <i class="far fa-check-circle"></i>
              </p>
              <p class="card-text text-danger">Recompensas pontuais <i class="far fa-times-circle"></i>
              </p>
              <p class="card-text text-danger">Patamar de pontos <i class="far fa-times-circle"></i>
              </p>
              <p class="card-text text-danger">Estatísticas de Clientes <i class="far fa-times-circle"></i>
              </p>
              <p class="card-text text-danger">Estatísticas por Campanha <i class="far fa-times-circle"></i>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-12">
              <div class="md-form mb-0">
                <input type="text" id="name" name="name" class="form-control">
                <label for="name" class="">Nome completo</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="md-form mb-0">
                <input type="text" id="email" name="email" class="form-control">
                <label for="email" class="">Email</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="md-form mb-0">
                <input type="text" id="cartao" name="cartao" class="form-control">
                <label for="cartao" class="">Cartão</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-8">
              <div class="md-form mb-0">
                <input type="text" id="dataExpiracao" name="dataExpiracao" class="form-control">
                <label for="dataExpiracao" class="">Data de Expiração</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="md-form mb-0">
                <input type="text" id="cvv" name="cvv" class="form-control">
                <label for="cvv" class="">CVV</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="md-form mb-0">
                <input type="text" id="morada" name="morada" class="form-control">
                <label for="morada" class="">Morada</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12 text-center mt-5">
              <button type="button" class="btn btn-primary" id="pagar">Pagar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<div id="success" class="bg-success d-none">Pagamento efetuado com sucesso...</div>