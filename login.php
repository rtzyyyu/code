<!DOCTYPE html>
<html>
<head>
		<title>LOGIN</title>
		<style type="text/css">
			#main{
				background-color: #333;
				width: 600px;
				height: 300px;
				border-radius: 30px;
			}
			h1{
				color: white;
				background-color: black;
				border-top-right-radius: 30px;
				border-top-left-radius: 30px;
			}
			.text{
				background-color: #333;
				color: white;
				width: 250px;
				font-weight:bold;
				font-size: 20px;
				border: none;
				text-align: center;
			}
			.text:focus{
				outline: none;
			}
			hr{
				width: 250px;
				margin-top: 0px !important;
			}
			#sub{
				width: 250px;
				height: 30px;
				background-color: #5f5;
				border: none;
			}	
		</style>
</head>
<body>
		<center>
		<div id="main">
			<h1>LOGIN</h1>
			<form method="POST">
				<input type="text" name="ADMIN" class="text" autocomplete="off"
				required placeholder="username"><br><hr><br>
				<input type="password" name="ADMIN123" class="text" required placeholder="password"><br><hr><br>
				<input type="Submit" name="submit" id="sub">
			
			</form>
		</div>
		</center>
</body>
</html>

<?php
	
	
	
	if (isset($_POST['submit'])) {
		$un=$_POST['ADMIN'];
		$pw=$_POST['ADMIN123'];
		
		if ($un=='ADMIN' &&  $pw=='ADMIN123') {
			header("location:home.html");
			exit();
		}
		else
			echo "<script>alert('Invalid username/password')</script>";
	
	}
?>