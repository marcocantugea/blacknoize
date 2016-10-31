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

/**
 * Description of ADOVideos
 *
 * @author MarcoCantu
 */
class ADOVideos {
    private $mysqlconector;
    public $debug=false;
    
    public function __construct() {
        $this->mysqlconector= new MysqlConnector();
    }
    
    public function AddNewVideo($VideoObj){
        if(!empty($VideoObj)){
            $this->mysqlconector->OpenConnection();
            $title=  mysqli_real_escape_string($this->mysqlconector->conn,$VideoObj->title);
            $link= mysqli_real_escape_string($this->mysqlconector->conn,$VideoObj->link);
            $active=  mysqli_real_escape_string($this->mysqlconector->conn,$VideoObj->active);
            $showonpage= mysqli_real_escape_string($this->mysqlconector->conn,$VideoObj->showonpage);
            
            $query= new SqlQueryBuilder("insert");
            $query->setTable("videos");
            $query->addColumn("title");
            $query->addColumn("link");
            $query->addColumn("active");
            $query->addColumn("showonpage");
            
            $query->addValue($title);
            $query->addValue($link);
            $query->addValue($active);
            $query->addValue($showonpage);
            
            
            if($this->debug){
                echo '<br/>'. $query->buildQuery();
            }
            
            $result=  $this->mysqlconector->conn->query($query->buildQuery()) or trigger_error("Error ADOUsers::AddNewUser:mysqli=".mysqli_error($this->mysqlconector->conn),E_USER_ERROR);

            $this->mysqlconector->CloseDataBase();
        }
    }
    
    public function UpdateVideo($VideoObj){
        if(!empty($VideoObj)){
            $this->mysqlconector->OpenConnection();
            $title=  mysqli_real_escape_string($this->mysqlconector->conn,$VideoObj->title);
            $link= mysqli_real_escape_string($this->mysqlconector->conn,$VideoObj->link);
            $active=  mysqli_real_escape_string($this->mysqlconector->conn,$VideoObj->active);
            $showonpage= mysqli_real_escape_string($this->mysqlconector->conn,$VideoObj->showonpage);
            $idvideos= mysqli_real_escape_string($this->mysqlconector->conn,$VideoObj->idvideos);
            
            $query= new SqlQueryBuilder("update");
            $query->setTable("videos");
            $query->addColumn("title");
            $query->addColumn("link");
            $query->addColumn("active");
            $query->addColumn("showonpage");
            
            $query->addValue($title);
            $query->addValue($link);
            $query->addValue($active);
            $query->addValue($showonpage);
            
            $query->setWhere("idvideos=$idvideos");
            
            if($this->debug){
                echo '<br/>'. $query->buildQuery();
            }
            
            $result=  $this->mysqlconector->conn->query($query->buildQuery()) or trigger_error("Error ADOUsers::AddNewUser:mysqli=".mysqli_error($this->mysqlconector->conn),E_USER_ERROR);

            $this->mysqlconector->CloseDataBase();
        }
    }
    
    public function DeleteVideo($VideoObj){
        if(!empty($VideoObj)){
            $this->mysqlconector->OpenConnection();
            $idvideos= mysqli_real_escape_string($this->mysqlconector->conn,$VideoObj->idvideos);
            
            $query= new SqlQueryBuilder("delete");
            $query->setTable("videos");            
            $query->setWhere("idvideos=$idvideos");
            
            if($this->debug){
                echo '<br/>'. $query->buildQuery();
            }
            
            $result=  $this->mysqlconector->conn->query($query->buildQuery()) or trigger_error("Error ADOUsers::AddNewUser:mysqli=".mysqli_error($this->mysqlconector->conn),E_USER_ERROR);

            $this->mysqlconector->CloseDataBase();
        }
    }
    
    public function GetAllVideos($ListVideos){
        if(!empty($ListVideos)){
            $this->mysqlconector->OpenConnection();
            $query= new SqlQueryBuilder("select");
            $query->setTable("videos");
            $query->addColumn("title");
            $query->addColumn("link");
            $query->addColumn("active");
            $query->addColumn("showonpage");
            $query->addColumn("idvideos");
            
            if($this->debug){
                echo '<br/>'. $query->buildQuery();
            }
            
            $result=  $this->mysqlconector->conn->query($query->buildQuery()) or trigger_error("Error ADOUsers::AddNewUser:mysqli=".mysqli_error($this->mysqlconector->conn),E_USER_ERROR);
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()) {
                    $video= new VideoObj();
                    $video->idvideos=$row['idvideos'];
                    $video->title=$row['title'];
                    $video->link=$row['link'];
                    $video->showonpage=$row['showonpage'];
                    $video->active=$row['active'];
                    $ListVideos->addItem($video);
                }
            }
            
