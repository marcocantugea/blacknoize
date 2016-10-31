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
    if(isset($_POST['newuser']) && isset($_POST['newuseremail']) && isset($_POST['newpass']) && isset($_POST['active']) && isset($_POST['token'])){
        $token=$_POST['token'];
        if($token==$SessionUser->token){
            $NewUser = new UserObj();
            $NewUser->iduser=$_POST['iduser'];
            $NewUser->user=$_POST['newuser'];
            $NewUser->email=$_POST['newuseremail'];
            $NewUser->pass=$_POST['newpass'];
            $NewUser->active=$_POST['active'];
            $_ADOUser =  new ADOUsers();
            $_ADOUser->debug=$debug;

            if($NewUser->pass==""){
                $_ADOUser->UpdateUser($NewUser);
            }  else {
                $_ADOUser->UpdateUserPassword($NewUser, $NewUser->pass);
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

        

