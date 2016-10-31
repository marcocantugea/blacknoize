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
  <meta name="Keywords" content="black,noize,rock,band,hell cartel,popular,rock band,metal band,music,pop,black noize,news,cartel"/>
  <meta name="Robots" content="all"/>
  <meta name="description" content="Black Noize introduction into to the official web site,hell cartel intro" />
  <title> Welcome to our web site | introduction Hell Cartel</title>
  <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EDGE" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
  <script src="bootstrap\jquery\jquery-2.1.4.min.js"></script>
  <script src="bootstrap\js\bootstrap.min.js"></script>
  <!--<link href="Content\Site.css" rel="stylesheet" media="only screen and (min-width: 900px) ">-->
  <style>
      body{
        background: rgb(0,0,0);
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
          width: 1024px; 
          height: 590px;  
          background-image: url('images/black_noize_hell_cartel_back_intro3.jpg'); 
          background-size:1024px; 
          background-repeat: no-repeat;
      }
      #intro3-content-div video{
           width: 400px;
           height: 280px;
           margin-left: 500px;
           margin-top: 280px;
      }
      #intro3-buton-div{
          width: 100%; 
          text-align: center
      }
      
      @media screen and (max-width : 900px){
          div, video {margin: 0px;padding: 0px;width: 0px; margin-left: 0px; margin-top: 0px;}
          body{
              background: rgb(0,0,0);
          }
          #intro3-main-container{
              width: 100%; 
              text-align:center;
          }
          #intro3-content-div{
              display: block;
              padding: 0px;
              margin-top: 15px; 
              width: 100%; 
              background-size:100%; 
              float: none;
          }
          #intro3-content-div video{
              float: left;
              margin: 0px;
              width: 50%;
               margin-top: 200px;
               margin-left: 50%;
          }
          #intro3-buton-div{
              position: absolute;
              width: 100%; 
              text-align: center;
              //margin-top: 30%;
          }
      }
      @media screen and (max-width : 700px){
          div, video {margin: 0px;padding: 0px;width: 0px; margin-left: 0px; margin-top: 0px;}
          #intro3-main-container{
              width: 100%; 
              text-align:center;
          }
          #intro3-content-div{
              background-image: none; 
              height: 10px;  
              
          }
          #intro3-content-div video{
              width: 100%;
              margin-top: 0px;
              margin-left: 0px;
          }
          #intro3-buton-div{
              width: 100%; 
              text-align: center
          }
      }
  </style>
</head>
<body >
<div id="intro3-main-container">
<div id="intro3-content-div">
    <video id="video" controls="off" autoplay="on"  onended="HomeMenu();" >
            <source src="./media/black_noize_hell_cartel_music_intro.mp4" type="video/mp4">
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