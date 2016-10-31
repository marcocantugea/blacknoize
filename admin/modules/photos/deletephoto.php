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

if(isset($_GET)){
    if(isset($_GET['param1']) && isset($_GET['param2']) ){
        $token_qs=$_GET['param1'];
        if($token==$token_qs){
            $file_qs=$_GET['param2'];
            $filetodelete= base64_decode($file_qs);
            if(file_exists($filetodelete)){
                unlink($filetodelete);
                if($debug){
                    echo 'file deleted: '.$filetodelete.'<br/>';
                }
            }
        }
    }
}

if(!$debug){
    header("Location: $redirectpage");
    die();
}
