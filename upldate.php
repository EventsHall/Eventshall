<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="assets/css/home.css">
<style>
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color:black;
  padding: 2px 16px;
  color: #1B7C7E;
  font-family:Times New Roman;

}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
.table{width:100%; background-color: #1B7C7E;  }
th, td{ padding:15px;height: 50px; text-align: left;}
th{font-color:#00000;}
td{font-size: 20px; font-family: Times New Roman; color:white;}
tr:hover{background-color:green}
.blink{
    font-size: 40px;
    color: rgb(0, 137, 226);
    
    animation: blink 2s infinite;
   }
   
  @keyframes .blink {
    from {
        color:green;
    }
    to {
        color:white;
    }
}
   
   @keyframes blink{
    0%{opacity: 1;}
    75%{opacity: 1;}
    76%{ opacity: 0;}
    100%{opacity: 0;}
   }
   .btn{

   }
</style>

<body>


<div class="container" >
  <div class="mySlides">
    <div class="numbertext">1 / 10</div>
    <img src="assets/images/guesthouse.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 10</div>
    <img src="assets/images/catering.png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 10</div>
    <img src="assets/images/photostudio.png" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 10</div>
    <img src="assetsimages/guesthouse.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 10</div>
    <img src="assets/images/photostudio.png" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 10</div>
    <img src="assets/images/catering.png" style="width:100%">
  </div>
  <div class="mySlides">
    <div class="numbertext">7 / 10</div>
    <img src="assets/images/catering.png" style="width:100%">
  </div>
  <div class="mySlides">
    <div class="numbertext">8 / 10</div>
    <img src="assets/images/guesthouse.jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <div class="numbertext">9 /10</div>
    <img src="assets/images/photostudio.png" style="width:100%">
  </div>
  <div class="mySlides">
    <div class="numbertext">10/10</div>
    <img src="assets/images/catering.png" style="width:100%">
  </div>
   
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>
<div class="container">
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="assets/images/guesthouse.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/images/catering.png" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/images/photostudio.png" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/images/guesthouse.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/images/photostudio.png" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
    </div>    
    <div class="column">
      <img class="demo cursor" src="assets/images/catering.png" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
    </div>
  </div>
    <div class="row">
    <div class="column">
      <img class="demo cursor" src="assets/images/catering.png" style="width:100%" onclick="currentSlide(7)" alt="Snowy Mountains">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/images/guesthouse.jpg" style="width:100%" onclick="currentSlide(8)" alt="Snowy Mountains">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/images/photostudio.png" style="width:100%" onclick="currentSlide(9)" alt="Snowy Mountains">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/images/catering.png" style="width:100%" onclick="currentSlide(10)" alt="Snowy Mountains">
    </div>
  </div>
</div>
</div>
<br>
<div class="col-sm-4 col-md-8 col-lg-12">
<h1 style=" color: #1B7C7E; text-align: center; font-family: Times New Roman;background-color: black"> Related Information below:-</h1>
</div>
<br>
<br>
<div class="container" id="table">
  <div class="row">
    <div class="col-lg-12 col-md-8 col-sm-4">
  
  <table class="table table-responsive"  >
    <tr>
      <th>Name:</th>
      <td><p>Dev Palace</p><button class="btn btn-md btn-danger" style="width:100px;height: 40px;">Update</button><button class="btn btn-md btn-danger "style=" width:100px;height: 40px;margin-left: 20px;">Ok</button></td></td>
    </tr>
    <tr>
      <th>Owner or Manager Name:</th>
      <td><p>Vinod Kumar Verma</p><button class="btn btn-md btn-danger" style="width:100px;height: 40px;">Update</button><button class="btn btn-md btn-danger "style=" width:100px;height: 40px;margin-left: 20px;">Ok</button></td>
    </tr>
    <tr>
      <th>Address:</th>
      <td><p>228 EWS Gunjan Vihar Karrahi</p><button class="btn btn-md btn-danger" style="width:100px;height: 40px;">Update</button><button class="btn btn-md btn-danger "style=" width:100px;height: 40px;margin-left: 20px;">Ok</button></td>
    </tr>
    <tr>
      <th>Pincode:</th>
      <td><p>208027</p><button class="btn btn-md btn-danger" style="width:100px;height: 40px;">Update</button><button class="btn btn-md btn-danger "style=" width:100px;height: 40px;margin-left: 20px;">Ok</button></td>
    </tr>
    <tr>
      <th>City Or District:</th>
      <p><td>Kanpur</p><button class="btn btn-md btn-danger" style="width:100px;height: 40px;">Update</button><button class="btn btn-md btn-danger "style=" width:100px;height: 40px;margin-left: 20px;">Ok</button></td></td>
    </tr>
    <tr>
      <th>State :</th>
      <td><p>Uttar Pradesh</p><button class="btn btn-md btn-danger" style="width:100px;height: 40px;">Update</button><button class="btn btn-md btn-danger "style=" width:100px;height: 40px;margin-left: 20px;">Ok</button></td></td>
    </tr>
    <tr>
      <th>Contact Number:</th>
      <p><td>8090587674</p><button class="btn btn-md btn-danger" style="width:100px;height: 40px;">Update</button><button class="btn btn-md btn-danger "style=" width:100px;height: 40px;margin-left: 20px;">Ok</button></td></td>
    </tr>
    <tr>
      <th>Website:</th>
      <td><p><a href="#" style="text-decoration: none; color: red; background-color: black">www.landmarkhotel.com</a></p><button class="btn btn-md btn-danger" style="width:100px;height: 40px;">Update</button><button class="btn btn-md btn-danger "style=" width:100px;height: 40px;margin-left: 20px;">Ok</button></td></td>
    </tr>
    <tr>
      <th>Email Id:</th>
      <td><p>vinodverma150791@gmail.com</p><button class="btn btn-md btn-danger" style="width:100px;height: 40px;">Update</button><button class="btn btn-md btn-danger "style=" width:100px;height: 40px;margin-left: 20px;">Ok</button></td></td>
    </tr>
    <tr>
      <th>Faciality & Services:</th>
      <td><p style="text-align: justify-all;">We are providin good services like best AC Non Ac hall. Dj sound Service, good staff and big parking.</p><button class="btn btn-md btn-danger" style="width:100px;height: 40px;">Update</button><button class="btn btn-md btn-danger "style=" width:100px;height: 40px;margin-left: 20px;">Ok</button></td></td>
    </tr>
    <tr>
      <th>Change Password:</th>
      <td><p style="">123456789</p><button class="btn btn-md btn-danger" style="width:100px;height: 40px;">Update</button><button class="btn btn-md btn-danger "style=" width:100px;height: 40px;margin-left: 20px;">Ok</button></td></td>
    </tr>
    <tr>
      <th>Confirm Password:</th>
      <td><p style="">123456789</p><button class="btn btn-md btn-danger" style="width:100px;height: 40px;">Update</button><button class="btn btn-md btn-danger "style=" width:100px;height: 40px;margin-left: 20px;">Ok</button></td></td>
    </tr>
    <tr><button class="btn btn-lg btn-danger">Submit</button></tr>
    
  </table>

</div>
</div>
  
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    <br>
    <br>
    <footer class="container-fluid text-center">
  <p>&copy;All Copy right www.EventsHall.com 2018-2019</p>
</footer>
</body>
</html>
