<!doctype html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.15/css/mdb.min.css" rel="stylesheet">
        <!--Font awesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
        <link rel="stylesheet" href="stylesheets/style.css"  type="text/css">
    <title>Lauraella</title>
  </head>
  <body>

<!-- NAVBAR INCLUDE-->
<?php 
    include 'nav.php';
?>

<section id="landing">
  <div class="container-fluid mt-2">
    <div class="row">
      <div class="col-12 p-0">
        <!-- IMAGE SLIDER START -->
        <div id="img_carousel" class="carousel slide carousel-fade" data-ride="carousel">
          <!--INDICATORS START-->
          <ol class="carousel-indicators">
            <li data-target="#img_carousel" data-slide-to="0" class="active"></li>
            <li data-target="#img_carousel" data-slide-to="1"></li>
            <li data-target="#img_carousel" data-slide-to="2"></li>
          </ol>
          <!--INDICATORS SLUT-->

          <!--Slides-->
          <div class="carousel-inner" role="listbox">
            <!--First slide-->
            <div class="carousel-item active">
              <img class="d-block w-100" src="images/slider.png" alt="First slide">
            </div>
            <!--/First slide-->
            <!--Second slide-->
            <div class="carousel-item">
              <img class="d-block w-100" src="images/slider_1.jpg" alt="Second slide">
            </div>
            <!--/Second slide-->
            <!--Third slide-->
            <div class="carousel-item">
              <img class="d-block w-100" src="images/slider_1.jpg" alt="Third slide">
            </div>
            <!--/Third slide-->
          <a class="carousel-control-prev" href="#img_carousel" role="button" data-slide="prev">
          <i class="fas fa-angle-left fa-3x"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#img_carousel" role="button" data-slide="next">
          <i class="fas fa-angle-right fa-3x"></i>
            <span class="sr-only">Next</span>
          </a>
          </div>
        </div>
      </div>
    </div>
</section>


<section id="mini_gallery">
  <div class="container">
    <!--FØRSTE ROW -->
    <div class="row justify-content-center">
      <div class="col-lg-3 mt-4 col-md-3 col-sm-6 mini_galleri">
        <div class="view overlay">
          <img class="img-fluid" src="images/galleri_img/galleri_img_1.jpg">
          <div class="mask flex-center rgba-blue-grey-strong">
          <p class="overlay_tekst">Julegodter</p>
        </div>
    </div>
  </div>
  <div class="col-lg-3 mt-4 col-md-3 col-sm-6 mini_galleri">
        <div class="view overlay">
          <img class="img-fluid" src="images/galleri_img/galleri_img_9.jpg">
          <div class="mask flex-center rgba-blue-grey-strong">
          <p class="overlay_tekst">Gavepose</p>
        </div>
    </div>
  </div>
  <div class="col-lg-3 mt-4 col-md-3 col-sm-6 mini_galleri">
        <div class="view overlay">
          <img class="img-fluid" src="images/galleri_img/galleri_img_3.jpg">
          <div class="mask flex-center rgba-blue-grey-strong">
          <p class="overlay_tekst">"Lyden af Jul"</p>
        </div>
    </div>
  </div>
  <div class="col-lg-3 mt-4 col-md-3 col-sm-6 mini_galleri">
        <div class="view overlay">
          <img class="img-fluid" src="images/galleri_img/galleri_img_12.jpg">
          <div class="mask flex-center rgba-blue-grey-strong">
          <p class="overlay_tekst">"Julehygge"</p>
        </div>
    </div>
</div>
</div>
<!--ANDET ROW -->
    <div class="row justify-content-center">
      <div class="col-lg-3 mt-4 col-md-3 col-sm-6 mini_galleri">
        <div class="view overlay">
          <img class="img-fluid" src="images/galleri_img/galleri_img_5.jpg">
          <div class="mask flex-center rgba-blue-grey-strong">
          <p class="overlay_tekst">Juletræslys</p>
        </div>
    </div>
  </div>
  <div class="col-lg-3 mt-4 col-md-3 col-sm-6 mini_galleri">
        <div class="view overlay">
          <img class="img-fluid" src="images/galleri_img/galleri_img_11.jpg">
          <div class="mask flex-center rgba-blue-grey-strong">
          <p class="overlay_tekst">Udendørs Lys</p>
        </div>
    </div>
  </div>
  <div class="col-lg-3 mt-4 col-md-3 col-sm-6 mini_galleri">
        <div class="view overlay">
          <img class="img-fluid" src="images/galleri_img/galleri_img_8.jpg">
          <div class="mask flex-center rgba-blue-grey-strong">
          <p class="overlay_tekst">Juletræspynt</p>
        </div>
    </div>
  </div>
  <div class="col-lg-3 mt-4 col-md-3 col-sm-6 mini_galleri">
        <div class="view overlay">
          <img class="img-fluid" src="images/galleri_img/galleri_img_6.jpg">
          <div class="mask flex-center rgba-blue-grey-strong">
          <p class="overlay_tekst">Juledekorationer</p>
        </div>
    </div>
  </div>
</div>
<!--TREDJE ROW -->
    <div class="row justify-content-center mb-5">
      <div class="col-lg-3 mt-4 col-md-3 col-sm-6 mini_galleri">
        <div class="view overlay">
          <img class="img-fluid" src="images/galleri_img/galleri_img_7.jpg">
          <div class="mask flex-center rgba-blue-grey-strong">
          <p class="overlay_tekst">Lys til hjemmet</p>
        </div>
    </div>
  </div>
      <div class="col-lg-3 mt-4 col-md-3 col-sm-6 mini_galleri">
        <div class="view overlay">
          <img class="img-fluid" src="images/galleri_img/galleri_img_10.jpg">
          <div class="mask flex-center rgba-blue-grey-strong">
          <p class="overlay_tekst">Kaffe</p>
        </div>
    </div>
  </div>
  <div class="col-lg-3 mt-4 col-md-3 col-sm-6 mini_galleri">
        <div class="view overlay">
          <img class="img-fluid" src="images/galleri_img/galleri_img_4.jpg">
          <div class="mask flex-center rgba-blue-grey-strong">
          <p class="overlay_tekst">Vin & Champagne</p>
        </div>
    </div>
  </div>
  <div class="col-lg-3 mt-4 col-md-3 col-sm-6 mini_galleri">
        <div class="view overlay">
          <img class="img-fluid" src="images/galleri_img/galleri_img_2.jpg">
          <div class="mask flex-center rgba-blue-grey-strong">
          <p class="overlay_tekst">Juleøl</p>
        </div>
    </div>
  </div>
</div>
</div>
</section>




<?php 
    include 'footer.php';
?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="/Eksamensprojekt-Lauraella/Layout/scripts/rellax.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.15/js/mdb.min.js"></script>
    <script src="scripts/script.js" type="text/javascript"></script>
  </body>
</html>