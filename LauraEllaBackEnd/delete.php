<?php
	session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	
<?php
	
$postitid = filter_input(INPUT_POST, 'pid', FILTER_VALIDATE_INT) 
	or die ('Missing or illegal id parameter');
$userid = $_SESSION['users_id'];
	
	require_once('dbcon.php');
	
   $mysqlstring = 'DELETE FROM gallery WHERE idGallery=?';
   $stmt = $link->prepare($mysqlstring);
   $stmt ->bind_param('i', $postitid);
   
	/* $mysqlstring = 'DELETE FROM postit WHERE id=? AND users_id=? OR users_id=1';
	$stmt = $link->prepare($mysqlstring);
	$stmt ->bind_param('iii', $postitid, $userid, $userid); */
	$stmt -> execute();
	
	
		echo 'Deleted '.$stmt->affected_rows.' picture';
	
?>
	<a href="fileSelect.php">Klik for at vende tilbage!</a>
	
</body>
</html>