<?php
session_start();
$_SESSION['pag'] = 'programacao';
?>
<!DOCTYPE html>
<html>
<head>
<title>Programacao</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="assets/highlighter/prettify.css" />
<script src="assets/highlighter/prettify.js" ></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css"rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>


<style>
.nav-side-menu {
  overflow: auto;
  font-family: verdana;
  font-size: 12px;
  font-weight: 200;
  background-color: #2e353d;
  position: fixed;
  top: 0px;
  width: 300px;
  height: 100%;
  color: #e1ffff;
}
.nav-side-menu .brand {
  background-color: #23282e;
  line-height: 50px;
  display: block;
  text-align: center;
  font-size: 14px;
}
.nav-side-menu .toggle-btn {
  display: none;
}
.nav-side-menu ul,
.nav-side-menu li {
  list-style: none;
  padding: 0px;
  margin: 0px;
  line-height: 35px;
  cursor: pointer;
  /*    
    .collapsed{
       .arrow:before{
                 font-family: FontAwesome;
                 content: "\f053";
                 display: inline-block;
                 padding-left:10px;
                 padding-right: 10px;
                 vertical-align: middle;
                 float:right;
            }
     }
*/
}
.nav-side-menu ul :not(collapsed) .arrow:before,
.nav-side-menu li :not(collapsed) .arrow:before {
  font-family: FontAwesome;
  content: "\f078";
  display: inline-block;
  padding-left: 10px;
  padding-right: 10px;
  vertical-align: middle;
  float: right;
}
.nav-side-menu ul .active,
.nav-side-menu li .active {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
}
.nav-side-menu ul .sub-menu li.active,
.nav-side-menu li .sub-menu li.active {
  color: #d19b3d;
}
.nav-side-menu ul .sub-menu li.active a,
.nav-side-menu li .sub-menu li.active a {
  color: #d19b3d;
}
.nav-side-menu ul .sub-menu li,
.nav-side-menu li .sub-menu li {
  background-color: #181c20;
  border: none;
  line-height: 28px;
  border-bottom: 1px solid #23282e;
  margin-left: 0px;
}
.nav-side-menu ul .sub-menu li:hover,
.nav-side-menu li .sub-menu li:hover {
  background-color: #020203;
}
.nav-side-menu ul .sub-menu li:before,
.nav-side-menu li .sub-menu li:before {
  font-family: FontAwesome;
  content: "\f105";
  display: inline-block;
  padding-left: 10px;
  padding-right: 10px;
  vertical-align: middle;
}
.nav-side-menu li {
  padding-left: 0px;
  border-left: 3px solid #2e353d;
  border-bottom: 1px solid #23282e;
}
.nav-side-menu li a {
  text-decoration: none;
  color: #e1ffff;
}
.nav-side-menu li a i {
  padding-left: 10px;
  width: 20px;
  padding-right: 20px;
}
.nav-side-menu li:hover {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  -ms-transition: all 1s ease;
  transition: all 1s ease;
}
@media (max-width: 767px) {
  .nav-side-menu {
    position: relative;
    width: 100%;
    margin-bottom: 10px;
  }
  .nav-side-menu .toggle-btn {
    display: block;
    cursor: pointer;
    position: absolute;
    right: 10px;
    top: 10px;
    z-index: 10 !important;
    padding: 3px;
    background-color: #ffffff;
    color: #000;
    width: 40px;
    text-align: center;
  }
  .brand {
    text-align: left !important;
    font-size: 22px;
    padding-left: 20px;
    line-height: 50px !important;
  }
}
@media (min-width: 767px) {
  .nav-side-menu .menu-list .menu-content {
    display: block;
  }
}
body {
  margin: 0px;
  padding: 0px;
}

a{
	color: #blue;
}

a:hover{
	color: #black;
	text-decoration: none;
}

.top{
	color: #1a75ff;
}
.top:hover{
	text-decoration: underline;
	color: #1a75ff;
}

.coreee{
	color: blue;
	float: right;
}

.pennn{
	float: right;
}

.edit{
	color:black;
}

.edit:hover{
	color:black;
}
.bordd{
	border: 2px;
	border-radius: 5px;
	background-color: #007399;
	color: white;
}

.nice{
	color: grey;
}

.nice:hover{
	color: grey;
}
</style>
</head>

