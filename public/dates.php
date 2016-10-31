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
    $OGMeta->title="Black Noize | Tour Dates and Events - Oficial Web Site.";
    $OGMeta->description="Check our Tour Dates and Events here.";
    $OGMeta->url=$pathvideo."public/dates.php";
    $OGMeta->image=$pathvideo."public/images/black_noize_facebook_tour.jpg";
    $OGMeta->imagewidth="500";
    $OGMeta->imageheight="236";
    $OGMeta->sitename="Black Noize | Official Web Site.";
    $OGMeta->typeog="Music";
    $_fgmetaog->addItem($OGMeta);

    
    //Declared Meta tags
    $_metatags = new MetaTagsObj();
    $_metatags->description="Black Noize check Tour dates and events for the band. you can share the dates with your friends";
    $_metatags->title="Black Noize | New Tour Dates and events.";
    $_metatags->lang="en";
    $_metatags->keywords="balck noize,tour dates,music,rock,band, date, live,performance,tocada,live performance";
    
    
    //load tour dates
    $listoftourdates = new ArrayList();
    $_ADOTourDates= new ADOTourDates();
    //$_ADOTourDates->debug=true;
    $_ADOTourDates->GetShowingTourDates($listoftourdates);
    $actualmonth=0;
?>
<?php
    include '../view/public/headinclude.php';
?>

<?php
    include '../view/public/menuinclude.php';
?>
<div id="dates-container-big">
    <div  id="dates-content-newsdisplay">
        <h1>Tour Dates and Events</h1>
        <?php foreach($listoftourdates->array as $item){?>
        <?php
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
        
        
        <div id="dates-info">
            <div  class="DateTour">
                <h4><?php echo $monthname;?></h4>
                <h2><?php echo $daystr?></h2>
                <h4><?php echo $yearstr?></h4>
            </div>
            <div id="dates-title-content" >
                <h2 class="DatetourTitle"><?php echo $item->title?></h2>
                <div class="LinkViewMore" >
                    <div id="ViewMoreLink"><a href="viewdate.php?q=<?php echo base64_encode($item->idtourdates)?>">View More</a>
                    <div class="fb-share-button" data-href="<?php echo $pathvideo."public/viewdate.php?q=".base64_encode($item->idtourdates);?>" data-layout="button" data-size="large" data-mobile-iframe="false"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%3A8888%2FBlackNoizePHP%2Fpublic%2Fdates.php&amp;src=sdkpreparse">Share</a></div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <div id="dates-foto-rigth">
               <img src="images/black_noize_tour_dates_banner1.jpg" alt=""/>
    </div>
</div>

<?php
    include '../view/public/footerinclude.php';
?>
