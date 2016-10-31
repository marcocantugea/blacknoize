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
 * Description of ADONews
 *
 * @author MarcoCantu
 */
class ADONews {
    private $mysqlconector;
    public $debug=false;
    
    public function __construct() {
        $this->mysqlconector= new MysqlConnector();
    }
    
    public function __destruct() {
        unset($this->mysqlconector);
        unset($this->debug);
    }
    
    public function AddNews($NewsObj){
        if(!empty($NewsObj)){
            $this->mysqlconector->OpenConnection();
            $title= mysqli_real_escape_string($this->mysqlconector->conn,$NewsObj->title);
            $subtitle= mysqli_real_escape_string($this->mysqlconector->conn,$NewsObj->subtitle);
            $articule= mysqli_real_escape_string($this->mysqlconector->conn,$NewsObj->articule);
            $showonpage= mysqli_real_escape_string($this->mysqlconector->conn,$NewsObj->showonpage);
            $active= mysqli_real_escape_string($this->mysqlconector->conn,$NewsObj->active);
            $newsdate= mysqli_real_escape_string($this->mysqlconector->conn,$NewsObj->newsdate);
            
            $query= new SqlQueryBuilder("insert");
            $query->setTable("news");
            $query->addColumn("title");
            $query->addColumn("subtitle");
            $query->addColumn("articule");
            $query->addColumn("showonpage");
            $query->addColumn("active");
            $query->addColumn("newsdate");
            
            $query->addValue($title);
            $query->addValue($subtitle);
            $query->addValue($articule);
            $query->addValue($showonpage);
            $query->addValue($active);
            $query->addValue($newsdate);
            
            if($this->debug){
                echo '<br/>'. $query->buildQuery();
            }
            
            $result=  $this->mysqlconector->conn->query($query->buildQuery()) or trigger_error("Error ADOUsers::AddNewUser:mysqli=".mysqli_error($this->mysqlconector->conn),E_USER_ERROR);
            
            unset($result);
            unset($sqlobj);
            
            $this->mysqlconector->CloseDataBase();
        }
    }
    
    public function UpdateNews($NewsObj){
        if(!empty($NewsObj)){
            $this->mysqlconector->OpenConnection();
            $title= mysqli_real_escape_string($this->mysqlconector->conn,$NewsObj->title);
            $subtitle= mysqli_real_escape_string($this->mysqlconector->conn,$NewsObj->subtitle);
            $articule= mysqli_real_escape_string($this->mysqlconector->conn,$NewsObj->articule);
            $showonpage= mysqli_real_escape_string($this->mysqlconector->conn,$NewsObj->showonpage);
            $active= mysqli_real_escape_string($this->mysqlconector->conn,$NewsObj->active);
            $newsdate= mysqli_real_escape_string($this->mysqlconector->conn,$NewsObj->newsdate);
            $idnews=mysqli_real_escape_string($this->mysqlconector->conn,$NewsObj->idnews);
            
            $query= new SqlQueryBuilder("update");
            $query->setTable("news");
            $query->addColumn("title");
            $query->addColumn("subtitle");
            $query->addColumn("articule");
            $query->addColumn("showonpage");
            $query->addColumn("active");
            $query->addColumn("newsdate");
            $query->setWhere("idnews=$idnews");
            
            $query->addValue($title);
            $query->addValue($subtitle);
            $query->addValue($articule);
            $query->addValue($showonpage);
            $query->addValue($active);
            $query->addValue($newsdate);
            
            if($this->debug){
                echo '<br/>'. $query->buildQuery();
            }
            
            $result=  $this->mysqlconector->conn->query($query->buildQuery()) or trigger_error("Error ADOUsers::AddNewUser:mysqli=".mysqli_error($this->mysqlconector->conn),E_USER_ERROR);
            
            unset($result);
            unset($sqlobj);
            
            $this->mysqlconector->CloseDataBase();
        }
    }
    
