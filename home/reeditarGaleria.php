<!--

=========================================================
* Argon Dashboard - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

<?php 

require_once 'back/conexao.php'; 

if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
    $query = mysqli_query($con, "SELECT * FROM galeria WHERE idGaleria = ".$id);
    $row = mysqli_fetch_array($query);
}
require_once 'front/header.php' 


?>

    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(../images/logooficial.jpeg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-3 text-white">Editar Galera</h1>
            <p class="text-white mt-0 mb-5">Nesta página é desenvolvida para editar as fotos da galeria principal do site.</p>
            
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--8">
      <div class="row">
        
        <div class="col-xl-12 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Editar Galeria</h3>
                </div>
                
              </div>
            </div>
            <div class="card-body">
              <form action="back/api.php?funcao=editarGaleria&id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
                <h6 class="heading-small text-muted mb-4">Informações</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Descrição</label>
                        <input type="text" value="<?php echo $row['descricaoFoto'];?>" name="descricaoFoto" id="input-username" class="form-control form-control-alternative" placeholder="Ex: 1">
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
    

                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Fotos da Galeria: </label>

                        <?php 

                        if ($row['foto']!="")
                            {
                                echo '<img src="fotoGaleria/'.$row['foto'].'" width=100>';
                            }
                        ?>

                        <input type="file" name="foto" id="input-last-name" class="form-control form-control-alternative" placeholder="Ex: 32,00">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-info"> Enviar </button>
                  </div>
                </div>
                <hr class="my-4" />
                
                
              </form>
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