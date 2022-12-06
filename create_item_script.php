<?php
include 'includes/autoLoader.php';

if( !isset($_POST["itemTitle"]) &&
    !isset($_POST["itemDescription"]) &&
    !isset($_POST["itemLocation"]) &&
    !isset($_POST["itemPrice"])
){
    Header("Location: create_item_page.php?failed=true");
}
else{
    $itemHandler = new ItemHandler();
    $itemHandler->SetItemTitle($_POST["itemTitle"]);
    $itemHandler->SetItemDescription($_POST["itemDescription"]);
    $itemHandler->SetItemLocation($_POST["itemLocation"]);
    $itemHandler->SetItemPrice($_POST["itemPrice"]);
    $itemHandler->SaveItem();

    echo "\n Saved item: \n";
    echo $_POST["itemTitle"] . ": " . $_POST["itemPrice"];
}