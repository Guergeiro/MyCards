<main class="container my-3 py-3 d-flex align-items-center justify-content-center">
    <div class="card">
        <div class="card-header">
            <h3 class="text-primary text-truncate">Criar Campanha</h3>
            <small>Esta área serve para criação de campanhas.</small>
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="cupoes-tab" data-toggle="tab" href="#cupoes" role="tab"
                        aria-controls="cupoes" aria-selected="true">Cupões</a>
                </li>
                <li class="nav-item">
                    <?php if ($this->session->userdata("TipoEmpresa") < 2): ?>
                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip"
                        title="Apenas para premium nivel 2 ou superior.">
                        <a class="nav-link disabled" id="carimbos-tab" tabindex="-1" aria-disabled="true"
                            data-toggle="tab" href="#carimbos" role="tab" aria-controls="carimbos"
                            aria-selected="false">Carimbos</a>
                    </span>
                    <?php else: ?>
                    <a class="nav-link" id="carimbos-tab" data-toggle="tab" href="#carimbos" role="tab"
                        aria-controls="carimbos" aria-selected="false">Carimbos</a>
                    <?php endif; ?>
                </li>
                <li class="nav-item">
                    <?php if ($this->session->userdata("TipoEmpresa") < 2): ?>
                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip"
                        title="Apenas para premium nivel 2 ou superior.">
                        <a class="nav-link disabled" id="pontos-tab" tabindex="-1" aria-disabled="true"
                            data-toggle="tab" href="#pontos" role="tab" aria-controls="pontos"
                            aria-selected="false">Pontos</a>
                    </span>
                    <?php else: ?>
                    <a class="nav-link" id="pontos-tab" data-toggle="tab" href="#pontos" role="tab"
                        aria-controls="pontos" aria-selected="false">Pontos</a>
                    <?php endif; ?>
                </li>
            </ul>

            <div class="tab-content mt-2">
                <div class="row tab-pane fade show active" id="cupoes" role="tabpanel" aria-labelledby="cupoes-tab">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-2 text-center text-primary">
                                        <i class="fas fa-percent fa-fw fa-5x"></i>
                                    </div>
                                    <div class="col-md-10">
                                        <h4 class="text-primary">Cupões</h4>
                                        <p>Ideal para a atribuição de desconto imediato sobre um ou mais
                                            produtos.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="col-12 my-3">Dados Campanha</h5>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12 md-form">
                                                <input type="text" name="designacao" id="designacaoCupao"
                                                    class="form-control">
                                                <label class="ml-3" for="designacaoCupao">Designação da campanha</label>
                                                <div class="form-text"></div>
                                            </div>
                                            <div class="col-12 md-form">
                                                <input type="text" name="descricao" id="descricaoCupao"
                                                    class="form-control">
                                                <label class="ml-3" for="descricaoCupao">Descrição da campanha</label>
                                                <div class="form-text"></div>
                                            </div>
                                            <div class="col-12 md-form">
                                                <input type="number" name="valor" id="valorCupao" class="form-control"
                                                    min="1" max="100">
                                                <label class="ml-3" for="valorCupao">Valor da campanha</label>
                                                <div class="form-text"></div>
                                            </div>
                                            <div class="col-6 md-form">
                                                <input type="date" name="dataInicio" id="dataInicioCupao"
                                                    class="form-control">
                                                <label class="ml-3" for="dataInicioCupao">Data de inicio da
                                                    campanha</label>
                                                <div class="form-text"></div>
                                            </div>
                                            <div class="col-6 md-form">
                                                <input type="date" name="dataFim" id="dataFimCupao"
                                                    class="form-control">
                                                <label class="ml-3" for="dataFimCupao">Data de fim da campanha</label>
                                                <div class="form-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="button" class="btn btn-primary" id="buttonCupao">Criar
                                            campanha</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if ($this->session->userdata("TipoEmpresa") > 1): ?>
                <div class="row tab-pane fade show" id="carimbos" role="tabpanel" aria-labelledby="carimbos-tab">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-2 text-center text-primary">
                                        <i class="fab fa-buromobelexperte fa-fw fa-5x"
                                            style="transform: rotate(180deg);"></i>
                                    </div>
                                    <div class="col-md-10">
                                        <h4 class="text-primary">Carimbos</h4>
                                        <p>Ideal para atribuição de um prémio ao completar um certo número de compras.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="col-12 my-3">Dados Campanha</h5>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12 md-form">
                                                <input type="text" name="designacao" id="designacaoCarimbo"
                                                    class="form-control">
                                                <label class="ml-3" for="designacaoCarimbo">Designação da
                                                    campanha</label>
                                                <div class="form-text"></div>
                                            </div>
                                            <div class="col-12 md-form">
                                                <input type="text" name="descricao" id="descricaoCarimbo"
                                                    class="form-control">
                                                <label class="ml-3" for="descricaoCarimbo">Prémio da campanha</label>
                                                <div class="form-text"></div>
                                            </div>
                                            <div class="col-6 md-form">
                                                <input type="date" name="dataInicio" id="dataInicioCarimbo"
                                                    class="form-control">
                                                <label class="ml-3" for="dataInicioCarimbo">Data de inicio da
                                                    campanha</label>
                                                <div class="form-text"></div>
                                            </div>
                                            <div class="col-6 md-form">
                                                <input type="date" name="dataFim" id="dataFimCarimbo"
                                                    class="form-control">
                                                <label class="ml-3" for="dataFimCarimbo">Data de fim da campanha</label>
                                                <div class="form-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="button" class="btn btn-primary" id="buttonCarimbo">Criar
                                            campanha</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row tab-pane fade show" id="pontos" role="tabpanel" aria-labelledby="pontos-tab">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-2 text-center text-primary">
                                        <i class="fas fa-coins fa-fw fa-5x"></i>
                                    </div>
                                    <div class="col-md-10">
                                        <h4 class="text-primary">Pontos</h4>
                                        <p>Ideal para atribuição de um prémio quando o utilizador atingir um certo
                                            patamar de pontos.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="col-12 my-3">Dados Campanha</h5>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12 md-form">
                                                <input type="text" name="designacao" id="designacaoPonto"
                                                    class="form-control">
                                                <label class="ml-3" for="designacaoPonto">Designação da
                                                    campanha</label>
                                                <div class="form-text"></div>
                                            </div>
                                            <div class="col-4 md-form">
                                                <input type="number" name="patamar" id="patamar" class="form-control"
                                                    min="0">
                                                <label class="ml-3" for="patamar">Pontos do Patamar</label>
                                                <div class="form-text"></div>
                                            </div>
                                            <div class="col-8 md-form">
                                                <input type="text" name="premioPatamar" id="premioPatamar"
                                                    class="form-control">
                                                <label class="ml-3" for="premioPatamar">Prémio do Patamar</label>
                                                <div class="form-text"></div>
                                            </div>
                                            <div class="col-6 md-form">
                                                <input type="date" name="dataInicio" id="dataInicioPonto"
                                                    class="form-control">
                                                <label class="ml-3" for="dataInicio">Data de inicio da campanha</label>
                                                <div class="form-text"></div>
                                            </div>
                                            <div class="col-6 md-form">
                                                <input type="date" name="dataFim" id="dataFimPonto"
                                                    class="form-control">
                                                <label class="ml-3" for="dataFim">Data de fim da campanha</label>
                                                <div class="form-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="button" class="btn btn-primary" id="buttonPontos">Criar
                                        campanha</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>