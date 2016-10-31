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
 * Description of ADOTourDates
 *
 * @author MarcoCantu
 */
class ADOTourDates {
    
    private $mysqlconector;
    public $debug=false;
    
    public function __construct() {
        $this->mysqlconector= new MysqlConnector();
    }
    
    public function __destruct() {
        unset($this->mysqlconector);
        unset($this->debug);
    }
    
    public function AddNewTourDate($TourDateObj){
        if(!empty($TourDateObj)){
            $this->mysqlconector->OpenConnection();
            $title= mysqli_real_escape_string($this->mysqlconector->conn,$TourDateObj->title);
            $tourdesc= mysqli_real_escape_string($this->mysqlconector->conn,$TourDateObj->tourdesc);
            $tourdate= mysqli_real_escape_string($this->mysqlconector->conn,$TourDateObj->tourdate);
            $showonpage= mysqli_real_escape_string($this->mysqlconector->conn,$TourDateObj->showonpage);
            $active= mysqli_real_escape_string($this->mysqlconector->conn,$TourDateObj->active);
            
            $query= new SqlQueryBuilder("insert");
            $query->setTable("tourdates");
            $query->addColumn("title");
            $query->addColumn("tourdesc");
            $query->addColumn("tourdate");
            $query->addColumn("showonpage");
            $query->addColumn("active");
            
            $query->addValue($title);
            $query->addValue($tourdesc);
            $query->addValue($tourdate);
            $query->addValue($showonpage);
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
    
    public function UpdateTourDate($TourDateObj){
        if(!empty($TourDateObj)){
            $this->mysqlconector->OpenConnection();
            $title= mysqli_real_escape_string($this->mysqlconector->conn,$TourDateObj->title);
            $tourdesc= mysqli_real_escape_string($this->mysqlconector->conn,$TourDateObj->tourdesc);
            $tourdate= mysqli_real_escape_string($this->mysqlconector->conn,$TourDateObj->tourdate);
            $showonpage= mysqli_real_escape_string($this->mysqlconector->conn,$TourDateObj->showonpage);
            $active= mysqli_real_escape_string($this->mysqlconector->conn,$TourDateObj->active);
            $idtourdates=  mysqli_real_escape_string($this->mysqlconector->conn,$TourDateObj->idtourdates);
            
            $query= new SqlQueryBuilder("update");
            $query->setTable("tourdates");
            $query->addColumn("title");
            $query->addColumn("tourdesc");
            $query->addColumn("tourdate");
            $query->addColumn("showonpage");
            $query->addColumn("active");
             
            $query->addValue($title);
            $query->addValue($tourdesc);
            $query->addValue($tourdate);
            $query->addValue($showonpage);
            $query->addValue($active);
            
            $query->setWhere("idtourdates=$idtourdates");
            
            if($this->debug){
                echo '<br/>'. $query->buildQuery();
            }
            
            $result=  $this->mysqlconector->conn->query($query->buildQuery()) or trigger_error("Error ADOUsers::AddNewUser:mysqli=".mysqli_error($this->mysqlconector->conn),E_USER_ERROR);
            
            unset($result);
            unset($sqlobj);
            
            $this->mysqlconector->CloseDataBase();
        }
    }
    
    public function ShowTourDateOnPage($TourDateObj){
        if(!empty($TourDateObj)){
            $this->mysqlconector->OpenConnection();
            $idtourdates=  mysqli_real_escape_string($this->mysqlconector->conn,$TourDateObj->idtourdates);
             
            $query= new SqlQueryBuilder("update");
            $query->setTable("tourdates");
            $query->addColumn("showonpage");
            $query->addValue("1");
            $query->setWhere("idtourdates=$idtourdates");
            
            if($this->debug){
                echo '<br/>'. $query->buildQuery();
            }
            
            $result=  $this->mysqlconector->conn->query($query->buildQuery()) or trigger_error("Error ADOUsers::AddNewUser:mysqli=".mysqli_error($this->mysqlconector->conn),E_USER_ERROR);
            
            unset($result);
            unset($sqlobj);
            
            $this->mysqlconector->CloseDataBase();
        }
    }
    public function HideTourDateOnPage($TourDateObj){
        if(!empty($TourDateObj)){
            $this->mysqlconector->OpenConnection();
            $idtourdates= mysqli_real_escape_string($this->mysqlconector->conn,$TourDateObj->idtourdates);
             
            $query= new SqlQueryBuilder("update");
            $query->setTable("tourdates");
            $query->addColumn("showonpage");
            $query->addValue("0");
            $query->setWhere("idtourdates=$idtourdates");
            
            if($this->debug){
                echo '<br/>'. $query->buildQuery();
            }
            
            $result=  $this->mysqlconector->conn->query($query->buildQuery()) or trigger_error("Error ADOUsers::AddNewUser:mysqli=".mysqli_error($this->mysqlconector->conn),E_USER_ERROR);
            
            unset($result);
            unset($sqlobj);
            
            $this->mysqlconector->CloseDataBase();
        }
    }
    
    public function ActiveTourDate($TourDateObj){
        if(!empty($TourDateObj)){
            $this->mysqlconector->OpenConnection();
            $idtourdates= mysqli_real_escape_string($this->mysqlconector->conn,$TourDateObj->idtourdates);
             
            $query= new SqlQueryBuilder("update");
            $query->setTable("tourdates");
            $query->addColumn("active");
            $query->addValue("1");
            $query->setWhere("idtourdates=$idtourdates");
            
            if($this->debug){
                echo '<br/>'. $query->buildQuery();
            }
            
            $result=  $this->mysqlconector->conn->query($query->buildQuery()) or trigger_error("Error ADOUsers::AddNewUser:mysqli=".mysqli_error($this->mysqlconector->conn),E_USER_ERROR);
            
            unset($result);
            unset($sqlobj);
            
            $this->mysqlconector->CloseDataBase();
        }
    }
    public function DeactiveTourDate($TourDateObj){
        if(!empty($TourDateObj)){
            $this->mysqlconector->OpenConnection();
            $idtourdates= mysqli_real_escape_string($this->mysqlconector->conn,$TourDateObj->idtourdates);
             
            $query= new SqlQueryBuilder("update");
            $query->setTable("tourdates");
            $query->addColumn("active");
            $query->addValue("0");
            $query->setWhere("idtourdates=$idtourdates");
            
            if($this->debug){
                echo '<br/>'. $query->buildQuery();
            }
            
            $result=  $this->mysqlconector->conn->query($query->buildQuery()) or trigger_error("Error ADOUsers::AddNewUser:mysqli=".mysqli_error($this->mysqlconector->conn),E_USER_ERROR);
            
            unset($result);
            unset($sqlobj);
            
            $this->mysqlconector->CloseDataBase();
        }
    }
    
    public function DeleteTourDate($TourDateObj){
        if(!empty($TourDateObj)){
            $this->mysqlconector->OpenConnection();
            $idtourdates= mysqli_real_escape_string($this->mysqlconector->conn,$TourDateObj->idtourdates);
             
            $query= new SqlQueryBuilder("delete");
            $query->setTable("tourdates");
            $query->setWhere("idtourdates=$idtourdates");
            
            if($this->debug){
                echo '<br/>'. $query->buildQuery();
            }
            
            $result=  $this->mysqlconector->conn->query($query->buildQuery()) or trigger_error("Error ADOUsers::AddNewUser:mysqli=".mysqli_error($this->mysqlconector->conn),E_USER_ERROR);
            
            unset($result);
            unset($sqlobj);
            
            $this->mysqlconector->CloseDataBase();
        }
    }
    
    public function GetAllTourDates($TourDatesList){
        if(!empty($TourDatesList)){
            $this->mysqlconector->OpenConnection();
            $query= new SqlQueryBuilder("select");
            $query->setTable("tourdates");
            $query->addColumn("title");
            $query->addColumn("tourdesc");
            $query->addColumn("tourdate");
            $query->addColumn("showonpage");
            $query->addColumn("active");
            $query->addColumn("idtourdates");
            
            if($this->debug){
                echo '<br/>'. $query->buildQuery();
            }
            
            $result=  $this->mysqlconector->conn->query($query->buildQuery()) or trigger_error("Error ADOUsers::AddNewUser:mysqli=".mysqli_error($this->mysqlconector->conn),E_USER_ERROR);
             if($result->num_rows>0){
                 while($row = $result->fetch_assoc()) {
                     $tourdate= new TourDates();
                     $tourdate->idtourdates=$row['idtourdates'];
                     $tourdate->title=$row['title'];
                     $tourdate->tourdate=$row['tourdate'];
                     $tourdate->tourdesc=$row['tourdesc'];
                     $tourdate->showonpage=$row['showonpage'];
                     $tourdate->active=$row['active'];
                     $TourDatesList->addItem($tourdate);
                 }
             }
            
            $this->mysqlconector->CloseDataBase();
            unset($result);
            unset($query);
        }
    }
    
    public function GetShowingTourDates($TourDatesList){
        if(!empty($TourDatesList)){
            $this->mysqlconector->OpenConnection();
            $query= new SqlQueryBuilder("select");
            $query->setTable("tourdates");
            $query->addColumn("title");
            $query->addColumn("tourdesc");
            $query->addColumn("tourdate");
            $query->addColumn("showonpage");
            $query->addColumn("active");
            $query->addColumn("idtourdates");
            $query->setWhere("showonpage=1 and active=1");
            $query->setOrderBy("tourdate desc");
            
            if($this->debug){
                echo '<br/>'. $query->buildQuery();
            }
            
            $result=  $this->mysqlconector->conn->query($query->buildQuery()) or trigger_error("Error ADOUsers::AddNewUser:mysqli=".mysqli_error($this->mysqlconector->conn),E_USER_ERROR);
             if($result->num_rows>0){
                 while($row = $result->fetch_assoc()) {
                     $tourdate= new TourDates();
                     $tourdate->idtourdates=$row['idtourdates'];
                     $tourdate->title=$row['title'];
                     $tourdate->tourdate=$row['tourdate'];
                     $tourdate->tourdesc=$row['tourdesc'];
                     $tourdate->showonpage=$row['showonpage'];
                     $tourdate->active=$row['active'];
                     $TourDatesList->addItem($tourdate);
                 }
             }
            
            $this->mysqlconector->CloseDataBase();
            unset($result);
            unset($query);
        }
    }
    
    public function getTourDate($TourDateObj){
        if(!empty($TourDateObj)){
            $this->mysqlconector->OpenConnection();
            $idtourdates= mysqli_real_escape_string($this->mysqlconector->conn,$TourDateObj->idtourdates);
            
            $query= new SqlQueryBuilder("select");
            $query->setTable("tourdates");
            $query->addColumn("title");
            $query->addColumn("tourdesc");
            $query->addColumn("tourdate");
            $query->addColumn("showonpage");
            $query->addColumn("active");
            $query->addColumn("idtourdates");
            $query->setWhere("idtourdates=$idtourdates");
            
            if($this->debug){
                echo '<br/>'. $query->buildQuery();
            }
            
            $result=  $this->mysqlconector->conn->query($query->buildQuery()) or trigger_error("Error ADOUsers::AddNewUser:mysqli=".mysqli_error($this->mysqlconector->conn),E_USER_ERROR);
             if($result->num_rows>0){
                 while($row = $result->fetch_assoc()) {
                     $TourDateObj->idtourdates=$row['idtourdates'];
                     $TourDateObj->title=$row['title'];
                     $TourDateObj->tourdate=$row['tourdate'];
                     $TourDateObj->tourdesc=$row['tourdesc'];
                     $TourDateObj->showonpage=$row['showonpage'];
                     $TourDateObj->active=$row['active'];
                 }
             }
            
            $this->mysqlconector->CloseDataBase();
            unset($result);
            unset($query);
        }
    }
    
}
