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
    
    $redirectpage="index.php";
    
    $SessionUser= unserialize($_SESSION['UserObj']);
    $SessionUser->GenerateToken();
    $token=$SessionUser->token;
    if(isset($_GET)){
        if(isset($_GET['param1']) && isset($_GET['param2'])){
            $token_qs = $_GET['param1'];            
            if($token==$token_qs){
                $idnews=$_GET['param2'];   
            }
            
        }
    }
    
    if(isset($_POST)){
        if(isset($_POST['idnews']) && isset($_POST['token'])){
            $token_qs= $_POST['token'];
            $id_qs=$_POST['idnews'];
            if($token_qs==$token){
                $News= new NewsObj();
                $News->idnews=$id_qs;
                $_ADONews= new ADONews();
                $_ADONews->DeleteNews($News);
                echo '<script type="text/javascript" > document.location.href="'.$redirectpage.'"</script>';
            }
        }
    }
    
    
?>
<?php
    include '../../../view/admin/headinclude.php';
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form id="deleteUser" method="post" action="deletenews.php">
    <div class="addnew" style="width: 500px;">
        <h3>Are you sure you want to delete this Record?</h3>
        <table style="width: 100%">
            <tr>
                <td colspan="2" style="text-align: center">
                    <input type="hidden" name="token" value="<?php echo $token; ?>">
                    <input type="hidden" name="idnews" value="<?php echo $idnews; ?>">
                    
                    <button id="btn_yes" style="width: 80%; margin-top: 10px;" >Yes</button>
                </td>
                <td>
                    <button id="btn_no" style="width: 80%; margin-top: 10px;" >No</button>
                </td>
            </tr>
        </table>
    </div>
</form>
<script src="../../../js/jquery-1.12.1.min.js"></script>
<script type="text/javascript">
    $("button[id^='btn']").click(function(){
        var returnval=false;
        var idbutton= $(this).attr("id");
        var val=idbutton.split("_");
        var action=val[1];
        
        if(action==="no"){
            document.location.href="<?php echo $redirectpage?>";
        }
        
        if(action=="yes"){
            returnval=true;
        }
        
    return returnval;
    });
</script>
<?php
    include '../../../view/admin/footerinclude.php';
?>