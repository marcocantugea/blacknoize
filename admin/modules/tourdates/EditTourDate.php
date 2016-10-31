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
    
    if(isset($_GET['param1']) && isset($_GET['param2'])){
        $token_qs=$_GET['param1'];
        if($token_qs==$token){
            $tourdate= new TourDates();
            $tourdate->idtourdates=$_GET['param2'];
            $_ADOTourDates= new ADOTourDates();
            $_ADOTourDates->getTourDate($tourdate);
        }
    }
    
    
?>
<?php
    include '../../../view/admin/headinclude.php';
?>
<?php
    include '../../../view/admin/menuinclude.php';
?>

<div>
    <form method="post" action="updatetourdate.php" >
    <div  style="width: 100%">
        <h3>New Tour Date</h3>
        <div style="margin: 15px;">
            <label >Title:</label> <input type="text" value="<?php echo $tourdate->title?>" name="title" style="width:  80%" />
            <br/>
            <br/>
            <label >Date:</label> <input type="text" value="<?php echo $tourdate->tourdate?>" name="date_tour" style="width:20%" />
            <br/>
            <br/>
            <div style="width: 100%;">
                <textarea id='myTextarea' name="tourdesc" class="wymeditor"><?php echo base64_decode($tourdate->tourdesc)?></textarea>
            </div>
             <br/>
            <br/>
            <input  type="checkbox" value="1" name="show" <?php if($tourdate->showonpage==1) echo 'checked="true"'; ?> > Show in Web Page
            <br/>
            <br/>
            <div style="width: 100%; text-align: center">
                <input type="hidden" value="<?php echo $token;?>" name="token"/>
                <input type="hidden" value="<?php echo $tourdate->active?>" name="active" />
                <input type="hidden" value="<?php echo $tourdate->idtourdates?>" name="idtourdates">
                <button style="width: 50%">Save Tour Date</button>
            </div>
            
            <br/>
            <br/>
        </div>
    </div>
    </form>
</div>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="../../../include/external/wymeditor/jquery.wymeditor.js"></script>
<script src="../../../include/external/wymeditor/jquery.wymeditor.min.js"></script>
<script type="text/javascript" >
    /*$(function() {
            $('.wymeditor').wymeditor();
        });
     */   
    $("input[name*='date_']" ).datepicker({dateFormat: "yy-mm-dd"});
</script>
<?php
include '../../../view/admin/footerinclude.php';
?>