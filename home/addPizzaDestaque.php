<?php 
require 'back/conexao.php'; //Conexão com o banco de dados
require 'back/Validador.class.php'; //Validador para o nível de acesso

$validador = new Validador();


if($validador->validaNivelAdm())
{ //Abre if do validadorrequire_once 'front/header.php' 

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
            <h1 class="display-3 text-white">Adicionar as Pizza em Destaques</h1>
            <p class="text-white mt-0 mb-5">Nesta página é desenvolvida para adicionar pizza para ficarem em destaques em cima do cardápio principal do site.</p>
            
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
                  <h3 class="mb-0">Adicionar Pizza em destaque</h3>
                </div>
                
              </div>
            </div>
            <div class="card-body">
              <form action="back/api.php?funcao=addPizzaDestaque" method="post" enctype="multipart/form-data">
                <h6 class="heading-small text-muted mb-4">Informações</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Sabor da pizza em destaque</label>
                        <input type="text" name="saborDestaque" id="input-username" class="form-control form-control-alternative" placeholder="Ex: Frango c/ catupiry">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Preço</label>
                        <input type="text" name="precoDestaque" id="input-email" class="form-control form-control-alternative" placeholder="Ex: 30,00">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Descrição</label>
                        <input type="text" name="descricaoDestaque" id="input-first-name" class="form-control form-control-alternative" placeholder="Ex: Frango, Catupiry.." >
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Parte para ficar?</label>
                       <select name="lado" class="form-control form-control-alternative"> 
                           <option value="0"> Em cima </option>
                           <option value="1"> Embaixo </option>
                       </select>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Foto da Pizza</label>
                        <input type="file" name="fotoDestaque" id="input-last-name" class="form-control form-control-alternative" placeholder="Ex: 32,00">
                      </div>
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

<?php

} //fecha id do validador
else //Caso o nível do usuário seja diferente ele é redirecionado para o index
{
    header("Location: index.php");
}

?>