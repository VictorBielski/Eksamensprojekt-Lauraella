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
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
        <link rel="stylesheet" href="Stylesheets/style.css"  type="text/css">
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
    include 'nav.php';
?>


<section id="kontakt">
    <div class="container-fluid"> 
        <div class="row m-4 justify-content-center">
            <div class="col-5 p-0">
                <div id="map"></div>
            </div>
            <div class="col-1">
                <hr>
            </div>      
            <div class="col-5">
            <h1 class="text-center">Mangler du hjælp?</h1>
            <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni aspernatur reprehenderit, eveniet sint ex accusantium, alias minima distinctio dicta inventore.</p>
            <form action="" id="kontaktform">
                <div class="row mt-3">
                    <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" class="form-control mt-3 p-0" placeholder="Navn" required>
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" class="form-control mt-3 p-0" placeholder="Email" required>
                    </div>
                    </div>
                    <div class="col-lg-12">
                    <div class="form-group">
                        <input type="email" class="form-control mt-3 p-0" placeholder="Emne" required>
                    </div>
                    </div>
                </div>  
                    <div class="row">
                    <div class="col-12">
                    <div class="form-group mt-3">
                        <textarea class="form-control p-0" id="exampleFormControlTextarea1" placeholder="Din besked..." rows="3" required></textarea>
                    </div>
                    </div>
                    <div class="col-12 mt-4 text-center">
                    <button class="btn" type="submit">Send</button>
                    </div>
                </div>
                </form>
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
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.15/js/mdb.min.js"></script>
    <script src="scripts/script.js" type="text/javascript"></script>


        <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: 55.594010, lng: 12.672576};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 15, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfHp9xUg-GsJK9y1_3i9lxZtDkRd_ve50&callback=initMap">
    </script>

  </body>
</html>