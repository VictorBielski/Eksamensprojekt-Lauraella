<!doctype html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- Material Design Bootstrap -->
        <link href="/Eksamensprojekt-Lauraella/Layout/Stylesheets/mdb/mdb.min.css" rel="stylesheet">
        <!--Font awesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
        <link rel="stylesheet" href="stylesheets/style.css"  type="text/css">
    <title>Laura Ella</title>
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
              <img class="d-block w-100" src="images/slider1.png" alt="First slide">
            </div>
            <!--/First slide-->
            <!--Second slide-->
            <div class="carousel-item">
              <img class="d-block w-100" src="images/slider2.jpg" alt="Second slide">
            </div>
            <!--/Second slide-->
            <!--Third slide-->
            <div class="carousel-item">
              <img class="d-block w-100" src="images/slider3.jpg" alt="Third slide">
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
 </div>
</section>


<section id="mini_gallery">
  <div class="container">

    <div class="row">
      <div class="col-12">
        <h1 class="mt-4 text-center">Vores nye varer</h1>
      </div>
    </div>
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
<div class="col-lg-3 mt-4 col-md-3 col-sm-6 mb-5 mini_galleri_nye">
<a href="produkter.php"><div class="view link">
    <img src="images/galleri_img/galleri_img_12.jpg" class="img-fluid" alt="">
    <div class="mask flex-center">
        <p class="overlay_tekst">Se alle nye varer</p>
    </div>
</div>
</a>
        </div>
    </div>
</div>
</section>


<?php 
    include 'footer.php';
?>

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.16/js/mdb.min.js"></script>
<script src="scripts/script.js" type="text/javascript"></script>
  </body>
</html>