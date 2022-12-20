<?php
/*
 * This data is fetched when FILTER button is pressed
 * from the filter menu on homepage
 */
include "../includes/autoLoader.php";

$itemHandler = new ItemHandler();
$filteredItems = $itemHandler->GetFilteredItems("-", "-", 0, 50, "DESC");
$jsonFilteredItems = json_encode($filteredItems);
var_dump($jsonFilteredItems);