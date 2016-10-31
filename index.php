<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<?php
    include 'topInclude.php';
    $globalpath;
    if($config->pathServer==""){
        $globalpath= $config->domain;
    }else{
        $globalpath= $config->domain."/".$config->pathServer;
    }
    $intronum=rand(1,4);
    
    $indexpath=$globalpath."/public/intro".$intronum.".php";

?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <meta http-equiv="Content-Language" content="en" />
    <meta name="distribution" content="global"/>
    <meta name="Keywords" content="black,noize,rock,band,freedom,popular,rock band,metal band,music,pop,black noize"/>
    <meta name="Robots" content="all"/>
    <meta name="description" content="Black Noize Official Web Site, Popular Rock Band that talk about freedom, humanity, love, fait and fighting for dreams" />
    <title>Black Noize Official Web Site</title>
    <meta property="og:title" content="Black Noize Official web site"/>
    <meta property="og:type" content="Music"/>
    <meta property="og:url" content="<?php echo $globalpath?>"/>
    <meta property="og:image" content="<?php echo $globalpath?>/public/images/foto1.jpg"/>
    <meta property="og:image:width" content="500"/>
    <meta property="og:image:height" content="236"/>
    <meta property="og:site_name" content="Black Noize Official web site"/>
    <!--<meta property="fb:admins" content="996503383795025"/>-->
    <meta property="og:description"
          content="Black Noize was created in 2007 by Ivan Black. The idea was to create a Rock n roll band that
talked about freedom, humanity, love, Faith, about fighting for your dreams, for what you believe
in; a band that had something to say and represent."/>
    
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
        
<?php
echo '<script type="text/javascript" > setTimeout(function(){ document.location.href="'.$indexpath.'" },200);</script>';
?>

</body>
</html>