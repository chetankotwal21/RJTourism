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

			
?>
<html>
	<head>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		
		<link href="css/style1.css" rel="stylesheet">
	</head>	
<body>

        <a href="dob.php">
          <span class="glyphicon glyphicon-arrow-left"></span>
        </a>
      
	<div  align="center">
	<h1><u>Birth Certificate</h1></u>
	<table class="sam5"  width="50%"  height="40%">
			
		<tr>
			<td><label ><font size="5px">Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
			<label ><u><?php echo $name ?></u></label></td></font>
		</tr>
		<tr>
			<td>
				<label class="box2"><font size="5px">DOB:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
				<label class="box2"><u><?php echo $dob ?></u></label></font>
			</td>	
		</tr>
		<tr>
			<td>
				<label><font size="5px">Gender:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
				<label><u><?php echo $gender ?></u></label></font>
			</td>
		</tr>
		<tr>
			<td>
				<label><font size="5px">Address:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
				<label><u><?php echo $address ?></u></label></font>
			</td>
		</tr>
		<tr>
			<td align="right">
				<label ><font size="4px"><br><br>Signature of Sarpanch</label></font>
			</td>
		</tr>
		
	</table><br>
<!--	<div>
		<button onclick="myFunction()">Print</button>
	</div> -->
		<div id="options">

		<input id="printpagebutton" type="button" value="Print" onclick="myFunction()"/>

</div>
	<script>
		function myFunction() 
		{
    		var printButton = document.getElementById("printpagebutton");
        	//Set the print button visibility to 'hidden' 
        	printButton.style.visibility = 'hidden';
        	//Print the page content
        	window.print()
        	<?php ?>
        	printButton.style.visibility = 'visible';			
		}
	
	</script>


</body>
</html>






<?php
}
else
{
	header("Location:login.php");

}
?>