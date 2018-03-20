<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Bikaner</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
    
        
        
      
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.php"><span class="glyphicon glyphicon-log-in"></span> Home</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
  <div class="container text-center">
    <h1>City Bikaner</h1>      
    <p>Bikaner also know as the camel country</p>
  </div>
</div>
  
<div class="container-fluid bg-3 text-center">    
  <h3>Some images of Bikaner city</h3><br>
  <div class="row">
    <div class="col-sm-3">
      <p>Junagarh Fort</p>
      <img src="Junagarh Fort.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Bikaji Ki Tekri</p>
      <img src="Bikaji Ki Tekri.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Bhandasar Jain Temple</p>
      <img src="jain-temple.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Lalgarh Palace</p>
      <img src="Lalgarh Palace.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br>

<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3">
      <p>Laxmi Nath Temple</p>
      <img src="Laxmi Nath Temple.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Devi Kund Sagar</p>
      <img src="Devi Kund Sagar.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Kotgate</p>
      <img src="Kotgate.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Shiv Bari Chauraha</p>
      <img src="Shiv Bari Chauraha.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br><br>
</body>
</html>
