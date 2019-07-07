<main class="container my-3 py-3 d-flex align-items-center justify-content-center">
    <div class="card w-100">
        <div class="card-header">
            <h3 class="text-primary text-truncate">Clientes</h3>
            <small>Esta área serve para listar os clientes da empresa.</small>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr id="head">
                        <th scope="col">
                            ID Cartão
                        </th>
                        <th scope="col">
                            Nome
                        </th>
                        <th scope="col">
                            Localização
                        </th>
                        <th scope="col">
                            Data Nascimento
                        </th>
                        <th scope="col">
                            Data Fidelização
                        </th>
                        <th scope="col">Pontos</th>
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
                <h5 class="modal-title" id="modalTitle">Avaliar Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12 h3"></div>
                        <div class="col-12 h3"></div>
                        <div class="col-12 h3">
                            <div class="md-form">
                                <input type="number" min="1" max="5" id="rating" class="form-control">
                                <label for="rating">Rating</label>
                                <div class="form-text"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" id="atualizar">Atualizar</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>