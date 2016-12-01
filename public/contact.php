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
    $OGMeta->title="Black Noize | Contact us - Oficial Web Site.";
    $OGMeta->description="Check our contact information.";
    $OGMeta->url=$pathvideo."public/contact.php";
    $OGMeta->image=$pathvideo."public/images/black_noize_facebook_contact.jpg";
    $OGMeta->imagewidth="500";
    $OGMeta->imageheight="236";
    $OGMeta->sitename="Black Noize | Official Web Site.";
    $OGMeta->typeog="Music";
    $_fgmetaog->addItem($OGMeta);
    
    //Declared Meta tags
    $_metatags = new MetaTagsObj();
    $_metatags->description="Black Noize contact us and give us a call.";
    $_metatags->title="Black Noize | Contact us.";
    $_metatags->lang="en";
    $_metatags->keywords="balck noize,videos,music,rock,band, date, live,performance,tocada,live performance";
    
?>
<?php
    include '../view/public/headinclude.php';
?>

<?php
    include '../view/public/menuinclude.php';
?>

<!--Inicio del cuerpo de la pagina-->

<center><img src="images\contact_concert.jpg" width="450" height="236">
<h1>CONTACT INFORMATION</h1><br>


<!-- Boton para E-Mail -->
<button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#emailModal">E-Mail</button>

<!-- Modal -->
<div id="emailModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Contenido del Modal -->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">E-MAIL CONTACT</h4>
      </div>
      <div class="modal-body">
        <p><a href="mailto:blacknoize1@hotmail.com?Subject=Hello%20again" target="_top">HOTMAIL: blacknoize1@hotmail.com</a></p> 
        <p><a href="mailto:ivansaenz66@hotmail.com?Subject=Hello%20again" target="_top">HOTMAIL: ivansaenz66@hotmail.com</a></p> 
        <p><a href="mailto:blacknoize1@gmail.com?Subject=Hello%20again" target="_top">GMAIL: blacknoize1@gmail.com</a></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!--Fin boton de E-Mail-->



<!-- Boton para Direccion -->
<button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#addressModal">Mailing Address</button>

<!-- Modal -->
<div id="addressModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Contenido del Modal -->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">MAILING ADDRESS</h4>
      </div>
      <div class="modal-body">
        <p>811 W. Eagle</p> 
        <p>Pharr,TX</p> 
        <p>ZIP:78577</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!--Fin boton de direccion-->

<!-- Boton para Telefonos -->
<button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#phoneModal">Phone Numbers</button>

<!-- Modal -->
<div id="phoneModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Contenido del Modal -->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">PHONE NUMBERS</h4>
      </div>
      <div class="modal-body">
        <h2>Booking in USA</h2> 
        <h3>Ivan Black</h3> 
        <p>(956) 685 4334</p>
        <h2>Booking in Mexico</h2> 
        <h3>Rik Molina</h3> 
        <p>(52) 1 55 3487 0980</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!--Fin boton de direccion-->

<a href="https://www.facebook.com/BlackNoize1?fref=ts"><img src="images\facebook.jpg" width="50" height="50"></a>

</center>


<?php
    include '../view/public/footerinclude.php';
?>
