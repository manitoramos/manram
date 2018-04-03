<?php
session_start();

$_SESSION["select"] = 0;
$_SESSION["pag"] = "home";

?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="assets/highlighter/prettify.css" />
<script src="assets/highlighter/prettify.js" ></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

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
	color: #e1ffff;
}

.manito{
	color: blue;
}

a:hover{
	color: #e1ffff;
	text-decoration: none;
}

.pennn{
	float: right;
}

.coreee{
	color: blue;
	float: right;
}
.edit{
	color:black;
}

.edit:hover{
	color:black;
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
						 <h2 class="manito">ManitoRamos</h2>   
					</div>
					 <hr />
						<?php
									$server = "mysql.hostinger.pt";
									$user = "u824715076_tiago";
									$senha = "BXDiel15";
									$bd = "u824715076_prog";
											
									$LIGA =@mysql_connect("$server","$user","$senha") or die ("servidor nao esta a responder!");
											
									$db =@mysql_select_db($bd,$LIGA) or die ("Nao foi possivel conectar-se ao banco de dados!");

									$SQL1 = "SELECT * FROM programacao WHERE Featured='Yes' ORDER BY id";
											
									$resultado1 =mysql_query($SQL1,$LIGA);
											
									if($resultado1){								
										while($registo1 = mysql_fetch_array($resultado1)){
											$teste = "";
											echo "<div class='panel panel-default'>";
											echo "<div class='panel-heading'>";
											if($_SESSION['user'] == 'manito'){
											echo "<h2>{$registo1['titulo']} <a class='edit' data-toggle=\"modal\" data-target=\"#myModal\"><i class='fa fa-pencil-square-o pennn' aria-hidden='true'></i></a><span class='coreee'>#{$registo1['id']}</span></h2>";
											}
											else{
											echo "<h2>{$registo1['titulo']}</h2>";	
											}
											echo "</div>";
											echo "<div class='panel-body'>";
											echo "<div class='table-responsive'>";
											$fp2 = fopen("validate/mens/{$registo1['mensagem']}.txt", "r");
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
		<script>
			prettyPrint();
		</script>
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>


</html>