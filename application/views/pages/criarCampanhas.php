<div id="fluidContainerAcceser" class="container-fluid">
    <div class="row p-2">
        <div class="card w-100 h-100 border-0 rounded shadow">
            <div class="card-header bg-white">
                <div class="row">
                    <div class="col-10">
                        <h5 class="text-primary">Tipo de Campanha</h5>
                        <small class="ml-1">Selecione o Tipo de Campanha desejado.</small>
                    </div>
                    <div class="col-2 mt-3">
                        <a class="clickToggle" value=""><i class="fas fa-arrow-down text-primary fa-2x setaOrder"></i></a>
                    </div>
                </div>
            </div>
            <div class="card-body" id="collapseTipoCampanha">
                <div class="row">
                    <div class="col-12">
                        <div class="row d-xs-block">
                            <div class="col-12 col-sm-4 mt-2">
                                <div id="cupaoCartao" class="card border-0 shadow h-100">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 col-xl-4 mt-2 text-center">
                                                <i class="fas fa-tags fa-5x text-primary"></i>
                                            </div>
                                            <div class="col-12 col-xl-8 mt-3 text-center text-xl-left">
                                                <h6 class="text-primary">Campanha de Cupão</h6>
                                                <div class="smalldiv ml-1">
                                                    <small class="text-primary text-justify">Tipo de Campanha Cupão, ideal para a atribuição de um desconto sobre um serviço.</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-white">
                                        <div class="row">
                                            <div class="col-10">
                                                <small class="text-primary">Clique no Cupão para criar a campanha!</small>
                                            </div>
                                            <div class="col-2">
                                                <i class="fas fa-arrow-right text-primary fa-sm float-right mt-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 mt-2">
                                <div id="carimboCartao" class="card border-0 shadow h-100">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 col-xl-4 mt-2 text-center">
                                                <i class="fas fa-clipboard-list fa-5x text-primary"></i>
                                            </div>
                                            <div class="col-12 col-xl-8 mt-3 text-center text-xl-left">
                                                <h6 class="text-primary">Campanha de Carimbo</h6>
                                                <div class="smalldiv ml-1">
                                                    <small class="text-primary text-justify">Tipo de Campanha Carimbo, ideal para a atribuição de um prémio a longo prazo.</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-white">
                                        <div class="row">
                                            <div class="col-10">
                                                <small class="text-primary">Clique no Carimbo para criar a campanha!</small>
                                            </div>
                                            <div class="col-2">
                                                <i class="fas fa-arrow-right text-primary fa-sm float-right mt-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 mt-2">
                                <div id="raspadinhaCartao" class="card border-0 shadow h-100">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 col-xl-4 mt-2 text-center">
                                                <i class="fas fa-award fa-5x text-primary"></i>
                                            </div>
                                            <div class="col-12 col-xl-8 mt-3 text-center text-xl-left">
                                                <h6 class="text-primary">Campanha de Raspadinha</h6>
                                                <div class="smalldiv ml-1">
                                                    <small class="text-primary text-justify">Tipo de Campanha Raspadinha, ideal para a atribuição de um prémio a curto prazo.</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-white">
                                        <div class="row">
                                            <div class="col-10">
                                                <small class="text-primary">Clique na Raspadinha para criar a campanha!</small>
                                            </div>
                                            <div class="col-2">
                                                <i class="fas fa-arrow-right text-primary fa-sm float-right mt-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row p-2 ">
        <div class="card h-100 w-100 border-0 shadow">
            <div class="card-header bg-white">
                <h5 class="text-primary">Dados de Campanha</h5>
                <small class="ml-1">Preencha os dados da Campanha Selecionada.</small>
                <div class="filtrosPopUp float-right">
                    <a href="#" data-toggle="modal" data-target="#fullHeightModalRight"><i class="fas fa-sort-amount-up fa-lg text-primary"></i></a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-8">

                        <div class="cupaoForm ml-2 d-none">
                            <h6 class="text-primary">Cupão - Dados Informátivos</h6>
                            <small class="ml-1">Preencha os dados informátivos do Cupão.</small>
                            <hr class="w-100">
                            <div class="cupaoFormInfo ml-2 mt-0">
                                <!-- Material outline input -->
                                <div class="md-form md-outline w-100">
                                    <input type="text" id="cupaoDesignacao" class="form-control form-control-sm" maxlength="100">
                                    <label for="cupaoDesignacao">Designação da Campanha</label>
                                    <small class="text-primary">Designação da Campanha pode ter (0-100) caracteres.</small>
                                </div>
                                <!-- Material outline input -->
                                <div class="md-form md-outline w-100">
                                    <input type="text" id="cupaoDescricao" class="form-control form-control-sm" maxlength="200">
                                    <label for="cupaoDescricao">Descrição Campanha</label>
                                    <small class="text-primary">Descrição da Campanha pode ter (0-200) caracteres.</small>
                                </div>
                            </div>
                            <hr>
                            <h6 class="text-primary">Cupão - Dados Gerais</h6>
                            <small class="ml-1">Preencha os dados gerais do Cupão.</small>
                            <hr>
                            <div class="cupaoFormGeral ml-1 mr-1 mt-0">
                                <h6 class="text-primary">Valor Cupão</h6>
                                <small class="ml-1">Selecione a percentagem de desconto do Cupão.</small>
                                <hr>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <select id="cupaoDescontoValor" class="custom-select custom-select-sm border-0">
                                                <option selected>Percentagem de desconto</option>
                                                <option value="10%">10%</option>
                                                <option value="20%">20%</option>
                                                <option value="30%">30%</option>
                                                <option value="40%">40%</option>
                                                <option value="50%">50%</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <h6 class="text-primary mt-4">Data Cupão</h6>
                                <small class="ml-1">Preencha a data do Cupão.</small>
                                <hr>
                                <div class="col-md-12 col-xs-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-6 col-sm-6">
                                            <div class="md-form">
                                                <input type="date" id="cupaoDataInicial" class="form-control">
                                                <label for="cupaoDataInicial">Data Inicio:</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-6 col-sm-6">
                                            <div class="md-form">
                                                <input type="date" id="cupaoDataFinal" class="form-control">
                                                <label for="cupaoDataFinal">Data Final:</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cupaoBtn text-center text-sm-right">
                                <button type="button" class="btn btn-primary">Criar Campanha</button>
                            </div>
                        </div>

                        <div class="carimboForm ml-2 d-none">
                            <h6 class="text-primary">Carimbo - Dados Informátivos</h6>
                            <small class="ml-1">Preencha os dados informátivos do Carimbo.</small>
                            <hr class="w-100">
                            <div class="cupaoFormInfo ml-2 mt-0">
                                <!-- Material outline input -->
                                <div class="md-form md-outline w-100">
                                    <input type="text" id="carimboDesignacao" class="form-control form-control-sm" maxlength="100">
                                    <label for="carimboDesignacao">Designação da Campanha</label>
                                    <small class="text-primary">Designação da Campanha pode ter (0-100) caracteres.</small>
                                </div>
                                <!-- Material outline input -->
                                <div class="md-form md-outline w-100">
                                    <input type="text" id="carimboPremio" class="form-control form-control-sm" maxlength="50">
                                    <label for="carimboPremio">Prémio Campanha</label>
                                    <small class="text-primary">Prémio da Campanha pode ter (0-50) caracteres.</small>
                                </div>
                            </div>
                            <hr>
                            <h6 class="text-primary">Carimbo - Dados Gerais</h6>
                            <small class="ml-1">Preencha os dados gerais do Carimbo.</small>
                            <hr>
                            <div class="carimboFormGeral ml-1 mr-1 mt-0">
                                <h6 class="text-primary">Número de Carimbos</h6>
                                <small class="ml-1">Selecione o número de Carimbos.</small>
                                <hr>

                                <!-- Material input -->
                                <div class="md-form">
                                    <input type="number" id="numberCarimbo" class="form-control" min="0">
                                    <label for="numberCarimbo">Número de Elementos no Carimbo</label>
                                    <small class="text-primary">Número de Carimbos têm de ser (0<sup>+</sup>).</small>
                                </div>

                                <h6 class="text-primary mt-4">Data Carimbo</h6>
                                <small class="ml-1">Preencha a data do Carimbo.</small>
                                <hr>

                                <div class="col-md-12 col-xs-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-6 col-sm-6">
                                            <div class="md-form">
                                                <input type="date" id="carimboDateInicio" class="form-control">
                                                <label for="carimboDateInicio">Data Inicio:</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-6 col-sm-6">
                                            <div class="md-form">
                                                <input type="date" id="carimboDateFinal" class="form-control">
                                                <label for="carimboDateFinal">Data Final:</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cupaoBtn text-center text-sm-right">
                                <button type="button" class="btn btn-primary">Criar Campanha</button>
                            </div>
                        </div>

                        <div class="raspadinhaForm ml-2 d-none">
                            <h6 class="text-primary">Raspadinha - Dados Informátivos</h6>
                            <small class="ml-1">Preencha os dados informátivos da Raspadinha.</small>
                            <hr class="w-100">
                            <div class="raspadinhaFormInfo ml-2 mt-0">
                                <!-- Material outline input -->
                                <div class="md-form md-outline w-100">
                                    <input type="text" id="raspadinhaDesignacao" class="form-control form-control-sm" maxlength="100">
                                    <label for="raspadinhaDesignacao">Designação da Campanha</label>
                                    <small class="text-primary">Designação da Campanha pode ter (0-100) caracteres.</small>
                                </div>
                                <!-- Material outline input -->
                                <div class="md-form md-outline w-100">
                                    <input type="text" id="raspadinhaPremio" class="form-control form-control-sm" maxlength="50">
                                    <label for="raspadinhaPremio">Prémio Campanha</label>
                                    <small class="text-primary">Prémio da Campanha pode ter (0-50) caracteres.</small>
                                </div>
                                <!-- Material outline input -->
                                <div class="md-form md-outline w-100">
                                    <input type="text" id="raspadinhaCondicao" class="form-control form-control-sm" maxlength="50">
                                    <label for="raspadinhaCondicao">Condição Campanha</label>
                                    <small class="text-primary">Condição da Campanha pode ter (0-50) caracteres.</small>
                                </div>
                            </div>
                            <hr>
                            <h6 class="text-primary">Raspadinha - Dados Gerais</h6>
                            <small class="ml-1">Preencha os dados gerais da Raspadinha.</small>
                            <hr>
                            <div class="RaspadinhaFormGeral ml-1 mr-1 mt-0">

                                <h6 class="text-primary mt-4">Data Raspadinha</h6>
                                <small class="ml-1">Preencha a data do Raspadinha.</small>
                                <hr>

                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-6 col-sm-6">
                                            <div class="md-form">
                                                <input type="date" id="raspadinhaDateInicial" class="form-control">
                                                <label for="raspadinhaDateInicial">Data Inicio:</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-6 col-sm-6">
                                            <div class="md-form">
                                                <input type="date" id="raspadinhaDateFinal" class="form-control">
                                                <label for="raspadinhaDateFinal">Data Final:</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cupaoBtn text-center text-sm-right">
                                <button type="button" class="btn btn-primary">Criar Campanha</button>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="card border-0 shadow h-75">
                            <div class="card-header bg-white">
                                <h6 class="text-primary text-truncate">Pré-Visualização</h6>
                            </div>
                            <div class="card-body text-center mt-5">
                                <div class="row d-block">

                                    <div class="previewCupao d-none">
                                        <h3 id="previewDesignaçãoCampanhaCupao" for="previewDesignaçãoCampanha" class="text-primary mb-4"></h3>
                                        <h1 id="previewDescontoCampanha" for="previewDescontoCampanha" class="text-primary mb-4"></h1>
                                        <h3 id="previewDescriçãoCampanha" for="previewDescriçãoCampanha" class="text-primary mb-4"></h3>
                                        <h3 id="previewDataInicioCampanha" for="previewDataInicioCampanha" class="text-primary mb-4"></h3>
                                        <h3 id="previewDataCampanhaAte" for="previewDataCampanhaAte" class="text-primary mb-4 d-none">Até</h3>
                                        <h3 id="previewDataFinalCampanha" for="previewDataFinalCampanha" class="text-primary mb-4"></h3>
                                    </div>

                                    <div class="previewCarimbo d-none">
                                        <h3 id="previewDesignaçãoCampanhaCarimbo" for="previewDesignaçãoCampanha" class="text-primary mb-4"></h3>
                                        <h1 id="previewPremioCampanha" for="previewPremioCampanha" class="text-primary mb-4"></h1>
                                        <h3 id="previewNumeroCampanha" for="previewNumeroCampanha" class="text-primary mb-4"></h3>
                                        <h3 id="previewDataInicioCampanhaCarimbo" for="previewDataInicioCampanhaCarimbo" class="text-primary mb-4"></h3>
                                        <h3 id="previewDataCampanhaAteCarimbo" for="previewDataCampanhaAteCarimbo" class="text-primary mb-4 d-none">Até</h3>
                                        <h3 id="previewDataFinalCampanhaCarimbo" for="previewDataFinalCampanhaCarimbo" class="text-primary mb-4"></h3>
                                    </div>

                                    <div class="previewRaspadinha d-none">
                                        <h3 id="previewDesignaçãoCampanhaRaspadinha" for="previewDesignaçãoCampanha" class="text-primary mb-4"></h3>
                                        <h1 id="previewPremioCampanhaRaspadinha" for="previewPremioCampanhaRaspadinha" class="text-primary mb-4"></h1>
                                        <h3 id="previewCondiçãoCampanha" for="previewCondiçãoCampanha" class="text-primary mb-4"></h3>
                                        <h3 id="previewDataInicioCampanhaRaspadinha" for="previewDataInicioCampanhaRaspadinha" class="text-primary mb-4"></h3>
                                        <h3 id="previewDataCampanhaAteRaspadinha" for="previewDataCampanhaAteRaspadinha" class="text-primary mb-4 d-none">Até</h3>
                                        <h3 id="previewDataFinalCampanhaRaspadinha" for="previewDataFinalCampanhaRaspadinha" class="text-primary mb-4"></h3>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Full Height Modal Right -->
