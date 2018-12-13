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
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
        <link rel="stylesheet" href="Stylesheets/style.css"  type="text/css">
    <title>Lauraella</title>
  </head>
  <body>

<!-- NAVBAR INCLUDE-->
<?php 
    include 'nav.php';
?>

<div class="container">

    <div class="row myRow justify-content-center">
    
        <div class="col-4 mt-5">
        <form action="upload.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
        <label for="exampleInputEmail1">Fil navn</label>
        <input class="form-control" type="text" name="filename" placeholder="Fil navn...">
        </div>
    
        <div class="form-group">
        <label for="exampleInputEmail1">Titel</label>
        <input class="form-control" type="text" name="filetitle" placeholder="Billede titel...">
        </div>
    
        <div class="form-group">
        <label for="exampleInputEmail1">Pris</label>
        <input class="form-control" type="text" name="filedesc" placeholder="Pris...">
        </div>
    
        <div class="form-group">
        <input class="form-control-file" type="file" name="file">
        </div>

        Vælg lokation til billede:
	    <select name="imagesid" required>
        <?php
                require_once('dbcon.php');
                $sql = 'SELECT id, name FROM images';
                $stmt = $link->prepare($sql);
                $stmt->execute();
                $stmt->bind_result($imgid, $name);
                
                while($stmt->fetch()){
                    echo '<option value="'.$imgid.'">'.$name.'</option>'.PHP_EOL;
                } 
        ?>
        </select>
    
        <div class="form-group">
        <button class="btn" type="submit" name="submit">UPLOAD</button>
        </div>
        </form>
    
        </div>


<!-- Row end -->
</div>

<!-- Container end -->
</div>


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