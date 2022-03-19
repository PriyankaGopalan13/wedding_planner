<?php
      session_start();
        if((time()-$_SESSION['timestamp']) > 180){
          header("Location: expire.php");
        }
?>

<?php
  if(isset($_POST['vendor'])){
    header("Location: booking.php");
    $_SESSION['vendor']=$_POST['vendor'];
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Wedding Planner</title>
    <link rel="icon" href="icon/ba.jpg">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="script.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <style>
      ::-webkit-scrollbar {
        display: none;
      }
      /* cursor types */
      html{
        cursor:url(icon/heart.cur), auto;
      }
      input{
        cursor:url(icon/text.cur), auto;
      }
      a,#button,select{
        cursor:url(icon/heart2.cur), auto;
      }
      *:focus{
          outline: none;
        }
      html{
        scroll-behavior: smooth;
      }
      body{
        user-select: none;
        background:linear-gradient(rgba(0,0,0,.4),rgba(0,0,0,0.3)), url(icon/wedbg.png) center center /cover;
        height: 100vh;
        margin: 0%;
        font-family: Arial;
        font-size: 18px;
        min-width:600px;
      }
      #div1{
        background-color:rgba(0, 0, 0, 0.6);
        height: 100%;
        width: 100%;
        font-size:20px;
        padding-bottom: 10px;
      }
      #menu{
        background: linear-gradient(to right, pink , #ff8093);
        height: 80px;
        position: fixed;
        top:0%;
        width: 100%;
        z-index: 1;
      }
      footer{
        background: linear-gradient(to right, pink , #ff8093);
        height: 80px;
        position:relative;
        bottom:0%; 
        padding-top:10px; 
        padding-bottom:70px;
        text-align: center;
      }
      footer i{
            margin-right: 10px;
            margin-left: 10px;
        }
      #fadeshow1{
        display: inline-block; 
        position: relative;
        bottom: 20px;
        color:black;
      }
      @media only screen and (max-width: 700px) { 
        #fadeshow1 { 
          display: none; 
        } 
      }
      #maindiv{
        padding-top: 150px;
      }
      #vendor{
        padding-left: 50px;
      }
      #sticky{
        position: sticky; 
        top:10%;
        z-index: 1;
      }
      #div2{
        text-align: center;
        background-color: rgba(191, 63, 127, 0.4);
        color:black;
        padding:20px;
        margin: 40px;
        margin-left: 170px;
        margin-right: 170px;
      }
      #sma{
        text-align: center;
        display:inline-block;
        width:135px;
        margin:20px;
      }
      #button,#myBtn{
        background-color: pink;
        color: pink;
        border: 0px solid gray;
        padding: 5px;
        height: 60px;
        width: 100px;
        font-size: 20px;
        margin: 20px;
      }
      select{
        border:2px solid pink;
        width:400px;
        height:60px;
        font-size: 20px;
        margin: 20px;
        color: pink;
        background: transparent;
      }
      select option{
        background: pink;
        color: black;
      }
      .fig{
        display: inline-block;
        margin: 10px;
        margin-top: 0px;
        background-color: rgba(255,255, 255, 0.7);
        width: 300px;
        height: 200px;
        text-align: center;
      }
      .fig input[type=submit]{
        background-color: pink;
        border: 1px solid gray;
        padding: 5px;
        visibility: hidden;
      }
      .fig:hover{
        transform:scale(1.3);
        transition: 0.2s;
        cursor:url(icon/heart2.cur), auto;
      }
      #venlabel{
        position:relative; 
        bottom: 60px; 
        background-color:rgba(0, 0, 0, 0.9); 
        color:white; 
        padding:10px;
        font-size: 25px;
      }
      h3{
        color:white;
      }
      a:link,a:visited{
        margin: 10px;
        text-decoration: none;
        color: black;
      }
      a:hover{
         color: violet;
       }
      .glow {
        color: #fff;
        animation: glow 1s ease-in-out infinite alternate;
      }

      @keyframes glow {
        from {
          text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
        }
        to {
          text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
        }
      }
      #button,#myBtn{
        border:2px solid pink;
        padding:5px 20px;
        background:linear-gradient(pink,pink) center/100% 0px no-repeat;
        transition:0.2s all linear;
      }
      #button:hover,#myBtn:hover{
        background-size:100% 100%;
        color: black;
      }
      #myBtn{
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        cursor:url(icon/heart2.cur), auto;
      }
      .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 30px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
      }
      .closebtn:hover {
        color: black;
      }

    </style>
  <body>
    <form action="" name="plan" method="post">
    <div id="div1">
        <div id="menu">
          <div style="float: right; margin: 25px;">
            <a href="about.php">About</a>
            <a href="services.php" style="color:white"><big>Home</big></a>
            <a href="booking.php">Booking</a>
            <a href="index.php" onclick="return confirm('Are you sure to logout?');">Logout</a>
          </div>
          <img style="padding:15px;display: inline-block; position:relative;top:5px;" src="icon/ba.jpg" width="30px" alt="">
          <h3 id="fadeshow1">BRIDAL ARC</h3>
        </div>
     <div id="maindiv">
     <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
      <div align="center" id="sticky" >
        <select name="service">
          <option value="default" disabled selected>--Select Service--</option>
          <option value="photo">Wedding Photographers</option>
          <option value="bridal">Bridal Designers</option>
          <option value="hotel">Hotel Management</option>
          <option value="mehandi">Mehandi Artist</option>
          <option value="cards">Wedding Invitation</option>
          <option value="makeup">Makeup Artists</option>
        </select>
        <select name="city">
          <option value="default" disabled selected>--Select City--</option>
          <option value="delhi">Delhi</option>
          <option value="mumbai">Mumbai</option>
          <option value="banglore">Banglore</option>
          <option value="chennai">Chennai</option>
          <option value="others">Others</option>
        </select>
        <input type="submit" value="FIND" id="button" onclick="return val1()">
        <input type="button" value="CLEAR" id="button" onclick="return val2()">
      </div>

      <!-- <script>
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
          var currentScrollPos = window.pageYOffset;
          if (prevScrollpos > currentScrollPos) {
            document.getElementById("sticky").style.top = "10%";
          } else {
            document.getElementById("sticky").style.top = "-60%";
          }
          prevScrollpos = currentScrollPos;
        }
      </script> -->

      <div id="div2">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <h2>Book a vendor in simple steps</h2>
        <div id="sma">1. Search for the services required</div>
        <div id="sma">2. See the reviews <br> <br></div>
        <div id="sma">3. Book the Best Vendor <br><br></div>
      </div>

     <div id="vendor">
      <?php
          $con=mysqli_connect("localhost", "root", "","wedding_planner");
          $query = mysqli_query($con, "SELECT * from vendors ORDER BY timestamp DESC LIMIT 1");
          while($row = mysqli_fetch_array($query)){
              $name = $row['name'];
              $star="4.5";
              echo ("<h3 class='glow'>New Vendor</h3>");
              echo ("<label><div class='fig'>
                      <img src='icon/p0.jpg' style='width:100%; height:100%;'>
                      <p id='venlabel'>$name</p>
                      <input type='submit' value='$name' name='vendor'></label>
                      </div>");
          }
      ?>

      <h3>Wedding Photographers</h3>
      <label><div class="fig" id="photodelhi">
        <img src="icon/p1.jpg" style="width:100%; height:100%;">
        <p id="venlabel">Sohum Creations</p>
        <input type="submit" value="Sohum Creations" name="vendor"></div></label>
      
      <label><div class="fig" id="photomumbai">
        <img src="icon/p2.jpg" style="width:100%; height:100%;">
        <p id="venlabel">Aaryan Photos</p>
        <input type="submit" value="Aaryan Photos" name="vendor"></div></label>
      
      <label><div class="fig"  id="photochennai">
        <img src="icon/p3.jpg" style="width:100%; height:100%;">
        <p id="venlabel">Angle Pictures</p>
        <input type="submit" value="Angle Pictures" name="vendor"></div></label>
      
      <h3>Bridal Designers</h3>
      <label><div class="fig"  id="bridalmumbai">
        <img src="icon/d1.jpg" style="width:100%; height:100%;">
        <p id="venlabel">Jeevan Glam</p>
        <input type="submit" value="Jeevan Glam" name="vendor"></div></label>
      
      <label><div class="fig" id="bridalchennai">
        <img src="icon/d2.jpg" style="width:100%; height:100%;">
        <p id="venlabel">Amantran Weds</p>
        <input type="submit" value="Amantran Weds" name="vendor"></div></label>
      
      <h3>Hotel Management</h3>
      <label><div class="fig" id="hotelchennai">
        <img src="icon/h1.jpg" style="width:100%; height:100%;">
        <p id="venlabel">Niharika</p>
        <input type="submit" value="Niharika" name="vendor"></div></label>
      
      <label><div class="fig" id="hoteldelhi">
        <img src="icon/h2.jpg" style="width:100%; height:100%;">
        <p id="venlabel">Desi Culture</p>
        <input type="submit" value="Desi Culture" name="vendor"></div></label>
      
      <h3>Mehandi Artist</h3>
      <label><div class="fig" id="mehandibanglore">
        <img src="icon/m1.jpg" style="width:100%; height:100%;">
        <p id="venlabel">Srishenna Mehandi</p>
        <input type="submit" value="Srishenna Mehandi" name="vendor"></div></label>
      
      <h3>Wedding Invitation</h3>
      <label><div class="fig" id="cardsdelhi">
        <img src="icon/c1.jpg" style="width:100%; height:100%;">
        <p id="venlabel">Core Designs</p>
        <input type="submit" value="Core Designs" name="vendor"></div></label>
      
      <h3>Makeup Artist</h3>
      <label><div class="fig" id="makeupmumbai">
        <img src="icon/k1.jpg" style="width:100%; height:100%;">
        <p id="venlabel">Unboxbeauty</p>
        <input type="submit" value="Unboxbeauty" name="vendor"></div></label>
      
      <label><div class="fig" id="makeupbanglore">
        <img src="icon/k2.jpg" style="width:100%; height:100%;">
        <p id="venlabel">Looks Matter</p>
        <input type="submit" value="Looks Matter" name="vendor"></div></label>
     </div>
     </div>
    </div>
    <footer>
      <p align="center">with love and support</p>
      <h2 align="center">BridalArc</h2>
      <i class="fa fa-facebook-square" aria-hidden="true"></i>
      <i class="fa fa-twitter" aria-hidden="true"></i>
      <i class="fa fa-instagram" aria-hidden="true"></i>
      <i class="fa fa-youtube-play" aria-hidden="true"></i>
      <i class="fa fa-pinterest" aria-hidden="true"></i>
    </footer>
    </form>

    <script>
      var mybutton = document.getElementById("myBtn");
      window.onscroll = function() {scrollFunction()};
      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

  </body>
  </html>
