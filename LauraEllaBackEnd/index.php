<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    
<div class="header">
	<h1>Laura Ella Bruger Login:</h1>
</div>
	<div class="wrapper">	
	<div class="login">
		<p>Login:</p>
	<form action="login.php" method="POST">
		<div class="form-input">
		<i class="fas fa-user"></i>
		<input type="text" name="un" placeholder="Enter Username" required>
		</div>
		<div class="form-input">
		<i class="fas fa-unlock"></i>
		<input type="password" name="pw" placeholder=" Enter Password" required>
		</div>
		<button type="submit">Login</button> 
	</form>
	</div>
</div>

</body>
</html>