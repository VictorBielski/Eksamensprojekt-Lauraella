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
        <link rel="stylesheet" href="/Eksamensprojekt-Lauraella/stylesheets/style.css"  type="text/css">
    <title>Lauraella</title>
  </head>
  <body>

<!--Logo-->
<div class="container-fluid mt-5 m-0" id="header">
  <div class="row">
    <div class="col-12 text-center">
        <h3><a href="index.php" class="logo">Lauraella</a></h3>
        <p>~ Brugskunst i Dragør ~</p>
    </div>
  </div>
</div>
<!-- NAVBAR INCLUDE-->
<?php 
    include './nav.php';
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
              <img class="d-block w-100" src="/Eksamensprojekt-Lauraella/images/slider_1.jpg" alt="First slide">
            </div>
            <!--/First slide-->
            <!--Second slide-->
            <div class="carousel-item">
              <img class="d-block w-100" src="/Eksamensprojekt-Lauraella/images/slider_1.jpg" alt="Second slide">
            </div>
            <!--/Second slide-->
            <!--Third slide-->
            <div class="carousel-item">
              <img class="d-block w-100" src="/Eksamensprojekt-Lauraella/images/slider_1.jpg" alt="Third slide">
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
  <div class="container-fluid">
    <div class="row mt-3 justify-content-center">
      <div class="col-lg-3 col-md-3 col-sm-6 mt-2 mini_gallery">
          <img class="img-fluid" src="/Eksamensprojekt-Lauraella/images/galleri_1.jpg">
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 mt-2 mini_gallery">
          <img class="img-fluid" src="/Eksamensprojekt-Lauraella/images/galleri_1.jpg">
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 mt-2 mini_gallery">
          <img class="img-fluid" src="/Eksamensprojekt-Lauraella/images/galleri_1.jpg">
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 mt-2 mini_gallery"> 
          <img class="img-fluid" src="/Eksamensprojekt-Lauraella/images/galleri_1.jpg">
      </div>

    </div>
</div>
</section>



<section id="about">
  <div class="container-fluid mt-5 m-0 rgba-cyan-slight" id="overlay">
    <div class="row">
      <div class="col-10">
          <h1>Lauraella</h1>
          <h3>Vi skræddersyer produkter efter dine behov</h3>
      </div>
    </div>
 </div>
</section>


<?php 
    include './footer.php';
?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.15/js/mdb.min.js"></script>
    <script src="/Eksamensprojekt-Lauraella/scripts/script.js" type="text/javascript"></script>
  </body>
</html>