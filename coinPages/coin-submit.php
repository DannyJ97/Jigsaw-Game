<?php
function coincalc() {
$coin = rand(1,2);
$input = $_POST["userChoice"]; 
if ($coin == 1) {
	$coin = "Heads";
}

else {
	$coin = "Tails";
}

if($coin == $input){
	return true;
}
else{
	return false;
	
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Coin-Submit</title>
		<link rel="stylesheet" type="text/css" href="coin.css">
</head>
<body>

<?php

if (coincalc() == true) {
	header('location:jukebox.html');//include link for jukebox
}
else{
	header('location:coin.html');
}
?>

</body>
</html>