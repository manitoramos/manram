<?php
	session_start();
	if(isset($_POST['task'])){
		header ('Content-type: text/html; charset=ISO-8859-1');

		include("../bd/bd.php");
	}
	else{exit();}


	if($_POST['task'] == 'tipo'){//OBTER OS RESULTADOS PARA ESSE TIPO SELECIONADO
		//$_POST['responsee']

		$slcprog = "SELECT * FROM programacao WHERE tipo='{$_POST['responsee']}'";
												
		$resultado1 =mysqli_query($BD,$slcprog);

		$count = 0;//para nao ficar undefined

		$rowcount = mysqli_num_rows($resultado1);

		if($rowcount == 0)
		{
			echo "falsecat";//categoria sem mensagens
			exit();
		}
												
		if($resultado1){
			while($registo1 = mysqli_fetch_array($resultado1)){
				if($count == 0){$count++;}else{echo "/:/";}//se for a primeira vez mete o count a 1 senao da separador de tr
				echo "<a style='color:#007bff;cursor: pointer;' onclick=getmens(".$registo1['id'].")>".$registo1['titulo']."</a>";//Coluna do titulo
				echo "**:**";//separador
				echo $registo1['tipo'];//Coluna do tipo
				echo "**:**";//separador
				echo $registo1['user'];//Coluna do utilizador
				echo "**:**";//separador
				echo "<center><b class='hits' id='hits{$registo1['id']}'>" . $registo1['Hits'] . "</b></center>";//Coluna dos Hits
				echo "**:**";//separador
				echo "";//em branco senao for admin/not login/nao for o dono da mensagem
				//echo "/:/";//separador de Tr
			}
		}
	}
	else if($_POST['task'] == 'msg'){//OBTER O TITULO E O CONTEUDO DO POST/MSG

		$msg = "";

		$slcmsg = "SELECT * FROM programacao WHERE id='{$_POST['responsee']}'";

		$resmsg =mysqli_query($BD,$slcmsg);

		$rowmsg = mysqli_num_rows($resmsg);

		if($rowmsg == 0){
			echo "falsemsg";
			exit();
		}
		else{
			$_SESSION['msgid'] = $_POST['responsee'];//sessao fica com o id da mensagem que é para apresentar

			//UPDATE NOS HITS DA MENSAGEM SELECIONADA
			$uphits = "UPDATE programacao SET Hits=Hits+1 WHERE id='{$_POST['responsee']}'";
			$reshits =mysqli_query($BD,$uphits);

			//SELECT PARA OBTER OS HITS DA MENSAGEM
			$slchits = "SELECT Hits FROM programacao WHERE id='{$_POST['responsee']}'";
			$reshits2 =mysqli_query($BD,$slchits);
			$reghits = mysqli_fetch_array($reshits2);

			echo $_POST['responsee'];
			echo "**:**";
			echo $reghits['Hits'];
		}

		/*if($resmsg){//TIVE DE UTILIZAR O RELOAD DE DIV
			$regmsg = mysqli_fetch_array($resmsg);

			echo $regmsg['titulo'];
			echo "**:**";//separar titulo do conteudo da mensagem
			$fp2 = fopen("../msg/{$regmsg['mensagem']}.txt", "r");
			while(!feof($fp2)){
				$msg .= fgets($fp2);
			}
			echo $msg;
			fclose($fp2);
			//echo $regmsg['mensagem'];
		}*/

	}
?>