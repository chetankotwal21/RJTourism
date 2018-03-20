<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Simply Me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #1abc9c; /* Green */
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Pushkar place</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">

        <li><a href="Home.php">Home</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">    
  <h3 class="margin">Best Places Pushkar</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <p>Pushkar Lake or Pushkar Sarovar is located in the town of Pushkar in Ajmer district of the Rajasthan state of western India. Pushkar Lake is a sacred lake of the Hindus.</p>
       <div class="panel-body"><img src= "Pushkar Lake.jpg" height="320" width="420"  alt="Image"></div>
          <p>Pushkar Lake</p>


    </div>
    <div class="col-sm-4"> 
      <p>In the holy city of Pushkar there stands two Rangji temples. The old one is commonly called as the Rangnath temple and the New Rangji Temple is dedicated to Vaikuntha Venkatesh.</p>
       <div class="panel-body"><img src= "Shri Vaikunth Nath Swami Temple.jpg" height="320" width="420"  alt="Image"></div>
       <p>Shri Vaikunth Nath Swami Temple</p>
    </div>
    <div class="col-sm-4"> 
      <p>Punch Kund Temple approx 1 kms from the Pushkar Lake.Panch kund Temple is situated near National Dear park and that a major tourist attraction of the Pushkar and mainly Indian tourist daily.</p>
       <div class="panel-body"><img src= "panch kund.jpg" height="320" width="420"  alt="Image"></div>
       <p>panch kund</p>
    </div>
  </div>
</div>



</body>
</html>
