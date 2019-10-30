<?php 
session_start();
print_r($_SESSION);
include "common.php";

updateHighScores($_SESSION["player"]);

if (isset($_POST["submit"])) {
	session_destroy();
	header("location:index.php");
	exit();
}

?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Special+Elite&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="index.css">
	<title>Jigsaw's Game of Chances</title>
</head>
<body>
	<div class="center-page">
		<h1>The game has just begun, <?php print ($_SESSION["player"]);?>.</h1>
		<a href="#"><button>Play the game.</button></a>

		<form method="post" action="">
		<input type="submit" name="submit" value="Wimp out and logout.">
		</form>
	</div>
</body>
</html>