<?php
include_once "database.php";

class CarMakerHandler{
    public function GetAllCarMakers(){
        $carMakers = array();

        $sql = "SELECT * FROM car_makers";
        $result = Database::Connect()->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $carMakers[] = array(
                    'car_maker_id' => $row["car_maker_id"],
                    'car_maker_name' => $row["car_maker_name"]
                );
            }
        }
        return $carMakers;
    }

    public function GetAllTypesFromCarMaker($carMakerId){
        $carTypes = array();

        $sql = "SELECT * FROM car_types WHERE car_maker_id = '$carMakerId'";
        $result = Database::Connect()->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $carTypes[] = array(
                    'car_type_id' => $row["car_type_id"],
                    'car_type' => $row["car_type"]
                );
            }
        }
        return $carTypes;
    }
}