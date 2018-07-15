<div id="tipoprog" class="table-responsive">
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

				$slcprog = "SELECT * FROM programacao WHERE tipo='PHP'";
											
				$resultado1 =mysqli_query($BD,$slcprog);
											
				if($resultado1){								
					while($registo1 = mysqli_fetch_array($resultado1)){
						/*if($_SESSION["user"] == 'manito'){
							echo "<tr><td><a class='top' href='validate/select.php?tipo={$_GET['tipo']}&id={$registo1["id"]}'>{$registo1['titulo']}</a></td><td>{$registo1['tipo']}</td><td>{$registo1['user']}</td><td><span class='bordd'><b> Hits: {$registo1['Hits']} </b></span></td><td><a class='nice' href='validate/apagar.php?id={$registo1["id"]}&tipo={$registo1["tipo"]}'><i class='fa fa-trash-o' aria-hidden='true'></i></a></td></tr>";
						}*/
						//else{
							echo "<tr><td><a style='color:#007bff;cursor: pointer;'>";
							echo htmlentities($registo1['titulo'], ENT_COMPAT,'ISO-8859-1', true);
							echo "</a></td><td>{$registo1['tipo']}</td><td>{$registo1['user']}</td><td class='text-center'><span class='bordd'><b class='hits'>{$registo1['Hits']}</b></span></td>";
							//if($_SESSION['user'] == $registo1['user']){
							//	echo "<td><a class='nice' href='validate/apagar.php?id={$registo1["id"]}&tipo={$registo1["tipo"]}'><i class='fa fa-trash-o' aria-hidden='true'></i></a></td></tr>";
							//}
							//else{
								echo "<td></td></tr>";
							//}
						//}
					}
				}
			?>
        </tbody>
    </table>
</div>
<br><!-- Card MSG -->
<div class="card" id="cardmsg">
  <div class="card-header">
	<b style="font-size: 25px;" id="titlemsg">
		<?php
		if(isset($_SESSION['msgid']))
		{
			$msg = "";
			$slcmsg = "SELECT * FROM programacao WHERE id='{$_SESSION['msgid']}'";
			$resmsg =mysqli_query($BD,$slcmsg);
			$rowmsg = mysqli_num_rows($resmsg);

			if($resmsg){
				$regmsg = mysqli_fetch_array($resmsg);
				//echo $regmsg['titulo'];
				echo htmlentities($regmsg['titulo'], ENT_COMPAT,'ISO-8859-1', true);
			}
		}
		
		?>
	</b>
  </div>
  <div class="card-body" id="bodymsg">
	<?php
	
		if(isset($_SESSION['msgid']))
		{
				$fp2 = fopen("assets/msg/{$regmsg['mensagem']}.txt", "r");
				while(!feof($fp2)){
					$msg .= fgets($fp2);
				}
				echo $msg;
				fclose($fp2);
				//echo $regmsg['mensagem'];

			//close if
		}
		//fechar a conexao a basedados
		//mysqli_close($BD);
	?>
  </div>
</div>

<br>
<!--<div>
	<button id="btest" onclick="newrow()">ADD ROW</button>
	<button id="btest" onclick="cleartable()">CLEAR Table</button>
</div>-->