            $this->mysqlconector->CloseDataBase();
        }
        
    }
    public function GetPublicVideos($ListVideos){
        if(!empty($ListVideos)){
            $this->mysqlconector->OpenConnection();
            $query= new SqlQueryBuilder("select");
            $query->setTable("videos");
            $query->addColumn("title");
            $query->addColumn("link");
            $query->addColumn("active");
            $query->addColumn("showonpage");
            $query->addColumn("idvideos");
            $query->setWhere("showonpage=1 and active=1");
            
            if($this->debug){
                echo '<br/>'. $query->buildQuery();
            }
            
            $result=  $this->mysqlconector->conn->query($query->buildQuery()) or trigger_error("Error ADOUsers::AddNewUser:mysqli=".mysqli_error($this->mysqlconector->conn),E_USER_ERROR);
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()) {
                    $video= new VideoObj();
                    $video->idvideos=$row['idvideos'];
                    $video->title=$row['title'];
                    $video->link=$row['link'];
                    $video->showonpage=$row['showonpage'];
                    $video->active=$row['active'];
                    $ListVideos->addItem($video);
                }
            }
            
            $this->mysqlconector->CloseDataBase();
        }
        
    }
    
    public function GetVideo($VideoObj){
        if(!empty($VideoObj)){
            $this->mysqlconector->OpenConnection();
            $idvideos= mysqli_real_escape_string($this->mysqlconector->conn,$VideoObj->idvideos);
            
            $query= new SqlQueryBuilder("select");
            $query->setTable("videos");
            $query->addColumn("title");
            $query->addColumn("link");
            $query->addColumn("active");
            $query->addColumn("showonpage");
            $query->addColumn("idvideos");
            $query->setWhere("idvideos=$idvideos");
            
            if($this->debug){
                echo '<br/>'. $query->buildQuery();
            }
            
            $result=  $this->mysqlconector->conn->query($query->buildQuery()) or trigger_error("Error ADOUsers::AddNewUser:mysqli=".mysqli_error($this->mysqlconector->conn),E_USER_ERROR);
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()) {
                    $VideoObj->idvideos=$row['idvideos'];
                    $VideoObj->title=$row['title'];
                    $VideoObj->link=$row['link'];
                    $VideoObj->showonpage=$row['showonpage'];
                    $VideoObj->active=$row['active'];
                }
            }
            
            $this->mysqlconector->CloseDataBase();
        }
        
    }
    
    public function ShowNewsOnPage($VideoObj){
        if(!empty($VideoObj)){
            $this->mysqlconector->OpenConnection();
            $showonpage= mysqli_real_escape_string($this->mysqlconector->conn,$VideoObj->showonpage);
            $idvideos= mysqli_real_escape_string($this->mysqlconector->conn,$VideoObj->idvideos);
            
            $query= new SqlQueryBuilder("update");
            $query->setTable("videos");
            $query->addColumn("showonpage");
            $query->setWhere("idvideos=$idvideos");
            
            $query->addValue($showonpage);
            
            if($this->debug){
                echo '<br/>'. $query->buildQuery();
            }
            
            $result=  $this->mysqlconector->conn->query($query->buildQuery()) or trigger_error("Error ADOUsers::AddNewUser:mysqli=".mysqli_error($this->mysqlconector->conn),E_USER_ERROR);
            
            unset($result);
            unset($sqlobj);
            
            $this->mysqlconector->CloseDataBase();
        }
    }
    
    public function ChangeActivation($VideoObj){
        if(!empty($VideoObj)){
            $this->mysqlconector->OpenConnection();
            $active= mysqli_real_escape_string($this->mysqlconector->conn,$VideoObj->active);
            $idvideos= mysqli_real_escape_string($this->mysqlconector->conn,$VideoObj->idvideos);
            
            $query= new SqlQueryBuilder("update");
            $query->setTable("videos");
            $query->addColumn("active");
            $query->setWhere("idvideos=$idvideos");
            
            $query->addValue($active);
            
            if($this->debug){
                echo '<br/>'. $query->buildQuery();
            }
            
            $result=  $this->mysqlconector->conn->query($query->buildQuery()) or trigger_error("Error ADOUsers::AddNewUser:mysqli=".mysqli_error($this->mysqlconector->conn),E_USER_ERROR);
            
            unset($result);
            unset($sqlobj);
            
            $this->mysqlconector->CloseDataBase();
        }
    }
    
    
}
