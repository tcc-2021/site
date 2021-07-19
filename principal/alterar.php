<?php

$e = $_SESSION['email'];

$novo_nome = $_POST['nome'];
$novo_email = $_POST['email'];
$nova_senha = $_POST['senha'];

// caso o usuário submeta o formulário apenas com o campo de imagem preenchido
if(isset($_FILES['arquivo']) && empty($novo_nome) && empty($novo_email) && empty($nova_senha)){
	$arquivo = $_FILES['arquivo']['name'];
	
	$arquivo;

	$diretorio = "img_perfil/";

	move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $arquivo);

	$sql = "UPDATE info_usuarios SET imagem = '$novo_arquivo' WHERE email = '$e'";

   header("Refresh: 0; url=index.php");

}

//caso o usuario submeta o formulário com os campos de imagem e nome preenchidos
if(isset($_FILES['arquivo']) && isset($novo_nome) && empty($novo_email) && empty($nova_senha)){
    $arquivo = $_FILES['arquivo']['name'];
	
	$arquivo ;

	$diretorio = "img_perfil/";

	move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $arquivo);

	$sql = "UPDATE info_usuarios SET
    imagem = '$novo_arquivo',
    nome = '$novo_nome'
    WHERE email = '$e'";

    header("Refresh: 0; url=index.php");
}

//caso o usuario submeta o formulario com os campos de imagem, nome e email preenchidos
if (isset($_FILES['arquivo']) && isset($novo_nome) && isset($novo_email) && empty($nova_senha)) {
    $arquivo = $_FILES['arquivo']['name'];
	
	$arquivo ;

	$diretorio = "img_perfil/";

	move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $arquivo);

	$sql = "UPDATE info_usuarios SET
    imagem = '$novo_arquivo',
    nome = '$novo_nome',
    email = '$novo_email'
    WHERE email = '$e'";

    $_SESSION['email'] = $novo_email;

    header("Refresh: 0; url=index.php");
}

//caso o usuario submeta o formulario com todos os campos preenchidos
if (isset($_FILES['arquivo']) && isset($novo_nome) && isset($novo_email) && isset($nova_senha)) {
    $arquivo = $_FILES['arquivo']['name'];
	
	$arquivo;

	$diretorio = "img_perfil/";

	move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $ar);

	$sql = "UPDATE info_usuarios SET
    imagem = '$novo_arquivo',
    nome = '$novo_nome',
    email = '$novo_email',
    senha = md5('$nova_senha')
    WHERE email = '$e'";

    $_SESSION['email'] = $novo_email;


    header("Refresh: 0; url=index.php");
}

//caso o usuario submeta o formulario com o campo de nome preenchido
if (isset($novo_nome) && empty($_FILES['arquivo']) && empty($novo_email) && empty($nova_senha)) {

    $sql = "UPDATE info_usuarios SET nome = '$novo_nome' WHERE email = '$e'";

    header("Refresh: 0; url=index.php");
}

//caso o usuario submeta o formulario com os campos de nome e email preenchidos
if (isset($novo_nome) && empty($_FILES['arquivo']) && isset($novo_email) && empty($nova_senha)) {
    $sql = "UPDATE info_usuarios SET
    nome = '$novo_nome',
    email = '$novo_email'
    WHERE email = '$e'";

    $_SESSION['email'] = $novo_email;


    header("Refresh: 0; url=index.php");

}

//caso o usuario submeta o formulario com os campos de nome, email e senha
if (isset($novo_nome) && empty($_FILES['arquivo']) && isset($novo_email) && isset($nova_senha)) {
    $sql = "UPDATE info_usuarios SET
    nome = '$novo_nome',
    email = '$novo_email',
    senha = md5('$nova_senha')
    WHERE email = '$e'";

    $_SESSION['email'] = $novo_email;


    header("Refresh: 0; url=index.php");
}

//caso o usuario submeta o formulario com o campo de email preenchido
if (isset($novo_email) && empty($_FILES['arquivo']) && empty($novo_nome) && empty($nova_senha)) {
    $sql = "UPDATE info_usuarios SET
    email = '$novo_email'
    WHERE email = '$e'";

    $_SESSION['email'] = $novo_email;


    header("Refresh: 0; url=index.php");
}

//caso o usuario submeta o formulario com os campos de email e senha preenchidos
if (isset($novo_email) && empty($_FILES['arquivo']) && empty($novo_nome) && isset($nova_senha)) {
    $sql = "UPDATE info_usuarios SET
    email = '$novo_email',
    senha = md5('$nova_senha')
    WHERE email = '$e'";

    $_SESSION['email'] = $novo_email;


    header("Refresh: 0; url=index.php");
}

//caso o usuario submeta o formulario com apenas o campo de senha preenchido
if (empty($novo_email) && empty($_FILES['arquivo']) && empty($novo_nome) && isset($nova_senha)) {
    $sql = "UPDATE info_usuarios SET
    senha = md5('$nova_senha')
    WHERE email = '$e'";

header("Refresh: 0; url=index.php");
}

?>