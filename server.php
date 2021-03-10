<?php
	session_start();

	$UN = "";
	$email = "";
	$errors = array();

	$db = mysqli_connect('localhost','root','','registration');
	
	if (isset($_POST['register'])){
		$UN = mysqli_real_escape_string($db,$_POST['UN']);
		$email = mysqli_real_escape_string($db,$_POST['email']);
		$PW1 = mysqli_real_escape_string($db,$_POST['PW1']);
		$PW2 = mysqli_real_escape_string($db,$_POST['PW2']);

		if(empty($UN)){
			array_push($errors, "Username is empty!");
		}
		if(empty($email)){
			array_push($errors, "Email is empty!");
		}
		if(empty($PW1)){
			array_push($errors, "Password is empty!");
		}
		if($PW1 != $PW2){
			array_push($errors, "Password doesn't match!");
		}
		if(count($errors) == 0){
			$PW1 = md5($PW2);
			$sql = "INSERT INTO users(username, email, password) VALUES('$UN', '$email', '$PW1')";
			mysqli_query($db, $sql);
			$_SESSION['username'] = $UN;
			$_SESSION['success'] = "You are now logged in!";
			header('location: index.php');
		}
	}
	if(isset($db,$_POST['login'])){
		$UN = mysqli_real_escape_string($db,$_POST['UN']);
		$PW = mysqli_real_escape_string($db,$_POST['PW1']);

		if(empty($UN)){
			array_push($errors, "Username required!");
		}
		if(empty($PW)){
			array_push($errors, "Password required!");
		}
		if(count($errors) == 0) {
			$PW = md5($PW);
			$query = "SELECT * FROM users WHERE username='$UN' AND password='$PW'";
			$result = mysqli_query($db, $query);
			if(mysqli_num_rows($result) == 1){
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "Welcome lods!";
				header('location: index.php');
			}
			else{
				array_push($errors, "The username/password is incorrect");
			}
		}
	}
	
	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header('location: login.php');
	}
		
?>