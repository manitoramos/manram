<?php
//VERIFICAR SE TASK TEM ALGUM VALOR CASO SEJA NULLO NAO FAZ NADA
if(isset($_POST['task'])){
    include("../bd/bd.php");
    date_default_timezone_set('Europe/Lisbon');
}
else{
    echo "tentativa sem resultado!!";
    exit();
}

//*******************************
//        PUBLICAR POST
//*******************************
if($_POST['task'] == "pub")
{
    //echo "chegou aqui crl";
    //echo $_POST['title'] . "<br>" . $_POST['mens'] . "<br>" . $_POST['catg'] . "<br>" . $_POST['hash'];

    //HASH TAGS
    $newtags = "";
    $tagss = explode(",", $_POST['hash']);

    //$i = 0;
    //$len = count($tagss);
    if($_POST['hash'] != ""){
        foreach ($tagss as $value){
            if ($value{0} == '#')//verifica se ele ja pos ha # senao adiciona
            {
                /*if($i == $len -1){$newtags = $newtags . $value;}
                    else{$newtags = $newtags . $value . ",";}*/
                        if ($value === end($tagss)){$newtags = $newtags . $value;}
                            else{$newtags = $newtags . $value . ",";}
            } 
            else{
                /*if($i == $len -1){$newtags = $newtags . "#" . $value;}
                    else{$newtags = $newtags . "#" . $value . ",";}*/
                    if ($value === end($tagss)){$newtags = $newtags . /*"#" .*/ $value;}
                            else{$newtags = $newtags . $value . ",";}
            }
            //$i++;
        }
    } 

    
    //MENSAGEM PARA CONSEGUIR ENTRAR NA BASEDADOS TENHO DE ESCAPAR OS CARACTERS ESPECIAIS PARA NAO BUGAR COM OS OUTROS
    $msg = addslashes($_POST['mens']);
    //DATA PARA SABER QUANDO O POST FOI CRIADO E UPDATE -- NESTE CASO VAO SER IGUAIS PORQUE É UM NOVO POST
    $date = date("Y-m-d h:i:s");

    //INSERIR NA BASEDADOS
    $sql = "INSERT INTO programacao (user, tipo, cat_id, mensagem, titulo, tags, created_at, updated_at, updated_by)
    VALUES ('manito', 'teste', '{$_POST['catg']}', '{$msg}', '{$_POST['title']}' , '{$newtags}', '{$date}', '{$date}', 'manito')";

    //VERIFICA SE FOI INSERIDA COM SUCESSO SENAO MANDA A MENSAGEM DE ERRO
    if (mysqli_query($BD, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($BD);
    }

    //FECHAR A CONEXAÇÃO
    mysqli_close($BD);
}
 
//*******************************
//      GUARDAR/FECHAR POST
//*******************************
if($_POST['task'] == "save" || $_POST['task'] == "close")
{

    //codigo aqui

}



?>