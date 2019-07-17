<?php
require_once 'conexao.php';
require_once 'Validador.class.php';

$email = $_POST['email'];
$senha = $_POST['senha'];
//$senhaMD5 =sha1(MD5($senha));

$sql = "SELECT * 
		FROM `usuario` 
		WHERE `senha` = '{$senha}'
		AND email = '{$email}'";

//echo $sql . "<br>";
$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0) {
	$dados = mysqli_fetch_assoc($result);
	$usuario_nivel = $dados['nivel'];

	$validador = new Validador();

	$_SESSION["nivel"] = $usuario_nivel;
	$_SESSION["email"] = $dados['email'];
	
	if($usuario_nivel=="1")
	{
		header("Location: ../default.php");
	} 	
	exit;
}

//Modal
$_SESSION['senha'] = "Usuário ou Senha incorretos.";
header("Location: ../index.php");
exit;