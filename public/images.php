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
    include "../topInclude.php";
    
    $pathvideo= $config->domain."/".$config->pathServer;
     // Declare OG Facebook Meta Tags
    $_fgmetaog=  new ArrayList();
    $OGMeta= new OGMetaFacebookObj();
    $OGMeta->title="Black Noize | Photos - Oficial Web Site.";
    $OGMeta->description="Check out our Photo Collections of Black Noize";
    $OGMeta->url=$pathvideo."public/images.php";
    $OGMeta->image=$pathvideo."public/images/black_noize_facebook_photos.jpg";
    $OGMeta->imagewidth="500";
    $OGMeta->imageheight="236";
    $OGMeta->sitename="Black Noize | Official Web Site.";
    $OGMeta->typeog="Music";
    $_fgmetaog->addItem($OGMeta);

    //Declared Meta tags
    $_metatags = new MetaTagsObj();
    $_metatags->description="Black Noize photos and images , all pictures and photos realted of the band and live performance";
    $_metatags->title="Black Noize | Images and Photos.";
    $_metatags->lang="en";
    $_metatags->keywords="balck noize,photos,music,rock,band, images, live,performance,tocada,live performance";
    
    
    
    // serach for all photos in the public photo folder
    $path=$_SERVER['DOCUMENT_ROOT'].$pathconfig."/public/photos";
    $ListOfPhotos = new ArrayList();
    foreach(glob($path.'/*.jpg') as $filename){
        $photo= new PhotoObj();
        $photo->SetPhoto($filename);
        $ListOfPhotos->addItem($photo);
    }
    
?>
<?php
    include '../view/public/headinclude.php';
?>

<?php
    include '../view/public/menuinclude.php';
?>
<div id="photos-main-container">
<?php
    $cont=0;
    foreach($ListOfPhotos->array as $item){
?>
    <div style="width: 320px; height: 270px; border: #233448 solid thin; margin: 20px; padding: 10px; float: left ">
        <table>
            <tr>
                <td>
                    <input id="param2_<?php echo $cont;?>" type="hidden" value="<?php echo base64_encode($item->photopathserver);?>" name="param2" />
                    <img id="img_<?php echo $cont;?>" src="<?php echo $item->photowebpath?>" width="300px" height="250px"/>
                </td>
            </tr>
        </table>
    </div>
<?php
    $cont+=1;
    }
?>
 </div>

<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript">
     $("img[id^='img_']").click(function(){
        var idbutton= $(this).attr("id");
        var val=idbutton.split("_");
        var id=val[1];
        var imgtag="#param2_"+id;
        var valimage=$(imgtag).val();
        document.location.href="viewphoto.php?q="+valimage;
     });
</script>
<?php
    include '../view/public/footerinclude.php';
?>
