<?php
	session_start();
	if(!empty($_SESSION['username']))
	{	
		session_destroy();
		header("Location:login.php");
	}
	else
	{
		header("Location:login.php");
	}
?>









