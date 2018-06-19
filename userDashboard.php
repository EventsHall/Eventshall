<?php 
	session_start();
	if(!isset($_SESSION['username'])){
		header("Location:login.html");
	}


 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	  <title>Welcome Page</title>
 	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" type="text/css" href="assets/css/home.css">
 </head>
 <body>
 	<div class="navbar navbar-inverse navbar-fixed navbar-custom">
      <div class="container">
          <div class="navbar-header" <a href="#" class="pull-left">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>                        
              </button>
              <a class="pull-left" href="#"><img  src="assets/images/logo.png" alt="Brand" width="100px" height="50px"></a>
              <a class="navbar-brand" href="#">Events Hall</a>
          </div>

         <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
                <li><a href=""><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li><a href=""><span class="glyphicon glyphicon-search"></span> Search</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-user"></span>Welcome <?php echo $_SESSION['username'] ?> </a></li>
              </ul>
              
          </div>
      </div>
  </div>
 
 </body>
 </html>