<?php
	session_start();
?>

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
        <link rel="stylesheet" href="stylesheets/style.css"  type="text/css">
    <title>Lauraella</title>

  </head>
  <body>

<!--Logo-->
<div class="container-fluid mt-5 m-0" id="header">
  <div class="row">
    <div class="col-12 text-center">
        <h3><a href="index.php" class="logo">LAURA ELLA</a></h3>
        <p>~ Alt hvad vi har i Laura Ella er unødvendigt, det gør bare livet lidt hyggeligere. ~</p>
    </div>
  </div>
</div>
  

<nav class="navbar navbar-expand-sm">
<!-- Collapse button -->
<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#burgermenu"
  aria-controls="burgermenu" aria-expanded="false" aria-label="Toggle navigation">
  <div class="animated-icon1">
  <span></span>
  <span></span>
  <span></span>
  </div>
</button>

<!-- Collapsible content -->
<div class="collapse navbar-collapse" id="burgermenu">
  <ul class="navbar-nav mx-auto text-center">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Forside<span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
          <a class="nav-link" href="produkter.php">Vores sortiment</a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="omos.php">Om os</a>
    </li>
        <li class="nav-item">
      <a class="nav-link" href="kontakt.php">Kontakt</a>
    </li>
    <?php
    if (isset($_SESSION['users_id'])) {
    echo '<li class="nav-item">
            <a class="nav-link" href="logout.php">log ud</a>
          </li>';
    }
    ?>
  </ul>
</div>
</nav>  



   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--JQUERY LOADING-->	
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.15/js/mdb.min.js"></script>
    <script src="/Eksamensprojekt-Lauraella/Layout/scripts/script.js/" type="text/javascript"></script>
  </body>
</html>