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

if(!empty($_POST)){
    if(isset($_POST['title']) && isset($_POST['link']) && isset($_POST['active']) && isset($_POST['token'])){
        $token=$_POST['token'];
        if($token==$SessionUser->token){
            $Video= new VideoObj();
            $Video->title=$_POST['title'];
            $link_qs=$_POST['link'];
            $Video->link=  base64_encode($link_qs);
            $Video->active=$_POST['active'];
            if(isset($_POST['showonpage'])){
                if($_POST['showonpage']==""){
                    $Video->showonpage=0;
                }else{
                    $Video->showonpage=1;
                }
            }else{
                $Video->showonpage=0;
            }
            
            $_ADOVideos = new ADOVideos();
            $_ADOVideos->debug=$debug;
            $_ADOVideos->AddNewVideo($Video);
            
            if($debug){
                echo '<br/> Record Added';
            }
            
        }
    }
}


if(!$debug){
    header("Location: $redirectpage");
    die();
}
