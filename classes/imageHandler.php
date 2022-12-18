<?php

include_once 'database.php';

class ImageHandler{

    public function UploadImage($img, $path){
        if(move_uploaded_file($img["tmp_name"], $path .  $img["name"])){
            echo "\n";
            echo "Image uploaded: " . $img["name"] . " [images/".$img["name"]; 
        }
        else{
            echo "Error uploading img";
        }
    }
}