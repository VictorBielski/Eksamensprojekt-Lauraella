<?php
	session_start();
?>
<!doctype html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="/Eksamensprojekt-Lauraella/Layout/Stylesheets/mdb/mdb.min.css" rel="stylesheet">
    <title>Laura Ella</title>
  </head>
  <body>

<!--Logo-->
<div class="container-fluid" id="socials">
  <div class="row">
    <div class="col-12 text-right">
      <ul>
        <a href="https://www.facebook.com/lauraelladragoer/" target="_blank"><i class="fab fa-facebook fa-2x mt-4 mr-1" id="facebook"></i></a>
        <a href="https://www.instagram.com/lauraelladragoer/?hl=da" target="_blank"><i class="fab fa-instagram fa-2x mt-4" id="instagram"></i></a>
      </ul>
    </div>
  </div>
</div>

<div class="container-fluid" id="header">
  <div class="row">
    <div class="col-12 text-center">
        <a href="index.php"><img src="/Eksamensprojekt-Lauraella/Layout/images/lauraella_logo.svg" class="img-fluid" id="logo"></a>
        <p class="mt-4">~ Alt hvad vi har i Laura Ella er unødvendigt, det gør bare livet lidt hyggeligere. ~</p>
    </div>
  </div>
</div>

<div class="container-fluid p-0"> 
<nav class="navbar navbar-expand-md mt-3">
<!-- Collapse button -->
<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent20"
  aria-controls="navbarSupportedContent20" aria-expanded="false" aria-label="Toggle navigation">
  <div class="animated-icon1">
  <span></span>
  <span></span>
  <span></span>
  </div>
</button>

<!-- Collapsible content -->
<div class="collapse navbar-collapse" id="navbarSupportedContent20">
  <ul class="navbar-nav mx-auto text-center">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Forside<span class="sr-only">(current)</span></a>
    </li>
    <!-- Dropdown -->
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">Vores sortiment</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="nye-varer.php">Nye varer</a>
          <a class="dropdown-item" href="tilbuds-varer.php">Varer på tilbud</a>
        </div>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="omos.php">Om os</a>
    </li>
        <li class="nav-item">
      <a class="nav-link" href="kontakt.php">Kontakt</a>
    </li>

    <li class="nav-item" id="bazar_link">
      <a class="nav-link" href="bazar.php">BAZAR</a>
    </li>

    <?php
    if (isset($_SESSION['users_id'])) { ?>
      <li class="nav-item">
          <a class="nav-link" href="uploadForm.php">Upload</a>
      </li>
    <?php 
    } ?>
    <?php
    if (isset($_SESSION['users_id'])) { ?>
      <li class="nav-item">
          <a class="nav-link" href="logout.php">Log ud</a>
      </li>
    <?php 
    } ?>
  </ul>
</div>
</nav>
</div>
  </body>
</html>
