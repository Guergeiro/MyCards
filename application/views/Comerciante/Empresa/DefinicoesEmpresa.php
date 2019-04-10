<!DOCTYPE <!DOCTYPE html>
<html>

<head>
    <!-- MetaDados -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Titulo -->
    <title>Definições Empresariais</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('Web-Pint\assets\css\Empresa\Def_Empresariais.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('Web-Pint\assets\css\Template\Template.css'); ?>">

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
                            <a href="<?php echo base_url('WEB-PINT/Index.php/controller_CarregarViews/viewDashboard')?>">
                                <i class="fa fa-chart-area fa-lg"></i> Dashboard
                            </a>
                        </li>
                        <!-- Ending List-Element DashBoard -->

                        <!-- Begining List-Element Empresa -->
                        <li data-toggle="collapse" data-target="#empresa" class="collapsed active">
                            <a href="#"><i class="fa fa-building fa-lg"></i> Empresa <span class="arrow"></span></a>
                        </li>
                        <ul class="sub-menu collapse" id="empresa">
                            <li class="active"><a href="<?php echo base_url('WEB-PINT/Index.php/controller_CarregarViews/viewEmpresa_DefinicoesEmpresa')?>">Definições Empresariais</a></li>
                            <li><a href="<?php echo base_url('WEB-PINT/Index.php/controller_CarregarViews/viewEmpresa_RatingEmpresa')?>">Rating Empresarial</a></li>
                        </ul>
                        <!-- Ending List-Element Empresa -->

                        <!-- Begining List-Element Clientes -->
                        <li>
                            <a href="<?php echo base_url('WEB-PINT/Index.php/controller_CarregarViews/viewCliente')?>">
                                <i class="fa fa-users fa-lg"></i> Clientes
                            </a>
                        </li>
                        <!-- Ending List-Element Clientes -->

                        <!-- Begining List-Element Campanhas -->
                        <li data-toggle="collapse" data-target="#campanhas" class="collapsed">
                            <a href="#"><i class="fa fa-file-contract fa-lg"></i> Campanhas <span class="arrow"></span></a>
                        </li>
                        <ul class="sub-menu collapse" id="campanhas">
                            <li><a href="<?php echo base_url('WEB-PINT/Index.php/controller_CarregarViews/viewCampanhas_CriarCampanhas')?>">Criar Campanhas</a></li>
                            <li><a href="<?php echo base_url('WEB-PINT/Index.php/controller_CarregarViews/viewCampanhas_ListarCampanhas')?>">Listar Campanhas</a></li>
                            <li><a href="<?php echo base_url('WEB-PINT/Index.php/controller_CarregarViews/viewCampanhas_AtivarCampanhas')?>">Ativar Campanha</a></li>
                        </ul>
                        <!-- Ending List-Element Campanhas -->

                        <!-- Begining List-Element Reportings -->
                        <li>
                            <a href="<?php echo base_url('WEB-PINT/Index.php/controller_CarregarViews/viewReportingsDados')?>">
                                <i class="fa fa-users fa-lg"></i> Reportings
                            </a>
                        </li>
                        <!-- Ending List-Element Reportings -->

                        <!-- Begining List-Element Profile -->
                        <li data-toggle="collapse" data-target="#profile" class="collapsed">
                            <a href=""><i class="fa fa-file-contract fa-lg"></i> Profile <span class="arrow"></span></a>
                        </li>
                        <ul class="sub-menu collapse" id="profile">
                            <li><a href="<?php echo base_url('WEB-PINT/Index.php/controller_CarregarViews/viewProfile_DefinicoesPerfil')?>">Definições de Perfil</a></li>
                            <li><a href="<?php echo base_url('WEB-PINT/Index.php/controller_CarregarViews/viewProfile_PlanoComercial')?>">Plano Comerical</a></li>
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

                    <!-- Col-12 divide into 3 Coluns of 4 Fields -->
                    <div class="col-md-6 col-sm-6 mt-3">
                    </div>

                    <div class="col-md-3 col-sm-3 mt-3">
                        
                    </div>

                    <div class="col-md-3 col-sm-3 mt-3">

                        <div class="card">

                            <div class="card-body flex-row">
                                <h3 class="">Definições Sociais</h3>
                                <hr>

                                <div class="SocialNetwork ml-2">
                                    <h4>Redes Sociais:</h4>
                                    <div class="items">
                                        <ul class="netWork list-unstyled ml-2">
                                            <li class="netWorkLink mt-3">
                                                <span class="fab fa-facebook-square text-primary fa-lg"></span>
                                                <input type="text" placeholder="Facebook Link">
                                                <a href="#"><span class="fas fa-check text-primary float-right mt-2"></span></a>
                                            </li>
                                            <li class="netWorkLink mt-3">
                                                <span class="fab fa-twitter-square text-primary fa-lg"></span>
                                                <input type="text" placeholder="Twitter Link">
                                                <a href="#"><span class="fas fa-check text-primary float-right mt-2"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
                                </div>

                                <div class="SocialNetwork ml-2">
                                    <h4>Formas de Contacto:</h4>
                                    <div class="items">
                                        <ul class="fContact list-unstyled ml-2">
                                            <li class="fContactLink mt-3">
                                                <span class="fas fa-phone-square text-primary fa-lg"></span>
                                                <input type="text" placeholder="Phone Number">
                                                <a href="#"><span class="fas fa-check text-primary float-right mt-2"></span></a>
                                            </li>
                                            <li class="fContactLink mt-3">
                                                <span class="fas fa-envelope-square text-primary fa-lg"></span>
                                                <input type="text" placeholder="Email Link">
                                                <a href="#"><span class="fas fa-check text-primary float-right mt-2"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
                                </div>

                                <div class="SocialNetwork ml-3">
                                    <h4>Área de Negócio:
                                        <a href="#"><span class="fas fa-plus text-primary float-right mt-2"></span></a>
                                    </h4>
                                    <label class="ml-2">Maximum 3 Services</label>
                                    <div class="items">
                                        <ul class="navNegUl text-primary">
                                            <li class="ul-item mt-1 mb-2 ml-1">Serviços
                                                <a href="#"><span class="fas fa-minus text-primary float-right mt-1"></span></a>
                                            </li>
                                            <li class="ul-item mt-1 mb-2 ml-1">Informática
                                                <a href="#"><span class="fas fa-minus text-primary float-right mt-1"></span></a>
                                            </li>
                                            <li class="ul-item mt-1 mb-2 ml-1">Contabilidade
                                                <a href="#"><span class="fas fa-minus text-primary float-right mt-1"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Ending of the Col-12 -->

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

    <script src="<?php echo base_url('Web-Pint\assets\JS\main.js') ?>">
    </script>
</body>

</html>