<?php

session_start();
include "../includes/autoLoader.php";

if(!isset($_POST["username"]) ||
    !isset($_POST["phone"]) ||
    !isset($_POST["email"]) ||
    !isset($_POST["password"])) {
        echo "Error - input fields left empty!!";
}
else{
    $registrationHandler = new RegistrationHandler();
    $registrationHandler->SetUsername($_POST["username"]);
    $registrationHandler->SetUserPhone($_POST["phone"]);
    $registrationHandler->SetUserPassword($_POST["password"]);
    $registrationHandler->SetUserEmail($_POST["email"]);

    echo $_FILES["profilePicture"]["name"];

    if(isset($_FILES["profilePicture"])){
        $imageHandler = new ImageHandler();

        // change img name
        $img_name = $_FILES["profilePicture"]["name"];
        $_FILES["profilePicture"]["name"] = date("Y-m-d") . "_" . $img_name . "_" . $_POST["username"];
        echo  "new name: " . $_FILES["profilePicture"]["name"];

        // upload thumbnail image
        $isUploaded = $imageHandler->UploadImage($_FILES["profilePicture"], "../images/");
        if(!$isUploaded){
            echo "Error uploading file: " . $_FILES["profilePicture"]["name"];
        }
        else{
            echo "<br>File: " . $_FILES["profilePicture"]["name"] . " -> uploaded";
            $registrationHandler->SetProfilePictureUrl("images/" . $_FILES["profilePicture"]["name"]);
        }
    }

    $registrationHandler->Register();
    echo "Registration sucessful!";
}
