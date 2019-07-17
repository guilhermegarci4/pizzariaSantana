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

//
// Editar pizzas cadastradas no sistema
if($_GET['funcao'] == "editarPizza")
{
    $noPizza = $_POST['noPizza'];
    $sabor = $_POST['sabor'];
    $ingredientes = $_POST['ingredientes'];
    $preco = $_POST['preco'];
    $lado = $_POST['lado'];
    $idEditar = $_GET['id'];

    $foto = $_FILES['foto']['name'];

    if($foto == '' || $foto == NULL)
    {
            $sql_alterar = mysqli_query($con, " UPDATE cardapio 
                                                SET noPizza='$noPizza', 
                                                    sabor='$sabor', 
                                                    ingredientes='$ingredientes',
                                                    preco='$preco', 
                                                    lado='$lado' 
                                                WHERE idPizza='$idEditar'
                                               ");
            
            echo "<script type='javascript'>alert('Erro!');";
            header("location: ../editPizza.php" );
            exit;
    }
    else 
    {   
        $sql_alt = mysqli_query($con, "SELECT * FROM cardapio WHERE idPizza='$idEditar'");
        while($fotos = mysqli_fetch_array($sql_alt)){
            $foto = $fotos['foto'];	
        }
        unlink("../fotoPizza/$foto");

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
            header("Location: ../editPizza.php");
            exit; 
		}

        $sql_alterar = mysqli_query($con, " UPDATE cardapio 
                                            SET 
                                                foto='$foto',
                                                noPizza='$noPizza', 
                                                sabor='$sabor', 
                                                ingredientes='$ingredientes', 
                                                preco='$preco', 
                                                lado='$lado'                                                
                                            WHERE idPizza='$idEditar'
                                        ");

        if($sql_alterar == TRUE) 
        {
            echo "<script type='javascript'>alert('Ok!');";
            header("location: ../editPizza.php" );
            exit;
        }
        else
        {
            echo "<script type='javascript'>alert('Erro!');";
            header("location: ../editPizza.php" );
            exit;
        }
    }
} // fim da função editar pizza cardapios

//
// Editar pizzas em destaques
if($_GET['funcao'] == "editarPizzaDestaque")
{
    $sabor = $_POST['saborDestaque'];
    $precoDestaque = $_POST['precoDestaque'];
    $descricaoDestaque = $_POST['descricaoDestaque'];
    $lado = $_POST['lado'];

    $idDestaque = $_GET['id'];

    $foto = $_FILES['fotoDestaque']['name'];

    if($foto == '' || $foto == NULL)
    {
            $sql_alterar = mysqli_query($con, " UPDATE destaque 
                                                SET saborDestaque='$sabor', 
                                                    precoDestaque='$precoDestaque', 
                                                    descricaoDestaque='$descricaoDestaque'
                                                WHERE idDestaque='$idDestaque'
                                               ");
            
            echo "<script type='javascript'>alert('Erro!');";
            header("location: ../editPizzaDestaque.php" );
            exit;
    }
    else 
    {   
        $sql_alt = mysqli_query($con, "SELECT * FROM destaque WHERE idDestaque='$idDestaque'");
        while($fotos = mysqli_fetch_array($sql_alt)){
            $foto = $fotos['fotoDestaque'];	
        }
        unlink("../fotoPizzaDestaque/$foto");

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
            header("Location: ../editPizzaDestaque.php");
            exit; 
		}

        $sql_alterar = mysqli_query($con, " UPDATE destaque 
                                            SET fotoDestaque='$foto',
                                                saborDestaque='$sabor', 
                                                precoDestaque='$precoDestaque', 
                                                descricaoDestaque='$descricaoDestaque'
                                            WHERE idDestaque='$idDestaque'
                                        ");

        if($sql_alterar == TRUE) 
        {
            echo "<script type='javascript'>alert('Ok!');";
            header("location: ../editPizzaDestaque.php" );
            exit;
        }
        else
        {
            echo "<script type='javascript'>alert('Erro!');";
            header("location: ../editPizzaDestaque.php" );
            exit;
        }
    }
}

if($_GET['funcao'] == "excluirPizza")
{
	$idExcluir = $_GET['id'];

    $sql_del = mysqli_query($con, "SELECT * FROM cardapio WHERE idPizza='$idExcluir'");
	while($fotos = mysqli_fetch_array($sql_del))
	{
		$foto = $fotos['foto'];	
	}
    unlink("../fotoPizza/$foto");
    
	if($sql_delete = mysqli_query($con, "DELETE FROM cardapio WHERE idPizza = '$idExcluir'"))
	{
		    echo "<script type='javascript'>alert('Ok!');";
            header("location: ../editPizza.php" );
            exit;
    }
	else
	{
		    echo "<script type='javascript'>alert('Erro!');";
            header("location: ../editPizza.php" );
            exit;
	}	  
}

if($_GET['funcao'] == "excluirPizzaDestaque")
{
	$idExcluir = $_GET['id'];
	
	//$sql_del = mysqli_query($con, "SELECT * FROM cardapio WHERE idPizza='$id'");
    $sql_del = mysqli_query($con, "SELECT * FROM destaque WHERE idDestaque='$idExcluir'");
	while($fotos = mysqli_fetch_array($sql_del))
	{
		$foto = $fotos['fotoDestaque'];	
	}
    unlink("../fotoPizzaDestaque/$foto");

	if($sql_delete = mysqli_query($con, "DELETE FROM destaque WHERE idDestaque = '$idExcluir'"))
	{
		    echo "<script type='javascript'>alert('Ok!');";
            header("location: ../editPizzaDestaque.php" );
            exit;
    }
	else
	{
		    echo "<script type='javascript'>alert('Erro!');";
            header("location: ../editPizzaDestaque.php" );
            exit;
	}	  
}