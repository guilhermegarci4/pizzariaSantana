<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    ADM | Pizzaria Santana
  </title>
  <!-- Favicon -->
<!--   <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
 -->  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="./assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="./assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />

  <link rel="apple-touch-icon" href="../../apple-icon.png">
  <link rel="shortcut icon" href="../../favicon.png">

	<link rel="apple-touch-icon" sizes="57x57" href="../../apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="../../apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../../apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="../../apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../../apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="../../apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="../../apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="../../apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="../../apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="../../android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../../favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../../favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../../favicon-16x16.png">
	<link rel="manifest" href="manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="./index.php">
      <h3> Pizzaria Santana </h3>
      </a>
    
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.php">
               <h3> Pizzaria Santana </h3>
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
      
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item  class=" active" ">
          <a class=" nav-link active " href=" ./index.php"> <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <hr class="my-3">
          <li class="nav-item" >
            <a class=" nav-link " href=" ./index.php"> <i class=" text-primary"></i> - Adicionar -</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="addPizza.php">
              <i class="ni ni-money-coins text-blue"></i> Pizzas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="addPizzaDestaque.php">
              <i class="ni ni-tag text-blue"></i> Pizzas em destaques
            </a>
          </li>

          <hr class="my-3">
          <li class="nav-item" >
            <a class=" nav-link " href=" ./index.php"> <i class="ni ni-tv-2 text-primary"></i> - Editar -</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="editPizza.php">
              <i class="ni ni-money-coins text-blue"></i>Pizzas cadastradas
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="editPizzaDestaque.php">
              <i class="ni ni-tag text-blue"></i>Pizzas em destaques
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="editGaleria.php">
              <i class="ni ni-image text-blue"></i>Galeria
            </a>
          </li>
  <hr/>
          <li class="nav-item">
            <a class="nav-link " href="editContato.php">
              <i class="ni ni-tablet-button text-blue"></i>Entre em contato
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../home/back/logout.php">
              <i class="ni ni-user-run text-blue"></i>Sair
            </a>
          </li>
       
        
        
        
      </div>
    </div>
  </nav>
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.html">Área do administrador</a>
      
        
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">Administrador</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Bem vindo!</h6>
              </div>
              
              <div class="dropdown-divider"></div>
              <a href="../home/back/logout.php" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Sair</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->