<div class="modal fade right" id="fullHeightModalRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
    <div class="modal-dialog modal-full-height modal-right" role="document">


        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title w-100 text-primary" id="myModalLabel">Filtros Campanha</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row d-block">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <big class="text-primary">Selecionar Sexo Alvo:</big>
                            <hr>
                            <!-- Default switch -->
                            <div class="custom-control custom-switch p-0 ml-2">
                                <label for="" class="mr-4 pr-3 font-weight-bold text-primary"><i class="fas fa-male fa-2x mr-1"></i></label>
                                <input type="checkbox" class="custom-control-input buttonSwitch bg-primary" id="customSwitches">
                                <span class="lever"></span>
                                <label class="custom-control-label font-weight-bold text-secondary " for="customSwitches"><i class="fas fa-female fa-2x ml-4 "></i></label>
                            </div>
                            <small class="pl-2">Selecionar apenas em caso de individualidade!</small>
                        </div>
                        <hr>
                        <div class="col-md-12 col-sm-12 col-xs-12">

                            <big class="text-primary">Selecionar Cidade Alvo:</big>
                            <hr>
                            <select id="selectValor" class="custom-select custom-select-sm border-0">
                                <option selected>Localidade Campanha</option>
                                <option class="" value="10%">Viseu</option>
                                <option class="" value="20%">Lisboa</option>
                            </select>
                            <small class="pl-2">Selecionar apenas em caso de individualidade!</small>
                        </div>
                        <hr>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <big class="text-primary">Selecionar Idade Alvo:</big>
                            <hr>
                            <label for="customRange2" class="text-primary">Alcance de Idade</label>
                            <select id="selectValor" class="custom-select custom-select-sm border-0 w-25 float-right">
                                <option selected>Filtro</option>
                                <option class="" value="10%">Maior</option>
                                <option class="" value="20%">Menor</option>
                            </select>
                            <br>
                            <small class="pl-2">Cada salto representa 5 anos!</small>
                            <input type="range" class="custom-range" min="1" max="20" id="customRange2">
                            <small class="pl-1">Idade da Campanha:</small>
                            <small class="" id="idadeGG"></small>
                            <br>
                            <small class="pl-2">Selecionar apenas em caso de individualidade!</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-primary">Gravar Filtros</button>

            </div>
        </div>
    </div>
</div>
<!-- Full Height Modal Right -->