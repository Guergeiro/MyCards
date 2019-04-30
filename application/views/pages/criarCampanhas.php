<div class="container-fluid ctnFluid">
    <div class="row pt-3 pb-3">
        <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="row">

                <div class="cold-md-12 col-xs-12 col-sm-12">

                    <div class="row">

                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="card h-100">
                                <div class="card-header bg-white">
                                    <h3 class="text-primary">Tipo de Campanha</h3>
                                    <small class="ml-2">Selecione um tipo de Campanha</small>
                                </div>
                                <div class="card-body">

                                    <div class="card border rounded border-0 shadow rounded">
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

                                    <div class="card border border-0 shadow rounded mb-2 mt-2">
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

                                    <div class="card border rounded border-0 shadow">
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
                            <div class="card">
                                <div class="card-header bg-white">
                                    <h3 class="text-primary">Dados da Campanha</h3>
                                    <small class="ml-2">Complete os dados de Campanha</small>
                                </div>
                                <div class="card-body">

                                    <div class="col-md-12 col-xs-12 col-sm-12 p-0">
                                        <div class="row p-0">
                                            <div class="col-md-12 col-sm-12 col-xs-12 w-100 h-100">
                                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active " id="home-tab" data-toggle="tab" data-placement="top" title="Dados Campanha" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-file-signature fa-lg"></i></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="profile-tab" data-toggle="tab" data-placement="top" title="Filtros Campanha" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-palette fa-lg"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row pt-3 mr-0">
                                            <div class="col-md-8 col-sm-8 col-xs-8 divDataCampaign">

                                                <div class="cupaoDiv">
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
                                                                <select class="custom-select custom-select-sm">
                                                                    <option selected>Percentagem de desconto</option>
                                                                    <option value="1">10%</option>
                                                                    <option value="2">20%</option>
                                                                    <option value="3">30%</option>
                                                                    <option value="4">40%</option>
                                                                    <option value="5">50%</option>
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
                                                                    <input type="date" id="inputMDEx" class="form-control">
                                                                    <label for="inputMDExFinalCupao">Data Final:</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="buttons float-right">
                                                        <button type="button" class="btn btn-primary">Gravar</button>
                                                        <button type="button" class="btn btn-danger">Sair</button>
                                                    </div>
                                                </div>

                                                <div class="raspadinhaDiv">

                                                </div>

                                                <div class="carimboDiv">

                                                </div>

                                            </div>
                                            <div class="col-md-4 col-xs-4 col-sm-4 p-0 w-100 shadow h-100 cardPreviewCol ">
                                                <div class="card cardPreview border-0 shadow h-100 w-100">
                                                    <div class="card-header bg-white text-primary w-100 h-100">
                                                        <h6 class="">Pré-Visualização</h6>
                                                    </div>
                                                    <div class="card-body">

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