<body>
		<div class="container-fluid">
		<div class="col-md-3">
		<div class="row">
					<!--PARA Atualizar O MENU-->
					<?php include ('menu/allmenu.php'); ?> 
			</div>
		</div>
		<div class="col-md-8">
			<div id="page-wrapper" >
				<div id="page-inner">
					<div class="row">
						<div class="panel panel-default">
                        <div class="panel-heading">
						<?php
							if($_GET['tipo'] == 'Python')
							{
								echo "Programação em {$_GET['tipo']} 3.4.3";
							}
							else if($_GET['tipo'] == 'Csharp'){
								echo "Programação em C#";
							}
							else{
								echo "Programação em {$_GET['tipo']}"; 
							}
						?>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Titulo</th>
                                            <th>Linguagem</th>
											<th>User</th>
											<th>Hits</th>
											<th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
							
											
											//if(!mysql_select_db("$bd")){
											//	echo "<br>Impossivel sellecionar a basedados<br>";
											//	echo "Erro " .  mysql_errno() . " - " . mysql_error();
											//	exit;
											//}

											$SQL1 = "SELECT * FROM programacao WHERE tipo='{$_GET["tipo"]}'";
											
											$resultado1 =mysql_query($SQL1,$LIGA);
											
											if($resultado1){								
												while($registo1 = mysql_fetch_array($resultado1)){
													if($_SESSION["user"] == 'manito'){
														echo "<tr><td><a class='top' href='validate/select.php?tipo={$_GET['tipo']}&id={$registo1["id"]}'>{$registo1['titulo']}</a></td>
														<td>{$registo1['tipo']}</td>
														<td>{$registo1['user']}</td>
														<td><span class='bordd'><b> Hits: {$registo1['Hits']} </b></span></td>
														<td><a class='nice' href='validate/apagar.php?id={$registo1["id"]}&tipo={$registo1["tipo"]}'><i class='fa fa-trash-o' aria-hidden='true'></i></a></td></tr>";
													}	
													else{
														echo "<tr><td><a class='top' href='validate/select.php?tipo={$_GET['tipo']}&id={$registo1["id"]}'>{$registo1['titulo']}</a></td>
														<td>{$registo1['tipo']}</td>
														<td>{$registo1['user']}</td>
														<td><span class='bordd'><b> Hits: {$registo1['Hits']} </b></span></td>";
														if($_SESSION['user'] == $registo1['user'])
														{
															echo "<td><a class='nice' href='validate/apagar.php?id={$registo1["id"]}&tipo={$registo1["tipo"]}'><i class='fa fa-trash-o' aria-hidden='true'></i></a></td></tr>";
														}
														else
														{
															echo "<td></td></tr>";
														}
													}
												}
											}
										?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
						   
					</div>
					 <hr />
					 <div class="row">
					 
						<?php
						
						$teste = "";
						
						if($_SESSION["select"] == 1)
						{
							
							$server = "mysql.hostinger.pt";
							$user = "u824715076_tiago";
							$senha = "BXDiel15";
							$bd = "u824715076_prog";
											
							$LIGA =@mysql_connect("$server","$user","$senha") or die ("servidor nao esta a responder!");
											
							$db =@mysql_select_db($bd,$LIGA) or die ("Nao foi possivel conectar-se ao banco de dados!");
							
							$SQL2 = "SELECT * FROM programacao WHERE id='{$_GET['id']}'";
							
							$resultado2 =mysql_query($SQL2,$LIGA);
							
							while($registo2 = mysql_fetch_array($resultado2)){
								$titulo = $registo2["titulo"];
								echo "<div class='panel panel-default'>";
								echo "<div class='panel-heading'>";
								if($_SESSION['user'] == 'manito'){
								echo "<h2>{$registo2['titulo']} <a class='edit' data-toggle=\"modal\" data-target=\"#myModal\"><i class='fa fa-pencil-square-o pennn' aria-hidden='true'></i></a><span class='coreee'>#{$registo2['id']}</span></h2>";
								}
								else{
								echo "<h2>{$registo2['titulo']}</h2>";	
								}
								echo "</div>";
								echo "<div class='panel-body'>";
								echo "<div class='table-responsive'>";
								$fp2 = fopen("validate/mens/{$registo2['mensagem']}.txt", "r");
								while(!feof($fp2)){
									$teste .= fgets($fp2);
								}
								echo $teste;
								fclose($fp2);
								echo "</div>";
								echo "</div></div>";
							}
							
						}
							
						?>
					 </div>
				   
				</div>
			</div>
		</div>

		</div>
		<!-- MOODALLLL -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Edit</h4>
				  </div>
				  <div class="modal-body">
				  
				  <?php 
					echo "<form action='validate/atualizar.php?tipo={$_GET['tipo']}&id={$_GET["id"]}' method=\"post\">";
				  
					echo "<input id=\"titulo\" name=\"titulo\" type=\"text\" value='{$titulo}' class=\"form-control input-md\"><br><br>";
					echo "	<center><label for=\"textarea\">Mensagem</label><br><br></center>                    
									<textarea class=\"form-control\" id=\"summernote\" rows=\"10\" name=\"mensagem\" wrap=\"hard\" value=\"{$teste}\"></textarea>";
									echo "<textarea value=\"{$teste}\"></textarea>";
					
				  ?>
				  <br>
				  < pre class='prettyprint linenums:1'>< /pre> exemplo:
				  <br>
				  <center><button id="singlebutton" name="singlebutton" class="btn btn-primary btn-md">Atualizar</button></center>
				  </form>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				  </div>
				</div>
			  </div>
			</div>
		<!--SCRIPTSSS -->
		<script>
			prettyPrint();
		</script>
		<!-- JQUERY SCRIPTS -->

      <!-- BOOTSTRAP SCRIPTS -->	
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
	<script>
			$(document).ready(function() {
				$('#summernote').summernote();
				height: 500
			});
	    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
	
</body>


</html>