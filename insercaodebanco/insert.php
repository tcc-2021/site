<?php
session_start();
include("conexao.php");

$materia = ($_POST['materia']);
$ano = ($_POST['ano']);
$pergunta = ($_POST['pergunta']);
$resposta =  strtoupper(($_POST['resposta']));


if(isset($_FILES['arquivo'])){
	$arquivo = $_FILES['arquivo']['name'];
	
	$novo_nome = $arquivo ;

	$diretorio = "upload/";

	move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novo_nome);

	$sql = "INSERT INTO perguntas (ano, pergunta, resposta, materia, arquivo ) VALUES ('$ano', '$pergunta','$resposta','$materia','$novo_nome')";
}
else{
	$sql = "INSERT INTO perguntas (ano, pergunta, resposta, materia, arquivo ) VALUES ('$ano', '$pergunta', '$resposta','$materia','')";
}

if($conexao->query($sql) === TRUE) {
	$_SESSION['deucerto'] = true;
}

$conexao->close();

header('Location: perguntas.php');
exit();

?>