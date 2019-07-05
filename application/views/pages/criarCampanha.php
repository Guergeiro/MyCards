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
                    <a class="nav-link <?php if ($this->session->userdata("TipoEmpresa") < 2): ?>disabled" tabindex="-1" aria-disabled="true" data-toggle="tooltip" data-placement="top" title="Apenas para premium 2."<?php endif; ?> id="carimbos-tab" data-toggle="tab" href="#carimbos" role="tab"
                        aria-controls="carimbos" aria-selected="false">Carimbos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($this->session->userdata("TipoEmpresa") < 2): ?>disabled" tabindex="-1" aria-disabled="true" data-toggle="tooltip" data-placement="top" title="Apenas para premium 2."<?php endif; ?> id="pontos-tab" data-toggle="tab" href="#pontos" role="tab"
                        aria-controls="pontos" aria-selected="false">Pontos</a>
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
                                        <small>Ideal para a atribuição de desconto imediato sobre um ou mais
                                            produtos.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="col-12 my-3">Dados Campanha</h5>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-12 md-form">
                                                <input type="text" name="designacao" id="designacaoCupao"
                                                    class="form-control">
                                                <label class="ml-3" for="designacaoCupao">Designação da campanha</label>
                                            </div>
                                            <div class="col-12 md-form">
                                                <input type="text" name="descricao" id="descricaoCupao"
                                                    class="form-control">
                                                <label class="ml-3" for="descricaoCupao">Descrição da campanha</label>
                                            </div>
                                            <div class="col-12 md-form">
                                                <input type="number" name="valor" id="valorCupao" class="form-control"
                                                    min="0">
                                                <label class="ml-3" for="valorCupao">Valor da campanha</label>
                                            </div>
                                            <div class="col-6 md-form">
                                                <input type="date" name="dataInicio" id="dataInicioCupao"
                                                    class="form-control">
                                                <label class="ml-3" for="dataInicioCupao">Data de inicio da
                                                    campanha</label>
                                            </div>
                                            <div class="col-6 md-form">
                                                <input type="date" name="dataFim" id="dataFimCupao"
                                                    class="form-control">
                                                <label class="ml-3" for="dataFimCupao">Data de fim da campanha</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-12">
                                                <h6>Pré-visualização</h6>
                                            </div>
                                            <div id="preVisualizacaoCupao"
                                                class="col m-3 p-3 shadow text-primary text-center text-break">
                                                <h5 data-name="designacao"></h5>
                                                <h4 data-name="valor"></h4>
                                                <h5 data-name="descricao"></h5>
                                                <h6 data-name="dataInicio"></h6>
                                                <h6 data-name="dataFim"></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="button" class="btn btn-primary" disabled>Criar campanha</button>
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
                                        <h4 class="text-primary">Carimbo</h4>
                                        <p>Ideal para atribuição de um prémio ao completar um certo número de compras.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="col-12 my-3">Dados Campanha</h5>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-12 md-form">
                                                <input type="text" name="designacao" id="designacaoCarimbo"
                                                    class="form-control">
                                                <label class="ml-3" for="designacaoCarimbo">Designação da
                                                    campanha</label>
                                            </div>
                                            <div class="col-12 md-form">
                                                <input type="text" name="descricao" id="descricaoCarimbo"
                                                    class="form-control">
                                                <label class="ml-3" for="descricaoCarimbo">Prémio da campanha</label>
                                            </div>
                                            <div class="col-12 md-form">
                                                <input type="number" name="valor" id="valorCarimbo" class="form-control"
                                                    min="0">
                                                <label class="ml-3" for="valorCarimbo">Valor da campanha</label>
                                            </div>
                                            <div class="col-6 md-form">
                                                <input type="date" name="dataInicio" id="dataInicioCarimbo"
                                                    class="form-control">
                                                <label class="ml-3" for="dataInicioCarimbo">Data de inicio da
                                                    campanha</label>
                                            </div>
                                            <div class="col-6 md-form">
                                                <input type="date" name="dataFim" id="dataFimCarimbo"
                                                    class="form-control">
                                                <label class="ml-3" for="dataFimCarimbo">Data de fim da campanha</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-12">
                                                <h6>Pré-visualização</h6>
                                            </div>
                                            <div id="preVisualizacaoCarimbo"
                                                class="col m-3 p-3 shadow text-primary text-center text-break">
                                                <h5 data-name="designacao"></h5>
                                                <h4 data-name="valor"></h4>
                                                <h5 data-name="Prémio"></h5>
                                                <h6 data-name="dataInicio"></h6>
                                                <h6 data-name="dataFim"></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="button" class="btn btn-primary" disabled>Criar campanha</button>
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
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-12 md-form">
                                                <input type="text" name="designacao" id="designacaoPontos"
                                                    class="form-control">
                                                <label class="ml-3" for="designacaoPontos">Designação da
                                                    campanha</label>
                                            </div>
                                            <div class="col-4 md-form">
                                                <input type="number" name="patamar1" id="patamar1" class="form-control"
                                                    min="0">
                                                <label class="ml-3" for="patamar1">Pontos do Patamar</label>
                                            </div>
                                            <div class="col-8 md-form">
                                                <input type="text" name="premioPatamar1" id="premioPatamar1"
                                                    class="form-control">
                                                <label class="ml-3" for="premioPatamar1">Prémio do Patamar</label>
                                            </div>
                                            <div class="col-4 md-form">
                                                <input type="number" name="patamar2" id="patamar2" class="form-control"
                                                    min="0">
                                                <label class="ml-3" for="patamar2">Pontos o Patamar</label>
                                            </div>
                                            <div class="col-8 md-form">
                                                <input type="text" name="premioPatamar2" id="premioPatamar2"
                                                    class="form-control">
                                                <label class="ml-3" for="premioPatamar2">Prémio do Patamar</label>
                                            </div>
                                            <div class="col-4 md-form">
                                                <input type="number" name="patamar3" id="patamar3" class="form-control"
                                                    min="0">
                                                <label class="ml-3" for="patamar3">Pontos do Patamar</label>
                                            </div>
                                            <div class="col-8 md-form">
                                                <input type="text" name="premioPatamar3" id="premioPatamar3"
                                                    class="form-control">
                                                <label class="ml-3" for="premioPatamar3">Prémio do Patamar</label>
                                            </div>

                                            <div class="col-6 md-form">
                                                <input type="date" name="dataInicio" id="dataInicio"
                                                    class="form-control">
                                                <label class="ml-3" for="dataInicio">Data de inicio da campanha</label>
                                            </div>
                                            <div class="col-6 md-form">
                                                <input type="date" name="dataFim" id="dataFim" class="form-control">
                                                <label class="ml-3" for="dataFim">Data de fim da campanha</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row">
                                            <div class="col-12">
                                                <h6>Pré-visualização</h6>
                                            </div>
                                            <div id="preVisualizacaoPontos"
                                                class="col m-3 p-3 shadow text-primary text-center text-break">
                                                <h5 data-name="designacao"></h5>
                                                <h4 data-name="valor"></h4>
                                                <h5 data-name="descricao"></h5>
                                                <h6 data-name="dataInicio"></h6>
                                                <h6 data-name="dataFim"></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="button" class="btn btn-primary" disabled>Criar campanha</button>
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