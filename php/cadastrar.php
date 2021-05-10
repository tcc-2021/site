<?php
session_start();
include("conexao.php");

$nome = trim($_POST['nome']);
$email = trim($_POST['email']);
$senha = trim($_POST['senha']);

$sql = "select count(*) as total from info_usuarios where email = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['usuario_existe'] = true;
    header('Location: ../cadastro.php');
    exit();
}

$sql = "INSERT INTO info_usuarios(email, nome, senha) VALUES('$email', '$nome', md5('$senha'))";

if($conexao->query($sql) === TRUE){
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: ../cadastro.php');
exit();

?>