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

$sql3 = "SELECT * FROM galeria";
$result3 = mysqli_query($con , $sql3);

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
  <body>

  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
			  <a class="navbar-brand" href="index.php"><span class="flaticon-pizza-1 mr-1"></span>Pizzaria<br><small>Santana</small></a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="oi oi-menu"></span> Menu
		      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Inicio</a></li>
	          <li class="nav-item"><a href="menu.php" class="nav-link">Cardápio</a></li>
	          <li class="nav-item"><a href="services.php" class="nav-link">Serviços</a></li>	
	          <li class="nav-item"><a href="about.php" class="nav-link">Sobre</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Entre em contato</a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>
	  
    <!-- END nav -->
	<div id="noMobile"> <!-- abre div no mobile -->
	<section class="home-slider owl-carousel img" style="background-image: url(images/logooficial.jpeg);">
		
		<div class="slider-item" style="background-image: url(images/logooficial.jpeg);">
			<div class="overlay"></div>
			<div class="container">
			<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

				<div class="col-md-7 col-sm-12 text-center ftco-animate">
					<span class="subheading">Bem vindo</span>
				<h1 class="mb-4">PIZZARIA SANTANA</h1>
				<p class="mb-4 mb-md-5">Há mais de 10 anos de tradição em Sorocaba, trazemos agora para George Oetterer, pizzas quentinhas diretamente do forno a lenha.</p>
				<p><a href="menu.php" class="btn btn-primary p-3 px-xl-4 py-xl-3">Visualizar Cardápio</a></p>
				</div>

			</div>
			</div>
		</div>	
	  <div class="slider-item">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">

            <div class="col-md-6 col-sm-12 ftco-animate">
            	<span class="subheading">Experimente</span>
              <h1 class="mb-4">Pizzas deliciosas</h1>
              <p>Diversas opções para todos os gostos.</p>
			  <p>Uma massa leve feita na hora, recheios irresistíveis, pizza quentinha diretamente do forno a lenha</p>
              <p><a href="menu.php" class="btn btn-primary p-3 px-xl-4 py-xl-3">Visualizar Cardápio</a> </p>
            </div>
            <div class="col-md-6 ftco-animate">
            	<img src="" class="img-fluid" alt="">
            </div>

          </div>
        </div>
      </div>
	
      <div class="slider-item">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">

            <div class="col-md-6 col-sm-12 order-md-last ftco-animate">
            	<span class="subheading">Crocante</span>
              <h1 class="mb-4">Venha nós visitar</h1>
              <p class="mb-4 mb-md-5">Espaço amplo e aconchegante para acolher você, seus familiares e amigos.</p>
              <p><a href="menu.php" class="btn btn-primary p-3 px-xl-4 py-xl-3">Visualizar Cardápio</a> </p>
            </div>
            <div class="col-md-6 ftco-animate">
            	<img src="" class="img-fluid" alt="">
            </div>

          </div>
        </div>
      </div>

      
    </section>
</div> <!-- fecha div no mobile -->
    <section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
								<a href="tel:+55-15-99679-7052">(15) 99679-7052</a>
	    						<p>Pizzaria Santana</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3>Jorge Oetterer, Ipero</h3>
	    						<p>Rua Vilma de Freitas, 250, Sorocaba, Sâo Paulo</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Quarta-Domingo</h3>
	    						<p>19:00 - 23:00hrs</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="social d-md-flex pl-md-5 p-4 align-items-center">
	    			<ul class="social-icon">
					<li class="ftco-animate"><a href="https://www.facebook.com/pizzariaSantanaGeorgeOetterer/?__tn__=K-R&eid=ARAdmeuY6bKYvXnUDq7NvuL-StKVJc0-4ruF0r24aRojXvBgcz9RsQ9NmGszyiWjykfKJC9ZnQodfW1e&fref=mentions"><span class="icon-facebook"></span></a></li>
			  <li class="ftco-animate"><a href="https://www.instagram.com/pizzaria_santana02/"><span class="icon-instagram"></span></a></li>
			  <li class="ftco-animate"><a href="https://api.whatsapp.com/send?1=pt_BR&phone=5515996797052"><span class="icon-whatsapp"></span></a></li>
            </ul>
	    		</div>
    		</div>
    	</div>
    </section>



    <section class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image: url(images/about.jpg);"></div>
    	<div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
          <h2 class="mb-4">Bem vindo a <span class="flaticon-pizza"> Pizzaria Santana</span> </h2>
        </div>
        <div>
  				<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
  			</div>
    	</div>
    </section>

    <section class="ftco-section ftco-services">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Nossos serviços</h2>
            <p>Oferecemos diversos serviços para melhor atender sus necessidades.</p>
          </div>
        </div>
    		<div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-pizza"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Rodízio</h3>
                <p>Venha nos conhecer melhor e experimentar nosso rodizio.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-bicycle"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Entrega rápida</h3>
                <p>Temos motoboys preparados para que sua pizza chegue quentinha no conforto do seu lar.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5"><span class="flaticon-pizza-1"></span></div>
              <div class="media-body">
                <h3 class="heading">Receitas originais</h3>
                <p>Usamos as mesmas receitas há mais de 10 anos, tudo feito na hora, fresquinho e com muito amor.</p>
              </div>
            </div>    
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Pizzas em destaques</h2>
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
    						<p class="price"><span>$<?php echo $dados2['precoDestaque'] ?></span> <a href="#" class="ml-2 btn btn-white btn-outline-white">CARDÁPIO</a></p>
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
<!-- Lado 2 -->
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

    <section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
			<?php 
			while ($dados3 = mysqli_fetch_array($result3))
				{ //abre while
			?>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(home/fotoGaleria/<?php echo $dados3['foto']?>);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    							<span class="icon-search"></span>
    						</div>
						</a>
					</div>
			<?php } ?>
					<!-- <div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    							<span class="icon-search"></span>
    						</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    							<span class="icon-search"></span>
    						</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    							<span class="icon-search"></span>
    						</div>
						</a>
					</div> -->
        </div>
    	</div>
    </section>

	<div style="padding-top: 5%"></div>

		<section class="ftco-appointment">
			<div class="overlay"></div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-md-flex align-items-center">
    			<div class="col-md-6 d-flex align-self-stretch">
						<div  class="mapouter"><div  class="gmap_canvas"><iframe id="maps" src="https://maps.google.com/maps?q=Av.%20Vilma%20de%20Freitas%2C%20250%20-%20George%20Oetterer&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/best-vpn/"></a></div></div>
    				<div id=""></div>
    			</div>
	    		<div class="col-md-6 appointment ftco-animate">
	    			<h3 class="mb-3">FALE CONOSCO</h3>
	    			<form action="home/back/api.php?funcao=contatoindex" method="post" class="appointment-form">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input name="email" type="text" class="form-control" placeholder="Email">
		    				</div>
	    				</div>
	    				<div class="d-me-flex">
	    					<div class="form-group">
		    					<input name="assunto" type="text" class="form-control" placeholder="Assunto">
		    				</div>
	    				</div>
	    				<div class="form-group">
	              <textarea name="mensagem" id="" cols="30" rows="3" class="form-control" placeholder="Mensagem"></textarea>
	            </div>
	            <div class="form-group">
	              <input type="submit" value="Enviar" class="btn btn-primary py-3 px-4">
	            </div>
	    			</form>
	    		</div>    			
    		</div>
    	</div>
    </section>

<?php require_once 'front/footer.php' ?>
    
  </body>
</html>