    public function ShowNewsOnPage($NewsObj){
        if(!empty($NewsObj)){
            $this->mysqlconector->OpenConnection();
            $showonpage= mysqli_real_escape_string($this->mysqlconector->conn,$NewsObj->showonpage);
            $idnews=mysqli_real_escape_string($this->mysqlconector->conn,$NewsObj->idnews);
            
            $query= new SqlQueryBuilder("update");
            $query->setTable("news");
            $query->addColumn("showonpage");
            $query->setWhere("idnews=$idnews");
            
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
    public function ChangeActivation($NewsObj){
        if(!empty($NewsObj)){
            $this->mysqlconector->OpenConnection();
            $active= mysqli_real_escape_string($this->mysqlconector->conn,$NewsObj->active);
            $idnews=mysqli_real_escape_string($this->mysqlconector->conn,$NewsObj->idnews);
            
            $query= new SqlQueryBuilder("update");
            $query->setTable("news");
            $query->addColumn("active");
            $query->setWhere("idnews=$idnews");
            
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
    public function DeleteNews($NewsObj){
        if(!empty($NewsObj)){
            $this->mysqlconector->OpenConnection();
            $idnews=mysqli_real_escape_string($this->mysqlconector->conn,$NewsObj->idnews);
            
            $query= new SqlQueryBuilder("delete");
            $query->setTable("news");
            $query->setWhere("idnews=$idnews");
            
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
    
    public function GetAllNews($ListArticules){
        if(!empty($ListArticules)){
            $this->mysqlconector->OpenConnection();
            
            $query= new SqlQueryBuilder("select");
            $query->setTable("news");
            $query->addColumn("title");
            $query->addColumn("subtitle");
            $query->addColumn("articule");
            $query->addColumn("showonpage");
            $query->addColumn("active");
            $query->addColumn("newsdate");
            $query->addColumn("idnews");
            
            if($this->debug){
                echo '<br/>'. $query->buildQuery();
            }
            
            $result=  $this->mysqlconector->conn->query($query->buildQuery()) or trigger_error("Error ADOUsers::AddNewUser:mysqli=".mysqli_error($this->mysqlconector->conn),E_USER_ERROR);
            
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()) {
                    $Newsobj= new NewsObj();
                    $Newsobj->idnews=$row['idnews'];
                    $Newsobj->title=$row['title'];
                    $Newsobj->subtitle=$row['subtitle'];
                    $Newsobj->newsdate=$row['newsdate'];
                    $Newsobj->showonpage=$row['showonpage'];
                    $Newsobj->active=$row['active'];
                    $Newsobj->articule=$row['articule'];
                    $ListArticules->addItem($Newsobj);
                }
            }
            
            $this->mysqlconector->CloseDataBase();
            
        }
    }
    
    public function GetNews($ListArticules){
        if(!empty($ListArticules)){
            $this->mysqlconector->OpenConnection();
            
            $query= new SqlQueryBuilder("select");
            $query->setTable("news");
            $query->addColumn("title");
            $query->addColumn("subtitle");
            $query->addColumn("articule");
            $query->addColumn("showonpage");
            $query->addColumn("active");
            $query->addColumn("newsdate");
            $query->addColumn("idnews");
            $query->setWhere("active=1 and showonpage=1");
            $query->setOrderBy("newsdate desc");
            
            if($this->debug){
                echo '<br/>'. $query->buildQuery();
            }
            
            $result=  $this->mysqlconector->conn->query($query->buildQuery()) or trigger_error("Error ADOUsers::AddNewUser:mysqli=".mysqli_error($this->mysqlconector->conn),E_USER_ERROR);
            
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()) {
                    $Newsobj= new NewsObj();
                    $Newsobj->idnews=$row['idnews'];
                    $Newsobj->title=$row['title'];
                    $Newsobj->subtitle=$row['subtitle'];
                    $Newsobj->newsdate=$row['newsdate'];
                    $Newsobj->showonpage=$row['showonpage'];
                    $Newsobj->active=$row['active'];
                    $Newsobj->articule=$row['articule'];
                    $ListArticules->addItem($Newsobj);
                }
            }
            
            $this->mysqlconector->CloseDataBase();
            
        }
    }
    
    public function GetLatestNews($NewsObj){
        if(!empty($NewsObj)){
            $this->mysqlconector->OpenConnection();
            
            $query= new SqlQueryBuilder("select");
            $query->setTable("news");
            $query->addColumn("title");
            $query->addColumn("subtitle");
            $query->addColumn("articule");
            $query->addColumn("showonpage");
            $query->addColumn("active");
            $query->addColumn("newsdate");
            $query->addColumn("idnews");
            $query->setWhere("active=1 and showonpage=1");
            $query->setOrderBy("newsdate desc");
            $query->setLimit("1");
            
            if($this->debug){
                echo '<br/>'. $query->buildQuery();
            }
            
            $result=  $this->mysqlconector->conn->query($query->buildQuery()) or trigger_error("Error ADOUsers::AddNewUser:mysqli=".mysqli_error($this->mysqlconector->conn),E_USER_ERROR);
            
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()) {
                    $NewsObj->idnews=$row['idnews'];
                    $NewsObj->title=$row['title'];
                    $NewsObj->subtitle=$row['subtitle'];
                    $NewsObj->newsdate=$row['newsdate'];
                    $NewsObj->showonpage=$row['showonpage'];
                    $NewsObj->active=$row['active'];
                    $NewsObj->articule=$row['articule'];
                }
            }
            
            $this->mysqlconector->CloseDataBase();
            
        }
    }
    
    public function GetArticle($NewsObj){
        if(!empty($NewsObj)){
            $this->mysqlconector->OpenConnection();
            $idnews= mysqli_real_escape_string($this->mysqlconector->conn,$NewsObj->idnews);
            
            $query= new SqlQueryBuilder("select");
            $query->setTable("news");
            $query->addColumn("title");
            $query->addColumn("subtitle");
            $query->addColumn("articule");
            $query->addColumn("showonpage");
            $query->addColumn("active");
            $query->addColumn("newsdate");
            $query->addColumn("idnews");
            $query->setWhere("idnews=$idnews");
            
            if($this->debug){
                echo '<br/>'. $query->buildQuery();
            }
            
            $result=  $this->mysqlconector->conn->query($query->buildQuery()) or trigger_error("Error ADOUsers::AddNewUser:mysqli=".mysqli_error($this->mysqlconector->conn),E_USER_ERROR);
            
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()) {
                    $NewsObj->idnews=$row['idnews'];
                    $NewsObj->title=$row['title'];
                    $NewsObj->subtitle=$row['subtitle'];
                    $NewsObj->newsdate=$row['newsdate'];
                    $NewsObj->showonpage=$row['showonpage'];
                    $NewsObj->active=$row['active'];
                    $NewsObj->articule=$row['articule'];
                }
            }
            $this->mysqlconector->CloseDataBase();
        }
    }
    
}
