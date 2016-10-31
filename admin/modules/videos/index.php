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
    
    //load all videos
    $ListVideos= new ArrayList();
    $_ADOVideos = new ADOVideos();
    $_ADOVideos->GetAllVideos($ListVideos);
    
?>
<?php
    include '../../../view/admin/headinclude.php';
?>
<?php
    include '../../../view/admin/menuinclude.php';
?>

<div style="width: 100%;">
        <h3>Videos Administration</h3>
        <div class="btn-group btn-group-lg" style="margin-left: 10px;">
            <a href="AddVideo.php" class="btn btn-danger ">Add new Video</a>
        </div>      
</div>
<p></p>
<div style="width: 100%; padding-left: 5%">
     <table style="width: 95%" class="tbldata">
         <tr>
            <th>#</th>
            <th>Title</th>
            <th>Options</th>
        </tr>
        <?php foreach($ListVideos->array as $item){?>
        <tr>
            <td><?php echo $item->idvideos?></td>
            <td><?php echo $item->title?></td>
            <td>
                <button id="btn_view_<?php echo $item->idvideos;?>">View</button>
                <button id="btn_edit_<?php echo $item->idvideos;?>">Edit</button>
                <?php if($item->showonpage==0) {?>
                    <button id="btn_show_<?php echo $item->idvideos;?>">Show on page</button>
                <?php }else{?>
                    <button id="btn_hide_<?php echo $item->idvideos;?>">Hide on page</button>
                <?php } ?>
                <?php if($item->active==1) {?>
                    <button id="btn_deactivate_<?php echo $item->idvideos;?>">Deactivate</button>
                <?php }else{?>
                    <button id="btn_activate_<?php echo $item->idvideos;?>">Activate</button>
                <?php } ?>
                    <button id="btn_delete_<?php echo $item->idvideos;?>">Delete</button>
                    <input type="hidden" id="id_<?php echo $item->idvideos;?>" value="<?php echo base64_encode($item->idvideos);?>" />
            </td>
        </tr>
        <?php }?>
     </table>   
</div>

<script type="text/javascript">
    $("button[id^='btn_']").click(function(){
        var idbutton= $(this).attr("id");
        var val=idbutton.split("_");
        var id=val[2];
        var action=val[1];
        var code=$("#id_"+id.toString()+"").val();
        if(action=="view"){
            window.open("<?php echo $globalpath?>/public/viewvideo.php?q="+code)
        }
        if(action=="edit"){
            document.location.href="EditVideo.php?param1=<?php echo $token?>&param2="+id;
        }
        if(action=="show"){
            document.location.href="changeshowstatus.php?param1=<?php echo $token?>&param2="+id+"&param3=1";
        }
        if(action=="hide"){
            document.location.href="changeshowstatus.php?param1=<?php echo $token?>&param2="+id+"&param3=0";
        }
        if(action=="activate"){
            document.location.href="changeactivestatus.php?param1=<?php echo $token?>&param2="+id+"&param3=1";
        }
        if(action=="deactivate"){
            document.location.href="changeactivestatus.php?param1=<?php echo $token?>&param2="+id+"&param3=0";
        }
        if(action=="delete"){
            document.location.href="deletevideo.php?param1=<?php echo $token?>&param2="+id;
        }
    });
</script>

<?php
include '../../../view/admin/footerinclude.php';
?>