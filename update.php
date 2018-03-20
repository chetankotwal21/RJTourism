<?php
	session_start();
	if(!empty($_SESSION['username']))
	{

		require_once "dbconnect.php";
		$childid=$_POST['childid'];
		$sel="SELECT * FROM addchild WHERE cid=$childid";

		$runsel=mysqli_query($con,$sel);
		$rowaddchild=mysqli_fetch_assoc($runsel);


		$name1=$rowaddchild['name'];
		$dob1=$rowaddchild['dob'];
		$gender1=$rowaddchild['gender'];
		$category1=$rowaddchild['category'];
		$address1=$rowaddchild['address'];

	if(isset($_POST['submit']))
	{



			
			$name=$_POST['name'];
			echo $name;

			$dob=$_POST['dob'];
			$age=$_POST['age'];
			$weight=$_POST['weight'];
			$height=$_POST['height'];
			$gender=$_POST['gender'];
			$category=$_POST['category'];
			echo $category;
			$address=$_POST['address'];

			$sqlinsert=" UPDATE addchild SET age=$age,weight=$weight,height=$height WHERE cid=$childid";



			

			$runsel=mysqli_query($con, $sqlinsert);

			if($runsel)
			{
				echo "high";
				header("Location:update1.php");
			}
			
	}





?>
	









<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="css/style.css" rel="stylesheet" >

		<style>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style>
  		div.raj{
    		background-image: url("image/addchilds.jpej");
    		background-color: #cccccc;
			}
			table.sam{
    		background-image: url("image/addchilds.jpej");
    		background-color: #cccccc;
			}

		</style>
	</head>
	<body >
	<nav class="navbar navbar-inverse">
  		
  		<p class="navbar-text" class="sam" > <a href="home.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-home"></span> Home
        </a><font align="center" color="#83ACB9" ><h2 align="center"> Update the child data &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="login.php">
          <span class="glyphicon glyphicon-log-in"></span>
        </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="logout.php">
          <span class="glyphicon glyphicon-off"></span>
        </a></h2></font></p>
		</nav>
<form method="post" action="update.php">
	<div class="raj" align="center">
		<table width="70%"  cellpadding="14%" cellspacing="4%" height="40%"  class="sam">
			<tr>
				<td>
					<label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspId:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<input type="text" placeholder=" " name="childid" value="<?php echo $childid ?>">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<label>NAME:</label>&nbsp&nbsp&nbsp&nbsp&nbsp
					<input type="text" placeholder="Enter Name" name="name" value="<?php echo $name1 ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDOB:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<input type="text" placeholder="YYYY-MM-DD" name="dob" value="<?php echo $dob1 ?>" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<label>AGE:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<input type="text" placeholder="Enter Name" name="age" required>
				</td>
			</tr>
			<tr>
				<td>
					<label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nrequiredbsp&nbsp&nbsp&nbspWEIGHT:</label>
					<input type="text" placeholder="Enter weight" name="weight" required>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<label>HEIGHT:</label>&nbsp&nbsp&nbsp
					<input type="text" placeholder="Enter Height" name="height" required>
				</td>
			</tr>
			<tr>
				<td>
					
					<label >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspGENDER:
  						<input type="radio" name="gender" value="male" checked> Male
  						<input type="radio" name="gender" value="female"> Female
  						
					 </label>
					
					    <div class="form-group">
					      <label >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCAST:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					      <select name="category" >
					        <option value="open">OPEN</option>
					        <option value="obc">OBC</option>
					        <option value="vjnt">VJNT</option>
					        <option value="sc">SC</option>
					        <option value="st">ST</option>
					      </select>
					    </div>
					     
				</td>
			</tr>
			<tr>
				<td>
					<label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAddress:</label>
					<input type="text" size="58%" placeholder="Enter Address" name="address" 
					value="<?php echo $address1 ?>"  >
				</td>
			</tr>
		</table>

	</div>

	<br><br>
	<div align="center">
		<input class="myButton" type="submit" name="submit">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input class="myButton" type="submit" name="clear" value="Clear">	
	</div>
</form>
</body>
</html>


<?php
}
else
{
	header("Location:home.php");
}
?>