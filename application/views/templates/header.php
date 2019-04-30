<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo ucfirst($title); ?></title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" rel="stylesheet">

  <!-- Page CSS -->
  <link rel="stylesheet" href="<?php echo base_url("assets/css/{$title}.css"); ?>">

  <!-- Core CSS -->
  <link rel="stylesheet" href="<?php echo base_url("assets/css/core.css"); ?>">

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top" id="myNav">
    <i class="fa-lg fas fa-angle-right p-3" id="sidenav-button"></i>
    <h5 class="my-0 mr-md-auto font-weight-normal">MyCards</h5>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <div class="dropdown show">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Diogo
          </a>

          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#">Profile</a>
            <a class="dropdown-item" href="<?php echo base_url("backoffice"); ?>">Backoffice</a>
            <a class=" dropdown-item" href="<?php echo base_url("authentication/logout"); ?>">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <div class="border-right sidenav" style="margin-left: -320px;">
    <ul class="p-0">
      <a href="#" class="text-decoration-none">
        <li class="active"><i class="fa fa-chart-area fa-lg p-4"></i><span
            class="nav-label font-weight-normal">Dashboard</span></li>
      </a>
      <a role="button" data-toggle="collapse" data-target="#empresa">
        <li><i class="fa fa-building fa-lg p-4"></i><span class="nav-label font-weight-normal ">Empresa</span> <i
            class="fas fa-angle-down fa-lg p-4 pull-right"></i></li>
      </a>
      <div class="collapse" id="empresa">
        <a class="d-block text-decoration-none p-3 pl-5 submenu" href="#">
          Visualizar empresa
        </a>
        <a class="d-block text-decoration-none p-3 pl-5 submenu" href="#">
          Definições empresa
        </a>
      </div>
      <a href="#" class="text-decoration-none">
        <li><i class="fa fa-users fa-lg p-4"></i><span class="nav-label font-weight-normal">Clientes</span></li>
      </a>
      <a role="button" data-toggle="collapse" data-target="#campanhas">
        <li><i class="fa fa-file-contract fa-lg p-4"></i><span class="nav-label font-weight-normal">Campanhas</span><i
            class="fas fa-angle-down fa-lg p-4 pull-right"></i></li>
        </li>
      </a>
      <div class="collapse" id="campanhas">
        <a class="d-block text-decoration-none p-3 pl-5 submenu" href="#">
          Criar campanha
        </a>
        <a class="d-block text-decoration-none p-3 pl-5 submenu" href="#">
          Listar campanha
        </a>
        <a class="d-block text-decoration-none p-3 pl-5 submenu" href="#">
          Ativar campanha
        </a>
      </div>
      <a href="#" class="text-decoration-none">
        <li><i class="fa fa-users fa-lg p-4"></i><span class="nav-label font-weight-normal">Reportings</span></li>
      </a>
    </ul>
  </div>