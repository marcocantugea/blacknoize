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
    if(isset($_GET['param2']) && isset($_GET['param1']) && isset($_GET['param3'])){
        $token=$_GET['param1'];
        if($token==$SessionUser->token){
            $tourdate= new TourDates();
            $tourdate->idtourdates=$_GET['param2'];
            $_ADOTourDates = new ADOTourDates();
            $_ADOTourDates->debug=$debug;
            if(isset($_GET['param3'])){
                if($_GET['param3']=="1"){
                    $tourdate->active=1;
                    $_ADOTourDates->ActiveTourDate($tourdate);
                }else{
                    $tourdate->active=0;
                    $_ADOTourDates->DeactiveTourDate($tourdate);
                }
            }
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
