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
		<style type="text/css">
			.box1{
				margin-bottom: 30px;
			}
			.box2{
				margin-right: 150px;
			}

			#first{
					float: left;
					width:300px;  font-size: 25px; margin-left: 20% ; margin-top: 100px;
			}
			#second{
					overflow: hidden;
					float:left;
					width:500px ; font-size:25px ; margin-top:100px;
					overflow: hidden;
			}
		</style>
		<link href="style.css">
	</head>	
<body>
	<div  style=" ">
		<div id="first">
				<div class="box1">
					<label >Name:</label>
				</div>
				<div class="box1">
					<label class="box2">Date of birth:</label>
				</div>
				<div class="box1">
					<label>Gender:</label>
				</div>
				
				<div class="box1">
					<label>Address:</label>
				</div>
				
				<div>
					<button onclick="myFunction()">Print</button>
				</div>
		</div>
		<div id="second">
				<div class="box1">
					<label ><u><?php echo $name ?></u></label>
				</div>
				<div class="box1">
					<label class="box2"><u><?php echo $dob ?></u></label>
				</div>
				<div class="box1">
					<label><u><?php echo $gender ?></u></label>
				</div>
				
				<div class="box1">
					<label><u><?php echo $address ?></u></label>
				</div>
				
		</div>

	</div>

	<script>
function myFunction() {
    window.print();
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