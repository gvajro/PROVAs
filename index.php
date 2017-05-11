<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PROVA</title>
  </head>
  <?php
    include("include/meta.php");
  ?>
  <body data-spy="scroll" data-target="#navbar">


        <?php
          include("include/header.php");
        ?>

    <nav  data-spy="affix" data-offset-top="60" data-offset-bottom="200" id="navbar" class="navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="image/logo.svg" alt=""></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#chisiamo">Chi Siamo</a></li>
            <li><a href="prodotti.html">Prodotti</a></li>
            <li><a href="#contatti">Contatti</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ricette <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Le novità</a></li>
                <li><a href="#">Le preferite</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Video ricette</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-hidden-xs col-sm-12">
          <a href="#"><div class="hero__image">
            <div class="hero__image--text">
              <h1>La vita è una combinazione di pasta e magia.</h1>
              <h2>Federico Fellini</h2>
            </div>
          </div></a>
        </div>
      </div>
    </div>


  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-3">
        <div id="chisiamo">
            <h1 class="chisiamo">Chi Siamo</h1>
        </div>
      </div>
    </div>
    <div class="row">
    <div class="col-xs-12 col-sm-4">
      <div class="chisiamo__testo--titolo">
        <img class="img-responsive chisiamo__testo--logo"src="image/logo__pasta--azienda.svg" alt="">
        <h2>L'azienda</h2>
      </div>
      <div class="chisiamo__testo">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
          sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="chisiamo__testo--bottone">
          <a href="#">Scopri</a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="chisiamo__testo--titolo">
          <img class="img-responsive chisiamo__testo--logo"src="image/logo__pasta--prodotti.svg" alt="">
          <h2>I Prodotti</h2>
        </div>
        <div class="chisiamo__testo">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="chisiamo__testo--bottone">
            <a href="prodotti.html">Scopri</a>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4">
          <div class="chisiamo__testo--titolo">
            <img class="img-responsive chisiamo__testo--logo"src="image/logo__pasta--ricette.svg" alt="">
            <h2>Le ricette</h2>
          </div>
          <div class="chisiamo__testo">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
              labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
              ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
              dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            </div>
            <div class="chisiamo__testo--bottone">
              <a href="#ricette">Scopri</a>
            </div>
          </div>
        </div>
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img class="img-responsive"src="image/pasta__fondo--slide.jpg" alt="">
              <div class="swiper-slide_text">
                <h1>La qualità è la nostra forza</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. E
                  xcepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class="chisiamo__testo--bottone">
                  <a href="prodotti.html">Scopri</a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <img class="img-responsive"src="image/pasta__fondo--slide-green.jpg" alt="">
              <div class="swiper-slide_text">
                <h1>I dettagli che fanno la differenza</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. E
                  xcepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class="chisiamo__testo--bottone">
                  <a href="#prodotti">Scopri</a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <img class="img-responsive"src="image/fondo_testimonial.jpg" alt="">
              <div class="swiper-slide_text">
                <h1>I nostri testimonial </h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. E
                  xcepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                  deserunt mollit anim id est laborum.</p>
                <div class="chisiamo__testo--bottone">
                  <a href="#prodotti">Scopri</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
              <div class="swiper-scrollbar"></div>
          </div>


























  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js"></script>






  <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 20,
        loop: true
    });
    </script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


  </body>
</html>
