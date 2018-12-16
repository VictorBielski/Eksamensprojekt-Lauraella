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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <!-- Material Design Bootstrap -->
    <link href="/Eksamensprojekt-Lauraella/Layout/Stylesheets/mdb/mdb.min.css" rel="stylesheet">
    <!--Font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <link rel="stylesheet" href="Stylesheets/style.css" type="text/css">
    <title>Laura Ella</title>
</head>

<body>

    <!-- NAVBAR INCLUDE-->
    <?php 
    include 'nav.php';
?>

    <section id="sortiment">

        <div class="container w-75">

            <div class="row text-center justify-content-center">
                <div class="col-sm-12 col-md-8 col-lg-8 mt-5">
                    <h1>Her kan du få overblikket over de nyeste varer i vores sortiment</h1>
                </div>
            </div>


            <div class="row text-center justify-content-center">

                <?php
include_once "dbcon.php";
$sql = "SELECT idGallery, titleGallery, descGallery, imgFullNameGallery, pages_id FROM galleri WHERE pages_id=2 ORDER BY orderGallery DESC LIMIT 18";

$stmt = $link->prepare($sql);
$stmt->bind_result($id, $title, $desc, $fullName, $pagesid);
$stmt->execute();
    while ($stmt->fetch()) {
        if (isset($_SESSION['users_id'])) { ?>

                <div class="col-sm-12 col-md-8 col-lg-4 mb-5 mt-5">

                    <div class="view overlay">
                        <img class="img-fluid" src="uploads/<?=$fullName?>" alt="placeholder image">
                        <div class="mask rgba-blue-grey-strong">
                            <div class="overlayText">
                                <h1><?=$title?></h1>
                                <p><?=$desc?></p>
                            </div>
                        </div>
                    </div>

                    <form action="delete.php" method="post" class="deleteIcon">
                        <input type="hidden" name="idg" value="<?=$id?>">
                        <input type="hidden" name="idp" value="<?=$pagesid?>">
                        <input class="img" type="image" src="images/trashit.png" alt="Delete">
                    </form>
                    <!-- Col end -->
                </div>


                <?php   } else { // if not logged in ?>
                <div class="col-sm-12 col-md-8 col-lg-4 mb-5 mt-5">
                    <div class="view overlay">
                        <img class="img-fluid" src="uploads/<?=$fullName?>" alt="placeholder image">
                        <div class="mask rgba-blue-grey-strong">
                            <div class="overlayText">
                                <h1><?=$title?></h1>
                                <p><?=$desc?></p>
                            </div>
                        </div>
                    </div>
                    <!-- Col end -->
                </div>
                <?php 
            }
    }
?>

                <!-- Row end -->
            </div>

            <!-- Container end -->
        </div>

        <!-- Section end -->
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