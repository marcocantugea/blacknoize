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
    $OGMeta->title="Black Noize | Line up - Oficial Web Site.";
    $OGMeta->description="How is Blck Noize?. Black Noize was created in 2007 by Ivan Black. The idea was to create a Rock n roll band that
talked about freedom, humanity, love, Faith, about fighting for your dreams, for what you believe
in; a band that had something to say and represent.";
    $OGMeta->url=$pathvideo."public/band.php";
    $OGMeta->image=$pathvideo."public/images/black_noize_facebook_band.jpg";
    $OGMeta->imagewidth="500";
    $OGMeta->imageheight="236";
    $OGMeta->sitename="Black Noize | Official Web Site.";
    $OGMeta->typeog="Music";
    $_fgmetaog->addItem($OGMeta);
    
    //Declared Meta tags
    $_metatags = new MetaTagsObj();
    $_metatags->description="Black Noize was created in 2007 by Ivan Black. The idea was to create a Rock n roll band that
talked about freedom, humanity, love, Faith, about fighting for your dreams";
    $_metatags->title="Black Noize | The Line up of the band";
    $_metatags->lang="en";
    $_metatags->keywords="balck noize,line up,music,rock,band, freedom,humanity,love,faith,dreams";
    

?>
<?php
    include '../view/public/headinclude.php';
    
?>

<?php
    include '../view/public/menuinclude.php';
?>
<div id="BandTitlePage">
<center><h1>BLACK NOIZE</h1>
    <h2>LINE-UP</h2>
</center>
</div>
<p></p>
<center><img id="bandpic" src="images\black_noize_band_line_up.jpg" >
    <p></p>

<div class="row">
  <div class="col-sm-3"><img src="images\kranky.jpg" width="200" height="236">
    <h3>Kranky</h3>
    <img src="images\jack.jpg" width="200" height="236"><h3>Jack Olea</h3></div>
  <div class="col-sm-6"><!--Inicio Texto-->
<p class="text-center" style="color:white" "text-align:center">Black Noize was created in 2007 by Ivan Black. The idea was to create a Rock n roll band that<br>
talked about freedom, humanity, love, Faith, about fighting for your dreams, for what you believe<br>
in; a band that had something to say and represent.<br>
<br>
After writing a bunch of songs that talked about social issues, Ivan had the idea to fuse all the song<br>
into one story, creating characters, villians and a hero, who became the bands official mascot...<br>
"Mr. Sick"... and so the concept album "Welcome to hell...Are you ready to fight? was created,<br>
that is basically a Social Satire with Zombies...<br>
<br>
We are ZOMBIE HUNTERS from the Lone Star State!<br>
<br>
But we don't fight rotting corpses that come out from graves and crave human flesh... NO a<br>
modern day zombie is a person who depends on "the media", "the goverment" and "technology"<br>
to live his life.  Just a useless brain plugged to the system awaiting instructions on how to act and<br>
how to live.  No will, No dreams, No faith, No humanity; just a breathing body with no soul,<br>
trapped behind masks, a ZOMBIE in this Synthetic Societey, a world for the Living Dead.<br>
<br>
Our first album "Welcome to hell... Are you ready to fight?" was recorded in Los Angeles<br>
California in October 2010 - April 2011.<br>
<br>
Black Noize has played in many venues all around Texas including Pharr, McAllen, Mission,<br>
Edinburg, South Padre Island, Corpus Christy, Kingsville, San Antonio, Austin, Dallas & Houston.<br>
We have also done many gigs in Mexico like Monterrey, Laredo, Reynosa, Tampico, Rio Bravo &<br>
Mexico City.<br>
<br>
And while recording our first album we did shows in Van Nuys and Reseda in the San Fernando <br>
Valley, Los Angeles California.</p>
<h3>Thanks for supporting Rock n' Roll.</h3>
<br>

 </div><!--Final Texto-->
  <div class="col-sm-3"><img src="images\black_noize_baterista.jpg" width="200" height="236"><h3>Rambo Deleza</h3>
    <img src="images\alex.jpg" width="200" height="236"><h3>Alex Camet</h3></div>
</div>
 <div id="DivBandBajista">
        <img src="images\black_noize_bajista.jpg" width="200" height="236"><h3>Jerman Romo</h3>
 </div>
<div id="DivBandVocalista" >
<img src="images\ivan.jpg" width="200" height="236"><h3>Ivan Black</h3>
</div>
<div id="DivBandGuitar2">
<img src="images\black_noize_guitarra_2.jpg" width="200" height="236"><h3>Mario</h3>
</div>


<?php
    include '../view/public/footerinclude.php';
?>
