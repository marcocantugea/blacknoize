
<?php
    
    $globalpath= $config->domain."/".$config->pathServer;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Welcome to Black Noize Admin Web Site</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EDGE" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo $globalpath?>\public\bootstrap\css\bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $globalpath?>\css\admin.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo $globalpath?>/include/external/wymeditor/skins/default/skin.css">
  <script src="<?php echo $globalpath?>\public\bootstrap\jquery\jquery-2.1.4.min.js"></script>
  <script src="<?php echo $globalpath?>\public\bootstrap\js\bootstrap.min.js"></script>
  <link href="<?php echo $globalpath?>\public\Content\Site.css" rel="stylesheet">
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script type="text/javascript">
  tinymce.init({
    selector: '#myTextarea',
    theme: 'modern',
    width: 900,
    height: 600,
    plugins: [
      'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
      'save table contextmenu directionality emoticons template paste textcolor'
    ],
    content_css: 'css/content.css',
    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons'
  });
  </script>
</head>
<body>
    
    <!--Inicio Imagen titulo-->
<div class="container-fluid">
<div class="row"> 
    <div style="width: 100%; text-align: center;"><img src="<?php echo $globalpath?>\public\images\black_noize_logo_negro.png" width="150"></div>
  <!--<div class="col-sm-6"><img src="<?php echo $globalpath?>\public\images\foto1.jpg" width="500" height="236"></div>
  <div class="col-sm-3"><img src="<?php echo $globalpath?>\public\images\black_noize.jpg" width="304" height="236"></div>-->
</div>
</div>
    <div>
        <h1>&nbsp;Administration Site</h1>   
    </div>
<!--Final Imagen titulo-->

