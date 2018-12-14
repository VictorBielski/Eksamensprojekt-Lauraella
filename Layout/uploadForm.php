<?php
	session_start();
?><!doctype html>
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
        <link rel="stylesheet" href="Stylesheets/style.css"  type="text/css">
    <title>Lauraella</title>
  </head>
  <body>

<!-- NAVBAR INCLUDE-->
<?php 
    include 'nav.php';
?>

<section id="upload">
<div class="container">

    <div class="row myRow justify-content-center">
    
        <div class="col-sm-10 col-md-8 col-lg-6 mt-5 mb-5 p-5 omtekst ">
<?php 
        if (isset($_SESSION['users_id'])) { // if logged in ?>

        <form action="upload.php" method="POST" enctype="multipart/form-data" id="kontaktform">
            <div class="form-group">
                <input class="form-control" type="text" name="filename" placeholder="Fil navn...">
            </div>
    
            <div class="form-group">
                <input class="form-control" type="text" name="filetitle" placeholder="Billede titel...">
            </div>
    
            <div class="form-group">
                <input class="form-control" type="text" name="filedesc" placeholder="Pris...">
            </div>
    
            <div class="form-group">
                <input class="form-control-file" type="file" name="file">
            </div>

            Vælg lokation til billede:
	            <select name="pagesid" class="mb-3" required>
        <?php
                require_once('dbcon.php');
                $sql = 'SELECT id, name FROM pages';
                $stmt = $link->prepare($sql);
                $stmt->execute();
                $stmt->bind_result($imgid, $name);
                
                while($stmt->fetch()){
                    echo '<option value="'.$imgid.'">'.$name.'</option>'.PHP_EOL;
                } 
        ?>
        </select>
    
            <div class="form-group text-center">
                <button class="btn" type="submit" name="submit">UPLOAD</button>
            </div>
        </form>
 <?php } else { ?>  

        <h1 class="mt-5 mb-5">Log venligst ind for at opdatere billederne!</h1>
 <?php }
 ?>
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