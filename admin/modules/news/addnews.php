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
//load user session

$SessionUser= unserialize($_SESSION['UserObj']);
$SessionUser->GenerateToken();


if(!empty($_POST)){
    if(isset($_POST['title']) && isset($_POST['subtitle']) && isset($_POST['newsdate']) && isset($_POST['articule']) && isset($_POST['active']) && isset($_POST['token'])){
        $token=$_POST['token'];
        if($token==$SessionUser->token){
            $newarticle= new NewsObj();
            $newarticle->title=$_POST['title'];
            $newarticle->subtitle=$_POST['subtitle'];
            $newarticle->newsdate=$_POST['newsdate'];
            $newarticle->articule= base64_encode($_POST['articule']);
            $newarticle->active=$_POST['active'];
            if(isset($_POST['showonpage'])){
                if($_POST['showonpage']==""){
                    $newarticle->showonpage=0;
                }else{
                    $newarticle->showonpage=1;
                }
            }else{
                $newarticle->showonpage=0;
            }
            
            $_ADONews= new ADONews();
            $_ADONews->debug=$debug;
            $_ADONews->AddNews($newarticle);
            
            if($debug){
                echo '<br/> Record Added';
            }
        }
    }
}

unset($token);
unset($NewUser);
unset($_ADOUser);


if(!$debug){
    header("Location: $redirectpage");
    die();
}

        

