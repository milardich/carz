<?php
/*
 * This data is fetched when home page is loaded
 */
include "../includes/autoLoader.php";

$itemHandler = new ItemHandler();
$filteredItems = $itemHandler->GetAllItems();

$jsonFilteredItems = json_encode($filteredItems);
//var_dump($jsonFilteredItems);
echo $jsonFilteredItems;