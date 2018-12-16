<?php
	session_start();


$idGallery = filter_input(INPUT_POST, 'idg', FILTER_VALIDATE_INT) 
	or die ('Missing or illegal id parameter');
$pagesid = filter_input(INPUT_POST, 'idp', FILTER_VALIDATE_INT) 
	or die ('Missing or illegal id parameter');	
$userid = $_SESSION['users_id'];
	
	require_once('dbcon.php');
	
   $sql = 'DELETE FROM galleri WHERE idGallery=? AND pages_id=?';
   $stmt = mysqli_stmt_init($link);
   		if (!mysqli_stmt_prepare($stmt, $sql)) {
    		echo "SQL statement failed!";
		} else { 
			mysqli_stmt_bind_param($stmt, "ii", $idGallery, $pagesid);
			mysqli_stmt_execute($stmt);
		}

		if ($pagesid == 1) {
			header("Location: /index.php?delete=success");
		} else if ($pagesid == 2) {
			header("Location: /nye-varer.php?delete=success");
		} else {
			header("Location: /tilbudsVarer.php?delete=success");
		}
		
	
	
