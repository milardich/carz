<?php
include '../includes/autoLoader.php';

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    Header("Location: ../index.php");
    exit();
    //echo "NOT SUBMITTED!";
}

if( !isset($_POST["itemTitle"]) &&
    !isset($_POST["itemDescription"]) &&
    !isset($_POST["itemLocation"]) &&
    !isset($_POST["itemPrice"]) &&
    !isset($_FILES["thumbnail_img"])
){
    Header("Location: ../pages/create_item_page.php?failed=true");
    exit();
    //echo "EMPTY INPUT FIELDS";
}
else{
    $itemHandler = new ItemHandler();
    $imageHandler = new ImageHandler();
    
    $itemHandler->SetItemTitle($_POST["itemTitle"]);
    $itemHandler->SetItemDescription($_POST["itemDescription"]);
    $itemHandler->SetItemLocation($_POST["itemLocation"]);
    $itemHandler->SetItemPrice($_POST["itemPrice"]);

    // generate and check unique item id
    $uniqueItemId = "";
    do{
        $uniqueItemId = generateRandomString(6);
    }while($itemHandler->UniqueIdExists($uniqueItemId));

    $itemHandler->SetItemUniqueId($uniqueItemId);

    // change image name 
    $img_name = $_FILES["thumbnail_img"]["name"];
    $_FILES["thumbnail_img"]["name"] = $uniqueItemId . "-" . $img_name;

    // upload thumbnail image
    $isUploaded = $imageHandler->UploadImage($_FILES["thumbnail_img"], "../images/");
    if(!$isUploaded){
        echo "Error uploading file: " . $_FILES["thumbnail_img"]["name"];
    }
    else{
        echo "<br>File: " . $_FILES["thumbnail_img"]["name"] . " -> uploaded";
    }

    $itemHandler->SetItemThumbnail("images/" . $_FILES["thumbnail_img"]["name"]);
    
    // upload item images if there are any
    if(isset($_FILES["item_images"])){
        $images = $imageHandler->NormalizeFileArrayStructure($_FILES["item_images"]);
        foreach($images as $image){
            $image["name"] = $uniqueItemId . "-" . generateRandomString(6) . "_" . $image["name"];
            $isUploaded = $imageHandler->UploadImage($image, "../images/");
            if(!$isUploaded){
                echo "<br>Error uploading file: " . $image["name"];
            }else{
                echo "<br>File: " . $image["name"] . " -> uploaded.";

                // save to database
                $imageHandler->SaveImage($uniqueItemId, "images/" . $image["name"]);
            }
        }
    }

    $itemHandler->SaveItem();
    echo "<br> Saved item: ";
    echo $_POST["itemTitle"] . ": " . $_POST["itemPrice"];
    Header("Location: ../index.php");
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