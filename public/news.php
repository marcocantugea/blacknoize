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
    $OGMeta->title="Black Noize | Lates News - Oficial Web Site.";
    $OGMeta->description="Check for lates news of Black Noize here. ";
    $OGMeta->url=$pathvideo."public/news.php";
    $OGMeta->image=$pathvideo."public/images/black_noize_facebook_news.jpg";
    $OGMeta->imagewidth="500";
    $OGMeta->imageheight="236";
    $OGMeta->sitename="Black Noize | Official Web Site.";
    $OGMeta->typeog="Music";
    $_fgmetaog->addItem($OGMeta);
    
    
    //Declared Meta tags
    $_metatags = new MetaTagsObj();
    $_metatags->description="Black Noize News, Check our lates news about our tours, and our music.";
    $_metatags->title="Black Noize | News of events, music and more.";
    $_metatags->lang="en";
    $_metatags->keywords="balck noize,news,events,music,latest news,about black noize";
    
    
    // load all active and show on page news
    $ListArticles = new ArrayList();
    $_ADONews =  new ADONews();
    $_ADONews->GetNews($ListArticles);

?>
<?php
    include '../view/public/headinclude.php';
?>

<?php
    include '../view/public/menuinclude.php';
?>
<div  id="NewsContainer">
<div id="NewsBackgournd">
    <h1>Latest News</h1>
    <?php
        foreach($ListArticles->array as $item){
            //split date
            $valores=$item->newsdate;
            $v= explode("-",$valores);
            $monthstr=$v[1];
            $yearstr=$v[0];
            $daystr=$v[2];
            $jd=gregoriantojd($monthstr,$daystr,$yearstr);
            $monthname=jdmonthname($jd,0);
            
    ?>
    <div id="NewsContent">
        <div style="text-align: center;"><h1><?php echo $item->title;?></h1></div>
        <div style="text-align: center"><h2><?php echo $item->subtitle;?></h2></div>
        <div style="text-align: center"><h3><?php echo $daystr.'-'.$monthname.'-'.$yearstr ;?></h3></div>
        <div style="text-align: center">
            <div class="fb-share-button" data-href="<?php echo $pathvideo."public/viewarticle.php?q=".base64_encode($item->idnews);?>" data-layout="button" data-size="large" data-mobile-iframe="false"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.blacknoize.com.mx%2Fpublic%2Fnews.php&amp;src=sdkpreparse">Share</a></div>
        </div>
        <div style="padding: 20px;"><?php echo base64_decode($item->articule);?></div>
        <!--<div style="text-align: right"><a>Read More</a></div>-->
    </div>
        <?php } ?>
</div>
<div style=" width: 100%; padding: 10px; margin: 0px; text-align: center">
<!--Inicio Revistas-->
<center><h1>Magazines and Newspapers</h1><br>

<!-- Boton para Revista Espacio -->
<button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#espacioModal">Espacio</button>

<!-- Modal -->
<div id="espacioModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Contenido del Modal -->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Revista Espacio</h4>
      </div>
      <div class="modal-body">
       <img src="images\espacio.jpg" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!--Fin boton de Revista Espacio-->

<!-- Boton para El Manana -->
<button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#mananaModal">El Manana</button>

<!-- Modal -->
<div id="mananaModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Contenido del Modal -->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">El Manana</h4>
      </div>
      <div class="modal-body">
       <img src="images\elmanana.jpg" ><br>
       <img src="images\elmanana1.jpg" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!--Fin boton de El Manana-->

<!-- Boton para Mens Rio -->
<button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#mensrioModal">Men's Rio</button>

<!-- Modal -->
<div id="mensrioModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Contenido del Modal -->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Men's Rio</h4>
      </div>
      <div class="modal-body">
       <img src="images\mensrio.jpg" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!--Fin boton de Mens Rio-->
</center>
<!--Final Revistas-->

<center><h1>Acomplishments</h1></center><br>

<p class="text-justify" style="color:white" "text-align:justify">
<font color=red><strong> October 2013:</strong></font> Official Release of Black Noize’s debut album “Welcome to Hell… Are you Ready to Fight? (available everywhere)<br>
<br>
<font color=red><strong>Black Noize has shared the stage with:</strong></font> Godsmack, Disturbed, Shinedown, Molotov, Rob Zombie, Children of Bodom, Five Finger Death Punch, and many more<br>
<br>
<font color=red><strong>Jan 2013:</strong></font>  Won the Battle of the Bands (Reynosa Mexico)<br>
<font color=red><strong>Feb 2013:</strong></font> Release of “Dirty Love” Official Video<br>
<font color=red><strong>2013:</strong></font>  Second Place in the South Texas Battle of the Bands (Pharr Events Center)<br>
<font color=red><strong>2013:</strong></font> Mayhem Festival Promotional Tour ( Austin TX 360 Arena)<br>
<font color=red><strong>2014:</strong></font> Won the National Battle of the Bands Championship in Mexico City<br>
<font color=red><strong>2014:</strong></font> Billed in the Hell and Heaven Fest 2014 (Mexico City)<br>
<br></p>
<h3>TV – Radio – Press:</strong></h3>
<br>
<p class="text-justify" style="color:white" "text-align:justify">
<font color=red><strong>Black Noize has been featured in several radio stations for over 2 years including:</strong></font><br>
I Heart Radio – 105.5 The X – Q94.5 the Rock, KISS FM, EXA FM, D99, Metallion Radio,  Rock Chicks Radio (Germany), Radio Rey, Multimedios, Digital FM, Extrema,<br> Radio Gape, and many more<br>
<br>
<font color=red><strong>TV:</strong></font> Univision, FOX, Televisa, Telehit, Pharr Now, etc.<br>
<br>
<font color=red><strong>PRESS:</strong></font> Black Noize has been featured in over 20 newspapers, and 8 magazines (US/MEXICO)<br>
<br>
<font color=red><strong>Sponsored by:</strong></font> Since October 2013 Black Noize is sponsored by “ROCK N ROLL GANGSTAR APPARELL” clothing line.
</p>

</div>
</div>
<?php
    include '../view/public/footerinclude.php';
?>
