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
    include ("../topInclude.php");
    $pathvideo= $config->domain."/".$config->pathServer;
    
    if(isset($_GET['q'])){
        $idencode=$_GET['q'];
        $iddecoded=  base64_decode($idencode);
        if(is_numeric($iddecoded)){
            $tourdate= new TourDates();
            $tourdate->idtourdates=$iddecoded;
            $_ADOTourDates =new ADOTourDates();
            $_ADOTourDates->getTourDate($tourdate);
            
            //split date
            $valores=$tourdate->tourdate;
            $v= explode("-",$valores);
            $monthstr=$v[1];
            $yearstr=$v[0];
            $daystr=$v[2];
            $jd=gregoriantojd($monthstr,$daystr,$yearstr);
            $monthname=jdmonthname($jd,0);
            
            // Declare OG Facebook Meta Tags
            $_fgmetaog=  new ArrayList();
            $OGMeta= new OGMetaFacebookObj();
            $OGMeta->title="Black Noize | ".$tourdate->title;
            $OGMeta->description="Tour Date or Event ". $daystr." ". $monthname ." ". $yearstr;
            $OGMeta->url=$pathvideo."public/viewdate.php?q=".$idencode;
            //$OGMeta->image=$pathvideo."public/images/black_noize_facebook_news.jpg";
            $OGMeta->imagewidth="500";
            $OGMeta->imageheight="236";
            $OGMeta->sitename="Black Noize | Official Web Site.";
            $OGMeta->typeog="music";
            $_fgmetaog->addItem($OGMeta);
            
        }
    }
    
?>
<?php
    include '../view/public/headinclude.php';
?>

<?php
    include '../view/public/menuinclude.php';
?>

<div id="viewdate-main-container">
    <div id="viewdate-main-content">
        <div class="newheader">
            <h1><?php echo $tourdate->title?></h1>
        </div>
        <div class="newheader-date">
             <?php echo $daystr.' '.$monthname.' '.$yearstr ?>
        </div>
        <div class="newheader-content">
             <div style="width: 100%; text-align: center">
                <div class="fb-share-button" data-href="http://www.blacknoize.com.mx/public/viewdate.php?q=<?php echo $idencode ?>" data-layout="button" data-size="large" data-mobile-iframe="false"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.blacknoize.com.mx%2Fpublic%2Fviewarticle.php&amp;src=sdkpreparse">Share</a></div>
            </div>
            <?php echo base64_decode($tourdate->tourdesc);?>
        </div>
    </div>
</div>

<?php
    include '../view/public/footerinclude.php';
?>

