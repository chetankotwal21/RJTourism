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

		<style>
		<link rel="stylesheet" type="text/css" href="style.css">

		</style>
	</head>
	<body >
	<nav class="navbar navbar-inverse">
  		
  		<p class="navbar-text" class="sam" > <a href="home.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-home"></span> Home
        </a><font align="center" color="#83ACB9" ><h2 align="center"> Popular Cities Of Rajasthan &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="login.php">
          <span class="glyphicon glyphicon-log-in"></span>
        </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a  href="logout.php">
          <span class="glyphicon glyphicon-off"></span>
        </a></h2></font></p>
		</nav>

	<div style="width: 100%;">

		<div style="float:left; width: 5%">	
			<div class="btn-group-vertical" background-color:  id="sam">
			<button type="buton" class="btn btn-primary"><a href="addchild.php "><font color="#5BD4A6">Jaipur</font></a></button> 
			<button type="buton" class="btn btn-primary"><a href="bikaner.php "><font color="#5BD4A6">Bikaner</font></a></button> 
			<button type="buton" class="btn btn-primary"><a href="udaipur.php "><font color="#5BD4A6">Udaipur</font> </a></button> 
			<button type="buton" class="btn btn-primary"><a href="jaisalmer.php "><font color="#5BD4A6">Jaisalmer</font></a></button> 
			<button type="buton" class="btn btn-primary"><a href="Jodhpur.php "><font color="#5BD4A6"> Jodhpur</font></a></button> 
			<button type="buton" class="btn btn-primary"><a href="Pushkar.php "><font color="#5BD4A6">Pushkar</font> </a></button> 
			 
			</div>
		</div><!-- corousol -->

			<div style="float:right; ; width: 80%;">
				<div class="container" >
			  		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			    		<!-- Indicators -->
					    <ol class="carousel-indicators">
					      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					      <li data-target="#myCarousel" data-slide-to="1"></li>
					      <li data-target="#myCarousel" data-slide-to="2"></li>
					      <li data-target="#myCarousel" data-slide-to="3"></li>
					    </ol>

					    <!-- Wrapper for slides -->
					    <div class="carousel-inner" role="listbox">
					      <div class="item active">
					        	<img src="Rajasthan.jpg"  width="460" height="700">
								
					      </div>
					      	
			     			 <div class="item">
			        			<img src="Ajmer.jpg"  width="460" height="645">
								
						     </div>
			    
			      <div class="item">
			        <img src="Amber.jpg" alt="Flower" width="460" height="645">
					
			      </div>

			      <div class="item">
			        <img src="Bundi.jpg" alt="Flower" width="460" height="145">
					
			      </div>
			    </div>

			    <!-- Left and right controls -->
			    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			      <span class="sr-only">Previous</span>
			    </a>
			    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			      <span class="sr-only">Next</span>
			    </a>
				
			  </div> 
			  
			  <div id="carousel_text" class="col-md-6"> -->
			  
				</div>
			</div>
			</div>
<!-- corousel closed -->

</div>
</div>


</div>
			
		
</body>
</html>		




<?php
}
else
{
	header("Location:login.php");
}


?>