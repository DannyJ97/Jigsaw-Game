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
	/*
echo "<h1 align='center'>You have guessed correctly your child is saved!</h1>";
echo "<audio controls autoplay>
<source src='Mortal Kombat X - FerraTorr_ Ruthless (Theme).mp3' type='audio/mp3'>
Your browser does not support the audio tag.
</audio>";*/
}
else{
	return false;
	/*
	echo "<h1 align='center'>You have bleed to death Goodnight. >:)</h1>";
echo "<audio controls autoplay>
<source src='Your All Going To Die Down Here.mp3' type='audio/mp3'>
Your browser does not support the audio tag.
</audio>";*/
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
	header('location:dice-to-coin.html');//include link for juxebox
}
else{
	header('location:coin.html');
}
?>

</body>
</html>