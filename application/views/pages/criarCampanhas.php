<div class="container-fluid ctnFluid">
    <div class="row pt-3 pb-3 h-100">
        <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="row">

                <div class="cold-md-12 col-xs-12 col-sm-12">

                    <div class="row heightRow mb-2">

                        <div class="col-md-4 col-sm-4 col-xs-4 cardTipoCampanha">
                            <div class="card h-100 cardTipoCampanha">
                                <div class="card-header bg-white">
                                    <h3 class="text-primary">Tipo de Campanha</h3>
                                    <small class="ml-2">Selecione um tipo de Campanha</small>
                                </div>
                                <div class="card-body">

                                    <div class="card border rounded border-0 shadow rounded cuponJS">
                                        <div class="card-body hoverable hoverCard">
                                            <div class="col-md-12 col-xs-12 col-sm-12">
                                                <div class="row dBlock">
                                                    <div class="col-md-4 col-xs-4 col-sm-4">
                                                        <i class="fas fa-tags fa-5x text-primary dataCardL"></i>
                                                    </div>
                                                    <div class="col-md-8 col-sm-8 col-xs-8 mt-3 elementResize">
                                                        <h6 class="text-primary">Crie um Cupão!</h6>
                                                        <small class="text-primary">Selecione para criar um Cupão.</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card border border-0 shadow rounded mb-2 mt-2 raspadinhaJS ">
                                        <div class="card-body hoverable hoverCard">
                                            <div class="col-md-12 col-xs-12 col-sm-12">
                                                <div class="row dBlock">
                                                    <div class="col-md-4 col-xs-4 col-sm-4">
                                                        <i class="fas fa-award fa-5x text-primary dataCardL"></i>
                                                    </div>
                                                    <div class="col-md-8 col-sm-8 col-xs-8 mt-3 elementResize">
                                                        <h6 class="text-primary">Crie uma Raspadinha!</h6>
                                                        <small class="text-primary">Selecione para criar uma Raspadinha.</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card border rounded border-0 shadow carimboJS">
                                        <div class="card-body hoverable hoverCard">
                                            <div class="col-md-12 col-xs-12 col-sm-12">
                                                <div class="row dBlock">
                                                    <div class="col-md-4 col-xs-4 col-sm-4">
                                                        <i class="fas fa-keyboard fa-5x text-primary dataCardL"></i>
                                                    </div>
                                                    <div class="col-md-8 col-sm-8 col-xs-8 mt-3 elementResize">
                                                        <h6 class="text-primary">Crie um cartão de Carimbos!</h6>
                                                        <small class="text-primary">Selecione para criar uma Raspadinha.</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8 col-sm-8 col-xs-8 cardColTag">
                            <div class="card h-100">
                                <div class="card-header bg-white">
                                    <h3 class="text-primary">Dados da Campanha</h3>
                                    <div class="filtrosPopUp float-right">
                                        <a href="#" data-toggle="modal" data-target="#fullHeightModalRight"><i class="fas fa-sort-amount-up fa-lg text-primary"></i></a>
                                    </div> <small class="ml-2">Complete os dados de Campanha</small>
                                </div>
                                <div class="card-body ">

                                    <div class="col-md-12 col-xs-12 col-sm-12 p-0">
                                        <div class="row mr-0">

                                            <div class="col-md-8 col-sm-8 col-xs-8 divDataCampaign">

                                                <div class="cupaoDiv d-none">
                                                    <h6 class="text-primary">Designação Cupão</h6>
                                                    <hr>
                                                    <div class="infoCupao">
                                                        <!-- Material outline counter input -->
                                                        <div class="md-form md-outline">
                                                            <input id="input-char-counter1" type="text" maxlength="50" class="form-control">
                                                            <label for="input-char-counter1">Nome de Campanha</label>
                                                            <small id="passwordHelpBlockMD" class="form-text text-muted">
                                                                Nome da Campanha (0-50 caracteres).
                                                            </small>
                                                        </div>

                                                        <!-- Material outline counter input -->
                                                        <div class="md-form md-outline">
                                                            <input id="input-char-counter2" type="text" maxlength="100" class="form-control">
                                                            <label for="input-char-counter2">Descrição de Campanha</label>
                                                            <small id="passwordHelpBlockMD" class="form-text text-muted">
                                                                Descricao da Campanha (0-100 caracteres).
                                                            </small>
                                                        </div>

                                                    </div>
                                                    <h6 class="text-primary">Valor Cupão</h6>
                                                    <hr>
                                                    <div class="col-md-12 col-xs-12 col-sm-12">
                                                        <div class="row">
                                                            <div class="col-md-12 col-xs-12 col-sm-12">
                                                                <select id="selectValor" class="custom-select custom-select-sm border-0">
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
                                                    <hr>
                                                    <div class="col-md-12 col-xs-12 col-sm-12">
                                                        <div class="row">
                                                            <div class="col-md-6 col-xs-6 col-sm-6">
                                                                <div class="md-form">
                                                                    <input type="date" id="inputMDEx" class="form-control">
                                                                    <label for="inputMDExFinalCupao">Data Inicio:</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-xs-6 col-sm-6">
                                                                <div class="md-form">
                                                                    <input type="date" id="inputMDEx2" class="form-control">
                                                                    <label for="inputMDExFinalCupao">Data Final:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="buttons float-right btnGravar">
                                                        <button type="button" class="btn btn-primary">Gravar</button>
                                                    </div>
                                                </div>

                                                <div class="raspadinhaDiv d-none">
                                                    <h6 class="text-primary">Designação Raspadinha</h6>
                                                    <hr>
                                                    <div class="infoRaspadinha">
                                                        <!-- Material outline counter input -->
                                                        <div class="md-form md-outline">
                                                            <input id="input-char-counter10" type="text" maxlength="50" class="form-control">
                                                            <label for="input-char-counter1">Nome de Campanha</label>
                                                            <small id="passwordHelpBlockMD" class="form-text text-muted">
                                                                Nome da Campanha (0-50 caracteres).
                                                            </small>
                                                        </div>

                                                        <!-- Material outline counter input -->
                                                        <div class="md-form md-outline">
                                                            <input id="input-char-counter11" type="text" maxlength="100" class="form-control">
                                                            <label for="input-char-counter2">Condição de Campanha</label>
                                                            <small id="passwordHelpBlockMD" class="form-text text-muted">
                                                                Condição da Campanha (0-100 caracteres).
                                                            </small>
                                                        </div>

                                                        <!-- Material outline counter input -->
                                                        <div class="md-form md-outline">
                                                            <input id="input-char-counter3" type="text" maxlength="100" class="form-control">
                                                            <label for="input-char-counter3">Prémio de Campanha</label>
                                                            <small id="passwordHelpBlockMD" class="form-text text-muted">
                                                                Prémio da Campanha (0-50 caracteres).
                                                            </small>
                                                        </div>
                                                    </div>


                                                    <div class="buttons float-right btnGravar">
                                                        <button type="button" class="btn btn-primary">Gravar</button>
                                                    </div>
                                                </div>

                                                <div class="carimboDiv d-none">
                                                    <h6 class="text-primary">Designação Carimbos</h6>
                                                    <hr>
                                                    <div class="infoCarimbos">
                                                        <!-- Material outline counter input -->
                                                        <div class="md-form md-outline">
                                                            <input id="input-char-counter30" type="text" maxlength="50" class="form-control">
                                                            <label for="input-char-counter1">Nome de Campanha</label>
                                                            <small id="passwordHelpBlockMD" class="form-text text-muted">
                                                                Nome da Campanha (0-50 caracteres).
                                                            </small>
                                                        </div>

                                                        <!-- Material outline counter input -->
                                                        <div class="md-form md-outline">
                                                            <input id="input-char-counter31" type="text" maxlength="50" class="form-control">
                                                            <label for="input-char-counter1">Prémio de Campanha</label>
                                                            <small id="passwordHelpBlockMD" class="form-text text-muted">
                                                                Prémio da Campanha (0-50 caracteres).
                                                            </small>
                                                        </div>


                                                        <!-- Material outline counter input -->
                                                        <div class="md-form md-outline">
                                                            <input id="numberExample" type="number" min="0" class="form-control">
                                                            <label for="numberExample">Número de Carimbos</label>
                                                            <small id="passwordHelpBlockMD" class="form-text text-muted">
                                                                Número de Carimbos(0<sup>+</sup>).
                                                            </small>
                                                        </div>
                                                    </div>


                                                    <div class="buttons float-right btnGravar">
                                                        <button type="button" class="btn btn-primary">Gravar</button>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-md-4 col-xs-4 col-sm-4 p-0 w-100 shadow h-100 cardPreviewCol ">
                                                <div class="card cardPreview border-0 shadow h-100 w-100">
                                                    <div class="card-header bg-white text-primary w-100 h-100">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 p-0">
                                                            <div class="row p-0">
                                                                <div class="col-md-10 col-sm-10 col-xs-10  w-75">
                                                                    <h6 id="preTruncate" class="">Amostra</h6>
                                                                </div>
                                                                <div id="cleaner" class="col-md-2 col-sm-2 col-xs-2 p-0 w-25">
                                                                    <a href="#"><i class="fas fa-broom fa-lg text-primary"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body text-center">
                                                        <div class="previewCupao d-none">
                                                            <h6 id="desigCupaoPreview" class="text-primary"></h6>
                                                            <h4 id="desigCupaoPreviewValor" class="text-primary font-weight-bold mt-4"></h4>
                                                            <h6 id="desigCupaoPreviewDesi" class="text-primary mt-4">
                                                                </h4>
                                                                <h6 id="designCupaoDataP" class="text-primary mt-4 mb-2"></h6>
                                                                <h6 class="text-primary mb-2 mt-2 d-none ateLabel">Até</h6>
                                                                <h6 id="designCupaoDataF" class="text-primary mt-2"></h6>
                                                        </div>
                                                        <div class="previewRaspadinha d-none">
                                                            <h6 id="desigRaspadinhaPreview" class="text-primary"></h6>
                                                            <img src="assets\imagens\raspadinhaCover.png" alt="" class="imgResize">
                                                            <div id="selectPrize" class="d-none mt-4 mb-4 selectPrize">
                                                                <h3 class="text-primary">Ganhou!</h3>
                                                                <h4 id="desigRaspadinhaPreviewPremio" class="text-primary"></h4>
                                                            </div>
                                                            <h6 id="desigRaspadinhaPreviewCondição" class="text-primary mt-2"></h6>
                                                        </div>
                                                        <div class="previewCarimbos d-none">
                                                            <h6 id="desigCarimboPreviewDesig" class="text-primary"></h6>
                                                            <h6 id="desigCarimboPreviewPc" class="text-primary mt-4"></h6>
                                                            <h6 id="desigCarimboPreviewNc" class="text-primary mt-4"></h6>
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
                            <i class="fas fa-flag fa-2x text-primary"></i>
                            
                            <br>
                            <i class="fas fa-flag fa-2x text-primary mt-2"></i>

                            <br>
                            <small class="pl-2">Selecionar apenas em caso de individualidade!</small>
                        </div>

                        <hr>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- Full Height Modal Right -->