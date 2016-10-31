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
include '../view/admin/footerinclude.php';
?>