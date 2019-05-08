<div class="container pt-3">
  <div class="card">
    <div class="card-header">
      <h3 class="text-primary text-truncate">Estatísticas Gerais</h3>
      <small class="ml-1">Nesta área estão presentes as estatísticas gerais da Empresa.</small>
    </div>

    <div class="card-body">
      <div class="row" style="text-align: center">
        <!-- Main Block Card -->
        <div class="col-sm teste shadow p-2 my-2 hoverable" data-toggle="tooltip" data-placement="top" title="Selecione para visualizar as estatísticas de
          fidelização de clientes na Empresa.">
          <i class="fas fa-users fa-fw text-primary" style="font-size: 5vw;"></i><br>
          <small>Clientes Fidelizados</small>
        </div>
        <div class="col-sm teste shadow p-2 my-2" data-toggle="tooltip" data-placement="top" title="Selecione para visualizar as estatísticas de
          crescimento da Empresa.">
          <i class=" fas fa-layer-group fa-fw text-primary" style="font-size: 5vw;"></i><br>
          <small>Crescimento da Empresa</small>
        </div>

        <div class="col-sm teste shadow p-2 my-2" data-toggle="tooltip" data-placement="top" title="Selecione para visualizar as estatísticas de
          crescimento de rating da Empresa.">
          <i class=" fas fa-star fa-fw text-primary" style="font-size: 5vw;"></i><br>
          <small>Crescimento de Rating</small>
        </div>

        <div class="col-sm teste shadow p-2 my-2" data-toggle="tooltip" data-placement="top" title="Selecione para visualizar as estatísticas de
          campanhas utilizadas da Empresa.">
          <i class=" fas fa-money-bill-wave fa-fw text-primary" style="font-size: 5vw;"></i><br>
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