<?php
function login($user, $password){
	if(($user == "dodgeball") && ($password == "afdbba14")){
		$_SESSION["login"] = true;
		return true;
	}
	else return false;
}
?>