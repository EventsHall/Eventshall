<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="assets/css/home.css">
  <link rel="stylesheet" type="text/css" href="assets/css/updatepage_style.css">

<body>
<h2 class="blink" id="top_heading" style="">Gallary Picture</h2>  
</div><br><br>
<div class="container" >
  <div class="mySlides">
    <div class="numbertext">1 / 10</div>
    <img src="assets/images/marriagehall.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 10</div>
    <img src="assets/images/marriagehall2.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 10</div>
    <img src="assets/images/marriagehall3.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 10</div>
    <img src="assets/images/marriagehall4.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 10</div>
    <img src="assets/images/marriagehall5.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 10</div>
    <img src="assets/images/marriagehall6.jpg" style="width:100%">
  </div>

<div class="row">
  <div class="mySlides">
    <div class="numbertext">7 / 10</div>
    <img src="assets/images/marriagehall7.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">8 / 10</div>
    <img src="assets/images/marriagehall8.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">9 /10</div>
    <img src="assets/images/marriagehall12.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">10/10</div>
    <img src="assets/images/marriagehall10.jpg" style="width:100%">
  </div>
</div>
   
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>
<div class="row">
  
    <div class="column">
      <img class="demo cursor" src="assets/images/marriagehall.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/images/marriagehall2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/images/marriagehall3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/images/marriagehall4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/images/marriagehall5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
    </div>    
    <div class="column">
      <img class="demo cursor" src="assets/images/marriagehall6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
    
  </div>
    <div class="row" id="gallaryarea">
    <div class="column">
      <img class="demo cursor" src="assets/images/marriagehall7.jpg" style="width:100%" onclick="currentSlide(7)" alt="Snowy Mountains">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/images/marriagehall8.jpg" style="width:100%" onclick="currentSlide(8)" alt="Snowy Mountains">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/images/marriagehall12.jpg" style="width:100%" onclick="currentSlide(9)" alt="Snowy Mountains">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/images/marriagehall10.jpg" style="width:100%" onclick="currentSlide(10)" alt="Snowy Mountains">
    </div>
  </div>
</div>
</div>
<br>
<div class="col-sm-4 col-md-8 col-lg-12">
<h1 id="mid_heading"> Related Information below:-</h1>
</div>
<br>
<br>
<div class="container" id="table">
  <div class="row">
    <div class="col-lg-12 ">
  
  <table class="table table-responsive"  >
    <tr>
      <th>Name:</th>
      <td><p>Dev Palace</p><button id="update_btn" class="btn btn-md btn-danger">Update</button><button class="btn btn-md btn-danger "style=" ">Ok</button></td></td>
    </tr>
    <tr>
      <th>Owner or Manager Name:</th>
      <td><p>Vinod Kumar Verma</p><button id="update_btn" class="btn btn-md btn-danger">Update</button><button class="btn btn-md btn-danger ">Ok</button></td>
    </tr>
    <tr>
      <th>Address:</th>
      <td><p>228 EWS Gunjan Vihar Karrahi</p><button id="update_btn" class="btn btn-md btn-danger">Update</button><button class="btn btn-md btn-danger ">Ok</button></td>
    </tr>
    <tr>
      <th>Pincode:</th>
      <td><p>208027</p><button id="update_btn" class="btn btn-md btn-danger">Update</button><button class="btn btn-md btn-danger ">Ok</button></td>
    </tr>
    <tr>
      <th>City Or District:</th>
      <p><td>Kanpur</p><button id="update_btn" class="btn btn-md btn-danger">Update</button><button class="btn btn-md btn-danger "">Ok</button></td></td>
    </tr>
    <tr>
      <th>State :</th>
      <td><p>Uttar Pradesh</p><button id="update_btn" class="btn btn-md btn-danger">Update</button><button class="btn btn-md btn-danger ">Ok</button></td></td>
    </tr>
    <tr>
      <th>Contact Number:</th>
      <p><td>8090587674</p><button id="update_btn" class="btn btn-md btn-danger">Update</button><button class="btn btn-md btn-danger ">Ok</button></td></td>
    </tr>
    <tr>
      <th>Website:</th>
      <td><p><a id="url_website" href="#">www.landmarkhotel.com</a></p><button id="update_btn" class="btn btn-md btn-danger">Update</button><button class="btn btn-md btn-danger">Ok</button></td></td>
    </tr>
    <tr>
      <th>Email Id:</th>
      <td><p>vinodverma150791@gmail.com</p><button id="update_btn" class="btn btn-md btn-danger">Update</button><button class="btn btn-md btn-danger ">Ok</button></td></td>
    </tr>
    <tr>
      <th>Faciality & Services:</th>
      <td><p style="text-align: justify-all;">We are providin good services like best AC Non Ac hall. Dj sound Service, good staff and big parking.</p><button id="update_btn" class="btn btn-md btn-danger">Update</button><button class="btn btn-md btn-danger ">Ok</button></td></td>
    </tr>
    <tr>
      <th>Change Password:</th>
      <td><p style="">123456789</p><button id="update_btn" class="btn btn-md btn-danger">Update</button><button class="btn btn-md btn-danger ">Ok</button></td></td>
    </tr>
    <tr>
      <th>Confirm Password:</th>
      <td><p style="">123456789</p><button id="update_btn" class="btn btn-md btn-danger">Update</button><button class="btn btn-md btn-danger ">Ok</button></td></td>
    </tr>
    <tr>
  </table>

</div>
</div>
  
</div>

<script>

</script>
    <br>
    <br>
    <footer class="container-fluid text-center">
  <p>&copy;All Copy right www.EventsHall.com 2018-2019</p>
  <div class="col-lg-12">
  <button  class="btn btn-danger btn-md glyphicon glyphicon-off"> SignOut</button>
  <button  class="btn btn-danger btn-md glyphicon glyphicon-pencil " > Update</button>
  <button id ="submit"class="btn btn-md btn-danger">Submit</button></tr>
    
</footer>
<script src="assets/js/userfinalpage.js" type="text/javascript"></script>
</body>
</html>
