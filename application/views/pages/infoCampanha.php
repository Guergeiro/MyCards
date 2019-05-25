<main class="container my-3 py-3 shadow d-flex align-items-center justify-content-center">
  <div class="row w-100">
    <div class="card col-12 p-0">
      <div class="card-header">
        <h3 class="text-primary text-truncate">Campanha</h3>
        <small>Nesta área estão presentes as informações da campanha.</small>
      </div>
      <div class="card-body">
        <div class="row text-center">
          <div class="col-md-3 p-3 border-right">
            <small>Empresa</small>
            <h4 class="empresa"></h4>
          </div>

          <div class="col-md-3 p-3 border-right">
            <small>Desconto</small>
            <h4 class="desconto"></h4>
          </div>

          <div class="col-md-3 p-3 border-right">
            <small>Tipo de Campanha</small>
            <h4 class="tipo"></h4>
          </div>

          <div class="col-md-3 p-3">
            <small>Fim de campanha</small>
            <h4 class="fimCampanha"></h4>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div id="chart_container">
              <canvas id="myChart1"></canvas>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-12">
            <div id="chart_container">
              <canvas id="myChart2"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>