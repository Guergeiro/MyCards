<main class="container my-3 py-3 d-flex align-items-center justify-content-center">
  <div class="card w-100">
    <div class="card-header">
      <h3 class="text-primary text-truncate">Listar Campanha</h3>
      <small>Esta área serve para listar as campanhas.</small>
    </div>
    <div class="card-body table-responsive">
      <table class="table table-hover">
        <thead>
          <tr id="head">
            <th scope="col">
              #
            </th>
            <th scope="col">
              Tipo Campanha
            </th>
            <th scope="col">
              Data Inicio
            </th>
            <th scope="col">
              Data Fim
            </th>
            <th scope="col">
              Designação
            </th>
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table>
    </div>
  </div>
</main>

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle">Designação</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="fas fa-times"></i>
        </button>
      </div>
      <div class="modal-body">
        <div class="chart-container">
          <canvas id="chart"></canvas>
        </div>
      </div>
      <div class="modal-footer">
        <a href="<?php echo base_url("infoCampanha")?>" class="btn btn-outline-primary" id="btnMaisInfo">Mais
          informação</a>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>