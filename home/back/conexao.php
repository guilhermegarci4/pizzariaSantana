<?php

// Dados necessários para conexão
// localhost
// Porta: 3306
  
$servidor="sql246.main-hosting.eu.";
$udb="u776348283_pizza";
$senha="bCyYS0ftVfks";
$bdados="u776348283_pizza";
  
// Criando a conexão com a base de dados
$con = mysqli_connect($servidor,$udb,$senha,$bdados);

// Define a acentuação/tabela de caracteres na origem dos dados
mysqli_query($con,"SET NAMES utf8");

// Caso ocorra um erro, emite uma mensagem de falha
if (mysqli_connect_errno()) 
{
  echo "Falha na conexão com o mySQL: " . mysqli_connect_error();
}
    
// FIM

?>