<div class="container pt-3">
  <div class="card">
    <div class="card-header">
      <h3 class="text-primary text-truncate">Estatísticas Gerais</h3>
      <small class="ml-1">Nesta área estão presentes as estatísticas gerais da Empresa.</small>
    </div>

    <div class="card-body">
      <div class="row" style="text-align: center">
        <div class="col-6 col-md-3 teste shadow p-2 my-2 text-primary" data-toggle="tooltip" data-placement="top" title="Selecione para visualizar as estatísticas de
          fidelização de clientes na Empresa.">
          <i class="fas fa-users fa-fw" style="font-size: 5vw;"></i><br>
          <small>Clientes Fidelizados</small>
        </div>

        <div class="col-6 col-md-3 teste shadow p-2 my-2 text-muted" data-toggle="tooltip" data-placement="top" title="Selecione para visualizar as estatísticas de
          crescimento da Empresa.">
          <i class=" fas fa-layer-group fa-fw" style="font-size: 5vw;"></i><br>
          <small>Crescimento da Empresa</small>
        </div>

        <div class="col-6 col-md-3 teste shadow p-2 my-2 text-muted" data-toggle="tooltip" data-placement="top" title="Selecione para visualizar as estatísticas de
          crescimento de rating da Empresa.">
          <i class=" fas fa-star fa-fw" style="font-size: 5vw;"></i><br>
          <small>Crescimento de Rating</small>
        </div>

        <div class="col-6 col-md-3 teste shadow p-2 my-2 text-muted" data-toggle="tooltip" data-placement="top" title="Selecione para visualizar as estatísticas de
          campanhas utilizadas da Empresa.">
          <i class=" fas fa-money-bill-wave fa-fw" style="font-size: 5vw;"></i><br>
          <small>Campanhas Utilizadas</small>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div id="chart_container">
            <canvas id="myChartBar"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>