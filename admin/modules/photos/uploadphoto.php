<?php

/* 
 * Copyright (C) 2016 MarcoCantu
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

include "topinclude.php";
$debug=false;
$redirectpage="index.php";

$SessionUser= unserialize($_SESSION['UserObj']);
$SessionUser->GenerateToken();
$token=$SessionUser->token;

$savepath=$path=$_SERVER['DOCUMENT_ROOT']."/".$pathconfig."/public/photos/";

if(isset($_SESSION['UserObj'])){
    if($_FILES['fileselected']['error']>0){
        echo "Error al subir el archivo codigo: ".$_FILES['fileselected']['error']."<br />";
    }else{
        $kb=(int)$_FILES['fileselected']['size'];
        $l_kb= round($kb/1024);
        $filefullname=$savepath.$_FILES['fileselected']['name'];
        copy($_FILES['fileselected']['tmp_name'], $filefullname);
        
       if($debug){
            echo "Name: " . $_FILES['fileselected']['name']."<br/>";
            echo "Ext: " . $_FILES['fileselected']['type']."<br/>";
            echo "Size: ".$_FILES['fileselected']['size']."($l_kb KB) <br/>";
            echo "Ruta TMP: ".$_FILES['fileselected']['tmp_name']."<br/>";
            echo 'Saved Files in:'. $filefullname.'<br/>';
        }
    }
}
if(!$debug){
    header("Location: $redirectpage");
    die();
}
