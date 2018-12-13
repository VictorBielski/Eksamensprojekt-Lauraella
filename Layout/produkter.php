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

<section id="sortiment">
<div class="container w-75">

<div class="row text-center">
    <div class="col-12">
    <h1>SORTEMENT</h1>
    </div>
</div>

<div class="row text-center justify-content-center">

<?php
include_once "dbcon.php";

$sql = "SELECT * FROM galleri WHERE images_id=2 ORDER BY orderGallery DESC";
$stmt = mysqli_stmt_init($link);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "SQL statement failed!";
} else {
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    while ($row = mysqli_fetch_assoc($result)) {
        if (isset($_SESSION['users_id'])) {
            echo '

            <div class="col-sm-8 col-md-8 col-lg-4">
            <img class="img-fluid" src="uploads/'.$row["imgFullNameGallery"].'" alt="placeholder image">
            <h3>'.$row["titleGallery"].'</h3>
            <p>'.$row["descGallery"].'</p>

            <form action="delete.php" method="post">	
            <input type="hidden" name="idg" value="'.$row["idGallery"].'">
            <input class="img" type="image" src="images/trash.png" alt="Delete">
            </form>
            </div> ';

        } else {
        echo ' 
        <div class="col-sm-8 col-md-8 col-lg-4">
            <img class="img-fluid" src="uploads/'.$row["imgFullNameGallery"].'" alt="placeholder image">
            <h3>'.$row["titleGallery"].'</h3>
            <p>'.$row["descGallery"].'</p> 
        </div>';
        }
    }
}
?>

<!-- Row end -->
</div>

<!-- Container end -->
</div>

<div class="container w-75">

<div class="row text-center">
    <div class="col-12">
    <h1>FORSIDE</h1>
    </div>
</div>

<div class="row text-center justify-content-center">

<?php
include_once "dbcon.php";

$sql = "SELECT * FROM galleri WHERE images_id=1 ORDER BY orderGallery DESC";
$stmt = mysqli_stmt_init($link);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "SQL statement failed!";
} else {
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    while ($row = mysqli_fetch_assoc($result)) {
        if (isset($_SESSION['users_id'])) {
            echo '

            <div class="col-sm-8 col-md-8 col-lg-4">
            <img class="img-fluid" src="uploads/'.$row["imgFullNameGallery"].'" alt="placeholder image">
            <h3>'.$row["titleGallery"].'</h3>
            <p>'.$row["descGallery"].'</p>

            <form action="delete.php" method="post">	
            <input type="hidden" name="idg" value="'.$row["idGallery"].'">
            <input class="img" type="image" src="images/trash.png" alt="Delete">
            </form>
            </div> ';

        } else {
        echo ' 
        <div class="col-sm-8 col-md-8 col-lg-4">
            <img class="img-fluid" src="uploads/'.$row["imgFullNameGallery"].'" alt="placeholder image">
            <h3>'.$row["titleGallery"].'</h3>
            <p>'.$row["descGallery"].'</p> 
        </div>';
        }
    }
}
?>

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
  </body>
</html>