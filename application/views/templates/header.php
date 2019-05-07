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
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link py-0" href="<?php echo base_url("notificacoes"); ?>">
            <i class="fas fa-bell fa-fw fa-lg"></i>
            <span class="badge badge-danger ml-n3 align-top rounded-circle">4</span>
            <span class="d-md-none">Notificações</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link py-0" href="<?php echo base_url("mensagens"); ?>">
            <i class="fas fa-envelope fa-fw fa-lg"></i>
            <span class="badge badge-danger ml-n3 align-top rounded-circle">4</span>
            <span class="d-md-none">Mensagens</span>
          </a>
        </li>
        <li class="nav-item d-inline-block dropdown">
          <a class="nav-link dropdown-toggle py-0" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <img src="<?php echo base_url('assets/imagens/user.png'); ?>" alt="avatar_img" srcset="" width="24"
              height="24" class="rounded-circle">
            <span>John Doe</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo base_url("perfil"); ?>"><i class="fas fa-user fa-fw"></i>
              Perfil</a>
            <a class="dropdown-item" href="<?php echo base_url("definicoes"); ?>"><i class="fas fa-cog fa-fw"></i>
              Definições</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo base_url("logout"); ?>"><i class="fas fa-power-off fa-fw"></i>
              Logout</a>
          </div>
        </li>
      </ul>
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