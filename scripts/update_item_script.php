<?php

include "../includes/autoLoader.php";
session_start();

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

// check if logged user is seller of that item
$itemData = $itemHandler->GetItemById($itemId);
if($_SESSION["LOGGED_IN_USER_ID"] != $itemData["seller_id"]){
    echo "Error - you must be logged in to update this item.";
    Header("Location: ../index.php");
    exit();
}

$itemHandler->UpdateItem($itemId, $newTitle, $newDescription, $newPrice);

$data = array(
    "itemId" => $itemId,
    "newTitle" => $newTitle,
    "newDescription" => $newDescription,
    "newPrice" => $newPrice
);

echo json_encode($data);