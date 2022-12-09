<?php
include 'includes/autoLoader.php';

if(!isset($_POST["submit"])){
    Header("Location: index.php");
}

if( !isset($_POST["itemTitle"]) &&
    !isset($_POST["itemDescription"]) &&
    !isset($_POST["itemLocation"]) &&
    !isset($_POST["itemPrice"]) &&
    !isset($_FILES["thumbnail_img"])
){
    Header("Location: create_item_page.php?failed=true");
}
else{
    //echo $_FILES["thumbnail_img"]["name"];
    //echo "\n" . $_POST["itemTitle"];
    
    $itemHandler = new ItemHandler();
    $itemHandler->SetItemTitle($_POST["itemTitle"]);
    $itemHandler->SetItemDescription($_POST["itemDescription"]);
    $itemHandler->SetItemLocation($_POST["itemLocation"]);
    $itemHandler->SetItemPrice($_POST["itemPrice"]);
    $img_name = $_FILES["thumbnail_img"]["name"];
    $_FILES["thumbnail_img"]["name"] = generateRandomString() . $img_name;
    $itemHandler->SetItemThumbnail("images/" . $_FILES["thumbnail_img"]["name"]);
    $itemHandler->SaveItem();

    $imageHandler = new ImageHandler();
    $imageHandler->UploadImage($_FILES["thumbnail_img"]);

    echo "\n Saved item: \n";
    echo $_POST["itemTitle"] . ": " . $_POST["itemPrice"];   
}

function generateRandomString($length = 15){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-_';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}