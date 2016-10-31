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
    include "../topInclude.php";
    if(isset($_GET)){
        if(isset($_GET['q'])){
            $code=  $_GET['q'];
            $phototoshow=base64_decode($code);
            $photo= new PhotoObj();
            $photo->SetPhoto($phototoshow);
            
        }
    }
?>
<?php
    include '../view/public/headinclude.php';
?>

<?php
    include '../view/public/menuinclude.php';
?>

<div id="viewphoto-photo-content">
    <img id="photofull" src="<?php echo $photo->photowebpath;?>" width="70%">
</div>
<?php
    include '../view/public/footerinclude.php';
?>