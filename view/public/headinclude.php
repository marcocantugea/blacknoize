
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
  <meta name="distribution" content="global"/>
  <meta name="Robots" content="all"/>
  <?php
    if(isset($_metatags)){
  ?>
  <meta http-equiv="Content-Language" content="<?php echo $_metatags->lang?>"/>
  <meta name="Keywords" content="<?php echo $_metatags->keywords?>"/>
  <meta name="description" content="<?php echo $_metatags->description ?>" />
  <title><?php echo $_metatags->title?></title>
   <?php
    }else{
   ?>
   <meta http-equiv="Content-Language" content="en"/>
   <title>Black Noize Official Web Site</title>
  <?php
    }
  ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EDGE" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
  <script src="bootstrap\jquery\jquery-2.1.4.min.js"></script>
  <script src="bootstrap\js\bootstrap.min.js"></script>
  <link href="Content\menu.css" rel="stylesheet">
  <link href="Content\Site.css" rel="stylesheet" media="only screen and (min-width: 965px) ">
  <link href="Content\SiteMobile.css" rel="stylesheet" media="only screen and (max-width: 964px) ">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <?php
    if(isset($_fgmetaog)){
        if(count($_fgmetaog->array)>0){
           foreach($_fgmetaog->array as $item) {
            ?>
                <meta property="og:title" content="<?php echo $item->title?>"/>
                <meta property="og:type" content="<?php echo $item->typeog?>"/>
                <meta property="og:url" content="<?php echo $item->url?>"/>
                <meta property="og:image" content="<?php echo $item->image?>"/>
                <meta property="og:image:width" content="<?php echo $item->imagewidth?>"/>
                <meta property="og:image:height" content="<?php echo $item->imageheight?>"/>
                <meta property="og:site_name" content="<?php echo $item->sitename?>"/>
                <!--<meta property="fb:admins" content="USER_ID"/>-->
                <meta property="og:description"
                      content="<?php echo $item->description?>"/>
        <?php }
        }
    }
  ?>
 <head>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '231022907314226'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=231022907314226&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
</head>
<script>fbq('track', 'ViewContent');</script>
</head>
<body>
    <script type="text/javascript">
        $(document).ready(function(e) {
            var delay = 3000, 
                fadeTime = 2000;
            $('.head:gt(0)').hide();
            setInterval(function(){
                $(".head:first-child").fadeOut(fadeTime).next(".head").fadeIn(fadeTime).end().appendTo("#kop")
            }, delay+fadeTime);
        });
    </script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=996503383795025";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
    <!--Inicio Imagen titulo-->
    <div id="kop" >
        <img class="head" src="images\black_noize_banner_1.jpg">
        <img class="head" src="images\black_noize_banner_2.jpg">
        <img class="head" src="images\black_noize_banner_3.jpg">
        <img class="head" src="images\black_noize_banner_4.jpg">
        <img class="head" src="images\black_noize_banner_5.jpg">
        <img class="head" src="images\black_noize_banner_6.jpg">
        <img class="head" src="images\black_noize_banner_7.jpg">
        <img class="head" src="images\black_noize_banner_8.jpg">
        <img class="head" src="images\black_noize_banner_9.jpg">
        <img class="head" src="images\black_noize_banner_10.jpg">
    </div>
     <div class="container-fluid" style="background-color: rgba(0,0,0,1)"> 
<div class="row"> 
    <div class="col-sm-3" id="logo1div" ><a href="index.php"><img id="logo1" src="images\black_noize_logo_negro.png" width="250" height="226"></a></div>
  <div class="col-sm-6"><img src="images\spacer.gif" width="500" height="1" id="id_spacer"></div>
  <div class="col-sm-3"><a href="index.php"><img id="logo2" src="images\black_noize_shield_logo.png" width="304" height="226"></a></div>
</div>
</div>
