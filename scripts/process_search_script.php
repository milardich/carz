<?php

include "../includes/autoLoader.php";
$itemTitle = "";
if(isset($_GET["item-title"]) && !empty($_GET["item-title"])){
    $itemTitle = $_GET["item-title"];
}
$itemHandler = new ItemHandler();
$items = $itemHandler->GetItemsByTitle($itemTitle);
$jsonItems = json_encode($items);
if(empty($items)){
    echo "No items with title " . $itemTitle;
}
else{
    echo $jsonItems;
}