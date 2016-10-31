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
  <meta name="Keywords" content="black,noize,rock,band,news,popular,rock band,metal band,music,pop,black noize,hell,news hell cartel"/>
  <meta name="Robots" content="all"/>
  <meta name="description" content="Black Noize introduction into to the official web site, news of hell cartel video intro" />
  <title> Welcome to our web site | introduction News of Hell Cartel</title>
  <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EDGE" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
  <script src="bootstrap\jquery\jquery-2.1.4.min.js"></script>
  <script src="bootstrap\js\bootstrap.min.js"></script>
  <!--<link href="Content\Site.css" rel="stylesheet">-->
  <style>
      body{
        background: rgb(0,0,0);
     }
     button{
        background-color: darkred;
        color: white;

      }
     #intro2-container-video{
         padding: 30px;
         margin-left:0;
         margin-top: 5%;
         width: 100%;
         background-image: url('images/black_noize_hell_Cartel_back_alter.jpg');
         background-repeat: no-repeat;
         background-size:90%  ;
         //border: gold solid thick;
         text-align: center;
     }
     #intro2-container-video video{
         margin-left: 0px;
         width: 60%;
         height: 580px;
         opacity: .9;
     }
     #intro2-container-button{
         width: 100%; 
         text-align: center;
     }
     @media screen and (max-width : 900px){
         body{
            background: black;
         }
         #intro2-container-video{
             //border: gold solid thick;
             padding: 0px;
             margin-left: 0px;
             margin-top: 0px;
             width: 100%;
             background-image: url('images/black_noize_hell_Cartel_back_alter.jpg');
             background-size:100%  ;
         }
         #intro2-container-video video{
            //border: green solid thick;
            margin-left: 55;
            width: 70%;
            height: 450px;
        }
     }
     @media screen and (max-width : 700px){
         body{
            background:black;
         }
         #intro2-container-video{
             //border: red solid thick;
             padding: 0px;
             margin-left: 0px;
             margin-top: 0px;
             width: 100%;
             background-image: url('images/black_noize_hell_Cartel_back_alter.jpg');
             background-size:100%  ;
         }
         #intro2-container-video video{
            //border: green solid thick;
            margin-left: 55;
            width: 70%;
            height: 250px;
        }
     }
     @media screen and (max-width : 450px){
         body{
            background: black;
         }
         #intro2-container-video{
             //border: red solid thick;
             padding: 0px;
             margin-left: 0px;
             margin-top: 0px;
             width: 100%;
             background-image: none;
             background-size:100%  ;
         }
         #intro2-container-video video{
            //border: green solid thick;
            margin-left: 0;
            width: 100%;
            height: 300px;
        }
     }
  </style>
</head>
<body>
<div id="intro2-container-video">
    <video id="video" controls="off" autoplay="true" onended="HomeMenu();" style="">
            <source src="./media/black_noize_intro_new_by_the_man.mp4" type="video/mp4">
          Your browser does not support the video tag.
         </video>    
</div>
    <div id="intro2-container-button">
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