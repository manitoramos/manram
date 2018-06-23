<?php
	session_start();
	
	include("../bd/bd.php");
	
	//if(isset($_GET['acao']))//para fazer logout
	//{
		//unset($_SESSION['user']);
		//header("Location: {$_SESSION['pagina']}");
	//}
	if(!isset($_POST['task']))
	{
		echo "false";
		exit();
	}
	else if($_POST['task'] == "registo")//para registar
	{
		//manitoramos para encriptar a password
		$pass = $_POST['pass'];
		$pwlenght = strlen($pass);
		$pwnew = "";//password
		$carc = "";//caracters
		$e = 1;

		$a = rand(0, $pwlenght -1);//1 random
		while($e != 0)//para nao haver numeros repetidos
		{
			if($e == 1){	
				$b = rand(0, $pwlenght -1);
				if($b != $a){$e = 2;}
			}
			else if($e == 2){
				$c = rand(0, $pwlenght -1);
				if($c != $a && $c != $b){$e = 0;}
			}
		}	

		//encrypt the password without 3 caracters
		for( $i = 0; $i < $pwlenght; $i++){
			if($i == $a || $i == $b || $i == $c){
				$carc = $carc . $pass{$i};
			}else{
				$pwnew = $pwnew . $pass{$i}; 
			}
		}

		echo $carc . " - " . $pwnew;

		echo "---" . $a . $b . $c;

		$nums = $a . $b . $c;

		//DATA PARA SABER QUANDO O POST FOI CRIADO E UPDATE -- NESTE CASO VAO SER IGUAIS PORQUE É UM NOVO POST
		$date = date("Y-m-d h:i:s");

		//Encryptar password
		$pwcript = sha1(sha1($pwnew));
		$carcript = sha1(sha1($carc));
		
		echo " [ " . $carcript;
		echo " -- " . $pwcript . " ] ";

		$ins = "INSERT INTO users (nome,senha,email,idade,user,nums,encry,created_at, updated_at) 
		VALUES ('{$_POST['name']}','{$pwcript}','{$_POST['mail']}','{$_POST['date']}','{$_POST['user']}',
		'{$nums}','{$carcript}','{$date}','{$date}')";

		if (mysqli_query($BD, $ins)) {
			echo " - [ New record created successfully ]";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($BD);
		}

		mysqli_close($BD);

		
		exit();
		//END encript
		
	}
	else if($_POST['task'] == "login")//para entrar na conta
	{
		$senha = $_POST['pass'];
		$senhalen = strlen($senha);
		$user = $_POST['user'];
		$pwnew = "";//password
		$carc = "";//caracters

		$slc = "SELECT * FROM users WHERE user='{$user}'";

		if ($ress=mysqli_query($BD, $slc)) {
			//selecionado com sucesso
			$rowcount=mysqli_num_rows($ress);//contar rows selecionadas
			if($rowcount == 1){
				//existe o utilizador agora passa para o passo de verificar a password
				$reg = mysqli_fetch_array($ress);
				$numslen = strlen($reg['nums']);
				$nums = $reg['nums'];

				//encrypt the password without 3 caracters
				for( $i = 0; $i < $senhalen; $i++){
					if($i == $nums{0} || $i == $nums{1} || $i == $nums{2}){
						$carc = $carc . $senha{$i};
					}else{
						$pwnew = $pwnew . $senha{$i}; 
					}
				}

				//Encryptar password
				$pwcript = sha1(sha1($pwnew));
				$carcript = sha1(sha1($carc));

				if($pwcript == $reg['senha'] && $carcript == $reg['encry']){
					//login com sucesso
					echo "logsuc";
				}
				else{
					//password errada
					echo "falsepass";
					exit();
				}
				//Para testes
				//echo " [ " . $carcript;
				//echo " -- " . $pwcript . " ] ";
			}
			else{
				//esse utilizador nao existe
				echo "falseuser";
				exit();
			}
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($BD);//erro ao selecionar na basedados
		}

		/*$senha = $_POST['password'];
		
		$cript = sha1(sha1("grubb" . $senha));
		
		$SQL1 = "SELECT * FROM users where email='{$_POST['email']}' AND password='{$cript}'";
		$resultado1 = mysql_query($SQL1,$LIGA);
		$registo1 = mysql_fetch_array($resultado1);
		
		if($registo1 == "")
		{
			echo "false";
		}
		else
		{
			echo "true";
			$_SESSION['user'] = $registo1['user'];
		}*/

		//echo "login sucess";
	}
	else if($_POST['task'] == "forgetpass")
	{
		//codigo para quando se esquece do email da conta
		$email = $_POST['mail'];

		$slc = "SELECT * FROM users WHERE email='{$email}'";

		if ($ress=mysqli_query($BD, $slc)) {
			//selecionado com sucesso
			$rowcount=mysqli_num_rows($ress);//contar rows selecionadas
			if($rowcount == 1){
				$reg = mysqli_fetch_array($ress);
					
			}
			else{
				//nao existe nenhuma conta associada a este email
				echo "falsemail";
				exit();
			}
		}else{
			echo "Error: " . $sql . "<br>" . mysqli_error($BD);//erro na basedados
			exit();
		}
	}
?>