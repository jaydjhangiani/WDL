<?php

function validate($UN)
{
	if($UN == "")
		return "please enter your username";
	if(strlen($UN) < 3)
		return "username is too short";

	switch($UN){
		case ($UN == "tom" || $UN == "jerry" || $UN == "bob"):
			return "username already in use";
	}
	return "username is valid";


}
echo validate(trim($_REQUEST["UN"]));
?>
