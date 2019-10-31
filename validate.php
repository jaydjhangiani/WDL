<?php
function validate($name)
{
	if($name == "")
		return "please enter your username";
	if(strlen($name) < 3)
		return "username is too short";
	switch($name){
		case ($name == "jay" || $name == "jhanginai" || $name == "shravanahuja"):
			return "username already in use";
	}
	return "username is valid";
}
echo validate(trim($_REQUEST["name"]));
?>
