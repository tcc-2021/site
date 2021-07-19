<?php
session_start();
include('conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])){
	header('Location: ../entre.php');
	exit();
}

$email = ( $_POST['email']);
$senha = ( $_POST['senha']);

$query = "SELECT * FROM info_usuarios where email = '{$email}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
	$_SESSION['email'] = $email;
	header('Location: ../principal/index.php');
	exit();
}else{
	$_SESSION['nao_autenticado'] = true;
	header('Location: ../entre.php');
	exit();
}

?>