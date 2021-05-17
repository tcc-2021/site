<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', 'Vila2004');
define('DB', 'teste_login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

?>
