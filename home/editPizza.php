<?php 
require 'back/conexao.php'; //Conexão com o banco de dados
require 'back/Validador.class.php'; //Validador para o nível de acesso

$validador = new Validador();


if($validador->validaNivelAdm())
{ //Abre if do validadorrequire_once 'front/header.php' 
  

$SQL = "SELECT * FROM cardapio";
$result = mysqli_query($con, $SQL);

require_once 'front/header.php';
?>

    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(../images/logooficial.jpeg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-3 text-white">Editar pizza</h1>
            <p class="text-white mt-0 mb-5">Nesta página é desenvolvida para editar as pizza do cardápio principal do site.</p>
            
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0">Pizzas cadastradas</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Pizza</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Ingredientes</th>
                    <th scope="col"></th>
                  </tr>
                </thead>

                <tbody>
                <?php while ($dados=mysqli_fetch_array($result)) {?>
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="fotoPizza/<?php echo $dados['foto'] ?>">
                        </a>
                        <div class="media-body">
                          <span class="mb-0 text-sm"><?php echo $dados['noPizza']. ' - ' . $dados['sabor'] ?></span>
                        </div>
                      </div>
                    </th>
                    <td>
                      R$<?php echo $dados['preco'] ?>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i> <?php echo $dados['ingredientes'] ?>
                      </span>
                    </td>
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="reeditarPizza.php?id=<?php echo $dados['idPizza'] ?>">Editar</a>
                          <a class="dropdown-item" href="back/api.php?funcao=excluirPizza&id=<?php echo $dados['idPizza'] ?>">Excluir</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                <?php } ?>
                 
                  
                 
                
                </tbody>
              </table>
            </div>
            
          </div>
        </div>
      </div>
      <!-- Footer -->
      <?php require_once 'front/footer.php' ?>
    </div>
  </div>
  <!--   Core   -->
  <script src="../assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="../assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="../assets/js/argon-dashboard.min.js?v=1.1.0"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
</body>

</html>

<?php

} //fecha id do validador
else //Caso o nível do usuário seja diferente ele é redirecionado para o index
{
    header("Location: index.php");
}

?>