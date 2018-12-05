<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image Gallery</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>

<div class="container">

<div class="row text-center">
    <div class="col-12">
    <h1>Image Gallery</h1>
    </div>
</div>

<div class="row text-center">

<?php
include_once "dbcon.php";

$sql = "SELECT * FROM gallery ORDER BY orderGallery DESC";
$stmt = mysqli_stmt_init($link);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "SQL statement failed!";
} else {
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    while ($row = mysqli_fetch_assoc($result)) {
        echo ' 
        <div class="col-3">
            <img class="img-fluid" src="uploads/'.$row["imgFullNameGallery"].'" alt="placeholder image">
            <h3>'.$row["titleGallery"].'</h3>
            <p>'.$row["descGallery"].'</p>

            <form action="delete.php" method="post">	
            <input type="hidden" name="idg" value="'.$row["idGallery"].'">
            <input class="img" type="image" src="images/trash.png" alt="Delete">
            </form>
        </div> ';
    }
}
?>

<!-- Row end -->
</div>

<!-- Container end -->
</div>

<?php
if (isset($_SESSION['users_id'])) {
    echo '<div class="container">

    <div class="row myRow justify-content-center">
    
        <div class="col-4 mt-5">
        <form action="upload.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
        <label for="exampleInputEmail1">File name</label>
        <input class="form-control" type="text" name="filename" placeholder="File name...">
        </div>
    
        <div class="form-group">
        <label for="exampleInputEmail1">Image title</label>
        <input class="form-control" type="text" name="filetitle" placeholder="Image title...">
        </div>
    
        <div class="form-group">
        <label for="exampleInputEmail1">Image description</label>
        <input class="form-control" type="text" name="filedesc" placeholder="Image description...">
        </div>
    
        <div class="form-group">
        <input class="form-control-file" type="file" name="file">
        </div>
    
        <div class="form-group">
        <button class="btn" type="submit" name="submit">UPLOAD</button>
        </div>
        </form>
    
        </div>';
}
?>

<!-- Row end -->
</div>

<!-- Container end -->
</div>

<?php
if (isset($_SESSION['users_id'])) {
    echo '<a href="logout.php">klik for at logge ud!</a>';
}

?>






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>