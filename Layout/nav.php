<?php
	session_start();
?>

<!doctype html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

  </body>
</html>