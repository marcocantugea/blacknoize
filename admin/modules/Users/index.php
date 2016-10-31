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
    
    //Load users
    $listofusers = new ArrayList;
    $_ADOUser= new ADOUsers;
    $_ADOUser->getUsuarios($listofusers);
?>
<?php
    include '../../../view/admin/headinclude.php';
?>
<?php
    include '../../../view/admin/menuinclude.php';
?>

<form id="NewUser" method="post" action="addnew.php">
    <div style="width: 100%;">
        <h3>User Administration</h3>
        <div class="btn-group btn-group-lg" style="margin-left: 10px;">
            <a href="NewUser.php" class="btn btn-danger ">Add new User</a>
        </div>
            
    </div>
</form>

<div style="padding-left: 20%">
<table style="width: 70%" class="tbldata">
    <tr>
        <th>User login</th>
        <th>User Email</th>
        <th>Options</th>
    </tr>
        <?php
            foreach($listofusers->array as $item){
        ?>
    <tr>
        
        <td><?php echo $item->user?></td>
        <td><?php echo $item->email?></td>
        <td>
            <div>
                <button id="btn_edit_<?php echo $item->iduser?>">Edit</button>
                <?php if($item->active=="1"){ ?>
                <button id="btn_deactivate_<?php echo $item->iduser?>">Deactivate</button>
                <?php }else{?>
                <button id="btn_activate_<?php echo $item->iduser?>">Activate</button>
                <?php } ?>
                <button id="btn_delete_<?php echo $item->iduser?>">Delete</button>
            </div>
        </td>
        
    </tr>
    <?php
            }
        ?>
</table>
</div>
<script src="../../../js/jquery-1.12.1.min.js"></script>
<script type="text/javascript">
    $("button[id^='btn_']").click(function(){
        var idbutton= $(this).attr("id");
        var val=idbutton.split("_");
        var id=val[2];
        var action=val[1];
        
        if(action=="edit"){
           document.location.href="EditUser.php?param1=<?php echo $token?>&param2="+id; 
        }
        
        if(action=="activate"){
             document.location.href="changeactivate.php?param1=<?php echo $token?>&param2="+id+"&param3=1";
        }
        if(action=="deactivate"){
             document.location.href="changeactivate.php?param1=<?php echo $token?>&param2="+id+"&param3=0";
        }
        if(action=="delete"){
             document.location.href="deleteUser.php?param1=<?php echo $token?>&param2="+id;
        }
        
    });
</script>
<?php
include '../../../view/admin/footerinclude.php';
?>