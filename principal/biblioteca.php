<?php
session_start();
include('getdados.php');
?>

<!doctype html>
<html>
	<head>
		<title>Biblioteca</title>
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
			<h2 class="titulo"><span class="case"><i class="ico duvida"></i>Biblioteca</span>Conteúdos que vão cair no ENEM</h2>
		</div>

		<div class="base-home">
  
        <div class="rows listagem">
                <div class="col-13 matriculados d-flex mb-3">
                    <div class="caixa">
                        <span class="titulo2">CONTEÚDOS</span> 	
						<div class="rolagem">
                           <div class="lista"> 
						   <table cellpadding="0" cellspacing="0" border="0" width="100%">
								<thead>
									<tr>
										<th align="left">biologia</th>
									</tr>
								</thead>
								<tbody>
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/biologia/nivel-celula.htm">Estrutura da Célula</a></td></tr>                   
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/biologia/mitose.htm">Mitose</a></td></tr> 
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/biologia/meiose.htm">Meiose</a></td></tr> 
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/biologia/bioquimica.htm">Bioquímica</a></td></tr> 
									<tr><td><a target="blank" href="https://monografias.brasilescola.uol.com.br/biologia/biotecnologia.htm">Biotecnologia</a></td></tr> 
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/biologia/genetica.htm">Genética</a></td></tr> 
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/biologia/hereditariedade.htm">Hereditariedade</a></td></tr> 
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/biologia/o-metabolismo.htm">Metabolismo</a></td></tr> 
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/historiag/evolucionismo.htm">Evolução</a></td></tr>
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/o-que-e/biologia/o-que-e-ecossistema.htm">Ecossistema</a></td></tr>
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/biologia/cadeia-alimentar.htm">Cadeia alimentar</a></td></tr>
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/biologia/ciclos-biogeoquimicos.htm">Ciclos Biogeoquímicos</a></td></tr> 
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/biologia/componentes-ecossistema.htm">Ecossistema</a></td></tr> 
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/biologia/conceituando-bioma.htm">Bioma </a></td></tr> 
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/biologia/habitat-nicho-ecologico.htm">Habitat e Nicho Ecológico </a></td></tr> 
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/biologia/mudancas-climaticas.htm">Mudanças Climáticas </a></td></tr> 
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/biologia/niveis-troficos.htm">Níveis Tróficos</a></td></tr> 
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/biologia/relacoes-ecologicas.htm">Relações Ecológicas</a></td></tr> 
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/biologia/anatomia-humana.htm">Anatomia Humana</a></td></tr> 
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/videos/fisiologia-humana-no-enem.htm">Fisiologia</a></td></tr> 
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/biologia/virus-2.htm">Vírus</a></td></tr> 
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/biologia/bacterias.htm">Bactérias</a></td></tr> 
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/biologia/fungi.htm">Fungos</a></td></tr> 
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/biologia/protozoarios.htm">Protozoários</a></td></tr> 
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/biologia/desenvolvimento-embrionario.htm">Embriologia</a></td></tr> 
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/biologia/sistema-digestivo.htm">Sistema Digestório</a></td></tr> 
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/biologia/sistema-muscular.htm">Sistema Muscular</a></td></tr> 
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/biologia/pele.htm">Sistema Tegumentar</a></td></tr> 
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/biologia/sistema-linfatico.htm">Sistema Linfático</a></td></tr> 
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/biologia/sistema-endocrino.htm">Sistema Endócrino</a></td></tr> 
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/biologia/sistema-nervoso.htm">Sistema Nervoso</a></td></tr> 
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/biologia/sistema-esqueletico.htm">Sistema Esquelético</a></td></tr> 
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/biologia/sistema-reprodutor.htm">Sistemas Reprodutores</a></td></tr> 
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/biologia/sistema-respiratorio.htm">Sistema Respiratório</a></td></tr> 
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/biologia/sistema-excretor.htm">Sistema urinário</a></td></tr> 
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/biologia/sistema-circulatorio.htm">Sistema Circulatório</a></td></tr> 
									<tr><td><a target="blank" href="https://brasilescola.uol.com.br/doencas/doenca-sexualmente-transmissivel.htm">Doenças Sexualmente Transmissíveis</a></td></tr> 
								</tbody>
							</table>
							</div>
						</div>
					

                    </div>
                </div>
        </div>
	</div>        
		
</body>
</html>