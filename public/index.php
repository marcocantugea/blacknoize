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
<!DOCTYPE html>
<?php
    include '../topInclude.php';
    $pathvideo= $config->domain."/".$config->pathServer;
    
    // Declare OG Facebook Meta Tags
    $_fgmetaog=  new ArrayList();
    $OGMeta= new OGMetaFacebookObj();
    $OGMeta->title="Black Noize | Official Web Site.";
    $OGMeta->description="Welcome to Black Noize Official Site, Check for lates news, dates and videos. ";
    $OGMeta->url=$pathvideo."public/index.php";
    $OGMeta->image=$pathvideo."public/images/black_noize_facebook_index1.jpg";
    $OGMeta->imagewidth="500";
    $OGMeta->imageheight="236";
    $OGMeta->sitename="Black Noize | Official Web Site.";
    $OGMeta->typeog="Music";
    $_fgmetaog->addItem($OGMeta);
    
    
    //Declared Meta tags
    $_metatags = new MetaTagsObj();
    $_metatags->description="Welcome to the Official Site of Black Noize Rock Band, Check our lates news, events and music. you will enjoy our rock music.";
    $_metatags->title="Black Noize | Oficial Web Site Main Page";
    $_metatags->lang="en";
    $_metatags->keywords="balck noize,noize,black,music,rock,pop,metal rock,band, music,love,hell carte,album music,fan page,oficial site";
    
    
    //load tour dates
    $listoftourdates = new ArrayList();
    $_ADOTourDates= new ADOTourDates();
    //$_ADOTourDates->debug=true;
    $_ADOTourDates->GetShowingTourDates($listoftourdates);
    $actualmonth=0;
    $shownumevents=3;
    $countevents=1;
    
    $pathvideo= $config->domain."/".$config->pathServer."/";
    
    //load the last news
    $LatestNews= new NewsObj();
    $_ADONews= new ADONews();
    $_ADONews->GetLatestNews($LatestNews);
    
    $valores=$LatestNews->newsdate;
    $v= explode("-",$valores);
    $monthstr=$v[1];
    $yearstr=$v[0];
    $daystr=$v[2];
    $jd=gregoriantojd($monthstr,$daystr,$yearstr);
    $monthname=jdmonthname($jd,0);
?>
<?php
    include '../view/public/headinclude.php';
?>

<?php
    include '../view/public/menuinclude.php';
?>

<div id="MainDivMessage">
    <div class="divMainImage">
        <img src="images/black_noize_welcome_official_site_3.jpg"/>
    </div>
    <div id="DivWelcomeMessage">
        <h1>Welcome to Black Noize <br/> Official Site</h1>
        <p id="WelcomeMessage">Black Noize was created in 2007 by Ivan Black. The idea was to create a Rock n roll band that
talked about freedom, humanity, love, Faith, about fighting for your dreams, for what you believe
in; a band that had something to say and represent.</p>
        <div id="WelcomeLastVideos">
            <h2>Check out our latest Videos</h2>
            <p>&nbsp;</p>
            <div style="width: 100%">
                <table  style="width: 100%; " >
                    <tr>
                        <td style="text-align: center;padding: 2px;">
                            <a href="<?php echo $pathvideo?>public/viewvideo.php?q=NQ=="> <img width="200" src="images/black_noize_hell_cartel_cover_video.jpg" alt=""/></a>
                        </td>
                        <td style="text-align: center;padding: 2px;">
                            <a href="<?php echo $pathvideo?>public/viewvideo.php?q=OA=="> <img width="200" src="images/black_noize_dirty_love_cover_video.jpg" alt=""/></a>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center">Hell Cartel</td>
                        <td style="text-align: center">Dirty Love</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div id="main-container-albums">
    <div id="title-container-albums">
        <h2>Our Album</h2>
    </div>
    <div id="main-album-title-container">
        <h3>Welcome To Hell... Are you Ready to Figth?</h3>
    </div>
    <div  id="main-album-container">
        <iframe id="album_iframe" name="full" src="//widget.cdbaby.com/cc2b9bf7-c930-4f3c-a5c1-6b271a186d2c/full/light/transparent"></iframe>
    </div>
    <div id="main-album-services">
        <h3>Available on:</h3>
        <div id="main-services-container">
            <div class="main-services-div"><a href="https://play.spotify.com/artist/7wbbM8Oq82ZV2MTRjGc7Fz" target="_blank"><img src="images/spotify-design-370x171.png" ></a></div>
            <div class="main-services-div" ><a href="http://amzn.com/B00FYELSCG" target="_blank"><img src="images/amazon-logo_black.jpg" /> </a></div>
            <div class="main-services-div"><a href="https://geo.itunes.apple.com/us/album/welcome-to-hell...-are-you/id723768928?app=itunes" target="_blank"><img src="http://linkmaker.itunes.apple.com/images/badges/en-us/badge_itunes-lrg.svg"></a></div>
            <div class="main-services-div"><a href="https://play.google.com/store/music/album/Black_Noize_Welcome_to_Hell_Are_You_Ready_to_Fight?id=Bngph7lzd4n45krixtx5vqxmpjq&hl=es" target="_blank"><img src="images/play.jpg"></a></div>
        </div>
        
    </div>
