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
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
        <link rel="stylesheet" href="style.css"  type="text/css">
    <title>Lauraella</title>
  </head>
  <body>

<!-- NAVBAR INCLUDE-->
<?php 
    include 'nav.php';
?>

<!--Carousel Wrapper-->
<div id="img_slider" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#img_slider" data-slide-to="0" class="active"></li>
      <li data-target="#img_slider" data-slide-to="1"></li>
      <li data-target="#img_slider" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <div class="view">
          <img class="slider" src="images/slider_1.jpg" alt="First slide">
          <div class="mask rgba-black-light"></div>
        </div>
        <div class="carousel-caption">
            <h1 class="slider_h1">Light mask</h1>
            <h3 class="slider_h3">First text</h3>
        </div>
      </div>
      <div class="carousel-item jarallax">
        <!--Mask color-->
        <div class="view">
          <img class="slider" src="images/slider_1.jpg"  alt="Second slide">
          <div class="mask rgba-black-light"></div>
        </div>
        <div class="carousel-caption">
            <h1 class="slider_h1">Light mask</h1>
            <h3 class="slider_h3">First text</h3>
          </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="slider" src="images/slider_1.jpg"  alt="Third slide">
          <div class="mask rgba-black-light"></div>
        </div>
        <div class="carousel-caption">
            <h1 class="slider_h1">Light mask</h1>
            <h3 class="slider_h3">First text</h3>
          </div>
      </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#img_slider" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#img_slider" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->
</section>

<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="text-center mt-5" id="about_intro">Hvem er Lauraella?</h1>
      </div>
    </div>
    <div class="row mt-4">
        <div class="col-12 text-center">
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi commodi possimus nulla corrupti et enim architecto, provident quis ut iusto quod facere at aliquam sunt cupiditate consequatur. Saepe mollitia minima quibusdam placeat molestias, fugiat quia iure eum, eaque atque voluptates dolorum molestiae ipsam harum commodi animi qui quaerat unde dolorem.</p>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi commodi possimus nulla corrupti et enim architecto, provident quis ut iusto quod facere at aliquam sunt cupiditate consequatur. Saepe mollitia minima quibusdam placeat molestias, fugiat quia iure eum, eaque atque voluptates dolorum molestiae ipsam harum commodi animi qui quaerat unde dolorem.</p> 
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi commodi possimus nulla corrupti et enim architecto, provident quis ut iusto quod facere at aliquam sunt cupiditate consequatur. Saepe mollitia minima quibusdam placeat molestias, fugiat quia iure eum, eaque atque voluptates dolorum molestiae ipsam harum commodi animi qui quaerat unde dolorem.</p>   
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
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.15/js/mdb.min.js"></script>
    <script src="script.js" type="text/javascript"></script>
  </body>
</html>