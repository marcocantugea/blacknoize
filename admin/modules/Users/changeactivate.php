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


if(!empty($_GET)){
    if(isset($_GET['param1']) && isset($_GET['param2']) && isset($_GET['param3'])){
        $token=$_GET['param1'];
        if($token==$SessionUser->token){
            $NewUser = new UserObj();
            $NewUser->iduser=$_GET['param2'];
            $NewUser->active=$_GET['param3'];
            $_ADOUser =  new ADOUsers();
            $_ADOUser->debug=$debug;

            if($NewUser->active=="1"){
                $_ADOUser->ActivateUser($NewUser);
            } 
            
            if($NewUser->active=="0"){
                $_ADOUser->DeactivateUser($NewUser);
            } 

            
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