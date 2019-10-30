<?php
	$temp=array(); //to be filled with information in users.txt
	$users=array(); //to be filled with keys as usernames
	$players = file("users.txt");

	//creating associative array were key is username & users["key"][0] is password
	foreach ($players as $line) {
		$temp=explode(",", $line);
		$users[$temp[0]]=array($temp[1], $temp[2]); 
	}

	//print_r($temp);
	//print_r($users);

/*will check if there are inputs*/
	function invalidInputs($username, $password){
		if (empty($_POST["user"]) || empty($_POST["pass"])) {
			return true;
		}
		else return false;
	}

	function updateHighScores($username) {
		global $_SESSION;
		global $users;
		file_put_contents("users.txt","");

		foreach ($users as $user => $info) {
			if ($_SESSION["score"]>$users[$user][1] && strcmp($user, $_SESSION["player"])==0) {
				$users[$user][1]=$_SESSION["score"];
			}

			$userinfo = strval($user).", ".strval($users[$user][0]).", ".strval($users[$user][1]);

			file_put_contents("users.txt", $userinfo, FILE_APPEND | LOCK_EX);
		}
	}

	//print_r($_SESSION);

?>