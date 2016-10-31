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
    include "topinclude.php";
    $SessionUser= unserialize($_SESSION['UserObj']);
    $SessionUser->GenerateToken();
    $token=$SessionUser->token;
    
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
    include '../../../view/admin/headinclude.php';
?>
<?php
    include '../../../view/admin/menuinclude.php';
?>

<div style="width: 100%;">
        <h3>Photos Administration</h3>
        <div class="btn-group btn-group-lg" style="margin-left: 10px;">
            <a href="AddNewPhoto.php" class="btn btn-danger ">Add new Photo</a>
        </div>      
</div>
<div>
<?php
    $cont=0;
    foreach($ListOfPhotos->array as $item){
?>
    <div style="width: 220px; height: 220px; border: white solid thin; margin: 20px; padding: 10px; float: left ">
        <table>
            <tr>
                <td>
                    <input id="param2_<?php echo $cont;?>" type="hidden" value="<?php echo base64_encode($item->photopathserver);?>" name="param2" />
                    <input id="param1_<?php echo $cont;?>" type="hidden" value="<?php echo $token?>" name="param1" />
                    <img src="<?php echo $item->photowebpath?>" width="200px" height="150px"/>
                </td>
            </tr>
            <tr>
                <td style="text-align: center; padding: 10px;">
                    <button id="btn_delete_<?php echo $cont;?>" >Delete Photo</button>
                </td>
            </tr>
        </table>
    </div>
<?php
    $cont+=1;
    }
?>
</div>
<script type="text/javascript">
    $("button[id^=btn_]").click(function(){
        var idbutton= $(this).attr("id");
        var val=idbutton.split("_");
        var id=val[2];
        var action=val[1];
        var param1=$("#param1_"+id.toString()+"").val();
        var param2=$("#param2_"+id.toString()+"").val();
        if(action=="delete"){
            document.location.href="deletephoto.php?param1="+param1+"&param2="+param2;
        }
    });
</script>

<?php
include '../../../view/admin/footerinclude.php';
?>