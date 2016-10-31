
<?php
    
    $globalpath= $config->domain."/".$config->pathServer;
?>
<!--Inicio Barra de Menu-->
<div class="btn-group btn-group-justified">
        <a href="<?php echo $globalpath."/admin/"?>index.php" class="btn btn-danger active">HOME</a>
        <a href="<?php echo $globalpath."/admin/"?>modules/news/index.php" class="btn btn-danger">MANAGE NEWS</a>
        <a href="<?php echo $globalpath."/admin/"?>modules/tourdates/index.php" class="btn btn-danger">MANAGE TOUR DATES</a>
        <a href="<?php echo $globalpath."/admin/"?>modules/Users/index.php" class="btn btn-danger">USERS</a>
        <a href="<?php echo $globalpath."/admin/"?>modules/photos/index.php" class="btn btn-danger">PHOTOS</a>
        <a href="<?php echo $globalpath."/admin/"?>modules/videos/index.php" class="btn btn-danger">VIDEOS</a>
        
        <a href="<?php echo $globalpath."/admin/"?>logout.php" class="btn btn-danger">LOGOUT</a>
</div>
<br>
<!--Final Barra de Menu-->