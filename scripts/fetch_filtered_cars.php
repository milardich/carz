<?php
/*
 * This data is fetched when FILTER button is pressed
 * from the filter menu on homepage
 */
include "../includes/autoLoader.php";

$carMakerId = !isset($_POST["carMakerId"]) ? "-" : $_POST["carMakerId"];
$carTypeId = !isset($_POST["carTypeId"]) ? "-" : $_POST["carTypeId"];
$minPrice = !isset($_POST["minPrice"]) ? 0 : $_POST["minPrice"];
$maxPrice = !isset($_POST["maxPrice"]) ? 0 : $_POST["maxPrice"];

$itemHandler = new ItemHandler();
$filteredItems = $itemHandler->GetFilteredItems($carMakerId, $carTypeId, $minPrice, $maxPrice, "ASC");

$jsonFilteredItems = json_encode($filteredItems);
//var_dump($jsonFilteredItems);
echo $jsonFilteredItems;