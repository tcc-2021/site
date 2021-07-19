<?php
session_start();
include('../php/VerificaLogin.php');
include('getdados.php');
include('alterar.php');
?>

<!doctype html>
<html>
	<head>
		<title>Página inicial</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="img/studiis-logo-mini-2.png"/>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/auxiliar.css">
		<link rel="stylesheet" type="text/css" href="css/grade.css">
		<link rel="stylesheet" type="text/css" href="css/m-style.css">
		 
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="js/js.js"></script>
		
	</head>
<body>
	<div class="base-topo">
		<div class="conteudo">	
			<a href="" class="menu-m">menu mobile esquerdo</a><!-- aqui fico icone reponsavel pelo menu da esquerda-->
			<a href="" class="menu-grade">menu mobile direito</a><!--aqui fica o menu responsavel pelo menu do topo-->
			<a href="" class="logo"></a>
			<div id="grade">
			<ul class="menu-topo">
				<li class="sub"><a href=""><i class="ico cursos"></i>Páginas</a>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="simulado.php">Simulados</a></li>
						<li><a href="biblioteca.php">Bibloteca</a></li>
					</ul>
				</li>
				<li class="sub user"><a href="" class="thumb"><img src="img/user.jpg"></a>
					<ul>
						<li><b><?php echo $nome; ?> </b><small><a href="../php/logout.php">Sair</a></small></li>
					</ul>
				</li>
			</ul>
		</div>
		</div>
	</div>
	
	<div class="site">
		<div id="menu">
			<div class="menu-lateral">
			<figure>
					<div class="thumb"><img src="img/user.jpg"></div>
					<figcaption>
						<strong><?php echo $nome; ?></strong>
					</figcaption>
			</figure>
			<ul>
					<li><a href="index.php"><i class="ico home"></i>HOME</a></li>
					<li><a href="simulado.php"><i class="ico curso"></i>SIMULADOS</a></li>
					<li><a href="biblioteca.php"><i class="ico duvida"></i>BIBLIOTECA</a></li>
					<li><a href="../php/logout.php"><i class="ico sair"></i>SAIR</a></li>
			</ul>
			</div>
		</div>     
		<div class="base-geral">
			
        <div class="caixa">
			<h2 class="titulo"><span class="case"><i class="ico duvida"></i>Home</span>Seja Bem Vindo</h2>
		</div>

		<div class="base-home">
        <div class="rows detalhes py-3">
			<div class="col">	
				<div class="caixa">
					<i class="ico video"></i>
					<small>Erros em exercícios</small>
					<h3>20</h3>
				</div>
			</div>
			<div class="col">
				<div class="caixa">
					<i class="ico curso"></i>
					<small>Acertos  em exercícios</small>
					<h3>20</h3>
				</div>
			</div>
			<div class="col">
				<div class="caixa">
					<i class="ico exercicio"></i>
					<small>Exercicios concluídos</small>
					<h3>200</h3>
				</div>
			</div>
        </div>
		</div>        
		
		<div class="base-home">
				<div class="rows base-perfil py-3">
				<div class="col-12">
				<div class="caixa">


					<form action="alterar.php" method="post" enctype="multipart/form-data">
						<fieldset class="mt-1">
						<legend>Dados do cadastro</legend>
						<div class="rows">
							<div class="col-6">
								<label>Foto perfil</label>
								<div class="thumb">
									<img src="img/user.jpg">
								</div>
								<div style="width: 350px; padding: 18px; margin-left:110px">
									<input type="file" name="arquivo">
								</div>
								<small class="text-center d-block">Escolha a foto que deseja usar em seu perfil clicando em "escolher arquivo"</small>
							</div>
							
							<div class="col-6">
								<div class="py-1">
									<label>Nome</label>
									<input type="text" placeholder="<?php echo $nome; ?>" name="nome">
								</div>
								<div class="py-1">
									<label>Email</label>
									<input type="text" placeholder="<?php echo $email; ?>" name="email">
								</div>
								<div class="py-1">
									<label>Senha</label>
									<input type="password" placeholder="Senha" name="senha">
								</div>
							</div>
						</div>
						</fieldset>
				
					
						<input type="submit" value="Atualizar perfil" class="btn d-table m-auto px-5 width-auto">
					</form>


				</div>
				</div>
				</div>
		</div>
		</div>>
	</div>
</body>
</html> 	