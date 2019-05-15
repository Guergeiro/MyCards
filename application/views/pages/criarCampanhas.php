<ul class="nav nav-tabs mt-2" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active " id="insertMenu" data-toggle="tab" href="#criarCampanha" role="tab" aria-controls="home" aria-selected="true">Dados Campanha</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " id="filtersMenu" data-toggle="tab" href="#filtrosCampanha" role="tab" aria-controls="profile" aria-selected="false">Filtros Campanha</a>
    </li>
</ul>
<div class="col-md-12 col-sm-12 mt-3">

    <div class="form-row">

        <div class="col-md-8 insertData" aria-labelledby="home-tab" id="criarCampanha">

            <div class="card mb-2">

                <div class="card-header text-center">
                    Criar Campanha
                </div>

                <div class="card-body">
                    <h5 class="card-title text-primary">Tipo de Campanha</h5>
                    <h6 class="card-subtitle text-muted mt-2 mb-2 ml-1">Selecione o tipo de campanha desejado.</h6>

                    <select class="custom-select" id="selectDesconto">
                        <option selected>Escolha o Desconto</option>
                        <option value="1">Cupão</option>
                        <option value="2">Raspadinhas</option>
                        <option value="3">Carimbos</option>
                    </select>

                    <hr>

                    <div class="switchDataCupoes d-none">

                        <h5 class="card-title text-primary">Dados do Cupão</h5>
                        <h6 class="card-subtitle mb-2 text-muted mt-2 ml-1">Preencha os dados necessários para criar Cupão.</h6>

                        <!-- Material form grid -->
                        <form>
                            <!-- Grid row -->
                            <div class="row mt-4">
                                <!-- Grid column -->
                                <div class="col-md-8">
                                    <!-- Material input -->
                                    <div class="md-form mt-1 ml-1">
                                        <input type="text" id="inputIconEx7" class="form-control">
                                        <label for="form1">Designação do Cupão</label>
                                    </div>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-4 text-center mt-2">
                                    <!-- Material input -->
                                    <select class="custom-select" id="selectDesconto">
                                        <option selected>Escolha o Desconto</option>
                                        <option value="1">Cupão</option>
                                        <option value="2">Raspadinhas</option>
                                        <option value="3">Carimbos</option>
                                    </select>

                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-12">
                                    <!-- Material input -->
                                    <div class="md-form mt-1 ml-1">
                                        <textarea id="textarea-char" class="form-control md-textarea" length="120" rows="1"></textarea>
                                        <label for="textarea-char">Descrição do Cupão</label>
                                    </div>
                                </div>
                                <!-- Grid column -->
                                <div class="col-md-12 d-flex flex-row">
                                    <div class="md-form ml-1 col-md-6">
                                        <input type="date" id="inputMDEx" class="form-control">
                                        <label for="inputMDExInicioCupao">Data Inicial do Cupão</label>
                                    </div>

                                    <div class="md-form ml-2 col-md-6">
                                        <input type="date" id="inputMDEx" class="form-control">
                                        <label for="inputMDExFinalCupao">Data Final do Cupão</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Grid row -->
                            <div class="float-right">
                                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                <button type="button" class="btn btn-primary">Criar Cupão</button>
                                <!-- Indicates a dangerous or potentially negative action -->
                                <button type="button" class="btn btn-danger">Cancelar Cupão</button>
                            </div>
                        </form>
                        <!-- Material form grid -->

                    </div>

                    <div class="switchDataRaspadinha d-none">
                        <h5 class="card-title text-primary">Dados da Raspadinha</h5>
                        <h6 class="card-subtitle mb-2 text-muted mt-2 ml-1">Preencha os dados necessários para criar Raspadinha.</h6>

                        <!-- Material form grid -->
                        <form>
                            <!-- Grid row -->
                            <div class="row mt-4">
                                <!-- Grid column -->
                                <div class="col-md-12">
                                    <!-- Material input -->
                                    <div class="md-form mt-1 ml-1">
                                        <input type="text" id="inputIconEx7" class="form-control">
                                        <label for="form1">Designação da Raspadinha</label>
                                    </div>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-12">
                                    <!-- Material input -->
                                    <div class="md-form mt-1 ml-1">
                                        <textarea id="textarea-char" class="form-control md-textarea" length="120" rows="1"></textarea>
                                        <label for="textarea-char">Descrição da Raspadinha</label>
                                    </div>
                                </div>
                                <!-- Grid column -->
                                <div class="col-md-12 d-flex flex-row">
                                    <div class="md-form ml-1 col-md-6">
                                        <input type="date" id="inputMDExBeginRaspadinha" class="form-control">
                                        <label for="inputMDEx">Data Inicial da Raspadinha</label>
                                    </div>

                                    <div class="md-form ml-2 col-md-6">
                                        <input type="date" id="inputMDExFinalRaspadinha" class="form-control">
                                        <label for="inputMDEx">Data Final da Raspadinha</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Grid row -->
                            <div class="float-right">
                                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                <button type="button" class="btn btn-primary">Criar Cupão</button>
                                <!-- Indicates a dangerous or potentially negative action -->
                                <button type="button" class="btn btn-danger">Cancelar Cupão</button>
                            </div>
                        </form>
                        <!-- Material form grid -->

                    </div>

                    <div class="switchDataCarimbo d-none">
                        <h5 class="card-title text-primary">Dados do Carimbo</h5>
                        <h6 class="card-subtitle mb-2 text-muted mt-2 ml-1">Preencha os dados necessários para criar Carimbo.</h6>

                        <!-- Material form grid -->
                        <form>
                            <!-- Grid row -->
                            <div class="row mt-4">
                                <!-- Grid column -->
                                <div class="col-md-8">
                                    <!-- Material input -->
                                    <div class="md-form ml-1">
                                        <input type="text" id="inputIconEx7" class="form-control">
                                        <label for="form1">Designação do Carimbo</label>
                                    </div>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-4">
                                    <!-- Material input -->
                                    <div class="md-form">
                                        <input type="number" id="numberExample" class="form-control">
                                        <label for="numberExample">Número de Carimbos</label>
                                    </div>
                                </div>
                                <!-- Grid column -->

                                <div class="col-md-12 d-flex flex-row">
                                    <div class="md-form ml-1 col-md-6">
                                        <input type="date" id="inputMDExBeginCarimbo" class="form-control">
                                        <label for="inputMDEx">Data Inicial do Carimbo</label>
                                    </div>

                                    <div class="md-form ml-2 col-md-6">
                                        <input type="date" id="inputMDExFinalCarimbo" class="form-control">
                                        <label for="inputMDEx">Data Final do Carimbo</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Grid row -->
                            <div class="float-right">
                                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                <button type="button" class="btn btn-primary">Criar Raspadinha</button>
                                <!-- Indicates a dangerous or potentially negative action -->
                                <button type="button" class="btn btn-danger">Cancelar Raspadinha</button>
                            </div>
                        </form>
                        <!-- Material form grid -->

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-8 menuFilters d-none" aria-labelledby="profile-tab" id="filtrosCampanha">
            <div class="card">
                <div class="card-header">
                    Filtros Campanha
                </div>
                <div class="card-body">

                    <div class="container-fluid col-md-12">

                        <div class="d-flex flex-row justify-content-center">
                            <div class="card mr-2 col-md-4 shadow">
                                <div class="card-body">
                                    <h5 class="text-primary">Sexo</h5>
                                    <label for="" class="font-weight-light">Escolha a que sexo se destina esta Campanha</label>
                                    <hr>
                                    <!-- Default unchecked -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="mascCheck">
                                        <label class="custom-control-label" for="mascCheck">Masculino</label>
                                    </div>

                                    <!-- Default unchecked -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="mascFem">
                                        <label class="custom-control-label" for="mascFem">Feminino</label>
                                    </div>
                                </div>
                            </div>
                            <div class="card mr-2 col-md-4 shadow">
                                <div class="card-body">
                                    <h5 class="text-primary">Cidade</h5>
                                    <label for="" class="font-weight-light">Escolha a que cidade se destina esta Campanha</label>
                                    <hr>
                                    <!-- Default unchecked -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="cit1">
                                        <label class="custom-control-label" for="cit1">Viseu</label>
                                    </div>

                                    <!-- Default unchecked -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="cit2">
                                        <label class="custom-control-label" for="cit2">Porto</label>
                                    </div>
                                </div>
                            </div>
                            <div class="card mr-2 col-md-4 shadow">
                                <div class="card-body">
                                    <h5 class="text-primary">Área de Serviço</h5>
                                    <label for="" class="font-weight-light">Escolha a que cidade se destina esta Campanha</label>
                                    <hr>
                                    <!-- Default unchecked -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="area1">
                                        <label class="custom-control-label" for="area1">Informática</label>
                                    </div>

                                    <!-- Default unchecked -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="area2">
                                        <label class="custom-control-label" for="area2">Serviços</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="d-flex flex-row justify-content-center">
                            <div class="card col-md-12 mr-2">
                                <div class="card-body">
                                    <h5 class="text-primary">Idade</h5>
                                    <label for="" class="font-weight-light">Escolha a que idade se destina esta Campanha</label>
                                    <hr>
                                    <h6 class="text-primary">Alcance de idade</h6>
                                    <div class="d-flex flex-row justify-content-center">
                                        <!-- Material input -->
                                        <div class="md-form">
                                            <input type="number" id="numberExample" class="form-control">
                                            <label for="numberExample">Idade Minima</label>
                                        </div>
                                        <label for="" class="mt-5 ml-5 mr-5">Até</label>
                                        <!-- Material input -->
                                        <div class="md-form">
                                            <input type="number" id="numberExample" class="form-control">
                                            <label for="numberExample">Idade Máxima</label>
                                        </div>
                                    </div>
                                    <h6 class="text-primary">Idade Fixa</h6>
                                    <div class="d-flex flex-row justify-content-center">
                                        <select class="custom-select" id="selectDesconto">
                                            <option selected>Escolha tipo de Idade</option>
                                            <option value="1">Minima</option>
                                            <option value="2">Máxima</option>
                                            <option value="3">Menor Que</option>
                                            <option value="3">Maior Que</option>
                                        </select>
                                    </div>
                                    <!-- Material input -->
                                    <div class="md-form">
                                        <input type="number" id="numberExample" class="form-control">
                                        <label for="numberExample">Idade</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-4 ">

            <div class="card">

                <div class="card-header text-center">
                    Preview
                </div>
                <div class="card-body bg-light">
                    <div class="card">
                        <div class="card-body previewbody">
                            <div class="previewCupoes d-none">
                                <h5 class="text-white text-center mt-3">Designação</h5>
                                <h3 class="text-white text-center mt-5">Valor % do Cupão</h3>
                                <h5 class="text-white text-center mt-5">Descrição Cupão</h5>
                                <div class="qrCode">
                                    <h1 class="text-center text-white mt-5">QRCODE</h1>
                                </div>
                                <h5 class="text-white text-center mt-5">Cupão Data Inicial</h5>
                                <h5 class="text-white text-center mt-3">Até</h5>
                                <h5 class="text-white text-center mt-3">Cupão Data Final</h5>
                            </div>
                            <div class="previewCarimbos d-none">
                                <h5 class="text-white text-center mt-3">Designação</h5>
                                <div class="awardIcon  text-center mt-5">
                                    <i class="fas fa-award fa-lg text-white"></i>
                                </div>
                                <h5 class="text-white text-center mt-5">0/1</h5>
                                <h5 class="text-white text-center mt-3">Data Carimbo Inicial</h5>
                                <h5 class="text-white text-center mt-3">Até</h5>
                                <h5 class="text-white text-center mt-3">Data Carimbo Final</h5>
                            </div>

                            <div class="previewRaspadinhaCover d-none">
                                <h5 class="text-white text-center mt-3">Designação</h5>
                                <div class="coverPreview text-center mt-5">
                                    <img src="assets\imagens\raspadinhaCover.png" alt="" id="imgClickCover">
                                </div>
                                <h5 class="text-white text-center mt-3">Raspe para ganhar</h5>
                            </div>

                            <div class="previewRaspadinhaUnCover d-none">
                                <h5 class="text-white text-center mt-3">Designação</h5>
                                <div class="coverPreview text-center mt-5">
                                    <h4 class="text-white text-center mb-3" id="imgClickUnCover">Parabéns! <br>
                                        Ganhou uma Viagem!
                                    </h4>
                                </div>
                                <h5 class="text-white text-center mt-3">Reclame o Prémio até <br>
                                    <h2 class="text-white text-center mt-3">Data Final</h2>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>