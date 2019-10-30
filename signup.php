<?php 

include 'common.php';

/*adding user and info into users.txt*/
function addUser($username, $password){
	$file = "users.txt";
	$newUser = "$username, $password, 0\n";
	file_put_contents($file, $newUser, FILE_APPEND | LOCK_EX);
}

/*global variables*/
$error_msg; 

//if user submits
if (isset($_POST["submit"])) {
	$username=$_POST["user"];
	$password=$_POST["pass"];
//checking if there are inputs
	if (invalidInputs($username, $password)) {
		$error_msg = "<p>Invalid inputs.</p>";
	}
//checking if username already exists
	else if (array_key_exists($username, $users)) {
		$error_msg = "<p>Username already exists.</p>";
	}
//redirecting to login page
	else{
		addUser($username, $password);
		header("location:login.php");
		exit();
	}

}


 ?>
<!DOCTYPE html>
<html>

<head>

	<link rel="stylesheet" type="text/css" href="index.css">
	<link href="https://fonts.googleapis.com/css?family=Special+Elite&display=swap" rel="stylesheet">
	<title>New Player</title>
	<style type="text/css">
		p {
			color: red;
		}
	</style>
</head>
<body>
	<div class="center-page">
		<h1>Welcome new player! Register here!</h1>
		<div class="form">
			<form action="" method="POST">
				<label>Username: <input type="text" name="user" maxlength="10"></label>
				<br>
				<label>Password: <input type="password" name="pass" maxlength="10">
				<br>
				</label>
				<input type="submit" name="submit" value="create new account">
			</form>
			<!-- if there is an error -->
			<?php 
				if (!empty($error_msg)) {
					print "$error_msg";
				}
			?>
		</div>
</body>
</html>