<?php
	session_start();
		if(isset($_POST['login']))
		{
			require_once "dbconnect.php";
			require_once "validation.php";
			$username=$_POST['username'];
			$password=$_POST['password'];
			$error=validate($username,$password);
			$sel="SELECT * FROM login";
			
			$runsel=mysqli_query($con,$sel);
			
			
			while($rowlogin=mysqli_fetch_assoc($runsel))
			{
				if($rowlogin['username']==$username AND $rowlogin['password']==$password)
				{
					$_SESSION['username']=$username;
					header("Location: home.php");
				}
				
			}
		}
?>











<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet" >

		
	</head>
	<body >

		
		<nav class="navbar navbar-inverse">
  		
  		<p class="navbar-text" class="sam" ><font align="center" color="blue" ><h3 align="center"><font color="#00b359"> <h1>Welcome to Rajasthan<h1> </font></h3></font></p>
		</nav>
	<form action=" " method="post" class="login-form">
	<div class="form">
    	<label ><font color="gray"><h1>Username</h1></font></label>
      	<input type="text" placeholder="username" name="username" required/>
      	<label ><font color="gray"><h1>Password</h1></label>
      	<input type="password" placeholder="password" name="password" required />
      	<input type=submit class="myButton1" name="login" value="login" > 
      	<p class="message">Not registered? <a href="#">Create an account</a></p>
    
  	</div>
  </form>

	
	
    	</form>
	</body>
</html>