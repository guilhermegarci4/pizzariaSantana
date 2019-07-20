<?php
	require_once 'home/back/conexao.php';

//Selecionar o cardapio
//
$sql = "SELECT * FROM cardapio WHERE lado = '0' ORDER BY noPizza ASC";
$result = mysqli_query($con , $sql);

$sql1 = "SELECT * FROM cardapio WHERE lado = '1' ORDER BY noPizza ASC";
$result1 = mysqli_query($con , $sql1);

$sql2 = "SELECT * FROM destaque";
$result2 = mysqli_query($con , $sql2);

?>

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

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
			  <a class="navbar-brand" href="index.php"><span class="flaticon-pizza-1 mr-1"></span>Pizzaria<br><small>Santana</small></a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="oi oi-menu"></span> Menu
		      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Inicio</a></li>
	          <li class="nav-item active"><a href="menu.php" class="nav-link">Cardápio</a></li>
	          <li class="nav-item"><a href="services.php" class="nav-link">Serviços</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">Sobre</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Entre em contato</a></li>
	        </ul>
	      </div>
		  </div>
	</nav>

<div id="noMobile"> <!-- abre div no mobile -->
    <section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">

      <div class="slider-item" style="background-image: url(images/logooficial.jpeg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Nosso Cardápio</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Inicio</a></span> <span>Menu</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
</div> <!-- fecha div no mobile -->   
		<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Nosso Cardápio</h2>
            <p>Todas as nossas pizzas são irresistíveis, mas algumas entram em destaque!</p>
          </div>
        </div>
    	</div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-flex">
    			
    			
    			<?php while($dados2 = mysqli_fetch_array($result2)) { ?>
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img" style="background-image: url(home/fotoPizzaDestaque/<?php echo $dados2['fotoDestaque'] ?>);"></a>
    					<div class="text p-4">
    						<h3><?php echo $dados2['saborDestaque'] ?></h3>
    						<p><?php echo $dados2['descricaoDestaque'] ?></p>
    						<p class="price"><span>$<?php echo $dados2['precoDestaque'] ?></span> </p>
    					</div>
    				</div>
				</div>
				<?php } ?>

    			
    			
    		</div>
    	</div>

    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Cardápio</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">Confira nosso cardápio com seus respectivos preços.</p>
          </div>
		</div>
		<!-- Lado 1 -->		

        <div class="row">
        	<div class="col-md-6">
        		
			<?php 
			while ($dados = mysqli_fetch_array($result))
				{ //abre while
			?>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(home/fotoPizza/<?php echo $dados['foto'] ?>);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span><?php echo $dados['noPizza'] . ' - ' . $dados['sabor'] ?></span></h3>
	        				<span class="price">R$<?php echo $dados['preco'] ?></span>
	        			</div>
	        			<div class="d-block">
	        				<p><?php echo $dados['ingredientes']?></p>
	        			</div>
        			</div>
				</div>
			<?php } //fecha while lado 1 ?>   	
        	
        	
        	</div>

        	<div class="col-md-6">
        	
			<?php 
			while ($dados1 = mysqli_fetch_array($result1))
				{ //abre while
			?>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(home/fotoPizza/<?php echo $dados1['foto'] ?>);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span><?php echo $dados1['noPizza'] . ' - ' . $dados1['sabor'] ?></span></h3>
	        				<span class="price">R$<?php echo $dados1['preco'] ?></span>
	        			</div>
	        			<div class="d-block">
	        				<p><?php echo $dados1['ingredientes'] ?></p>
	        			</div>
	        		</div>
				</div>
			<?php } // fecha while 2 ?>
        	
        	</div>
        </div>
    	</div>
    </section>

    <section class="ftco-menu">
    	<div class="container-fluid">
    		<div class="row d-md-flex">
	    		<div class="col-lg-4 ftco-animate img f-menu-img mb-5 mb-md-0" style="background-image: url(images/about.jpg);">
	    		</div>
	    		<div class="col-lg-8 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		              <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Pizzas Doces</a>

		              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Bebidas</a>

		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
		              	<div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/logooficial.jpeg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Brigadeiro</a></h3>
		              					<p>Brigadeiro e granulado de chocolate</p>
		              					<p class="price"><span>R$23,00</span></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/logooficial.jpeg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Prestígio</a></h3>
		              					<p>Brigadeiro e coco ralado</p>
		              					<p class="price"><span>R$23,00</span></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/logooficial.jpeg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Romeu e Julieta</a></h3>
		              					<p>Goiabada e mussarela</p>
		              					<p class="price"><span>R$23,00</span></p>
		              				</div>
		              			</div>
		              		</div>
							  <div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/logooficial.jpeg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Banana I</a></h3>
		              					<p>Banana, leite condensado e açúcar com canela</p>
		              					<p class="price"><span>R$23,00</span></p>
		              				</div>
		              			</div>
		              		</div>
							  <div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/logooficial.jpeg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Banana II</a></h3>
		              					<p>Banana, mussarela, e açúcar com canela</p>
		              					<p class="price"><span>R$23,00</span></p>
		              				</div>
		              			</div>
		              		</div>
							  <div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/logooficial.jpeg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Confete</a></h3>
		              					<p>Brigadeiro e confete</p>
		              					<p class="price"><span>R$23,00</span></p>
		              				</div>
		              			</div>
		              		</div>
							  <div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/logooficial.jpeg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Doce de leite</a></h3>
		              					<p>Doce de leite e mussarela</p>
		              					<p class="price"><span>R$23,00</span></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/coca.png);"></a>
		              				<div class="text">
		              					<h3><a href="#">Refrigerantes</a></h3>
		              					<p>Temos os mais variados refrigerantes para melhor atendê-los</p>
		              					<p class="price"><span>R$</span></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/suco.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Sucos - EM BREVE</a></h3>
		              					<p>Novidades em breve.</p>
		              					<p class="price"><span>R$</span></p>
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
    </section>

<?php require_once 'front/footer.php' ?>

    
  </body>
</html>