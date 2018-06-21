<?php 
	session_start();
	if(!isset($_SESSION['username'])){
		//header("Location:login.html");
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
                <li><a href="home.html"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li><a href="searchpage.html"><span class="glyphicon glyphicon-search"></span> Search</a></li>
                <li><a href="login.html"><span class="glyphicon glyphicon-user"></span>SignIn</a></li>
                <li><a href="signUp.html"><span class="glyphicon glyphicon-user"></span>SignUp</a></li>
                <li><a href="aboutUs.html"><span class="glyphicon glyphicon-book"></span>AboutUs</a></li>
                <li><a href="contactUs.html"><span class="glyphicon glyphicon-earphone"></span> ContactUs</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-user"></span>Welcome <?php echo $_SESSION['username'] ?> </a></li>
              </ul>
          </div>  
      </div>
  </div>
  <br>
  <div class="container " style="height:1200px">
  <div class="row">
    <div id="heading1" class="col-lg-12 text-justify"style="text-align: center;"><h1>Welcome<b style="color: blue;"> <?php echo $_SESSION ['username'] ?>
    </b>you are succesfully Registered.</h1>
    <div class="col-lg-12 text-justify">
    <h3> Select your service who you are providing. Fill all details of your services in forms and upload your picture.</h3>
    </div>
    </div>
    </div>
    </div>
    <br>
      <div class="container">
  <h2 style="text-align: center; ">Select one Form</h2>
  <ul class="nav nav-tabs nav-justified">
    <li class="active"><a data-toggle="tab" href="#catering">Catering Services Form</a></li>
    <li><a data-toggle="tab" href="#events">Hall For Events Form</a></li>
    <li><a data-toggle="tab" href="#studio">Photography Studio Form</a></li>
    
  </ul>
  <div class="container">
<div class="col-offset-3 col-sm-6">
  <div class="tab-content">
    <div id="catering" class="tab-pane fade in active">
<form>
  <div class="form-group">
    <label for="guesthouse name">Your Party Lawn, Palace, Hotel, Guest House, Banquet Hall Name:</label>
           <input type="text" class="form-control" id="guesthouse_name" placeholder="Email" name="guesthouse_name">
  </div>
<div class="form-group">
    <label for="address">Your Party Lawn, Palace, Hotel, Guest House, Banquet Hall Address:</label>
           <input type="text" class="form-control" id="address" placeholder="Address" name="address">
         </div>
          <div class="form-group">
           <div class="col-sm-6">
             <label for="Pincode" ">Pincode:</label>
             <input id="pincode" class="form-control " type="number" name="pincode"  placeholder="Pincode or Postal Code ">
           </div>       
           <div class="col-sm-6">
             <label for="city" ">City District Name:</label>
             <input id="city" class="form-control " type="text" name="lastname"  placeholder="City Or District Name">
           </div>
            <div class="form-group">
  <label for="sel1">Select State:</label>
  <select class="form-control" id="sel1">
    <option>Select State</option>
    <option>Andaman and Nicobar Islands</option>
    <option>Andhra Pradesh</option>
    <option>Arunachal Pradesh</option>
    <option>Bihar</option>
    <option>Chandigarh</option>
    <option>Chhattisgarh</option>
    <option>Dadar and Nagar Haveli</option>
    <option>Daman and Diu</option>
    <option>Delhi</option>
    <option>Goa</option>
    <option>Gujarat</option>
    <option>Haryana</option>
    <option>Himachal Pradesh</option>
    <option>Jammu and Kashmir</option>
    <option>Jharkhand</option>
    <option>Karnataka</option>
    <option>Kerala</option>
    <option>Lakshadeep</option>
    <option>Madya Pradesh</option>
    <option>Maharashtra</option>
    <option>Manipur</option>
    <option>Meghalaya</option>
    <option>Mizoram</option>
    <option>Nagaland</option>
    <option>Orissa</option>
    <option>Pondicherry</option>
    <option>Punjab</option>
    <option>Rajasthan</option>
    <option>Sikkim</option>
    <option>Tamil Nadu</option>
    <option>Tripura</option>
    <option>Uttaranchal</option>
    <option>Uttar Pradesh</option>
    <option>West Bengal</option>
    
  </select>
</div>
    <div class="form-group">
           <label for="Description">Facility Or Services Providing Detail:</label>
           <textarea class="form-control" rows="3" id="comment" placeholder="What kind services you provide in any events. Write Here...."></textarea>
      </div>
      <div class="form-group">
           <label for="uploadpic">Upload Your Party Lawn, Palace, Hotel, Guest House, Banquet Hall Picture </label>
           <input type="file" class="form-control" id="uploadpic" >
         </div>
         
</form>                 
    </div>
    <div id="events" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="studio" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>
</div>
 
 </body>
 </html>