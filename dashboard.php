<?php

  session_start();



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
    <style type="text/css">
      .modal-body{
      background:#006666;
        padding:10px; 
         color: white;
    }
    .valid{
        border: solid green;
      }
      .error{
        color:#4d0026;
      }

  .alert{
  display: none;
}
.blink{
    font-size: 40px;
    color: rgb (0, 137, 226);
    
    animation: blink 2s infinite;
   }
   
   @keyframes blink{
    0%{opacity: 1;}
    75%{opacity: 1;}
    76%{ opacity: 0;}
    100%{opacity: 0;}
   }
    </style>
   
	  <link rel="stylesheet" type="text/css" href="css/home.css">
 </head>
 <body>
 	<div class="navbar navbar-inverse  navbar-custom">
      <div class="container">
          <div class="navbar-header" <a href="#" class="pull-left">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>                        
              </button>
              <a class="pull-left" href="#"><img  src="assets\images\logo.png" alt="Brand" width="100px" height="50px"></a>
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
                <li><a href="#"><span class="glyphicon glyphicon-user"></span>Welcome <?php echo $_SESSION['username'] ?></a></li>
              </ul>
          </div>  
      </div>
  </div>
  <br>
  
</div>
<br>
<br>
<div class="container-fluid" style="background-color: #1B7C7E; ">
  <div class="row ">
  <div class="col-lg-12">
      <div class="pull-right">
        <ul class="nav navbar-nav">
            <li><button type="submit" class="btn navbar-btn btn-danger" name="logout" id="logout"  value="Log Out" style="border-radius: 15px;">Sign Out</button></li>
        </ul>     
</div>
 <h2 class="" style="color:white "  >Registeration Successfully</h2>
 <h3 class="text-uppercase blink "> <b style="color: #001a00">Vinod kumar Verma</b></h3>
 <h3 style="color: #330000">Please  provide Your information related categeory:-</h3>
 </div>
 </div>
 </div>
 <h2 style="text-align: center; background-color::white; color: #1B7C7E"> Select One form Click The Button</h2>
 <div class="container-fluid" id="form2">
  <div class="row">
    <br>
    <div class="col-sm-4" id="guest1">
<h3 style="font-size: 20px; background: #1B7C7E; color: white"> Party Lawn,Palace, Hotel, Guest House, Banquet Hall Name Form   </h3>
  
  <a href=""><h4 class="head4 text-center">Hotel Place Party-Lawn</h4></a>
  <div class="img">
            <img src="assets\images\guesthouse.jpg" class="img-responsive" style="width:100%; height: 200px;" alt="Image"> 
            </div>  
  <br>
  <!-- Trigger the modal with a button -->
