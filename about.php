<?php
    session_start();
      if((time()-$_SESSION['timestamp']) > 180){
        header("Location: expire.php");
      }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Wedding Planner</title>
    <link rel="icon" href="icon/ba.jpg">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
        ::placeholder{
          color: rgba(255,192,203,0.3);
        }
        :focus::placeholder {
          color: transparent;
        }
        *:focus{
          outline: none;
        }
        body{
          user-select: none;
          background:linear-gradient(rgba(0,0,0,.7),rgba(0,0,0,0.7)), url(icon/wedbg.png) center center /cover;
          height: 100vh;
          font-size: 18px;
          text-align: center;
          margin: 0%;
          font-family: Arial;
          min-width:600px;
        }
        #div1{
          /* background-color:rgba(0, 0, 0, 0.6); */
          height: 100%;
          width: 100%;
          font-size:20px;
        }
        #menu{
          background: linear-gradient(to right, pink , #ff8093);
          height: 80px;
          text-align: left;
          position: fixed;
          top:0%;
          width: 100%;
        }
        footer{
          background: linear-gradient(to right, pink , #ff8093);
          height: 80px;
          position:relative;
          bottom:0%; 
          padding-top:10px; 
          padding-bottom:70px;
        }
        footer i{
            margin-right: 10px;
            margin-left: 10px;
        }
        #fadeshow1{
          display: inline-block; 
          position: relative;
          bottom: 20px;
        }
        @media only screen and (max-width: 700px) { 
          #fadeshow1 { 
            display: none; 
          } 
        }
        a:link,a:visited{
          margin: 10px;
          text-decoration: none;
          color: black;
        }
        a:hover{
           color: violet;
         }
         a:link#a1, a:visited#a1{
           color: white;
           text-decoration: underline;
         }
         a:hover#a1{
           color: pink;
         }
         #divcen{
           color: white;
           text-shadow: 2px 2px 2px black;
           padding-top: 300px;
         }
         input{
          border: 0px solid pink;
          border-bottom: 3px solid pink;
          background: transparent;
          color: pink;
          width:300px;
          height:40px;
          font-size: 20px;
          margin: -2px;
          padding: 10px;
         }
         #button{
          background-color: pink;
          color: pink;
          border: 0px solid gray;
          padding: 5px;
          height: 40px;
          width: 100px;
          font-size: 20px;
          margin: 20px;
         }
         #img1{
          text-align: left; 
          background-color: white; 
          height: 400px; 
          width: 500px; 
          margin: 20px;
          display: inline-block;
         }
         #img2{
          text-align: left; 
          background-color: white; 
          height: 160px; 
          width: 500px; 
          margin: 40px;
          margin-top: 0px;
         }
         #chinna{
          display: inline-block;
         }
         #chinna2{
           display: inline-block;
         }
         #button{
            border:2px solid pink;
            padding:5px 20px;
            background:linear-gradient(pink,pink) center/100% 0px no-repeat;
            transition:0.2s all linear;
          }
          #button:hover {
            background-size:100% 100%;
            color: black;
          }
          video{
            height: 100%;
            width: 100%;
            position: relative;
          }
          input:-webkit-autofill,
          input:-webkit-autofill:hover,
          input:-webkit-autofill:focus,
          input:-webkit-autofill:active {
              -webkit-animation: autofill 0s forwards;
              animation: autofill 0s forwards;
          }
          @keyframes autofill {
              100% {
                  background: transparent;
                  color: pink;
              }
          }
          @-webkit-keyframes autofill {
              100% {
                  background: transparent;
                  color: pink;
              }
          }
          /* #heart{
            position: relative;
            width: 100%;
            height: 100%;
            background: #fff url(icon/heart.svg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100px;
          } */
      </style>

      <script>
      function suggestion(){
        var p1=/^ph/;
        var p2=/^br/;
        var p3=/^ho/;
        var p4=/^me/;
        var p5=/^ca/;
        var p6=/^ma/;
        var p7=/^de/;
        var p8=/^mu/;
        var p9=/^ba/;
        var p10=/^ch/;
        var service = document.getElementById("service");
        var city = document.getElementById("city");
        if(service.value == "" && city.value == ""){
          document.getElementById("suggestion").innerHTML = "No Match Found. <a href='services.php'>Click</a>for specified search";
        }
        else{
            if (service.value.match(p1)){
              document.getElementById("suggestion").innerHTML = "SUGGESTIONS:  <a href='booking.php'>Sohum</a>, <a href='booking.php'>Aaryan Photo</a>";
            }
            if (service.value.match(p2)){
              document.getElementById("suggestion").innerHTML = "SUGGESTIONS:  <a href='booking.php'>Jeevan Glam</a>, <a href='booking.php'>Amantran</a>";
            }
            if (service.value.match(p3)){
              document.getElementById("suggestion").innerHTML = "SUGGESTIONS:  <a href='booking.php'>Niharika</a>, <a href='booking.php'>Desi</a>";
            }
            if (service.value.match(p4)){
              document.getElementById("suggestion").innerHTML = "SUGGESTIONS:  <a href='booking.php'>Srishenna</a>";
            }
            if (service.value.match(p5)){
              document.getElementById("suggestion").innerHTML = "SUGGESTIONS:  <a href='booking.php'>Core Designs</a>";
            }
            if (service.value.match(p6)){
              document.getElementById("suggestion").innerHTML = "SUGGESTIONS:  <a href='booking.php'>UnboxBeauty</a>, <a href='booking.php'>Looks Matter</a>";
            }
            if (city.value.match(p7)){
              document.getElementById("suggestion").innerHTML = "SUGGESTIONS:  <a href='booking.php'>Arcscope</a>, <a href='booking.php'>Amantran</a>, <a href='booking.php'>UnboxBeauty</a>";
            }
            if (city.value.match(p8)){
              document.getElementById("suggestion").innerHTML = "SUGGESTIONS:  <a href='booking.php'>Sohum</a>, <a href='booking.php'>Jeevan Glam</a>,";
            }
            if (city.value.match(p9)){
              document.getElementById("suggestion").innerHTML = "SUGGESTIONS:  <a href='booking.php'>Desi</a>, <a href='booking.php'>Looks Matter</a>";
            }
            if (city.value.match(p10)){
              document.getElementById("suggestion").innerHTML = "SUGGESTIONS:  <a href='booking.php'>Aaryan Photo</a>, <a href='booking.php'>Niharika</a>, <a href='booking.php'>Core Designs</a>";
            }
            if (service.value.match(p1) && city.value.match(p7)){
              document.getElementById("suggestion").innerHTML = "SUGGESTIONS:  <a href='booking.php'>Sohum</a>";
            }
            if (service.value.match(p2) && city.value.match(p8)){
              document.getElementById("suggestion").innerHTML = "SUGGESTIONS:  <a href='booking.php'>Jeevan Glam</a>";
            }
         }
      }
      </script>
    </head>
    <body>
      <form action="">
        
      <div id="menu">
        <div style="float: right; margin: 25px;">
          <a href="about.php" style="color:white"><big>About</big></a>
          <a href="services.php">Home</a>
          <a href="booking.php">Booking</a>
          <a href="index.php"  onclick="return confirm('Are you sure to logout?');">Logout</a>
        </div>
        <img style="padding:15px;display: inline-block; position:relative;top:5px;" src="icon/ba.jpg" width="30px" alt="">
        <h3 id="fadeshow1" >BRIDAL ARC</h3>
      </div>

      <div>
        <video src="icon/videoplayback.mp4" autoplay muted loop></video>
        <!-- <div id="heart"></div> -->
      </div>
      

      <div id="div1">
        <div id="divcen">
          <h1>The Best way of Wedding Planning</h1>
          <p>Search for the Trusted Wedding Vendors</p>
        </div>
        <div>
          <input type="search" placeholder="Wedding Photographers" id="service">&nbsp;OR&nbsp;
          <input type="search" placeholder="Delhi NCR" id="city">
          <input type="button" value="FIND" id="button" onclick="return suggestion()">
          <div id="suggestion"></div>
        </div>
        <div style="margin-top: 10%;">
          <!-- <a id="a1" href="services.php">Search for Vendors</a> -->
        </div>

        <script type="text/javascript">
            let video = document.querySelector('video');
            window.addEventListener('scroll',function(){
              let value = 1+window.scrollY/-600;
              video.style.opacity = value;
            })
        </script>

        <!--<div style="margin-top: 5%;">
          <hr width="40%" style="float: right; border: 3px solid black;" >
          <hr width="40%" style="float: left; border: 3px solid black;">
          <p style="font-weight: bold;">LATEST POST</p>
        </div>
        <div  id="img1">
          <img src="icon/w1.jpg" alt="" style="width: 480px; height: 270px; margin: 10px;">
          <h3 style="margin: 10px; font-weight:500;">#Guidebook: Style gracefully with this trend</h3>
          <p style="margin: 10px; color: gray; margin-top: 25px;">Rashmi Jayara, 06 JAN 2020</p>    
        </div>

        <div id="chinna">
          <div id="img2">
            <div style=" display: inline-block;"><img src="icon/makeup.jpg" alt="" style="width: 100px; height: 100px; margin: 10px;"></div>
            <div style="display: inline-block;">
            <h3 style="margin: 10px; font-weight:500;">#ShineBright: Latest Neon Outfit <br> for Brides & Bridesmaids</h3>
            <p style="margin: 10px; color: gray; margin-top: 25px;">Shivani Singh, 11 FEB 2020</p>
            </div>   
          </div>
          <div id="img2">
            <div style=" display: inline-block;"><img src="icon/f3.jpg" alt="" style="width: 100px; height: 100px; margin: 10px;"></div>
            <div style="display: inline-block;">
            <h3 style="margin: 10px; font-weight:500;">#12 Hacks to maintain <br> your Kanjeevaram Saree</h3>
            <p style="margin: 10px; color: gray; margin-top: 25px;">Chandni Kumar, 10 FEB 2020</p>
            </div>   
            <br><br>
          </div>
        </div>

        <div id="chinna2">
            <div id="img2">
              <div style=" display: inline-block;"><img src="icon/f2.jpg" alt="" style="width: 100px; height: 100px; margin: 10px;"></div>
              <div style="display: inline-block;">
              <h3 style="margin: 10px; font-weight:500;">Television Actress Kamya <br> & Shalabh Dang #Just Married</h3>
              <p style="margin: 10px; color: gray; margin-top: 25px;">Rashmi Jayara, 10 FEB 2020</p>
              </div>   
            </div>
            <div id="img2">
              <div style=" display: inline-block;"><img src="icon/f1.jpg" alt="" style="width: 100px; height: 100px; margin: 10px;"></div>
              <div style="display: inline-block;">
              <h3 style="margin: 10px; font-weight:500;">Step by Step: Makeup Tutorial <br> for Pre & Post Wedding</h3>
              <p style="margin: 10px; color: gray; margin-top: 25px;">Shivani Kumar, 07 FEB 2020</p>
              </div>   
            <br><br>
            </div>
        </div>

          <div  id="img1">
            <img src="icon/w3.jpg" alt="" style="width: 480px; height: 270px; margin: 10px;">
            <h3 style="margin: 10px; font-weight:500;">Looking To Jazz up your Wedding Menu?</h3>
            <p style="margin: 10px; color: gray; margin-top: 25px;">Priyanka Singh, 06 FEB 2020</p>    
          </div> -->
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
    </body>
  </html>
