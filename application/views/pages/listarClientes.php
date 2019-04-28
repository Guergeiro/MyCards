<div class="container-fluid">

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="row mt-4">

                <div class="col-md-12 col-xs-12 col-sm-12">

                    <div class="card">

                        <div class="card-body">

                            <div class="row">
                                <div class="cold-md-8 col-sm-8 col-xs-8">
                                    <h5 class="text-primary">
                                        Listar Clientes
                                    </h5>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
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

                                <div class="col-md-6">

                                </div>

                                <div class="col-md-2 col-xs-2 col-sm-2">
                                    <form class="form-inline md-form form-sm divSearchBox">
                                        <input class="form-control form-control-sm w-75" type="text" placeholder="Search" aria-label="Search" id="myInput">
                                        <i class="fas fa-search text-primary" aria-hidden="true"></i>
                                    </form>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-xs-12 col-sm-12">
                                    <div class="table-responsive text-nowrap">
                                        <!--Table-->
                                        <table id="dtBasicExample" class="table table-striped table-bordered table-sm text-center">

                                            <!--Table head-->
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Primeiro Nome</th>
                                                    <th>Segundo Nome</th>
                                                    <th>Data de Nascimento</th>
                                                </tr>
                                            </thead>
                                            <!--Table head-->

                                            <!--Table body-->
                                            <tbody id="myTable">
                                                <tr>
                                                    <th scope="row" class="font-weight-bold text-primary">1</th>
                                                    <td class="font-weight-bold text-primary">Kate</td>
                                                    <td class="font-weight-bold text-primary">Moss</td>
                                                    <td class="font-weight-bold text-primary">29/01/1995</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="font-weight-bold text-primary">2</th>
                                                    <td class="font-weight-bold text-primary">Anna</td>
                                                    <td class="font-weight-bold text-primary">Wintour</td>
                                                    <td class="font-weight-bold text-primary">30/01/1997</td>
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