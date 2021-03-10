<?php include ('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title> Login Form </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
	<h2>Login</h2>
</div>
	<form method="post" action="login.php">
	<?php include('errors.php')?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="UN">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="PW1">
		</div>
		<div class="input-group">
			<button type="submit" name="login" class="btn">Login</button>
		</div>
		<p>
			Not yet a member?  <a href="register.php">Sign up</a>
		</p>
	
</form>
</body>
</html>