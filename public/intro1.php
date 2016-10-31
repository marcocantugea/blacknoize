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
<meta http-equiv="Content-Language" content="en" charset="UTF-8" />
<meta name="distribution" content="global"/>
<meta name="Keywords" content="black,noize,rock,band,freedom,popular,rock band,metal band,music,pop,black noize"/>
<meta name="Robots" content="all"/>
<meta name="description" content="Black Noize introduction into to the official web site" />
  <title> Welcome to our web site | introduction Black Noize</title>
  <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EDGE" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
  <script src="bootstrap\jquery\jquery-2.1.4.min.js"></script>
  <script src="bootstrap\js\bootstrap.min.js"></script>
  <link href="Content\Site.css" rel="stylesheet">
</head>
<body>
<div style="width: 100%;text-align: center">
    <div style="padding: 20px;">
        <video id="video" width="70%" height="480" controls="false" autoplay="true">
            <source src="./media/black_noize_intro_simple.mp4" type="video/mp4">
          Your browser does not support the video tag.
         </video>
        <div style="width: 100%">
            <button id="endintro"> Saltar Intro </button>
        </div>
    </div>
    
</div>
    <script type="text/javascript">
        $("#endintro").click(function(){
            document.location.href="index.php";
     });
     
    document.getElementById('video').addEventListener('ended',function(){
        document.location.href="index.php";
    }, false);
     
    </script>
    </script>
</body>
</html>