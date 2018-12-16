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


<section id="kontakt">
    <div class="container"> 
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12 sm-12 mt-5 mb-5">
                <div id="map"></div>
            </div>  
              
            <div class="col-lg-6 col-md-12 sm-12 mt-5">
            <h1 class="text-center">Mangler du hjælp?</h1>
            <p class="mt-3 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni aspernatur reprehenderit, eveniet sint ex accusantium, alias minima distinctio dicta inventore.</p>
            <form action="contact.php" method="POST" id="kontaktform">
                <div class="row mt-3">
                    <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control mt-3 p-0" placeholder="Navn" required>
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control mt-3 p-0" placeholder="Email" required>
                    </div>
                    </div>
                    <div class="col-lg-12">
                    <div class="form-group">
                        <input type="text" name="subject" class="form-control mt-3 p-0" placeholder="Emne" required>
                    </div>
                    </div>
                </div>  
                    <div class="row">
                    <div class="col-12">
                    <div class="form-group mt-3">
                        <textarea type="text" name="message" class="form-control p-0" id="exampleFormControlTextarea1" placeholder="Din besked..." rows="3" required></textarea>
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
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.16/js/mdb.min.js"></script>
<script src="scripts/script.js" type="text/javascript"></script>


<script>
// Initialiser og tilføjer mappet
function initMap() {

  // Koordinator til Laura Ella butikken
  var lauraella = {lat: 55.594010, lng: 12.672576};

  // Mappet centreret omkring Laura Ella butikkens location
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 15, center: lauraella});

  // Markering på lokationen
  var marker = new google.maps.Marker({position: lauraella, map: map});
}
</script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfHp9xUg-GsJK9y1_3i9lxZtDkRd_ve50&callback=initMap">
    </script>

  </body>
</html>