</div>
<div id="MainDiv2Message">
<div id="MainConectToUs">
    <h2 class="subTitile">Conect to Us!</h2>
    <p>Follow us in our social media for updates, media, photos and more.</p>
    <div style="text-align: center">
    <p>
        <a href="https://www.facebook.com/BlackNoize1/" target="_blank"><img src="images/black_noize_fan_page_facebook.png" alt="" /></a> 
    <div class="fb-like" data-href="https://www.facebook.com/BlackNoize1/" data-width="300" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div><br/>
        <a href="https://www.youtube.com/channel/UCgsvAHfD6L39jA1Yiysa7tw" target="_blank"><img src="images/black_noize_fan_page_youtube.png" alt=""/></a>
    </p>
    </div>
</div>
    <div id="MainEvents" >
        <h2 class="subTitile">Tour Dates and Events</h2>
        <?php foreach($listoftourdates->array as $item){?>
        <?php
            if($countevents<=$shownumevents){
                //split date
                $valores=$item->tourdate;
                $v= explode("-",$valores);
                $monthstr=$v[1];
                $yearstr=$v[0];
                $daystr=$v[2];
                $jd=gregoriantojd($monthstr,$daystr,$yearstr);
                $monthname=jdmonthname($jd,0);

                if($actualmonth==0){
                    $actualmonth=$monthstr;
                    $jd2=gregoriantojd($actualmonth,$daystr,$yearstr);
                    echo '<h2>'.jdmonthname($jd2,1).' '.$yearstr.'</h2>';
                }else{
                    if($monthstr<>$actualmonth){
                        $actualmonth=$monthstr;
                        $jd2=gregoriantojd($actualmonth,$daystr,$yearstr);
                        echo '<h2>'.jdmonthname($jd2,1).' '.$yearstr.'</h2>';
                    }
                }
        ?>
        
        
        <div id="EventMessage">
            <div  class="DateTour-small">
                <h4><?php echo $monthname;?></h4>
                <h2><?php echo $daystr?></h2>
                <h4><?php echo $yearstr?></h4>
            </div>
            <div id="DateTourContainer">
                <h2 class="DatetourTitle-medium"><?php echo $item->title?></h2>
                <div class="LinkViewMore" ><a href="viewdate.php?q=<?php echo base64_encode($item->idtourdates)?>">View More</div></a>
            </div>
        </div>
        <?php 
            $countevents+=1;
                } 
            }?>
    </div>
</div>
<!-- Lates NEWS -->
<div id="MainNewsBoard">
    <h1>Latest News</h1>
    <div style="width: 100%; border: #692320 solid thin; background-color: rgba(0,0,0,0.8); margin-top: 20px; ">
        <div style="text-align: center;"><h1><?php echo $LatestNews->title;?></h1></div>
        <div style="text-align: center"><h2><?php echo $LatestNews->subtitle;?></h2></div>
        <div style="text-align: center"><h3><?php echo $daystr.'-'.$monthname.'-'.$yearstr ;?></h3></div>
        <div style="padding: 20px;"><?php echo base64_decode($LatestNews->articule);?></div>
        <!--<div style="text-align: right"><a>Read More</a></div>-->
    </div>
</div>
<script>
    
    var statechange=false
    
    $(function(){
        var windowsize=$(window).width();
        if(windowsize<=944){
            $("#album_iframe").attr("name","album");
            $("#album_iframe").attr("src","//widget.cdbaby.com/cc2b9bf7-c930-4f3c-a5c1-6b271a186d2c/album/dark/transparent");
            statechange=true;
        }
        
        $(window).resize(function(){
            var actualwidh=$(this).width();
            if(actualwidh<=944){
                if(!statechange){
                    $("#album_iframe").attr("name","square");
                    $("#album_iframe").attr("src","//widget.cdbaby.com/cc2b9bf7-c930-4f3c-a5c1-6b271a186d2c/square/dark/opaque");
                    statechange=true;
                }
            }else{
                 $("#album_iframe").attr("name","full");
                 $("#album_iframe").attr("src","//widget.cdbaby.com/cc2b9bf7-c930-4f3c-a5c1-6b271a186d2c/full/light/transparent");
                 statechange=false;
            }
        });
    });
</script>
<?php
    include '../view/public/footerinclude.php';
?>
