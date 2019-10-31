<?php
function validatepass($password)
{
	if($password == "")
		return "please enter your password";
	if(strlen($password) < 8)
		return "password is too short";
	return "password is valid";
}
echo validatepass(trim($_REQUEST["password"]));
?>
