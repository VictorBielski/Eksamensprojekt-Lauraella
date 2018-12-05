<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php 
$un = filter_input(INPUT_POST, 'un') or die ('Missing or wrong username');
$pw = filter_input(INPUT_POST, 'pw') or die ('Missing or wrong password');

	$pwhash = password_hash($pw, PASSWORD_DEFAULT);
	
	require_once('dbcon.php');
	
	$sql = 'INSERT INTO lauraellaUsers (username, pwhash) VALUES (?, ?)';
	$stmt = $link->prepare($sql);
	$stmt ->bind_param('ss', $un, $pwhash);
	$stmt ->execute();
	
	if ($stmt->affected_rows > 0 ){
		echo 'User '.$un.' created :-)';
		$_SESSION['users_id'] = $stmt->insert_id;
		$_SESSION['uname'] = $un;
	} else {
		echo 'Could not create user - username '.$un.' allready exists!';
	}
	
	
	
?>
	<a href="logout.php">klik for at logge ud!</a>

</body>
</html>