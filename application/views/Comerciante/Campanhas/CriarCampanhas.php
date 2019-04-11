<!DOCTYPE <!DOCTYPE html>
<html>

<head>
    <!-- MetaDados -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Titulo -->
    <title>Criar Campanhas</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('PINT-Web/assets/css/Campanhas/CriarCampanhas.css'); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('PINT-Web/assets/css/Template/Template.css'); ?>">

    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body>

    <!-- Begining of Full Page Wrapper -->
    <div class="wrapper">

        <!-- Begining of Header Wrapper -->
        <div class="wrapper-header">

            <!-- Begining of NavBar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar static-top shadow">

                <!-- Begining of Fluid Container -->
                <div class="container-fluid">

                    <!-- Toggle Btn - Targets the SideBar-->
                    <button id="btnMenu" class="btn btn-link ml-2" onclick="showSideMenu()">
                        <i class="fa fa-bars fa-lg"></i>
                    </button>

                    <!-- Begining of Inner Element of NavBar -->
                    <div class="nav-inner justify-content-end">

                        <!-- Begining of Unordered List -->
                        <ul id="navbarUlController" class="navbar-nav">

                            <!-- Nav Item - Alerts -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link " href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bell fa-fw fa-lg"></i>
                                    <!-- Counter - Alerts -->
                                    <span class="badge badge-danger badge-counter ml-n3 align-top rounded-circle">3+</span>
                                </a>
                                <!-- Dropdown - Alerts -->
                                <div id="dropList" class="dropdown-menu-right dropdown-menu shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                    <h6 class="dropdown-header">
                                        Alerts Center
                                    </h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-2">
                                            <div class="icon-circle bg-primary">
                                                <i id=" " class="fas fa-file-alt text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">December 12, 2019</div>
                                            <div class="text-truncate">A new monthly report is ready to download!
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Carregar
                                        Alerts</a>
                                </div>
                            </li>

                            <!-- Nav Item - Messages -->
                            <li class="nav-item dropdown no-arrow ">
                                <a class="nav-link " href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-envelope fa-fw fa-lg"></i>
                                    <!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter ml-n3 align-top rounded-circle">7+</span>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div id="dropList-msg" class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                    <h6 class="dropdown-header">
                                        Message Center
                                    </h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-2">
                                            <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            <div class="text-truncate">Hi there! I am wondering if you can help me
                                                with
                                                a
                                                problem I've been having.</div>
                                            <div class="small text-gray-500">Emily Fowler · 58m</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Carregar Mais
                                        Mensagens</a>
                                </div>
                            </li>

                            <!-- USER CONFG AND IMG -->
                            <li class="nav-item dropdown no-arrow ">

                                <a class="nav-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div id="userName" class="mr-2 d-none d-inline text-gray-600 small">Valerie Luna
                                        <!-- USERNAME -->
                                    </div>
                                    <img id="imgProfile" class="img-profile rounded-circle w-25" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                                </a>

                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Definições
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Plano Comercial
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>

                        </ul>
                        <!-- Ending of Unordered List -->

                    </div>
                    <!-- Ending of Inner Element of NavBar -->

                </div>
                <!-- Ending of Fluid Container -->

            </nav>
            <!-- Ending of the Navbar -->

        </div>
        <!-- Ending of Header Wrapper -->

        <!-- Begining of Body Wrapper -->
        <div class="wrapper-body">

            <!-- Begining of SideMenu -->
            <div class="nav-side-menu position-absolute" id="sidebarMenu">

                <!-- Begining of Menu-List -->
                <div class="menu-list">

                    <!-- Begining of Unordered List Side-Menu -->
                    <ul id="menu-content" class="menu-content">

                        <!-- Begining List-Element DashBoard -->
                        <li>
                            <a href="<?php echo base_url('PINT-Web/controller_CarregarViews/viewDashboard') ?>">
                                <i class="fa fa-chart-area fa-lg"></i> Dashboard
                            </a>
                        </li>
                        <!-- Ending List-Element DashBoard -->

                        <!-- Begining List-Element Empresa -->
                        <li data-toggle="collapse" data-target="#empresa" class="collapsed active">
                            <a href="#"><i class="fa fa-building fa-lg"></i> Empresa <span class="arrow"></span></a>
                        </li>
                        <ul class="sub-menu collapse" id="empresa">
                            <li class="active"><a href="<?php echo base_url('PINT-Web/Index.php/controller_CarregarViews/viewEmpresa_DefinicoesEmpresa') ?>">Definições Empresariais</a></li>
                            <li><a href="<?php echo base_url('PINT-Web/Index.php/controller_CarregarViews/viewEmpresa_RatingEmpresa') ?>">Rating Empresarial</a></li>
                        </ul>
                        <!-- Ending List-Element Empresa -->

                        <!-- Begining List-Element Clientes -->
                        <li>
                            <a href="<?php echo base_url('PINT-Web/Index.php/controller_CarregarViews/viewCliente') ?>">
                                <i class="fa fa-users fa-lg"></i> Clientes
                            </a>
                        </li>
                        <!-- Ending List-Element Clientes -->

                        <!-- Begining List-Element Campanhas -->
                        <li data-toggle="collapse" data-target="#campanhas" class="collapsed">
                            <a href="#"><i class="fa fa-file-contract fa-lg"></i> Campanhas <span class="arrow"></span></a>
                        </li>
                        <ul class="sub-menu collapse" id="campanhas">
                            <li><a href="<?php echo base_url('PINT-Web/Index.php/controller_CarregarViews/viewCampanhas_CriarCampanhas') ?>">Criar Campanhas</a></li>
                            <li><a href="<?php echo base_url('PINT-Web/Index.php/controller_CarregarViews/viewCampanhas_ListarCampanhas') ?>">Listar Campanhas</a></li>
                            <li><a href="<?php echo base_url('PINT-Web/Index.php/ontroller_CarregarViews/viewCampanhas_AtivarCampanhas') ?>">Ativar Campanha</a></li>
                        </ul>
                        <!-- Ending List-Element Campanhas -->

                        <!-- Begining List-Element Reportings -->
                        <li>
                            <a href="<?php echo base_url('PINT-Web/controller_CarregarViews/viewReportingsDados') ?>">
                                <i class="fa fa-users fa-lg"></i> Reportings
                            </a>
                        </li>
                        <!-- Ending List-Element Reportings -->

                        <!-- Begining List-Element Profile -->
                        <li data-toggle="collapse" data-target="#profile" class="collapsed">
                            <a href=""><i class="fa fa-file-contract fa-lg"></i> Profile <span class="arrow"></span></a>
                        </li>
                        <ul class="sub-menu collapse" id="profile">
                            <li><a href="<?php echo base_url('PINT-Web/Index.php/controller_CarregarViews/viewProfile_DefinicoesPerfil') ?>">Definições de Perfil</a></li>
                            <li><a href="<?php echo base_url('PINT-Web/Index.php/controller_CarregarViews/viewProfile_PlanoComercial') ?>">Plano Comerical</a></li>
                        </ul>
                        <!-- Ending List-Element Profile -->

                    </ul>
                    <!-- Ending of Unordered List Side-Menu -->

                </div>
                <!-- Ending of Menu-List -->

            </div>
            <!-- Ending of SideMenu -->

            <!-- Begining of Container-Fluid -->
            <div class="container-fluid">

                <!-- Begining of Body Row -->
                <div id="rowContainerFluid" class="row position-relative">

                    <!-- Begining Col-12 divide into 3 Coluns of 4 Fields -->
                    <div class="col-md-12 col-sm-12 mt-3">

                        <!-- Begining Tab Nav -->
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a id="insertMenu" class="nav-link active" href="#">Criar Campanha</a>
                            </li>
                            <li class="nav-item">
                                <a id="filtersMenu" class="nav-link" href="#">Filtros Campanha</a>
                            </li>
                        </ul>
                        <!-- Ending Tab Nav -->

                    </div>
                    <!-- Ending Col-12 divide into 3 Coluns of 4 Fields -->

                    <!-- Begining Col-12 divide into 3 Coluns of 4 Fields -->
                    <div class="col-md-12 col-sm-12 mt-3">

                        <div class="form-row">

                            <!-- Begining of Create Col-->
                            <div class="col-md-8 insertData">

                                <div class="card">

                                    <div class="card-header">
                                        Criar Campanha
                                    </div>

                                    <div class="card-body">

                                        <label for="TipoDesconto" class="font-weight-bold mt-3 mb-1">Tipo de desconto:</label>

                                        <select class="custom-select" id="selectDesconto">
                                            <option selected>Escolha o Desconto</option>
                                            <option value="1">Cupão</option>
                                            <option value="2">Raspadinhas</option>
                                            <option value="3">Carimbos</option>
                                        </select>

                                        <hr class="mt-4">

                                        <!-- Div Cupão-->
                                        <div class="switchDataCupoes">

                                            <form>

                                                <div class="form-row">

                                                    <!-- Designação-->
                                                    <div class="col-md-8 mb-3">
                                                        <label for="validationDefault01">Designação:</label>
                                                        <input type="text" class="form-control" id="validationDefault01" placeholder="Nome da Campanha..." required>
                                                    </div>
                                                    <!-- /Designação -->

                                                    <!-- Valor Desconto-->
                                                    <div class="col-md-4 col-sm-4">

                                                        <label for="Validade" class="font-weight-bold mb-1">Valor Desconto:</label>

                                                        <div class="input-group mb-3">

                                                            <select class="custom-select">
                                                                <option value="1">5%</option>
                                                                <option value="2">10%</option>
                                                                <option value="3">15%</option>
                                                                <option value="1">20%</option>
                                                                <option value="2">25%</option>
                                                                <option value="3">30%</option>
                                                                <option value="1">35%</option>
                                                                <option value="2">40%</option>
                                                                <option value="3">45%</option>
                                                                <option value="1">50%</option>
                                                                <option value="2">55%</option>
                                                                <option value="3">60%</option>
                                                                <option value="1">65%</option>
                                                                <option value="2">70%</option>
                                                                <option value="3">75%</option>
                                                                <option value="1">80%</option>
                                                                <option value="2">85%</option>
                                                                <option value="3">90%</option>
                                                                <option value="2">95%</option>
                                                                <option value="3">100%</option>
                                                            </select>

                                                        </div>

                                                    </div>
                                                    <!-- /Valor Desconto -->

                                                    <!-- Descrição -->
                                                    <div class="col-md-12 mb-3">
                                                        <label for="validationDefault01">Descrição:</label>
                                                        <input type="text" class="form-control form-control-lg" id="validationDefault01" placeholder="Descrição da Campanha..." required>
                                                    </div>
                                                    <!-- /Descrição -->

                                                    <!-- Inicio Valido-->
                                                    <div class="col-md-6 col-sm-6">

                                                        <label for="Validade" class="font-weight-bold mt-3 mb-1">Valido Desde:</label>

                                                        <div class="input-group mb-3">

                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2">Inicio</span>
                                                            </div>

                                                            <input type="date" class="form-control mr-3" placeholder="Data" aria-label="Calendar" aria-describedby="basic-addon2">

                                                        </div>

                                                    </div>
                                                    <!-- /Inicio Valido -->

                                                    <!-- Fim Valido-->
                                                    <div class="col-md-6 col-sm-6">

                                                        <label for="Validade" class="font-weight-bold mt-3 mb-1">Validade Até:</label>

                                                        <div class="input-group mb-3">

                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2">Fim</span>
                                                            </div>

                                                            <input type="date" class="form-control mr-3" placeholder="Data" aria-label="Calendar" aria-describedby="basic-addon2">

                                                        </div>

                                                    </div>
                                                    <!-- /Fim Valido -->

                                                </div>

                                            </form>

                                        </div>
                                        <!-- /Div Cupão-->

                                        <!-- Div Raspadinha -->
                                        <div class="switchDataRaspadinha">

                                            <form>

                                                <div class="form-row">

                                                    <div class="col-md-12 mb-3">
                                                        <label for="validationDefault01">Designação:</label>
                                                        <input type="text" class="form-control" id="validationDefault01" placeholder="Nome da Campanha..." required>
                                                    </div>

                                                    <div class="col-md-12 mb-3">
                                                        <label for="validationDefault01">Descrição:</label>
                                                        <input type="text" class="form-control form-control-lg" id="validationDefault01" placeholder="Descrição da Campanha..." required>
                                                    </div>

                                                    <div class="col-md-12 mb-3">
                                                        <label for="validationDefault01">Condição:</label>
                                                        <input type="text" class="form-control" id="validationDefault01" placeholder="Condição da Campanha..." required>
                                                    </div>

                                                </div>

                                            </form>

                                        </div>
                                        <!-- /Div Raspadinha -->

                                        <!-- Div Carimbo -->
                                        <div class="switchDataCarimbo">

                                            <form>

                                                <div class="form-row">

                                                    <div class="col-md-8 mb-3">
                                                        <label for="validationDefault01">Designação:</label>
                                                        <input type="text" class="form-control" id="validationDefault01" placeholder="Nome da Campanha..." required>
                                                    </div>

                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationDefault01">Número de Carimbos:</label>
                                                        <input type="text" class="form-control" id="validationDefault01" placeholder="Número de Carimbos..." required>
                                                    </div>

                                                    <div class="col-md-12 mb-3">
                                                        <label for="validationDefault01">Descrição:</label>
                                                        <input type="text" class="form-control form-control-lg" id="validationDefault01" placeholder="Descrição da Campanha..." required>
                                                    </div>

                                                </div>

                                            </form>

                                        </div>
                                        <!-- /Div Carimbo -->

                                    </div>

                                    <div class="d-flex justify-content-center mb-2">
                                        <button type="button" class="btn btn-success mr-2">Finalizar</button>
                                        <button type="button" class="btn btn-danger">Cancelar</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /Ending of Create Campain Col-->

                            <!-- Begining of Filter Col-->
                            <div id="menuFilters" class="col-md-8 menuFilters">
                                <div class="card">
                                    <div class="card-header">
                                        Filtros de Campanha
                                    </div>
                                    <div class="card-body">
                                        <div id="cardElements" class="d-flex justify-content-center mt-2 ml-2">
                                            <div id="cardsFilters" class="card shadow col-md-3">
                                                <h5 class="mt-2">Selecione Sexo:</h5>
                                                <label for="tip" class="font-weight-light">Escolha a qual sexo se destina a Campanha!</label>
                                                <hr>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Masculino
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        Feminino
                                                    </label>
                                                </div>
                                            </div>
                                            <div id="cardsFilters" class="card shadow col-md-3 ml-3">
                                                <h5 class="mt-2">Cidade:</h5>
                                                <label for="tip" class="font-weight-light">Escolha a qual cidade se destina a Campanha!</label>
                                                <hr>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" checked>
                                                    <label class="form-check-label" for="exampleRadios3">
                                                        Viseu
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                                                    <label class="form-check-label" for="exampleRadios4">
                                                        Lisboa
                                                    </label>
                                                </div>
                                            </div>
                                            <div id="cardsFilters" class="card shadow col-md-3 ml-3">
                                                <h5 class="mt-2">Área de Interesse:</h5>
                                                <label for="tip" class="font-weight-light">Escolha a qual área se destina a Campanha!</label>
                                                <hr>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option3" checked>
                                                    <label class="form-check-label" for="exampleRadios5">
                                                        Informática
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios6" value="option4">
                                                    <label class="form-check-label" for="exampleRadios6">
                                                        Gestão
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="d-flex mt-2">
                                            <div class="card shadow ">
                                                <div class="card-header">
                                                    <label for="TipoDesconto" class="font-weight-bold mt-3 mb-1">Selecione Idade Alvo</label>
                                                </div>
                                                <div class="card-body">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Ending of Filter Col-->

                            <!-- Begining of Preview Col-->
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        Pré-Visualizar
                                    </div>
                                    <div class="card-body">

                                        <div id="jumboPreviews" class="jumbotron">

                                            <div class="previewCupoes">
                                                <h3 for="Designação" class="d-flex flex justify-content-center mb-4 text-white">Designação</h3>
                                                <h1 for="Valor" class="d-flex flex justify-content-center mb-4 text-white font-weight-bold">Valor Promoção</h1>
                                                <h3 for="Descricao" class="d-flex flex justify-content-center mb-4 text-white">Descrição</h3>
                                                <h3 for="Data" class="d-flex flex justify-content-center text-white">Data</h3>
                                            </div>

                                            <div class="previewRaspadinhaCover">
                                                <h3 for="Designação" class="d-flex flex justify-content-center mb-4 text-white">Designação</h3>
                                                <div id="imgClickCover" class="d-flex flex justify-content-center mb-4" data-toggle="tooltip" data-placement="bottom" title="Clique para ver a versão Revelada">
                                                    <img src="<?php echo base_url('PINT-Web\assets\Imagens\Campanhas\Raspadinha_Cover.png'); ?>" alt="">
                                                </div>
                                                <h3 for="Condição" class="d-flex flex justify-content-center text-white">Condição</h3>
                                            </div>

                                            <div class="previewRaspadinhaUnCover">
                                                <h3 for="Designação" class="d-flex flex justify-content-center mb-4 text-white">Designação</h3>
                                                <div id="imgClickUnCover" class="d-flex flex justify-content-center mb-4" data-toggle="tooltip" data-placement="bottom" title="Clique para ver a versão Default">
                                                    <h3 for="Descrição" class="d-flex flex justify-content-center mb-4 mt-4 text-white">Descrição</h3>
                                                </div>
                                                <h3 for="Condição" class="d-flex flex justify-content-center text-white">Condição</h3>
                                            </div>

                                            <div class="previewCarimbos">
                                                <h3 for="Designação" class="d-flex flex justify-content-center mb-4 text-white">Designação</h3>
                                                <h3 for="Número Carimbos" class="d-flex flex justify-content-center text-white">0/10</h3>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Ending of Preview Col-->

                        </div>

                    </div>
                    <!-- Ending Col-12 divide into 3 Coluns of 4 Fields -->

                </div>
                <!-- Ending of Body Row -->

            </div>
            <!-- Ending of Container-Fluid -->


        </div>
        <!-- Ending of Body Wrapper-->

    </div>
    <!-- Ending of Wrapper -->

    <!-- Boostrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script src="<?php echo base_url('PINT-Web/assets/JS/main.js') ?>"></script>

    <script src="<?php echo base_url('PINT-Web/assets/JS/criarCampanhas.js') ?>"></script>

</body>

</html>