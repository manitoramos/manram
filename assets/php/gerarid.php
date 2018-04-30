<?php
    session_start();

    //setcookie('id', null, -1, '/'); //unset the cookie
    //exit();

    function GeraHash($qtd){ 
        //Under the string $Caracteres you write all the characters you want to be used to randomly generate the code. 
        $Caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890'; 
        $Qtdcrt = strlen($Caracteres); 
        $Qtdcrt--; 

        $Hash=NULL; 
            for($x=1;$x<=$qtd;$x++){ 
                $Posicao = rand(0,$Qtdcrt); 
                $Hash .= substr($Caracteres,$Posicao,1); 
            } 

        return $Hash; 
    }
    
    
    function getid() 
    {
        $id = GeraHash(40);
        setcookie('id', $id, time() + (86400 * 2000), "/");
        $_COOKIE['id'] = $id;
        $_SESSION['id'] = $_COOKIE['id'];
    }


    // Code that runs when a new session is started
    if (!isset($_COOKIE['id'])) //2147483647
    {
        getid();
    }
    else
    {
        $_SESSION['id'] = $_COOKIE['id'];
    }

    //echo $_SESSION['id'] . "<br>";
    //echo $_COOKIE['id'];

?>