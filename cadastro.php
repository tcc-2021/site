<?php
session_start()
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="img/studiis-logo-mini-2.png" />
  <!-- Author Meta -->
  <meta name="author" content="colorlib" />
  <!-- Meta Description -->
  <meta name="description" content="" />
  <!-- Meta Keyword -->
  <meta name="keywords" content="" />
  <!-- meta character set -->
  <meta charset="UTF-8" />
  <!-- Site Title -->
  <title>Cadastre-se</title>

  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900|Roboto:400,400i,500,700" rel="stylesheet" />
  <!--
      CSS
      =============================================
    -->
  <link rel="stylesheet" href="css/linearicons.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/owl.carousel.css" />
  <link rel="stylesheet" href="css/nice-select.css">
  <link rel="stylesheet" href="css/hexagons.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css" />
  <link rel="stylesheet" href="css/main.css" />
  <script type="text/javascript">
    function CadastroEfetuado(){
      alert("Cadastro efetuado!");
    }
  </script>
  <script type="text/javascript">
    function CadastroExiste(){
      alert("O email informado já está cadastrado!, informe outro e tente novamente");
    }
  </script>
</head>

<body>
  <!-- ================ Start Header Area ================= -->
  <header class="default-header">
    <nav class="navbar navbar-expand-lg  navbar-light">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img src="img/Studiis_Logotipo.png" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="lnr lnr-menu"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">Sobre Nós</a></li>
            <li><a href="cadastro.php">Cadastre-se</a></li>
            <li><a href="entre.php">Entre</a></li>
            <li><a href="download.html">Download</a></li>
  </header>
  <!-- ================ End Header Area ================= -->

  <!-- ================ start banner Area ================= -->
  <section class="banner-area">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-12 banner-right">
            <h1 class="text-white">
              Cadastre-se
            </h1>
            <p class="mx-auto text-white  mt-20 mb-40">
              Junte-se a nós e desfrute do nosso conteúdo
            </p>
            <div class="link-nav">
              <span class="box">
                <a href="index.html">Home</a>
                <i class="lnr lnr-arrow-right"></i>
                <a href="cadastro.php">Cadastre-se</a>
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- ================ End banner Area ================= -->

  <!-- ================ Start Registration Area ================= -->
<?php
if(isset($_SESSION['usuario_existe']))
  {
    echo '<script type="text/javascript">',
          'CadastroExiste();',
          '</script>'
          ;
  }
unset($_SESSION['usuario_existe']);
?>
<?php
if(isset($_SESSION['status_cadastro']))
  {
    echo '<script type="text/javascript">',
          'CadastroEfetuado();',
          '</script>'
          ;
  }
unset($_SESSION['status_cadastro']);
?>

  <section class="registration-area">
    <div class="container">
      <div class="row align-items-end">
        <div class="offset-lg-3 col-lg-4 col-md-6">
          <div class="course-form-section">
            <h3 class="text-white">Cadastre-se</h3>
            <p class="text-white">Você está a poucos passos de fazer parte de nosso grupo</p>
            <form class="course-form-area contact-page-form course-form text-right" id="myForm" action="php/cadastrar.php" method="post">
              <div class="form-group col-md-12">
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" onfocus="this.placeholder = ''"
                 onblur="this.placeholder = 'Nome'">
              </div>
              <div class="form-group col-md-12">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email " onfocus="this.placeholder = ''"
                 onblur="this.placeholder = 'Email'">
              </div>
              <div class="form-group col-md-12">
                <input type="password" class="form-control" id="senha" name="senha" placeholder="senha" onfocus="this.placeholder = ''"
                 onblur="this.placeholder = 'senha'">
              </div>
              <a >Já tem uma conta? faça login clicando </a><a href="entre.php">aqui</a>
              <div class="col-lg-12 text-center">
                <button class="btn text-uppercase">Enviar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End Registration Area ================= -->

  <!-- ================ start footer Area ================= -->
  <footer>
		<div style="background-color: #040c1c;">
      <div class="container" >
        <div class="row" style="margin-left: 290px; text-align: center;" >   
        <p class="footer-text m-0 col-lg-8 col-md-12">
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is by <a href="https://colorlib.com" target="_blank">Colorlib</a>
        </p>
        <p class="footer-text m-0 col-lg-8 col-md-12">
          Trabalho de conclusão de curso de Desenvolvimento de sistemas
        </p>
        <br>
        <p class="footer-text m-0 col-lg-8 col-md-12">
          ETEC Lauro Gomes 2021
        </p>
        </div>
      </div>
		</div>
	</footer>
  <!-- ================ End footer Area ================= -->

  <script src="js/vendor/jquery-2.2.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
    crossorigin="anonymous"></script>
  <script src="js/vendor/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/parallax.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/hexagons.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>