<br>
  <button type="button" class="btn btn-danger btn-lg center-block" data-toggle="modal" data-target="#myModal" style="border-radius: 20px">Click Here</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content " >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align: center; color:#1B7C7E"><b>Hall For Events Services</b> </h4>
        </div>
        <div class="modal-body">
         <form id="guesthouse_form">
          <div class="form-group">
    <label for="guesthouse name">Your Party Lawn, Palace, Hotel, Guest House, Banquet Hall Name:</label>
           <input type="text" class="form-control" id="guesthouse_name" placeholder="Enter Name Here..." name="guesthouse_name">
  </div>
  <div class="form-group">
    <label for="address">Your Party Lawn, Palace, Hotel, Guest House, Banquet Hall Address:</label>
           <input type="text" class="form-control" id="address" placeholder="Address" name="address1">
         </div>
         <div class="form-group">
           
             <label for="Pincode" ">Pincode:</label>
             <input id="pincode" class="form-control " type="number" name="pincode1"  placeholder="Pincode or Postal Code ">
         </div>
          <div class="form-group">
              <label for="city" ">City District Name:</label>
             <input id="city" class="form-control " type="text" name="city1"  placeholder="City Or District Name">
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
</div><div class="form-group">
           <label for="Description">Facility Or Services Providing Detail:</label>
           <textarea class="form-control" rows="3" id="comment" placeholder="What kind services you provide in any events. Write Here...." name="comment1"></textarea>
      </div>
      <div class="form-group">
           <label for="uploadpic">Upload Your Party Lawn, Palace, Hotel, Guest House, Banquet Hall Picture </label>
           <input type="file" class="form-control" id="uploadpic" name="upload1" >
           <br>
           <button type="button" class="btn btn-success btn-lg btn-block" id="registe_guesthouse" style="">Submit
                  </button>
         </div>
         </form>
        </div>
        
    
              </div> 
                      
        </div>
      </div>
      </div>
      <div class="col-sm-4"id="cat1">
      
 <h3 style=" font-size:25px; ;text-align: center; background: #1B7C7E; color: white; height:45px"> Catering Services Form   </h3>
 <a href=""><h4 class="head4 text-center">Catering</h4></a>
 <div class="img">
            <img src="assets\images\catering.png" class="img-responsive" style="width:100% ; height: 200px" alt="Image">
          </div>
  <br>
  <!-- Trigger the modal with a button -->
  <br>
  <button type="button" class="btn btn-warning btn-lg center-block" data-toggle="modal" data-target="#myModal1" style="border-radius: 20px;">Click Here</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align: center; color:#1B7C7E"><b>Catering Services</b></h4>
        </div>
        <div class="modal-body">
         <form id="catering_form">
          <div class="form-group">
    <label for="catering_name">Catering Services Company Name:</label>
           <input type="text" class="form-control" id="catering_name" placeholder="Enter Name Here..." name="catering_name">
  </div>
  <div class="form-group">
    <label for="address2">Catering Services Company Address:</label>
           <input type="text" class="form-control" id="address2" placeholder="Address" name="address2">
         </div>
         <div class="form-group">
           
             <label for="Pincode2" ">Pincode:</label>
             <input id="pincode2" class="form-control " type="number" name="pincode2"  placeholder="Pincode or Postal Code ">
         </div>
          <div class="form-group">
              <label for="city2" ">City District Name:</label>
             <input id="city2" class="form-control " type="text" name="city2"  placeholder="City Or District Name">
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
</div><div class="form-group">
           <label for="Description">Services Description:</label>
           <textarea class="form-control" rows="3" id="comment2" placeholder="What kind services you provide in any events. Write Here...." name="comment2"></textarea>
      </div>
      <div class="form-group">
           <label for="uploadpic2">Upload Your Catering Services Company Picture </label>
           <input type="file" class="form-control" id="uploadpic2" >
           <br>
           <button type="button" class="btn btn-success btn-lg btn-block" id="register_catering">Submit
                  </button>
         </div>
         </form>
        </div>
        

    
              </div> 
                      
        </div>
      </div>
      </div>

      <div class="col-sm-4" id="stu1">

      <h3 style=" font-size:;text-align:center; background: #1B7C7E; color: white; height:45px;"> Photography Studio Services Form   </h3>
       <a href=""><h4 class="head4" style="text-align: center;">Studio</h4></a>
       <div class="img">
            <img src="assets\images\photostudio.png" class="img-responsive" style="width:100%; height: 200px;" alt="Image">
  <br>
  <!-- Trigger the modal with a button -->
  <br>
  <button type="button" class="btn btn-info btn-lg center-block" data-toggle="modal" data-target="#myModal2" style="border-radius: 20px;">Click Here</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align: center; color:#1B7C7E"><b>Photography Studio Services </b> </h4>
        </div>
        <div class="modal-body">
         <form id="studio_form">
          <div class="form-group">
    <label for="studio_name">Photography Studio Name:</label>
           <input type="text" class="form-control" id="studio_name" placeholder="Enter Name Here..." name="studio_name">
  </div>
  <div class="form-group">
    <label for="address3">Photography Studio Address:</label>
           <input type="text" class="form-control" id="address3" placeholder="Address" name="address3">
         </div>
         <div class="form-group">
           
             <label for="Pincode" ">Pincode:</label>
             <input id="pincode3" class="form-control " type="number" name="pincode3"  placeholder="Pincode or Postal Code ">
         </div>
          <div class="form-group">
              <label for="city" ">City District Name:</label>
             <input id="city3" class="form-control " type="text" name="city3"  placeholder="City Or District Name">
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
</div><div class="form-group">
           <label for="Description">Services Description:</label>
           <textarea class="form-control" rows="3" id="comment" placeholder="What kind services you provide in any events. Write Here...."name="comment3"></textarea>
      </div>
      <div class="form-group">
           <label for="uploadpic">Upload Your Photography Studio Picture </label>
           <input type="file" class="form-control" id="uploadpic3" >
           <br>
           <button type="button" class="btn btn-success btn-lg btn-block" id="register_studio">Submit
                  </button>
         </div>
         </form>
        </div>
       
              </div> 

    
              </div> 
                      
        </div>
        </div>
      </div>
      </div>


    </div>
 
<script src="https://code.jquery.com/jquery-3.3.1.min.js"integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){

      jQuery.validator.addMethod("alpha", function(value, element) { 
            return this.optional(element) || /^[a-zA-Z ]*$/.test(value)
        
      },"Alphabets and space like ram rajput only");
  
    $("#guesthouse_form").validate({//("^[a-zA-Z]+$")
      
      rules:{
        guesthouse_name:{
          required: true,
          alpha:true,
          minlength:5
        },
        address1:{
          required:true,
          minlength:5
        },
        city1:{
          required:true,
          alpha:true,
        },
        pincode1:{
          required: true,
          number:true,
            minlength:6,
            maxlength:6
        },
        '.comment1':{
          required:true,
          lettersonly:true,
          minlength:10
        },
        
      },
      messages:{
        guesthouse_name:{
          required:"Name is required.... Please fill it",
          minlength:"Please Enter five characters minimum"

        },

        address1:{
          required:"Address is required.... Please fill it",
          minlength:"Please Enter five characters minimum"

        },
        city1:{
          required:"City or District is required.... Please fill it",
          minlength:"Please Enter five characters minimum"

        },
        
        pincode1:{
          required:"Please Enter your Pincode or Postal number",
          number:"Enter only numbers 123456",
          minlength:" Enter minimum 6 numbers digit",
          maxlength:"Enter maximum only 6 numbers digit"
        },
        

       
 

      }
    });

   
    jQuery.validator.setDefaults({
        debug: true,
        success: "valid"
      });
    });
      
 /*   $( "#guesthouse_register" ).click(function(event) {
         var form = $( "#guesthouse_form" );
         if(form.valid()){
          var form_data = $('guesthouse_form').serialize();
          $.ajax({ 
              url:'action.php',
              method: 'post',
              data: form_data + '&action=register'
          }).done(function(result){
            $('.alert').show();
            $('#result').html(result);
            
          })

        }else{
          $('.alert').show();
          $('#result').html("form not validate please validate first");
        }

      });*/
    
   
    </script>

 </body>
 </html>