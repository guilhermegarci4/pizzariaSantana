<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Pizzaria | Santana</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon-32x32.png">

	<link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
	<link rel="manifest" href="manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php"><span class="flaticon-pizza-1 mr-1"></span>Pizzaria<br><small>Santana</small></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Inicio</a></li>
	          <li class="nav-item"><a href="menu.php" class="nav-link">Cardápio</a></li>
	          <li class="nav-item"><a href="services.php" class="nav-link">Serviços</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">Sobre</a></li>
	          <li class="nav-item active"><a href="contact.php" class="nav-link">Entre em contato</a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->
    <div id="noMobile"> <!-- abre div no mobile -->
    <section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">

      <div class="slider-item" style="background-image: url(images/logooficial.jpeg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Entre em contato</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Inicio</a></span> <span>Entre em contato</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
</div>
    <section class="ftco-section contact-section">
      <div class="container mt-5">
        <div class="row block-9">
					<div class="col-md-4 contact-info ftco-animate">
						<div class="row">
							<div class="col-md-12 mb-4">
	              <h2 class="h4">Informações de contato</h2>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Endereço:</span> <a href=""> Rua Vilma de Freitas, 250, Jorge Oetterer, Sorocaba, Sâo Paulo</a> </p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Telefone:</span> <a href="tel:+55-15-99679-7052">(15) 99679-7052</a></p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
	            </div>
						</div>
					</div>
					<div class="col-md-1"></div>
          <div class="col-md-6 ftco-animate">
            <form action="home/back/api.php?funcao=contato" method="post" class="contact-form">
            	<div class="row">
            		<div class="col-md-6">
	                <div class="form-group">
	                  <input name="nome" type="text" class="form-control" placeholder="Nome">
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
	                  <input name="email" type="text" class="form-control" placeholder="Email">
	                </div>
	                </div>
              </div>
              <div class="form-group">
                <input name="assunto" type="text" class="form-control" placeholder="Assunto">
              </div>
              <div class="form-group">
                <textarea name="mensagem" id="" cols="30" rows="7" class="form-control" placeholder="Mensagem"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Enviar mensagem" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <div id="map"></div>
    
<?php require_once 'front/footer.php' ?>
    
  </body>
</html>