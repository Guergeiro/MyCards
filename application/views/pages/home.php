<div class="container pt-5">
  <div class="card">
    <div class="card-header">
      <h3 class="text-primary text-truncate">Estatísticas Gerais</h3>
      <small class="ml-1">Nesta área estão presentes as estatísticas gerais da Empresa.</small>
    </div>

    <div class="card-body">
      <div class="row pb-2" style="text-align: center">
        <!-- Main Block Card -->
        <div class="col-sm teste hoverable">
          <i class="fas fa-users fa-5x text-primary"></i><br>
          <small>Clientes Fidelizados</small>
        </div>
        <!-- Hover effect cards -->
        <div class="col-sm d-none p-2" id="hover1">
          <small>Selecione <strong class="text-primary">Clientes Fidelizados</strong> para visualizar as estatísticas de
            fidelização de clientes na Empresa.</small>
        </div>

        <div class="col-sm teste">
          <i class="fas fa-layer-group fa-5x text-primary"></i><br>
          <small>Crescimento da Empresa</small>
        </div>
        <div class="col-sm d-none" id="hover2">
          <small>Selecione <strong class="text-primary">Crescimento da Empresa</strong> para visualizar
            as estatísticas de fidelização de clientes na Empresa.</small>
        </div>

        <div class="col-sm teste">
          <i class="fas fa-star fa-5x text-primary"></i><br>
          <small>Crescimento de Rating</small>
        </div>
        <div class="col-sm d-none" id="hover3">
          <small>Selecione <strong class="text-primary">Crescimento de Rating</strong> para visualizar as estatísticas
            de
            fidelização de clientes na Empresa.</small>
        </div>

        <div class="col-sm teste">
          <i class="fas fa-money-bill-wave fa-5x text-primary"></i><br>
          <small>Campanhas Utilizadas</small>
        </div>
        <div class="col-sm d-none" id="hover4">
          <small>Selecione <strong class="text-primary">Campanhas Utilizadas</strong> para visualizar as estatísticas
            de
            fidelização de clientes na Empresa.</small>
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