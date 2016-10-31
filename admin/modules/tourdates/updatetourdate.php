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
    if(isset($_POST['title']) && isset($_POST['date_tour']) && isset($_POST['tourdesc']) && isset($_POST['token']) && isset($_POST['active']) && isset($_POST['idtourdates']) ){
        $token=$_POST['token'];
        if($token==$SessionUser->token){
            $tourdate= new TourDates();
            $tourdate->title=$_POST['title'];
            $tourdate->tourdate=$_POST['date_tour'];
            $tourdate->tourdesc=  base64_encode($_POST['tourdesc']);
            $tourdate->active=$_POST['active'];
            $tourdate->idtourdates=$_POST['idtourdates'];
            if(isset($_POST['show'])){
                if(!empty($_POST['show'])){
                    $tourdate->showonpage=1;
                }else{
                    $tourdate->showonpage=0;
                }
            }
            
            $_ADOTourDates = new ADOTourDates();
            $_ADOTourDates->debug=$debug;
            $_ADOTourDates->UpdateTourDate($tourdate);
            
            if($debug){
                echo '<br/> Record Added';
            }
        }
    }
}

unset($_ADOTourDates);
unset($tourdate);

if(!$debug){
    header("Location: $redirectpage");
    die();
}
