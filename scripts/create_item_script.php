<?php
include '../includes/autoLoader.php';

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    /*
    Header("Location: ../index.php");
    exit();
    */
    echo "NOT SUBMITTED!";
}

if( !isset($_POST["itemTitle"]) &&
    !isset($_POST["itemDescription"]) &&
    !isset($_POST["itemLocation"]) &&
    !isset($_POST["itemPrice"]) &&
    !isset($_FILES["thumbnail_img"])
){
    //Header("Location: ../pages/create_item_page.php?failed=true");
    echo "EMPTY INPUT FIELDS";
}
else{
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
    $isUploaded = $imageHandler->UploadImage($_FILES["thumbnail_img"], "../images/");
    if(!$isUploaded){
        echo "Error uploading file: " . $_FILES["thumbnail_img"]["name"];
    }
    else{
        echo "<br>File: " . $_FILES["thumbnail_img"]["name"] . " -> uploaded";
    }

    echo "<br>";
    // upload item images if there are any
    if(isset($_FILES["item_images"])){

        $images = array();
        for($i = 0; $i < count($_FILES["item_images"]["name"]); $i++){
            $images[] = array(
                'name' => $_FILES["item_images"]["name"][$i],
                'full_path' => $_FILES["item_images"]["full_path"][$i],
                'type' => $_FILES["item_images"]["type"][$i],
                'tmp_name' => $_FILES["item_images"]["tmp_name"][$i],
                'error' => $_FILES["item_images"]["error"][$i],
                'size' => $_FILES["item_images"]["size"][$i]
            );
        }

        foreach($images as $image){
            $image["name"] = generateRandomString() . "_" . $image["name"];
            $isUploaded = $imageHandler->UploadImage($image, "../images/");
            if(!$isUploaded){
                echo "<br>Error uploading file: " . $image["name"];
            }else{
                echo "<br>File: " . $image["name"] . " -> uploaded.";
            }
        }

        /*
        //$_FILE vardump
        array(6) {
            ["name"] => array(3) {
                [0] => string(8) "car1.jpg" 
                [1] => string(8) "car2.jpg" 
                [2] => string(8) "car3.jpg" 
            }
            
            ["full_path"] => array(3) {
                [0] => string(8) "car1.jpg" 
                [1] => string(8) "car2.jpg" 
                [2] => string(8) "car3.jpg" 
            } 
            
            ["type"] => array(3) {
                [0] => string(10) "image/jpeg" 
                [1] => string(10) "image/jpeg" 
                [2] => string(10) "image/jpeg" 
            }
            
            ["tmp_name"] => array(3) {
                [0] => string(24) "D:\xampp\tmp\phpD116.tmp" 
                [1] => string(24) "D:\xampp\tmp\phpD117.tmp" 
                [2] => string(24) "D:\xampp\tmp\phpD118.tmp" 
            }
            
            ["error"] => array(3) {
                [0] => int(0) 
                [1] => int(0) 
                [2] => int(0) 
            }
            
            ["size"] => array(3) {
                [0] => int(7026)
                [1] => int(8059) 
                [2] => int(7211) 
            } 
        }
         */
    
    }
    
    // TODO: here redirects for no reason???
    echo "<br> Saved item: ";
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