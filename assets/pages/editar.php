<?php
    include("../bd/bd.php");

    $slc2 = "SELECT * FROM programacao WHERE id=144";

    //VERIFICA SE FOI INSERIDA COM SUCESSO SENAO MANDA A MENSAGEM DE ERRO
    if ($res2 =mysqli_query($BD, $slc2)) {
        //SELECIONADA COM SUCESSO
        $reg2 = mysqli_fetch_array($res2);
    } else {
            echo "Error: " . $slc2 . "<br>" . mysqli_error($BD);
    }
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

     <!-- Toastr -->
     <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"/>


  </head>

  <body style="background-color: #f5f8fa;">
    <!-- Navbar -->
    <?php include('inc/navbar.php') ?>

    <!-- Page Content -->
    <div class="container">
    <form id="msgpub" method='post' enctype='multipart/form-data'>
      <div class="row">
        
        <!-- Blog Entries Column -->
        <div class="col-md-12" style="">
        <br>
          <!--<h1 class="my-4">Home
            <small>MyDatabase</small>
          </h1>-->
              <label style="font-size: 20px;" for="title">Manitoramos • <span style="color:orange;">Publicar</span></label>
              <input id="title" type="text" name="title" value="<?php echo $reg2['titulo']; ?>" class="form-control inpline col-md-4" placeholder="Titulo">
              <span style="float:right; vertical-align:middle;">
              <img class="imgp" src="../assets/img/goku.jpg">
              <small>A publicar como <b>Manito</b></small>
              <input type="button" onclick="gupufe('pub')" value="Publicar" class="btn btn-info btn-sm">
              <input type="button" onclick="gupufe('save')" value="Guardar" class="btn btn-default btn-sm">
              <input type="button" value="Pré-visualizar" class="btn btn-default btn-sm">
              <input type="button" onclick="gupufe('close')" value="Fechar" class="btn btn-default btn-sm">
              </span>
        </div>
        <!-- ./END COL-MD-12 -->
        <div class="col-md-12">
        <br><!-- break na linha -->
        </div>
        <!-- ./END COL-MD-12 -->

        <div class="col-md-9">
          <textarea id="summernote"><?php echo $reg2['mensagem']; ?></textarea>
        </div>
        <!-- ./END COL-MD-9 -->
        <div class="col-md-3">
          <div class="card marb">
            <div class="card-header">
              <select id="catg" class="js-example-basic-single form-control" name="state">
              <option disabled>Escolha uma Categoria</option>
              <?php
                $slc = "SELECT * FROM linguagem";
                $res = mysqli_query($BD,$slc);
                if($rowmsg = mysqli_num_rows($res) > 0){
                  while($reg = mysqli_fetch_array($res)){
                    if($reg['ling'] == "Csharp"){
                        if($reg['id'] == $reg2['cat_id']){echo "<option selected value='{$reg['id']}'>C#</option>";}
                            else{echo "<option value='{$reg['id']}'>C#</option>";}
                    }
                    else{
                        if($reg['id'] == $reg2['cat_id']){echo "<option selected value='{$reg['id']}'>{$reg['ling']}</option>";}
                            else{echo "<option value='{$reg['id']}'>{$reg['ling']}</option>";}
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
                  <textarea id="hashs" class="form-control" style="max-height:120px;min-height:62px;"><?php echo $reg2['tags']; ?></textarea>
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
                  <input type="radio" name="coments" disabled>Sim
                  <input type="radio" name="coments" disabled checked>Não <span style="color:red;">(Em Construção)</span>
                </div>
              </div>
            </div>
            
          </div>

        </div>
        <!-- ./END COL-MD-3 -->
        
      </div>
      <!-- /.row -->
      </form>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php include('inc/footer.php') ?>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Summernote -->
    <link href="../assets/summernote/summernote-bs4.css" rel="stylesheet">
    <script src="../assets/summernote/summernote-bs4.js"></script>

    <!-- Select2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <!-- Toastr -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!-- Custom -->
    <script src="../assets/js/inserir.js"></script>

    <!-- Prettify 
     <link rel="stylesheet" href="../assets/highlighter/prettify.css" />
    <script src="../assets/highlighter/prettify.js" ></script>-->


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
