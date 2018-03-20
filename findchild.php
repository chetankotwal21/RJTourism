<?php
	session_start();
	if(!empty($_SESSION['username']))
	{
		$childid=$_POST['childid'];


		require_once "dbconnect.php";

		$sel=" SELECT * FROM addchild WHERE cid=$childid ";

		$runsel=mysqli_query($con,$sel);
		$rowaddchild=mysqli_fetch_assoc($runsel);
		$name=$rowaddchild['name'];
		$dob=$rowaddchild['dob'];
		$gender=$rowaddchild['gender'];
		$address=$rowaddchild['address'];
		$weight=$rowaddchild['weight'];
		$height=$rowaddchild['height'];
		$age=$rowaddchild['age'];

			
?>
<html>
	<head>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="css/bootstrap.min.css" rel="stylesheet" >
		
		<link href="css/style1.css" rel="stylesheet">
	</head>	
<body>
	<nav class="navbar navbar-inverse">
  		
  		<p class="navbar-text" class="sam" > <a href="home.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-home"></span> Home
        </a><font align="center" color="#83ACB9" ><h2 align="center">Updated Child Data For Nutrition Evaluation&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="login.php">
          <span class="glyphicon glyphicon-log-in"></span>
        </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a  href="logout.php">
          <span class="glyphicon glyphicon-off"></span>
        </a></h2></font></p>
		</nav>

      
	<div  align="center">
	
	<table class="sam5"  width="60%"  height="50%" cellpadding="2px" cellspacing="2px" border="2" >
			
		<tr>
			<td><label ><font size="5px">&nbsp&nbsp&nbspName:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
			<label ><u><?php echo $name ?></u></label></td></font>
		</tr>
		<tr>
			<td>
				<label class="box2"><font size="5px">&nbsp&nbsp&nbspDOB:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
				<label class="box2"><u><?php echo $dob ?></u></label></font>
			</td>	
		</tr>
		<tr>
			<td>
				<label><font size="5px">&nbsp&nbsp&nbspGender:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
				<label><u><?php echo $gender ?></u></label></font>
			</td>
		</tr>
		<tr>
			<td>
				<label><font size="5px">&nbsp&nbsp&nbspAge:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<label><u><?php echo $age ?></u></label></font>
			</td>
		</tr>
		<tr>
			<td>
				<label><font size="5px">&nbsp&nbsp&nbspHeight:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
				<label><u><?php echo $height ?></u></label></font>
			</td>
		</tr>
		<tr>
			<td>
				<label><font size="5px">&nbsp&nbsp&nbspWeight:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
				<label><u><?php echo $weight ?></u></label></font>
			</td>
		</tr>
		<tr>
			<td>
				<label><font size="5px">&nbsp&nbsp&nbspAddress:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
				<label><u><?php echo $address ?></u></label></font>
			</td>
		</tr>
		
		
	</table><br>
	<font size="5px" color="gray">
			<marquee>Updated Data valid upto only child age six Year</marquee>
	</font>
		
	


</body>
</html>






<?php
}
else
{
	header("Location:login.php");

}
?>