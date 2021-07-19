<?php

include('../php/conexao.php');

$e = $_SESSION['email'];

$dados = mysqli_query($conexao, "SELECT * from info_usuarios WHERE email = '$e'");

while($d = mysqli_fetch_array($dados)){
			$email = $d['email'];
			$nome = $d['nome'];
			$senha = $d['senha'];
			$id = $d['id_usuario'];
}

?>