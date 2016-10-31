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
    $OGMeta->title="Black Noize | Get Our Album";
    $OGMeta->description="Welcome To Hell! Are you Ready to Figth? is our Frist Album, Buy it Here! "
            . "Songs: Into, Barbara, Bodysnatchers,Monster,Living Dead,Welcome to Hell... (Are You Ready to Fight?),Texas Shootout,"
            . "Never Give Up!,Ashes,No More Room in Hell,Outro,Dirty Love [Explicit],Sacrifice,Monster 2,Sacrifice (Spanish).";
    $OGMeta->url=$pathvideo."public/discography.php";
    $OGMeta->image=$pathvideo."public/images/black_noize_album_welcome_to_hell.jpg";
    $OGMeta->imagewidth="200";
    $OGMeta->imageheight="136";
    $OGMeta->sitename="Black Noize | Official Web Site.";
    $OGMeta->typeog="music";
    $_fgmetaog->addItem($OGMeta);
    
    //Declared Meta tags
    $_metatags = new MetaTagsObj();
    $_metatags->description="Black Noize albums and songs. availabe in itunes, spotify, amazon and google play. get it!.";
    $_metatags->title="Black Noize | Albums and Songs.";
    $_metatags->lang="en";
    $_metatags->keywords="balck noize,line up,music,rock,band, freedom,humanity,love,faith,dreams";
    
?>

<?php
    include '../view/public/headinclude.php';    
?>

<?php
    include '../view/public/menuinclude.php';
?>
<div id="discography-main-container">
    <div id="discography-title-container">
        <h1>Black Noize Album</h1>
        <h2>Welcome To Hell! Are you Ready to Figth?</h2>
        <div class="fb-share-button" data-href="<?php echo $pathvideo."public/discography.php";?>" data-layout="button" data-size="large" data-mobile-iframe="false"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%3A8888%2FBlackNoizePHP%2Fpublic%2Fdates.php&amp;src=sdkpreparse">Share</a></div>
        <p>&nbsp;</p>
    </div>
    <div id="discography-album-container">
        <img id="discography-image-album1" src="images/black_noize_album_welcome_to_hell.jpg">
        <br/>
        <h2>Available on:</h2>
        <div id="discography-services-container">
            <div class="discography-services-div"><a href="https://play.spotify.com/artist/7wbbM8Oq82ZV2MTRjGc7Fz" target="_blank"><img src="images/spotify-design-370x171.png" ></a></div>
            <div class="discography-services-div" ><a href="http://amzn.com/B00FYELSCG" target="_blank"><img src="images/amazon-logo_black.jpg" width="200px" height="100px" /> </a></div>
                <div class="discography-services-div"><a href="https://geo.itunes.apple.com/us/album/welcome-to-hell...-are-you/id723768928?app=itunes" target="_blank"><img src="http://linkmaker.itunes.apple.com/images/badges/en-us/badge_itunes-lrg.svg"></a></div>
                <div class="discography-services-div"><a href="https://play.google.com/store/music/album/Black_Noize_Welcome_to_Hell_Are_You_Ready_to_Fight?id=Bngph7lzd4n45krixtx5vqxmpjq&hl=es" target="_blank"><img src="images/play.jpg"></a></div>
        </div>
    </div>
</div>
<?php
    include '../view/public/footerinclude.php';
?>
