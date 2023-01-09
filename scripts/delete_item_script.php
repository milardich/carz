<?php

include "../includes/autoLoader.php";
session_start();

$itemId = 0;

if(isset($_GET["itemId"])){
    $itemId = $_GET["itemId"];
}
else{
    echo "Error - item id unknown";
}

$itemHandler = new ItemHandler();

// check if logged user is seller of that item
$itemData = $itemHandler->GetItemById($itemId);
if($_SESSION["LOGGED_IN_USER_ID"] != $itemData["seller_id"]){
    echo "Error - you must be logged in to update this item.";
    Header("Location: ../index.php");
    exit();
}

$itemHandler->DeleteItem($itemId);
