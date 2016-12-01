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

include 'topinclude.php';
$Showlogin= $_SESSION['Show_Loggin'];
$failsattemp=0;
if(isset($_SESSION['failedattemps'])){
    $failsattemp=$_SESSION['failedattemps'];
}else{
    $_SESSION['failedattemps']=0;
}
$_SESSION['captcha'] = simple_php_captcha();

?>
<?php
    include '../view/admin/headinclude.php';
?>
<?php

if($Showlogin){
        include './loggincontrol.php';
    }else{
        include '../view/admin/menuinclude.php';
    }
?>
<?php
    /** check web counter
     * 
     */

    $file=  fopen("../public/hitcounter.txt", "r") or die("Unable to open file!");;
    $actualcounter= fread($file,filesize("../public/hitcounter.txt"));
    fclose($file);
?>
<div style="width: 100%">
    <center>
        <div style="width: 450px;height: 250px; border: red thick solid">
            <img src="images/icon-visitor-blue.png" alt="" width="100px"/>
            <h1>Visitors Counter</h1>
            <h1><?php echo $actualcounter;?></h1>
        </div>
    </center>
</div>
<?php
include '../view/admin/footerinclude.php';
?>