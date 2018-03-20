<?php
	session_start();

	if(!empty($_SESSION['username']))
	{
		
?>




<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="css/style.css" rel="stylesheet" >
	</head>
	<body >
	<nav class="navbar navbar-inverse">
  		
  		<p class="navbar-text" class="sam" > <a href="home.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-home"></span> Home
        </a><font align="center" color="#83ACB9" ><h2 align="center"> Proceed to update data &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="login.php">
          <span class="glyphicon glyphicon-log-in"></span>
        </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="logout.php">
          <span class="glyphicon glyphicon-off"></span>
        </a></h2></font></p>
	</nav>
<form method="post" action="update.php">
	<div class="form">
    	<label ><font color="gray"><h1>Enter Child Id</h1></font></label>
      	<input type="text" placeholder="Enter Id" name="childid" required/>
      	
      	
      	<input type="submit" class="myButton1" name="getcertificate" value="proceed to update" > 
      	
    
  	</div>


</form>


 </body>
 </html>



 <?php
}
else
{
	header("Location:login.php");
}