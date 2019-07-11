<main class="container p-2 d-flex align-items-center justify-content-center">
    <div class="card">
        <div class="card-header">
            <h3 class="text-primary text-truncate">Ativar Campanha</h3>
            <small>Esta área serve para ativar as campanhas.</small>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="md-form form-lg mx-auto">
                        <input type="number" name="id_cartao" id="codigocartao" class="form-control form-control-lg">
                        <label for="codigocartao">Código Cartão</label>
                        <div class="form-text"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="md-form form-lg mx-auto">
                        <input type="number" name="id_campanha" id="codigocampanha"
                            class="form-control form-control-lg">
                        <label for="codigocampanha">Código Campanha</label>
                        <div class="form-text"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="md-form form-lg mx-auto">
                        <input type="number" name="valor" id="valor" class="form-control form-control-lg">
                        <label for="valor">Valor da Compra</label>
                        <div class="form-text"></div>
                    </div>
                </div>
                <div class="col-12">
                    <small>Nota 1: O valor de compra é sempre em euros (&euro;). O valor da compra é transformado (1:1) em pontos de cartão.</small>
                    <small>Nota 2: Quando o tipo de campanha é "Pontos", o valor de compra, apesar de obrigatório, é ignorado.</small>
                </div>
                <div class="col-12 text-center">
                    <button type="button" class="btn btn-primary" id="ativar">Ativar Campanha</button>
                </div>
            </div>
            <div class="row">

            </div>
        </div>
    </div>
</main>