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
  <title>Studiis</title>

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
            <li><a href="about.html">Sobre nós</a></li>
            <li><a href="cadastro.php">cadastre-se</a></li>
            <!-- Dropdown -->
            <!-- <li class="dropdown">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                Pages
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="elements.html">Elements</a>
                <a class="dropdown-item" href="course-details.html">Course Details</a>
              </div>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                Blog
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="blog-home.html">Blog Home</a>
                <a class="dropdown-item" href="blog-single.html">Blog Details</a>
              </div>
            </li> -->
            <li><a href="entre.php">Entre</a></li>
            <li><a href="cadastro.html">Download</a></li>
              <!-- <button class="search">
                <span class="lnr lnr-magnifier" id="search"></span>
              </button> -->
            <!-- </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="search-input" id="search-input-box">
      <div class="container">
        <form class="d-flex justify-content-between">
          <input type="text" class="form-control" id="search-input" placeholder="Search Here" />
          <button type="submit" class="btn"></button>
          <span class="lnr lnr-cross" id="close-search" title="Close Search"></span>
        </form>
      </div>
    </div> -->
  </header>
  <!-- ================ End Header Area ================= -->

  <!-- ================ start banner Area ================= -->
  <section class="home-banner-area">
    <div class="container">
      <div class="row justify-content-center fullscreen align-items-center">
        <div class="col-lg-5 col-md-8 home-banner-left">
          <h1 class="text-white">
            Studiis, uma plataforma de estudos <br />
            feita pra você
          </h1>
          <p class="mx-auto text-white  mt-20 mb-40">
            Venha estudar para o ENEM com a Studiis! Aqui você encontra simulados personalizados
            e conteúdos diversos para que você obtenha o melhor desempenho.
          </p>
        </div>
        <div class="offset-lg-2 col-lg-5 col-md-12 home-banner-right">
          <img class="img-fluid" src="img/header-img.png" alt="" />
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End banner Area ================= -->

  <!-- ================ Start Feature Area ================= -->
  <section class="feature-area">
    <div class="container-fluid">
      <div class="feature-inner row">
        <div class="col-lg-2 col-md-6">
          <div class="feature-item d-flex">
            <i class="ti-book"></i>
            <div class="ml-20">
              <h4>Conteúdos para o ENEM</h4>
              <p>
                Aqui você encontra um guia do que estudar e por onde estudar através de links para vídeo aulas e artigos sobre o assunto que você ncessita.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6">
          <div class="feature-item d-flex">
            <i class="ti-cup"></i>
            <div class="ml-20">
              <h4>Simulados personalizados</h4>
              <p>
                Com a studiis você poderá fazer simulados que se moldam de acordo com a sua dificuldade.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6">
          <div class="feature-item d-flex border-right-0">
            <i class="ti-desktop"></i>
            <div class="ml-20">
              <h4>Disponíveis a qualquer hora</h4>
              <p>
                Com a Studiis, basta se cadastrar e aproveitar de forma gratuita!
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End Feature Area ================= -->

  <!-- ================ Start Popular Course Area ================= -->
  <!-- <section class="popular-course-area section-gap">
    <div class="container-fluid">
      <div class="row justify-content-center section-title">
        <div class="col-lg-12">
          <h2>
            Popular Courses <br />
            Available Right Now
          </h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
        </div>
      </div>
      <div class="owl-carousel popuar-course-carusel">
        <div class="single-popular-course">
          <div class="thumb">
            <img class="f-img img-fluid mx-auto" src="img/popular-course/p1.jpg" alt="" />
          </div>
          <div class="details">
            <div class="d-flex justify-content-between mb-20">
              <p class="name">programming language</p>
              <p class="value">$150</p>
            </div>
            <a href="#">
              <h4>Learn Angular JS Course for Legendary Persons</h4>
            </a>
            <div class="bottom d-flex mt-15">
              <ul class="list">
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
              </ul>
              <p class="ml-20">25 Reviews</p>
            </div>
          </div>
        </div>

        <div class="single-popular-course">
          <div class="thumb">
            <img class="f-img img-fluid mx-auto" src="img/popular-course/p2.jpg" alt="" />
          </div>
          <div class="details">
            <div class="d-flex justify-content-between mb-20">
              <p class="name">programming language</p>
              <p class="value">$150</p>
            </div>
            <a href="#">
              <h4>Learn Angular JS Course for Legendary Persons</h4>
            </a>
            <div class="bottom d-flex mt-15">
              <ul class="list">
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
              </ul>
              <p class="ml-20">25 Reviews</p>
            </div>
          </div>
        </div>

        <div class="single-popular-course">
          <div class="thumb">
            <img class="f-img img-fluid mx-auto" src="img/popular-course/p3.jpg" alt="" />
          </div>
          <div class="details">
            <div class="d-flex justify-content-between mb-20">
              <p class="name">programming language</p>
              <p class="value">$150</p>
            </div>
            <a href="#">
              <h4>Learn Angular JS Course for Legendary Persons</h4>
            </a>
            <div class="bottom d-flex mt-15">
              <ul class="list">
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
              </ul>
              <p class="ml-20">25 Reviews</p>
            </div>
          </div>
        </div>

        <div class="single-popular-course">
          <div class="thumb">
            <img class="f-img img-fluid mx-auto" src="img/popular-course/p4.jpg" alt="" />
          </div>
          <div class="details">
            <div class="d-flex justify-content-between mb-20">
              <p class="name">programming language</p>
              <p class="value">$150</p>
            </div>
            <a href="#">
              <h4>Learn Angular JS Course for Legendary Persons</h4>
            </a>
            <div class="bottom d-flex mt-15">
              <ul class="list">
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
              </ul>
              <p class="ml-20">25 Reviews</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- ================ End Popular Course Area ================= -->

  <!-- ================ Start Video Area ================= -->
  <section class="video-area section-gap-bottom">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5">
          <div class="section-title text-white">
            <h2 class="text-white">
              Nosso <br>
              Objetivo
            </h2>
            <p>
              Nós da Studiis queremos possibilitar a qualquer um a oportunidade de estudar para o maior vestibular do Brasil
              de maneira fácil, rápida e com ferramentas inovadoras.
            </p>
          </div>
        </div>
        <div class="offset-lg-1 col-md-6 video-left">
          <div class="owl-carousel video-carousel">
            <div class="single-video">
              <div class="video-part">
                <img class="img-fluid" src="img/Mulher.jpg" alt="">
                <div class="overlay"></div>
                <!-- <a class="popup-youtube play-btn" href="https://www.youtube.com/watch?v=VufDd-QL1c0">
                  <img class="play-icon" src="img/play-btn.png" alt="">
                </a> -->
              </div>
              <h4 class="text-white mb-20 mt-30">Reforce seus conhecimentos</h4>
              <p class="text-white mb-20">
                Com a Studiis você será capaz de estudar todos as áreas do conhecimento que caem na prova do ENEM de maneira simples e rápida.
              </p>
            </div>

            <div class="single-video">
              <div class="video-part">
                <img class="img-fluid" src="img/geometria.jpg" alt="">
                <div class="overlay"></div>
                <!-- <a class="popup-youtube play-btn" href="https://www.youtube.com/watch?v=VufDd-QL1c0">
                  <img class="play-icon" src="img/play-btn.png" alt="">
                </a> -->
              </div>
              <h4 class="text-white mb-20 mt-30">Faça simulados personalizados</h4>
              <p class="text-white mb-20">
                Nossos simulados te ajudarão a dominar de uma vez por todas as matérias das quais você tem dificuldade,
                selecionando um maior número de questões com ênfase naquilo que você se sente estagnado.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End Video Area ================= -->

  <!-- ================ Start Feature Area ================= -->
  <!-- <section class="other-feature-area">
    <div class="container">
      <div class="feature-inner row">
        <div class="col-lg-12">
          <div class="section-title text-left">
            <h2>
              Features That <br />
              Can Avail By Everyone
            </h2>
            <p>
              If you are looking at blank cassettes on the web, you may be
              very confused at the difference in price. You may see some for
              as low as $.17 each.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="other-feature-item">
            <i class="ti-key"></i>
            <h4>Lifetime Access</h4>
            <div>
              <p>
                Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed
                do eiusmod tempor incididunt labore. Lorem ipsum dolor sit
                amet consec tetur adipisicing elit, sed do eiusmod tempor
                incididunt labore.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt--160">
          <div class="other-feature-item">
            <i class="ti-files"></i>
            <h4>Source File Included</h4>
            <div>
              <p>
                Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed
                do eiusmod tempor incididunt labore. Lorem ipsum dolor sit
                amet consec tetur adipisicing elit, sed do eiusmod tempor
                incididunt labore.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt--260">
          <div class="other-feature-item">
            <i class="ti-medall-alt"></i>
            <h4>Student Membership</h4>
            <div>
              <p>
                Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed
                do eiusmod tempor incididunt labore. Lorem ipsum dolor sit
                amet consec tetur adipisicing elit, sed do eiusmod tempor
                incididunt labore.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="other-feature-item">
            <i class="ti-briefcase"></i>
            <h4>35000+ Courses</h4>
            <div>
              <p>
                Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed
                do eiusmod tempor incididunt labore. Lorem ipsum dolor sit
                amet consec tetur adipisicing elit, sed do eiusmod tempor
                incididunt labore.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt--160">
          <div class="other-feature-item">
            <i class="ti-crown"></i>
            <h4>Expert Mentors</h4>
            <div>
              <p>
                Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed
                do eiusmod tempor incididunt labore. Lorem ipsum dolor sit
                amet consec tetur adipisicing elit, sed do eiusmod tempor
                incididunt labore.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt--260">
          <div class="other-feature-item">
            <i class="ti-headphone-alt"></i>
            <h4>Live Supports</h4>
            <div>
              <p>
                Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed
                do eiusmod tempor incididunt labore. Lorem ipsum dolor sit
                amet consec tetur adipisicing elit, sed do eiusmod tempor
                incididunt labore.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- ================ End Feature Area ================= -->

  <!-- ================ Start Testimonials Area ================= -->
  <!-- <section class="testimonials-area section-gap">
    <div class="container">
      <div class="testi-slider owl-carousel" data-slider-id="1">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <div class="item">
              <div class="testi-item">
                <img src="img/quote.png" alt="" />
                <div class="mt-40 text">
                  <p>
                    As conscious traveling Paup ers we must always be oncerned
                    about our dear Mother Earth. If you think about it, you
                    travel across her face and She is the host to your
                    journey.
                  </p>
                </div>
                <h4>Fanny Spencer</h4>
                <p>Chief Executive, Amazon</p>
              </div>
            </div>
          </div>

          <div class="offset-lg-1 col-lg-6">
            <img src="img/testimonial/t1.jpg" alt="" />
          </div>
        </div>

        <div class="row align-items-center">
          <div class="col-lg-5">
            <div class="item">
              <div class="testi-item">
                <img src="img/quote.png" alt="" />
                <div class="mt-40 text">
                  <p>
                    As conscious traveling Paup ers we must always be oncerned
                    about our dear Mother Earth. If you think about it, you
                    travel across her face <br />
                    and She is the host to your journey.
                  </p>
                </div>
                <h4>Fanny Spencer</h4>
                <p>Chief Executive, Amazon</p>
              </div>
            </div>
          </div>

          <div class="offset-lg-1 col-lg-6">
            <img src="img/testimonial/t1.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- ================ End Testimonials Area ================= -->

  <!-- ================ Start Registration Area ================= -->
  <!-- <section class="registration-area">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-5">
          <div class="section-title text-left text-white">
            <h2 class="text-white">
              Watch Our Trainers <br>
              in Live Action
            </h2>
            <p>
              If you are looking at blank cassettes on the web, you may be
              very confused at the difference in price. You may see some for
              as low as $.17 each.
            </p>
          </div>
        </div>
        <div class="offset-lg-3 col-lg-4 col-md-6">
          <div class="course-form-section">
            <h3 class="text-white">Courses for Free</h3>
            <p class="text-white">It is high time for learning</p>
            <form class="course-form-area contact-page-form course-form text-right" id="myForm" action="mail.html" method="post">
              <div class="form-group col-md-12">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" onfocus="this.placeholder = ''"
                 onblur="this.placeholder = 'Name'">
              </div>
              <div class="form-group col-md-12">
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Phone Number" onfocus="this.placeholder = ''"
                 onblur="this.placeholder = 'Phone Number'">
              </div>
              <div class="form-group col-md-12">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" onfocus="this.placeholder = ''"
                 onblur="this.placeholder = 'Email Address'">
              </div>
              <div class="col-lg-12 text-center">
                <button class="btn text-uppercase">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- ================ End Registration Area ================= -->

  <!-- ================ Start Blog Post Area ================= -->
  <!-- <section class="blog-post-area section-gap">
    <div class="container-fluid">
      <div class="feature-inner row">
        <div class="col-lg-12">
          <div class="section-title text-left">
            <h2>
              Features That <br />
              Can Avail By Everyone
            </h2>
            <p>
              There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope.
              It’s exciting to think about setting up your own viewing station.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-blog-post">
            <img src="img/blog-post/b1.jpg" class="img-fluid" alt="" />
            <div class="overlay"></div>
            <div class="top-text">
              <p>29th, oct, 2018</p>
              <p>121 likes</p>
              <p>05 comments</p>
            </div>
            <div class="text">
              <h4 class="text-white">Smart Kitchen Setup</h4>
              <div>
                <p>
                  Lorem ipsum dolor sit amet consec tetur adipisicing elit,
                  sed do.
                </p>
              </div>
              <a href="#" class="primary-btn">
                View Details
                <i class="fa fa-long-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt--160">
          <div class="single-blog-post">
            <img src="img/blog-post/b2.jpg" class="img-fluid" alt="" />
            <div class="overlay"></div>
            <div class="top-text">
              <p>29th, oct, 2018</p>
              <p>121 likes</p>
              <p>05 comments</p>
            </div>
            <div class="text">
              <h4 class="text-white">Smart Kitchen Setup</h4>
              <div>
                <p>
                  Lorem ipsum dolor sit amet consec tetur adipisicing elit,
                  sed do.
                </p>
              </div>
              <a href="#" class="primary-btn">
                View Details
                <i class="fa fa-long-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt--260">
          <div class="single-blog-post">
            <img src="img/blog-post/b3.jpg" class="img-fluid" alt="" />
            <div class="overlay"></div>
            <div class="top-text">
              <p>29th, oct, 2018</p>
              <p>121 likes</p>
              <p>05 comments</p>
            </div>
            <div class="text">
              <h4 class="text-white">Smart Kitchen Setup</h4>
              <div>
                <p>
                  Lorem ipsum dolor sit amet consec tetur adipisicing elit,
                  sed do.
                </p>
              </div>
              <a href="#" class="primary-btn">
                View Details
                <i class="fa fa-long-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- ================ End Blog Post Area ================= -->

  <!-- ================ start footer Area ================= -->
  <footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Links rápidos</h4>
					<ul>
						<li><a href="#">Managed Website</a></li>
						<li><a href="#">Manage Reputation</a></li>
						<li><a href="#">Power Tools</a></li>
						<li><a href="#">Marketing Service</a></li>
					</ul>
				</div>
			</div>
			<div class="footer-bottom row align-items-center">
				<p class="footer-text m-0 col-lg-8 col-md-12">
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				<div class="col-lg-4 col-md-12 footer-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
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