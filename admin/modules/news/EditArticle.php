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
    $loadinfo=false;
    
    //Load Article
    if(isset($_GET['param1']) && isset($_GET['param2']) ){
        $tokenp=$_GET['param1'];
        $idnews=$_GET['param2'];
        if($tokenp==$token){
            //load news
            $Article= new NewsObj();
            $_ADONews= new ADONews();
            $Article->idnews=$idnews;
            $_ADONews->GetArticle($Article);
        }
    }
    
    if(!empty($Article)){
        $loadinfo=true;
    }
    
    
?>
<?php
    include '../../../view/admin/headinclude.php';
?>
<?php
    include '../../../view/admin/menuinclude.php';
?>

<div>
    <form method="post" action="updatenews.php" >
    <div  style="width: 100%">
        <h3>New Article</h3>
        <div style="margin: 15px;">
            <label >Title:</label> <input type="text" value="<?php if($loadinfo){ echo $Article->title;}?>" name="title" style="width:  80%" />
            <br/>
            <br/>
            <label >Sub Title:</label> <input type="text" value="<?php if($loadinfo){ echo $Article->subtitle;}?>" name="subtitle" style="width:  80%" />
            <br/>
            <br/>
            <label >Date:</label> <input type="text" value="<?php if($loadinfo){ echo $Article->newsdate;}?>" id="newsdate" name="newsdate" style="width:20%" />
            <br/>
            <br/>
            <div style="width: 100%;">
                <textarea id='myTextarea' name="articule"><?php if($loadinfo){ echo base64_decode($Article->articule);}?></textarea>
            </div>
             <br/>
            <br/>
            <input  type="checkbox" value="1" name="showonpage" <?php if($loadinfo){ if($Article->showonpage==1){echo 'checked="true"'; }}?>> Show in Web Page
            <br/>
            <br/>
            <div style="width: 100%; text-align: center">
                <input type="hidden" value="<?php echo $token;?>" name="token"/>
                <input type="hidden" value="<?php if($loadinfo){ echo $Article->active;}?>" name="active" />
                 <input type="hidden" value="<?php if($loadinfo){ echo $Article->idnews;}?>" name="idnews" />
                <button style="width: 50%">Save Article</button>
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
   /* $(function() {
            $('.wymeditor').wymeditor();
        });
        */
    $("#newsdate").datepicker({dateFormat: "yy-mm-dd"});
</script>
<?php
include '../../../view/admin/footerinclude.php';
?>