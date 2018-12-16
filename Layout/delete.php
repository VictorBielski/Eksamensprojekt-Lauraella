<?php
	session_start();


$idGallery = filter_input(INPUT_POST, 'idg', FILTER_VALIDATE_INT) 
	or die ('Missing or illegal idGallery parameter');
$pagesid = filter_input(INPUT_POST, 'idp', FILTER_VALIDATE_INT) 
	or die ('Missing or illegal pagesid parameter');
$userid = $_SESSION['users_id'];
	
	require_once('dbcon.php');
	
   $sql = 'DELETE FROM galleri WHERE idGallery=? AND pages_id=?';
   $stmt = $link->prepare($sql);
   $stmt ->bind_param('ii', $idGallery, $pagesid); 
   $stmt -> execute();

		if ($pagesid == 1){
			header("Location: index.php?delete=success");
		} else if ($pagesid === 2){
			header("Location: nye-varer.php?delete=success");
		} else {
			header("Location: tilbuds-varer.php?delete=success");
		}
		

		
	
	
