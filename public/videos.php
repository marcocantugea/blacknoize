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
    include '../topInclude.php';
    
    
    //** add counter
    include '../include/external/webcounter/counter.php';
    
    $pathvideo= $config->domain."/".$config->pathServer;
     // Declare OG Facebook Meta Tags
    $_fgmetaog=  new ArrayList();
    $OGMeta= new OGMetaFacebookObj();
    $OGMeta->title="Black Noize | Videos - Oficial Web Site.";
    $OGMeta->description="Check out our Video Collection of Black Noize";
    $OGMeta->url=$pathvideo."public/videos.php";
    $OGMeta->image=$pathvideo."public/images/black_noize_facebook_videos.jpg";
    $OGMeta->imagewidth="500";
    $OGMeta->imageheight="236";
    $OGMeta->sitename="Black Noize | Official Web Site.";
    $OGMeta->typeog="Music";
    $_fgmetaog->addItem($OGMeta);
    
    
    //Declared Meta tags
    $_metatags = new MetaTagsObj();
    $_metatags->description="Black Noize check our videos and live perfomance videos.";
    $_metatags->title="Black Noize | Videos and more.";
    $_metatags->lang="en";
    $_metatags->keywords="balck noize,videos,music,rock,band, date, live,performance,tocada,live performance";
    
    
    // load public videos
    $ListofVideos= new ArrayList();
    $_ADOVideos = new ADOVideos();
    $_ADOVideos->GetPublicVideos($ListofVideos);
    

?>
<?php
    include '../view/public/headinclude.php';
?>

<?php
    include '../view/public/menuinclude.php';
?>

<div id="videos-main-container">
    <?php foreach($ListofVideos->array as $item){?>
    <div id="videos-item-container">
        <h1><?php echo $item->title;?></h1>
        <?php echo base64_decode($item->link);?>
        <hr />
    </div>
    <?php }?>
</div>

<?php
    include '../view/public/footerinclude.php';
?>
