<?php 
session_start();        
include('getdados.php');
?>
<!doctype html>
<html>
	<head>
		<title>Simulados</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="img/studiis-logo-mini-2.png" />
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
			<a href="" class="menu-m">menu mobile esquerdo</a><!-- aqui fico icone reponsavel pelo meno da esquerda-->
			<a href="" class="menu-grade">menu mobile direito</a><!--aqui fica o menu responsavel pelo meno do topo-->
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
						<li><b><?php echo $nome; ?></b><small><a href="../php/logout.php">Sair</a></small></li>
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
				<h2 class="titulo"><span class="case"><i class="ico duvida"></i>Simulados</span>Monte o seu simulado</h2>
			</div>
		<div class="base-home">
		      <div class="rows listagem">
                        <div class="col-13 matriculados d-flex mb-3">
                                <div class="caixa">
                                        <span class="titulo2">Selecione as matérias que deseja que estejam presentes no simulado</span>
                                        <div class="lista"> 
                                                <table>
                                                        <form>
                                                        	<tr><td>
                                                              <input style="width:10px; margin-right:5px;" type="checkbox" id="pt">
								<ion-icon name="text" size="small"></ion-icon>
                                                              <label style="font-size:17px;" for="pt">| Português</label>
                                                              </td></tr>

                                                              <tr><td>
                                                              <input style="width:10px; margin-right:5px;" type="checkbox" id="mt">
								 <ion-icon size="small" name="calculator-outline"></ion-icon>
                                                              <label style="font-size:17px;" for="mt">| Matemática</label>
                                                              </td></tr>

                                                              <tr><td>
                                                              <input style="width:10px; margin-right:5px;" type="checkbox" id="bi">
								<ion-icon size="small" name="bug-outline"></ion-icon>
                                                              <label style="font-size:17px;" for="bi">| Biologia</label>
                                                              </td></tr>

                                                              <tr><td>
                                                              <input style="width:10px; margin-right:5px;" type="checkbox" id="geo">
							      <ion-icon size="small" name="earth-outline"></ion-icon>
                                                              <label style="font-size:17px;" for="geo">| Geografia</label>
                                                              </td></tr>

                                                              <tr><td>
                                                              <input style="width:10px; margin-right:5px;" type="checkbox" id="fi">
							      <ion-icon size="small" name="logo-react"></ion-icon>
                                                              <label style="font-size:17px;" for="fi">| Física</label>
                                                              </td></tr>	

                                                              <tr><td>
                                                              <input style="width:10px; margin-right:5px;" type="checkbox" id="qu">
                                                              <ion-icon size="small" name="beaker-outline"></ion-icon>
                                                              <label style="font-size:17px; "for="qu">| Química</label>
                                                              </td></tr>

                                                              <tr><td>
                                                              <input style="width:10px; margin-right:5px;" type="checkbox" id="ing">
                                                              <ion-icon size="small" name="language-outline"></ion-icon>
                                                              <label style="font-size:17px;" for="ing">| Inglês</label>
                                                              </td></tr>

                                                              <tr><td>
                                                              <input style="width:10px; margin-right:5px;" type="checkbox" id="hi">
							      <ion-icon size="small" name="hourglass-outline"></ion-icon>
                                                              <label style="font-size:17px;" for="hi">| História</label>
                                                              </td></tr>

                                                              <tr><td>
                                                              <input type="submit" value="GERAR SIMULADO" class="btn m-auto px-5 width-100">
                                                              </td></tr>

                                                        </form>
                                                </table>
                                        </div>
                                </div>
                        </div>
                      </div>                       
                </div>
	</div>


<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</body>
</html>