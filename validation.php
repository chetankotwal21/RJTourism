<?php
function validate($username,$password)
{	
	if(empty($username))
	{
		$error="Enter username";
		return $error;
	}
	elseif(empty($password))
	{
		$error="Enter password";
		return $error;
	}
	
	
}
?>
