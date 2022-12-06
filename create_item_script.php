<?php
include 'includes/autoLoader.php';

if( !isset($_POST["itemTitle"]) &&
    !isset($_POST["itemDescription"]) &&
    !isset($_POST["itemLocation"]) &&
    !isset($_POST["itemPrice"]) &&
    !isset($_FILES["thumbnail_img"])
){
    Header("Location: create_item_page.php?failed=true");
}
else{
    $itemHandler = new ItemHandler();
    $itemHandler->SetItemTitle($_POST["itemTitle"]);
    $itemHandler->SetItemDescription($_POST["itemDescription"]);
    $itemHandler->SetItemLocation($_POST["itemLocation"]);
    $itemHandler->SetItemPrice($_POST["itemPrice"]);
    $itemHandler->SetItemThumbnail("images/" . $_FILES["thumbnail_img"]["name"]);
    $itemHandler->SaveItem();

    $imageHandler = new ImageHandler();
    $imageHandler->UploadImage($_FILES["thumbnail_img"]);

    echo "\n Saved item: \n";
    echo $_POST["itemTitle"] . ": " . $_POST["itemPrice"];
}