<?php

require_once 'conexao.php';

// API para adicionar a pizza
//
if($_GET['funcao'] == "addPizza" && addslashes(file_get_contents($_FILES["foto"]["tmp_name"])))
{
    $noPizza = $_POST['noPizza'];
    $sabor = $_POST['sabor'];
    $ingredientes = $_POST['ingredientes'];
    $preco = $_POST['preco'];
    $lado = $_POST['lado'];

    $foto = $_FILES['foto']['name'];

    //ADAPTAR NOME DA IMAGEM E DEIXAR NO DIMINUTIVO
    $foto = str_replace(" ","_",$foto);
    $foto = str_replace("á","a",$foto);
    $foto = str_replace("à","a",$foto);
    $foto = str_replace("ã","a",$foto);
    $foto = str_replace("â","a",$foto);
    $foto = str_replace("é","e",$foto);
    $foto = str_replace("è","e",$foto);
    $foto = str_replace("í","i",$foto);
    $foto = str_replace("ì","i",$foto);
    $foto = str_replace("ó","o",$foto);
    $foto = str_replace("õ","o",$foto);
    $foto = str_replace("ç","c",$foto);
    $foto = strtolower($foto);

    if(!move_uploaded_file($_FILES['foto']['tmp_name'], "../fotoPizza/".$foto))
        {				
            header("Location: ../addPizza.php");
            exit; 
		}

    $SQL = mysqli_query ($con," INSERT INTO cardapio (noPizza, sabor, ingredientes, preco, foto, lado)    
                                VALUES ('$noPizza', '$sabor', '$ingredientes', '$preco', '$foto', '$lado') ");

    if($SQL == TRUE) 
    {
        echo "<script type='javascript'>alert('Ok!');";
        header("location: ../addPizza.php" );
        exit;
    }
    else
    {
        echo "<script type='javascript'>alert('Erro!');";
        header("location: ../addPizza.php" );
        exit;
    }
 
} // Fim API para adicionar pizza ao cardapio

//
// API para adicionar a pizza em destaque
//
if($_GET['funcao'] == "addPizzaDestaque" && addslashes(file_get_contents($_FILES["fotoDestaque"]["tmp_name"])))
{
    $sabor = $_POST['saborDestaque'];
    $precoDestaque = $_POST['precoDestaque'];
    $descricaoDestaque = $_POST['descricaoDestaque'];
    $lado = $_POST['lado'];

    $foto = $_FILES['fotoDestaque']['name'];

    //ADAPTAR NOME DA IMAGEM E DEIXAR NO DIMINUTIVO
    $foto = str_replace(" ","_",$foto);
    $foto = str_replace("á","a",$foto);
    $foto = str_replace("à","a",$foto);
    $foto = str_replace("ã","a",$foto);
    $foto = str_replace("â","a",$foto);
    $foto = str_replace("é","e",$foto);
    $foto = str_replace("è","e",$foto);
    $foto = str_replace("í","i",$foto);
    $foto = str_replace("ì","i",$foto);
    $foto = str_replace("ó","o",$foto);
    $foto = str_replace("õ","o",$foto);
    $foto = str_replace("ç","c",$foto);
    $foto = strtolower($foto);

    if(!move_uploaded_file($_FILES['fotoDestaque']['tmp_name'], "../fotoPizzaDestaque/".$foto))
        {				
            header("Location: ../addPizzaDestaque.php");
            exit; 
		}

    $SQL = mysqli_query ($con," INSERT INTO destaque (saborDestaque, descricaoDestaque, precoDestaque, fotoDestaque, lado)    
                                VALUES ('$sabor', '$descricaoDestaque', '$precoDestaque', '$foto', '$lado') ");

    if($SQL == TRUE) 
    {
        echo "<script type='javascript'>alert('Ok!');";
        header("location: ../addPizzaDestaque.php" );
        exit;
    }
    else
    {
        echo "<script type='javascript'>alert('Erro!');";
        header("location: ../addPizzaDestaque.php" );
        exit;
    }
 
} // Fim API para adicionar pizza em destaque


