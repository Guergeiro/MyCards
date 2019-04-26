<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-xs-12 col-sm-12">

            <div class="row p-2">

                <div class="card w-100 mt-2">
                    <div class="card-body">
                        <div class="col-md-12 col-sm-12 col-xs-12">

                            <div class="row">
                                <div class="col-md-4 col-xs-4 col-sm-4">
                                    <h5 class="text-primary">
                                        Campanhas Geral
                                    </h5>
                                </div>
                            </div>

                            <hr>

                            <div class="d-flex row justify-content-center p-0">

                                <i id="arrowA" class="fas fa-angle-double-left text-primary fa-2x mt-5 pt-4 arrowAClass"></i>
                                <i id="arrowC" class="fas fa-angle-double-right text-primary fa-2x mt-5 pt-4 d-none ml-2 arrowBClass"></i>

                                <div id="selectorCard" class="col-md-3 col-xs-3 col-sm-3 selectCardFirst">

                                    <div class="card mt-3">
                                        <div class="card-body">
                                            <div class="col-md-12 col-xs-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-2 col-xs-2 col-sm-2">
                                                        <i class="fas fa-coins fa-2x text-primary mt-4"></i>
                                                    </div>
                                                    <div class="col-md-10 col-xs-10 col-sm-10">
                                                        <h5 class="text-primary mt-4">
                                                            Valor
                                                        </h5>
                                                        <label for="">Lucro em Transações com Campanhas.</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div id="selectorCard" class="col-md-3 col-xs-3 col-sm-3">

                                    <div class="card mt-3">
                                        <div class="card-body">
                                            <div class="col-md-12 col-xs-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-2 col-xs-2 col-sm-2">
                                                        <span class="fas fa-user-tag fa-2x text-primary mt-4"></span>
                                                    </div>
                                                    <div class="col-md-10 col-xs-10 col-sm-10">
                                                        <h5 class="text-primary mt-4">
                                                            Valor
                                                        </h5>
                                                        <label for="">Valor média ganho por Campanha.</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div id="selectorCard" class="col-md-3 col-xs-3 col-sm-3">

                                    <div class="card mt-3">
                                        <div class="card-body">
                                            <div class="col-md-12 col-xs-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-2 col-xs-2 col-sm-2">
                                                        <span class="fas fa-location-arrow fa-2x text-primary mt-4"></span>
                                                    </div>
                                                    <div class="col-md-10 col-xs-10 col-sm-10">
                                                        <h5 class="text-primary mt-4">
                                                            Valor
                                                        </h5>
                                                        <label for="">Crescimento na utilização das Campanhas.</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div id="selectorCard" class="col-md-3 col-xs-3 col-sm-3 selectCardLast d-none">

                                    <div class="card mt-3">
                                        <div class="card-body">
                                            <div class="col-md-12 col-xs-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-2 col-xs-2 col-sm-2">
                                                        <span class="fas fa-funnel-dollar fa-2x text-primary mt-4"></span>
                                                    </div>
                                                    <div class="col-md-10 col-xs-10 col-sm-10">
                                                        <h5 class="text-primary mt-4">
                                                            Valor
                                                        </h5>
                                                        <label for="">Tipo de Campanha com maior Lucro.</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <i id="arrowB" class="fas fa-angle-double-right text-primary fa-2x mt-5 pt-4 arrowBClassB"></i>

                            </div>

                            <hr>

                            <div class="row">
                                <!--GRAPH ROW-->
                            </div>

                        </div>
                    </div>
                </div>


            </div>

            <div class="row mt-4 p-2">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="row">
                                <div class="cold-md-8 col-sm-8 col-xs-8">
                                    <h5 class="text-primary">
                                        Campanhas Individuais
                                    </h5>
                                </div>
                                <div class="cold-md-4 col-sm-4 col-xs-4">
                                    <h5 class="text-primary float-right createCampain">
                                        <a href="">Criar Campanha</a>
                                    </h5>
                                </div>
                            </div>
                            <hr>

                            <div class="row ">
                                <!-- Search form -->
                                <div class="col-md-4 col-xs-4 col-sm-4 mt-4">
                                        <select class="custom-select w-100" id="selectNumero">
                                            <option value="1" selected>Mostrar Primeiros Resultados</option>
                                            <option value="2">10</option>
                                            <option value="3">25</option>
                                            <option value="4">50</option>
                                            <option value="5">75</option>
                                            <option value="5">100</option>
                                        </select>
                                    </h6>
                                </div>

                                <div class="col-md-3">

                                </div>

                                <div class="col-md-3 col-xs-3 col-sm-3 divSearch">
                                    <form class="form-inline md-form form-sm">
                                        <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search" aria-label="Search" id="myInput">
                                        <i class="fas fa-search text-primary" aria-hidden="true"></i>
                                    </form>
                                </div>

                                <div class="col-md-2 col-xs-2 col-sm-2 mt-4 pt-1 divDropBox text-right">
                                    <!-- Small button group -->
                                    <div id="selectFilter" class="btn-group divDropBoxB">
                                        <button class="btn btn-sm btn-link" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-filter text-primary fa-2x"></i>
                                        </button>
                                        <div id="dropdownMenuCenter" class="dropdown-menu">
                                            <a class="dropdown-item" href="#" value="1">Ativas</a>
                                            <a class="dropdown-item" href="#" value="2">Finalizadas</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">

                                <div class="col-md-12 col-xs-12 col-sm-12">

                                    <div class="table-responsive text-nowrap">
                                        <!--Table-->
                                        <table id="dtBasicExample" class="table table-striped table-bordered table-sm text-center" cellspacing="0" width="100%">

                                            <!--Table head-->
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th class="th-sm">Tipo Campanha
                                                    </th>
                                                    <th>Designação Campanha</th>
                                                    <th>Data Expiração</th>
                                                    <th>Descrição Campanha</th>
                                                    <th>Total Gasto</th>
                                                    <th>Total Angariado</th>
                                                </tr>
                                            </thead>
                                            <!--Table head-->

                                            <!--Table body-->
                                            <tbody id="myTable">
                                                <tr>
                                                    <th scope="row" class="font-weight-bold text-primary">1</th>
                                                    <td class="font-weight-bold text-primary">Cupão</td>
                                                    <td class="font-weight-bold text-primary">Mac</td>
                                                    <td class="font-weight-bold text-primary">16/01/1997</td>
                                                    <td class="font-weight-bold text-primary">USA / The United Kingdom / China / Russia </td>
                                                    <td class="font-weight-bold text-primary">2000$</td>
                                                    <td class="font-weight-bold text-primary">2000$</td>
                                                </tr>
                                            </tbody>
                                            <!--Table body-->


                                        </table>
                                        <!--Table-->
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