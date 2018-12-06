<?php
	session_start();

	
	
$idGallery = filter_input(INPUT_POST, 'idg', FILTER_VALIDATE_INT) 
	or die ('Missing or illegal id parameter');
$userid = $_SESSION['users_id'];
	
	require_once('dbcon.php');
	
   $sql = 'DELETE FROM gallery WHERE idGallery=?';
   $stmt = mysqli_stmt_init($link);
   		if (!mysqli_stmt_prepare($stmt, $sql)) {
    		echo "SQL statement failed!";
		} else { 
			mysqli_stmt_bind_param($stmt, "i", $idGallery);
			mysqli_stmt_execute($stmt);
		}

		
	header("Location: /LauraElla/fileselect.php?delete=success");
	
