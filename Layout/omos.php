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
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
        <!-- AOS CSS -->
        <link rel="stylesheet" href="https://unpkg.com/aos@3.0.0-beta.6/dist/aos.css" />
        <!-- Own stylesheet -->
        <link rel="stylesheet" href="Stylesheets/style.css"  type="text/css">
    <title>Lauraella</title>
  </head>
  <body>


 <!--Logo
<div class="container-fluid mt-5 m-0" id="header">
  <div class="row">
    <div class="col-12 text-center">
        <h3><a href="index.php" class="logo">Lauraella</a></h3>
        <p>~ Brugskunst i Dragør ~</p>
    </div>
  </div>
</div> -->

<!-- NAVBAR INCLUDE-->
<?php 
    include 'nav.php';
?>


<section id="omos">
<div class="container mb-5">
    <div class="row justify-content-center" data-aos="zoom-in">
        <div class="col-sm-12 col-md-12 col-lg-6 mt-5">
            <img class="img-fluid" id="om_img" src="images/om_img.png">
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <h1 class="text-center mt-5">Hvad er Lauraella?</h1>
            <p class="mt-3">Laura Ella er en spændende brugskunstbutik, som har belligenhed i Dragør. Butikken rummer en masse delikatesser og vine, og du får en oplevelse ud over det sædvanlige. Vi laver flotte værtindegaver, firmagaver, venindegaver, kærlighedsgaver samt forkælelsesgaver - alt efter netop dine behov.</p>
            <p class="mt-3">Laura Ella byder også på mange lækre ting til hjemmet. Puder i de skønneste farver, det populøre porcelæn fra "Pip" og meget mere. Til forskønnelse af krop og sjæl forhander vi det evigt populøre "Durance" fra Frankrig, som laver velværeprodukter, lavet på den rene natur.</p>
        </div>

<!-- Row end -->
    </div>

    <div class="row mt-5 justify-content-center" data-aos="zoom-in">

        <div class="col-sm-12 col-md-12 col-lg-6 order-lg-1">
            <img class="img-fluid" id="om_img" src="images/LauraEllaPris.jpg">
        </div>

        <div class="col-sm-12 col-md-12 col-lg-6">
            <h1 class="text-center mt-2">Brugskunst siden "1998"</h1>
            <p class="mt-3">Her hos Laura Ella sørger vi for at sortimentet bliver skiftet hvert halve år i form af nye farver samt produkter.
            Vi sammensætter vores sortiment helt selv, så det bliver personligt og unikt hvilket gør at det ikke kan købes online.
            Netop fordi at vi ikke sælger online gør at vi vægter konstant fornyelse til butikken utroligt højt. 
            Vores kombination af brugskunst, delikatesser og tøj samt måden vi opstiller tingene på er alle med til at give vores kunder den perfekte oplevelse.
            </p>
            <h3 class="text-center"><i>"Månedens Amagerbutik Juni 2018"</i></h3>
            <p>Vi hos Laura Ella er stolte af at annoncere at vi i juni måned, af Amager Bladet og Danske Bank blev kåret som månedens Amagerbutik.</p>
            
        </div>

        <!-- Row end -->
    </div>

<!-- Container end -->
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
    <!-- AOS animation JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	
    <script>	
        // Script for the fade-up animation
        AOS.init();
    </script>

  </body>
</html>