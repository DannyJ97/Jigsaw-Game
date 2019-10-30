<?php
session_start();
include 'common.php';

/*if username and password match*/
function checkCredentials($username, $password){
	global $users;
			if (strcmp(trim($users[$username][0]), trim($password))==0) {
				return true;
			}
			else return false;
		}	


/*global variables*/
$error_msg;

/*if form is submitted*/
if (isset($_POST['submit'])) {
	$username=$_POST["user"];
	$password=$_POST["pass"];

	/*checking if there are valid input*/
	if (invalidInputs($username, $password)) {
		$error_msg = "<p>Invalid inputs.</p>";
	}

	/*checking if account exists*/

	else if (!array_key_exists($username, $users)) {
		$error_msg = "<p>This account doesn't exist</p>";
	}
	/*checking if username and password match*/ 
	else if (!checkCredentials($username, $password)) {
		$error_msg = "<p>Password and username do not match.</p>";
	}

	/*if they match, redirect to game homepage*/
	else{	
		if (checkCredentials($username, $password)) {
		//setting session: player and current score.
		$_SESSION["player"] = $username;
		$_SESSION["score"] = 0;
		$_SESSION["life"] = 3;
		header("location:game-intro.php");
		exit();
		}
	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome back!</title>
	<link href="https://fonts.googleapis.com/css?family=Special+Elite&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="index.css">
	<style type="text/css">
		p{
			color: red;
		}
	</style>
</head>
<body>
	<div class="center-page">
		<h1>Welcome back returning player. Please log in!</h1>
		<div class="form">
			<form action="" method="POST">
				<label>Username: <input type="text" name="user" maxlength="10"></label>
				<br>
				<label>Password: <input type="password" name="pass"></label>
				<br>
				<input type="submit" name="submit" value="login">
			</form>
		</div>
		<?php
	
		if (!empty($error_msg)) {
				print "$error_msg";
			}
		?>

	</div>
	</body>
</html>