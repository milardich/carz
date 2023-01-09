<?php

include "../includes/autoLoader.php";

$itemId = 0;
$newTitle = "";
$newDescription = "";
$newPrice = "";

if(isset($_GET["itemId"])){
    $itemId = $_GET["itemId"];
}
else{
    echo "Error - item id unknown";
}

if(isset($_GET["itemTitle"])){
    $newTitle = $_GET["itemTitle"];
}
if(isset($_GET["itemDescription"])){
    $newDescription = $_GET["itemDescription"];
}
if(isset($_GET["itemPrice"])){
    $newPrice = $_GET["itemPrice"];
}

$itemHandler = new ItemHandler();
$itemHandler->UpdateItem($itemId, $newTitle, $newDescription, $newPrice);

$data = array(
    "itemId" => $itemId,
    "newTitle" => $newTitle,
    "newDescription" => $newDescription,
    "newPrice" => $newPrice
);

echo json_encode($data);