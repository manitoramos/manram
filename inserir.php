<?php
  include("assets/bd/bd.php");
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <link href="../assets/css/index-home.css" rel="stylesheet">
    <link href="../assets/css/inserir.css" rel="stylesheet">


  </head>

  <body style="background-color: rgba(204, 230, 255, 0.8);">
    <!-- Navbar -->
    <?php include('assets/pages/inc/navbar.php') ?>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-12" style="">
        <br>
          <!--<h1 class="my-4">Home
            <small>MyDatabase</small>
          </h1>-->
              <label style="font-size: 20px;" for="title">Manitoramos • <span style="color:orange;">Publicar</span></label>
              <input id="title" type="text" class="form-control inpline col-md-4" placeholder="Titulo">
              <span style="float:right; vertical-align:middle;">
              <img class="imgp" src="../assets/img/goku.jpg">
              <small>A publicar como <b>Manito</b></small>
              <input type="button" value="Publicar" class="btn btn-info btn-sm">
              <input type="button" value="Guardar" class="btn btn-default btn-sm">
              <input type="button" value="Pré-visualizar" class="btn btn-default btn-sm">
              <input type="button" value="Fechar" class="btn btn-default btn-sm">
              </span>
        </div>
        <!-- ./END COL-MD-12 -->
        <div class="col-md-12">
        <br><!-- break na linha -->
        </div>
        <!-- ./END COL-MD-12 -->

        <div class="col-md-9">
          <textarea id="summernote"></textarea>
        </div>
        <!-- ./END COL-MD-9 -->
        <div class="col-md-3">
          <div class="card marb">
            <div class="card-header">
              <select id="catg" class="js-example-basic-single form-control" name="state">
              <option disabled selected>Escolha uma Categoria</option>
              <?php
                $slc = "SELECT * FROM linguagem";
                $res = mysqli_query($BD,$slc);
                if($rowmsg = mysqli_num_rows($res) > 0){
                  while($reg = mysqli_fetch_array($res)){
                    if($reg['ling'] == "Csharp"){
                      echo "<option value='{$reg['id']}'>C#</option>";
                    }
                    else{
                      echo "<option value='{$reg['id']}'>{$reg['ling']}</option>";
                    }
                  }
                }
                else{
                  echo "<option>Sem categorias</option>";
                }

              ?>
              </select>
            </div>
          </div>
          <!-- Collapse #Hastags para a publicação -->
          <div id="accordion">
          <div class="card marb">
              <div class="card-header" id="hash">
                <a style="cursor:pointer;" data-toggle="collapse" data-target="#hasht" aria-expanded="true" aria-controls="hasht">
                  <h6 class="text-left"><i class="fas fa-tags"></i> Hashtags</h6>
                </a>
              </div>
              <div id="hasht" class="collapse" aria-labelledby="hash" data-parent="#accordion">
                <div class="card-body">
                  <textarea class="form-control" style="max-height:120px;min-height:62px;"></textarea>
                  <small class="text-muted">Separar Hashtags com vírgulas</small>
                </div>
              </div>
            </div>
            <!-- Collapse Opçõpes da Publicação -->
          <div class="card">
              <div class="card-header" id="headingOne">
                <a style="cursor:pointer;" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <h6 class="text-left"><i class="fas fa-cog"></i> Opções da Publicação</h6>
                </a>
              </div>
              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                  <label for="coments"><strong>Permitir Comentarios:</strong></label><br>
                  <input type="radio" name="coments">Sim
                  <input type="radio" name="coments" checked>Não
                </div>
              </div>
            </div>
            
          </div>

        </div>
        <!-- ./END COL-MD-3 -->
        
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php include('assets/pages/inc/footer.php') ?>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Summernote -->
    <link href="../assets/summernote/summernote-bs4.css" rel="stylesheet">
    <script src="../assets/summernote/summernote-bs4.js"></script>

    <!-- Select2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <!-- Custom -->
    <script src="../assets/js/inserir.js"></script>


    <script>
			$('#summernote').summernote({
        height: 600,                 // set editor height
        minHeight: 600,             // set minimum height of editor
        disableResizeEditor: true
      });
      $('.note-statusbar').hide(); // esconder o resize do editor


      $(document).ready(function() {
          $('.js-example-basic-single').select2();
          
      });

      
    </script>

  </body>

</html>
