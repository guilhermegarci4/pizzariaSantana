<?php 
require 'back/conexao.php'; //Conexão com o banco de dados
require 'back/Validador.class.php'; //Validador para o nível de acesso

$validador = new Validador();


if($validador->validaNivelAdm())
{ //Abre if do validador

$pizza=mysqli_query($con, "SELECT count(*) AS total FROM cardapio ");
$pizzaTotal=mysqli_fetch_assoc($pizza);   

$destaque=mysqli_query($con, "SELECT count(*) AS total FROM destaque ");
$pizzaTotalDestaques=mysqli_fetch_assoc($destaque);   

$galeria=mysqli_query($con, "SELECT count(*) AS total FROM galeria ");
$galeriaTotal=mysqli_fetch_assoc($galeria);  

$usuario=mysqli_query($con, "SELECT count(*) AS total FROM usuario ");
$usuarioTotal=mysqli_fetch_assoc($usuario); 

require_once 'front/header.php';
?>

    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Pizzas cadastradas</h5>
                      <span class="h2 font-weight-bold mb-0"> <?php echo $pizzaTotal['total']; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-chart-bar"></i>
                      </div>
                    </div>
                  </div>
                
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Pizzas em destaques</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $pizzaTotalDestaques['total']; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="fas fa-chart-pie"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Fotos na galeria</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $galeriaTotal['total']; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="fas fa-gallery"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Usuários no sistema</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $usuarioTotal['total']; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
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
    <div class="container-fluid mt--7">
      <div class="row">
        
        <div style="padding-top: 27%;"> </div>

        
      </div>
    
      <?php require_once 'front/footer.php' ?>

    </div>
  </div>
 
</body>

</html>

<?php

} //fecha id do validador
else //Caso o nível do usuário seja diferente ele é redirecionado para o index
{
    header("Location: index.php");
}

?>