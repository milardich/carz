<?php
/*
 * This data is fetched when car maker option is changed
 * from the dropdown on homepage
 */
include "../includes/autoLoader.php";

if(isset($_POST["carMakerId"])){
    $carMakerHandler = new CarMakerHandler();
    $carTypes = $carMakerHandler->GetAllTypesFromCarMaker($_POST["carMakerId"]);

    echo json_encode($carTypes);
}
else{
    Header("Location: ../index.php");
}

