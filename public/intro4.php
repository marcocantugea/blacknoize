<!DOCTYPE html>
<!--
Copyright (C) 2016 MarcoCantu

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->
<?php
    
    $globalpath= $config->domain."/".$config->pathServer;
?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
  <meta http-equiv="Content-Language" content="en" />
  <meta name="distribution" content="global"/>
  <meta name="Keywords" content="black,noize,rock,band,dirty,popular,rock band,metal band,music,pop,black noize,love,dirty love,strip,zombies,zombie hunter"/>
  <meta name="Robots" content="all"/>
  <meta name="description" content="Black Noize introduction into to the official web site, Dirty Love intro" />
  <title> Welcome to our web site | introduction Dirty Love</title>
  <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EDGE" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
  <script src="bootstrap\jquery\jquery-2.1.4.min.js"></script>
  <script src="bootstrap\js\bootstrap.min.js"></script>
  <!--<link href="Content\Site.css" rel="stylesheet" media="only screen and (min-width: 900px) ">-->
  <style>
      body{
        background: black;
     }
      button{
        background-color: darkred;
        color: white;

      }
      #intro3-main-container{
          width: 100%; 
          text-align:center;
      }
      #intro3-content-div{
          display: inline-block;
          padding: 30px;
          margin-top: 2%; 
          width: 1000px; 
          height: 590px;  
          background-image: url('images/black_noize_diry_love_backgournd_intro_2.jpg'); 
          background-size: 90%; 
          background-position-x: 50%;
          background-repeat: no-repeat;
          //border: gold solid thick;
      }
      #intro3-content-div video{
           //border: greenyellow solid thick;
           width: 80%;
           height: 400px;
           //margin-left: 500px;
           margin-top: 15%;
      }
      #intro3-buton-div{
          width: 100%; 
          text-align: center;
          //border: gold solid thick;
      }
      
      
  </style>
</head>
<body >
<div id="intro3-main-container">
<div id="intro3-content-div">
    <video id="video" controls="off" autoplay="on"  onended="HomeMenu();" >
            <source src="./media/black_noize_dirty_love_video_promo.mp4" type="video/mp4">
          Your browser does not support the video tag.
         </video>    
</div>
</div>
<div id="intro3-buton-div">
            <button id="endintro"> Saltar Intro </button>
</div>
    <script type="text/javascript">
     $("#endintro").click(function(){
         document.location.href="index.php";
     });
     
     document.getElementById('video').addEventListener('ended',function(){
        document.location.href="index.php";
        }, false);
     
    </script>
</body>
</html>